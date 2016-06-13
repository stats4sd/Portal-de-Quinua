import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {MainPage} from '../main-page/main-page'
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

@Component({
  templateUrl: 'build/pages/start-page/start-page.html',
})
export class StartPage {
  stages:any;
  sql:any;
  queries:any;
  dbLoaded:boolean;
  q:any;

  constructor(public nav: NavController, sql: SqLiteService, platform:Platform, ) {
    this.sql=sql;
    this.stages=[];
    //initial page can be turned into multiple page swipes if wanted (add more slides to array)
    this.slides = [
      {
        title: "<b>Proinpa Informacion Servicio</b>",
        description: "Esta applicacion...",
        image: "wp-content/proinpa-logo.jpg",
      },
    ];
    //when platform is ready load database. sets dbLoaded variable true which shows enter button
    platform.ready().then(() => {
      sql.loadDatabase().then((result)=> {
        //prepare data for next page for smoother transitions. Start button only appears after complete
        //in future may want to actually cache these results in a local db
        var q=sql.getQueries('initialStages');
        this.sql.query(q).then((result)=> {
          this.sql.setValue('stages', result);
          this.dbLoaded = result;
        })
      });
    })
  }

  startButtonClick() {
      this.nav.push(MainPage);
  }
}
