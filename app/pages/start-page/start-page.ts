import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {MainPage} from '../main-page/main-page'
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'


/*
  Generated class for the StartPagePage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/start-page/start-page.html',
})
export class StartPage {
  stages:any;
  sql:any;

  constructor(public nav: NavController, sql: SqLiteService, platform:Platform) {
    this.sql=sql;
    this.stages=[];
    //when platform is ready load database. sets dbLoaded variable true which shows enter button
    platform.ready().then(() => {
      sql.loadDatabase().then((result)=> {
        console.log(result)
        this.dbLoaded = result;
      });
    })
  }

  startButtonClick() {
      this.nav.push(MainPage);
  }
}
