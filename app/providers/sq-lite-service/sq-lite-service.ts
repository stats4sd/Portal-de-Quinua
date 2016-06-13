import {Injectable} from '@angular/core';
import {Http} from '@angular/http';
import {Platform} from 'ionic-angular';
import 'rxjs/add/operator/map';

//declare outside modules to keep typescript happy
declare var sql:any;

@Injectable()
export class SqLiteService {
  data:any = null;
  platform:Platform;
  window:any;
  db:any;
  dbLoaded:boolean;
  cachedQueries:any;

  constructor(public http:Http, platform:Platform) {
    this.platform = platform;
    this.cachedQueries = {}
  }

  loadDatabase() {
    return new Promise((resolve, reject) => {
      //use sql.js package if working in browser
      var sql = window.SQL;
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'proinpa.db', true);
      xhr.responseType = 'arraybuffer';
      xhr.onload = function (e) {
        var uInt8Array = new Uint8Array(this.response);
        this.db = new sql.Database(uInt8Array);
        console.log('db loaded successfully');
        resolve(true);
        // contents is now [{columns:['col1','col2',...], values:[[first row], [second row], ...]}]
      };
      xhr.send();
    })
  }

  /*sql query async so using promises*/
  query(queryText) {
    return new Promise((resolve, reject) => {
      var sql = window.SQL;
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'proinpa.db', true);
      xhr.responseType = 'arraybuffer';
      xhr.onload = function () {
        var uInt8Array = new Uint8Array(this.response);
        this.db = new sql.Database(uInt8Array);
        var contents = this.db.exec(queryText);
        var rowContents = convertToRowFormat(contents[0]);
        console.log(rowContents);
        resolve(rowContents)
      };
      xhr.send();
    });
  }

  setValue(key, value) {
    this[key] = value
  }

  getValue(key) {
    return this[key]
  }

  getQueries(name) {
    console.log('getting query by name: ' + name);
    return masterQueries[name];
  }
}

function convertToRowFormat(contents) {
  var rowArray = [];
  var columns = contents.columns;
  for (var value of contents.values) {
    var temp = {};
    for (var i = 0; i < columns.length; i++) {
      temp[columns[i]] = value[i]
    }
    rowArray.push(temp)
  }
  return rowArray
}

//queries to be executed within the app
var masterQueries=
{
  initialStages: `
  SELECT \`a\`.*, \`b\`.\`file_url\`
  FROM \`stage\` a
  LEFT JOIN \`media_stage\` b
  ON a.\`stage_id\` = b.\`stage_id\`
  INNER JOIN (
    SELECT \`stage_id\`, MIN(\`file_url\`) 'firstfile', \`file_type\`
    FROM \`media_stage\`
    GROUP BY \`stage_id\`
      ) c
      ON a.\`stage_id\` = b.\`stage_id\`
      AND b.\`file_url\` = c.\`firstfile\`
      ORDER BY a.\`stage_id\``,
  simpleQuery: `
    SELECT * from stage
    `,
  query3: `

    `
};
