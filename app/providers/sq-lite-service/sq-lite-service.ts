import {Injectable} from '@angular/core';
import {Http} from '@angular/http';
import {Platform} from 'ionic-angular';
import 'rxjs/add/operator/map';
import {readFileSync} from 'fs';

//declare outside modules to keep typescript happy
declare var sql:any;
//declare var fs:any;
declare var require:any;

@Injectable()
export class SqLiteService {
  data: any = null;
  platform: Platform;
  window: any;
  db:any;
  dbLoaded:boolean;

  constructor(public http: Http, platform: Platform) {
    this.platform = platform;
  }

  loadDatabase(){
    return new Promise((resolve, reject) => {
          //use sql.js package if working in browser
          var sql = window.SQL;
          var xhr = new XMLHttpRequest();
          xhr.open('GET','proinpa.db',true)
          xhr.responseType = 'arraybuffer';
          xhr.onload = function(e) {
            var uInt8Array = new Uint8Array(this.response);
            this.db = new sql.Database(uInt8Array);
            console.log('db loaded successfully')
            resolve(true)
            // contents is now [{columns:['col1','col2',...], values:[[first row], [second row], ...]}]
          };
          xhr.send();
      })
    }

  /*sql query async so using promises*/
  query(queryText) {
    return new Promise((resolve, reject) => {
      var queryResults = [];
      console.log('query: '+queryText);
        var sql = window.SQL;
        var xhr = new XMLHttpRequest();
        xhr.open('GET','proinpa.db',true)
        xhr.responseType = 'arraybuffer';
        xhr.onload = function(e) {
          var uInt8Array = new Uint8Array(this.response);
          this.db = new sql.Database(uInt8Array);
          // contents is now [{columns:['col1','col2',...], values:[[first row], [second row], ...]}]
          var contents = this.db.exec(queryText);
          var rowContents=convertToRowFormat(contents[0]);
          console.log(rowContents)
          resolve(rowContents)
        };
        xhr.send();

    });
  }
      /*console.log('running query');
      var queryResults=[];
      alert('query: '+queryText);
      this.db.executeSql(queryText, [], function (res) {
        for (var i = 0; i < res.rows.length; i++) {
          queryResults.push(JSON.stringify(res.rows.item(i)))
        }
        alert(queryResults.length+' records found');
        this.stages=['test1','test2','test'];
        alert(this.stages);
        alert(this.stages.length);
      }, function (error) {
        alert(JSON.stringify(error));
        console.log(JSON.stringify(error));
        this.errorMessages = JSON.stringify(error)
      });*/

  load() {
    if (this.data) {
      // already loaded data
      return Promise.resolve(this.data);
    }

    // don't have the data yet
    return new Promise(resolve => {
      // We're using Angular Http provider to request the data,
      // then on the response it'll map the JSON data to a parsed JS object.
      // Next we process the data and resolve the promise with the new data.
      this.http.get('path/to/data.json')
          .map(res => res.json())
          .subscribe(data => {
            // we've got back the raw data, now generate the core schedule data
            // and save the data for later reference
            this.data = data;
            resolve(this.data);
          });
    });
  }
}

function convertToRowFormat(contents){
  var rowArray=[]
  var columns=contents.columns
  for (var value of contents.values){
    var temp={}
    for (var i = 0; i <3; i++){
      temp[columns[i]]=value[i]
    }
    rowArray.push(temp)
  }
  return rowArray
}


//Failed attempt to access path of local db file using filereader
 /*
if (window.File && window.FileReader && window.FileList && window.Blob) {
  console.log('files supported');
  window.requestFileSystem = window.requestFileSystem || window.webkitRequestFileSystem;
  window.requestFileSystem(window.TEMPORARY, 5 * 1024 * 1024 /!*5MB*!/,successCallback,errorCallback);
} else {alert('The File APIs are not fully supported in this browser.');}

function successCallback(fs) {
  console.log(fs)
  fs.root.getFile('test.txt', {}, function (fileEntry) {
    fileEntry.file(function (file) {
      var reader = new FileReader();
      reader.onloadend = function (e) {
        var txtArea = document.createElement('textarea');
        txtArea.value = this.result;
        document.body.appendChild(txtArea);
      };
      reader.readAsText(file);
    }, errorCallback);

  }, errorCallback);
}

function errorCallback(e){
  var msg = '';
  switch (e.code) {
    case FileError.QUOTA_EXCEEDED_ERR:
      msg = 'QUOTA_EXCEEDED_ERR';
      break;
    case FileError.NOT_FOUND_ERR:
      msg = 'NOT_FOUND_ERR';
      break;
    case FileError.SECURITY_ERR:
      msg = 'SECURITY_ERR';
      break;
    case FileError.INVALID_MODIFICATION_ERR:
      msg = 'INVALID_MODIFICATION_ERR';
      break;
    case FileError.INVALID_STATE_ERR:
      msg = 'INVALID_STATE_ERR';
      break;
    default:
      msg = 'Unknown Error';
      break;
  }
  console.log('Error: ' + msg);
}
*/
