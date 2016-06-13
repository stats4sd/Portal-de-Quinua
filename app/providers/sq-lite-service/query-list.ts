// file to hold sql queries, so they don't clutter up other code.

//no idea if I need any of these imports. Just copied from sq-lite-service.ts
import {Injectable} from '@angular/core';
import {Http} from '@angular/http';
import {Platform} from 'ionic-angular';
import 'rxjs/add/operator/map';

//declare outside modules to keep typescript happy
declare var sql:any;
//declare var fs:any;
declare var require:any;

@Injectable()
export class Queries {
  data: any = null;
  platform: Platform;
  window: any;
  db:any;
  dbLoaded:boolean;
  cachedQueries:any;

  constructor(public http: Http, platform: Platform) {
    this.platform = platform;
    this.cachedQueries={}
  }

  loadQueries() {
    var q = `SELECT * FROM stage`;

    return q;
  }

}
