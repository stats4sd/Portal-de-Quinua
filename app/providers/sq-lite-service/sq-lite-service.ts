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
  jsonData:any = null


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
        console.log('SQl db loaded successfully');
        resolve(true);
        // contents is now [{columns:['col1','col2',...], values:[[first row], [second row], ...]}]
      };
      xhr.send();
    })
  }

  /*sql query async so using promises*/
  queryByName(queryName) {
    return new Promise((resolve, reject) => {
      //first try local cache
      if(this.jsonData[queryName]!=undefined){
        console.log('loading cached data')
        resolve(this.jsonData[queryName])
      }
      //if doesn't exist execute - note, still only working with named queries
      else{
        console.log('no cached data, running sql query')
        var queryText=this.getQueries(queryName)
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
      }


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

  loadFromJson(){
    if (this.jsonData) {
      return Promise.resolve(this.data);
    }
    return new Promise(resolve => {
      this.http.get('cachedQueries.json')
          .map(res => res.json())
          .subscribe(data => {
            this.jsonData = data;
            resolve(this.jsonData);
          });
    });
  }
}

function getQueryFromCache(queryName){
  if(!this.json){return false}
  else{

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
  initialStages: "  \
  SELECT `a`.*, `b`.`file_url`  \
  FROM `stage` a  \
  LEFT JOIN `media_stage` b \
  ON a.`stage_id` = b.`stage_id`  \
  INNER JOIN (  \
    SELECT `stage_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_stage`  \
    GROUP BY `stage_id` \
  ) c \
      ON a.`stage_id` = b.`stage_id`  \
      AND b.`file_url` = c.`firstfile`  \
      ORDER BY a.`stage_id`",

  simpleQuery: `
    SELECT * from stage
    `,

  initialAbioticos: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(d.`stage_id`) 'stageList' \
  FROM `abioticos` a \
  LEFT JOIN `media_abioticos` b \
  ON a.`abioticos_id` = b.`abioticos_id` \
  INNER JOIN ( \
    SELECT `abioticos_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_abioticos` \
    GROUP BY `abioticos_id` \
  ) c \
  ON a.`abioticos_id` = b.`abioticos_id` \
  AND b.`file_url` = c.`firstfile` \
  INNER JOIN `jnc_stage_abioticos` d \
  ON a.`abioticos_id` = d.`abioticos_id` \
  GROUP BY a.`abioticos_id` \
  ORDER BY a.`abioticos_id`",

  initialDisease: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(d.`stage_id`) 'stageList' \
  FROM `disease` a \
  LEFT JOIN `media_disease` b \
  ON a.`disease_id` = b.`disease_id` \
  INNER JOIN ( \
    SELECT `disease_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_disease` \
    GROUP BY `disease_id` \
  ) c \
  ON a.`disease_id` = b.`disease_id` \
  AND b.`file_url` = c.`firstfile` \
  INNER JOIN `jnc_stage_disease` d \
  ON a.`disease_id` = d.`disease_id` \
  GROUP BY a.`disease_id` \
  ORDER BY a.`disease_id`",

  initialPests: " \
  SELECT `a`.*, `b`.`file_url`, GROUP_CONCAT(d.`stage_id`) 'stageList' \
  FROM `pests` a \
  LEFT JOIN `media_pests` b \
  ON a.`pest_id` = b.`pest_id` \
  INNER JOIN ( \
    SELECT `pest_id`, MIN(`file_url`) 'firstfile', `file_type` \
    FROM `media_pests` \
    GROUP BY `pest_id` \
  ) c \
  ON a.`pest_id` = b.`pest_id` \
  AND b.`file_url` = c.`firstfile` \
  INNER JOIN `jnc_stage_pest` d \
  ON a.`pest_id` = d.`pest_id` \
  GROUP BY a.`pest_id` \
  ORDER BY a.`pest_id`"

};
