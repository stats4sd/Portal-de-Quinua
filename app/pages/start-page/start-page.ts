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
  jsonDbLoaded:boolean;
  SQLDbLoaded:number;
  loadSQL:boolean;
  sliderOptions:any;

  constructor(public nav: NavController, sql: SqLiteService, platform:Platform, ) {
    this.sql=sql;
    this.stages=[];
    //dbLoaded displays start button when loaded.
    this.jsonDbLoaded=false;
    this.SQLDbLoaded=0;
    //variable to decide whether to attempt loading sql - will need to determine script for use and update html page accordingly
    this.loadSQL=true;
    //initial page can be turned into multiple page swipes if wanted (add more slides to array)
    this.sliderOptions={
      pager:false
    };
    this.slides = [
      {
        title: "<b>Proinpa Informacion Servicio</b>",
        description: "Esta applicacion es parar ayudar productores de quinua en Bolivia con...",
        image: "wp-content/proinpa-logo.jpg",
      },
    ];
    //when platform is ready load database. sets dbLoaded variable true which shows enter button
    platform.ready().then(() => {
      //first load cachedDB
      this.sql.loadFromJson().then((result)=>{
        console.log('DB cache loaded');
        this.jsonDbLoaded=true;

        //load sql db if required
        if(this.loadSQL==true){
          sql.loadDatabase().then((result)=> {
            //prepare data for next page for smoother transitions. Start button only appears after complete
            this.sql.queryByName('initialStages').then((result)=> {
              this.sql.setValue('stages', result);
              this.SQLDbLoaded++;
            });
            //second call to getQueries.  This should probably be redone as get full array of queries, then run them all!
            this.sql.queryByName('initialAbioticos').then((result)=> {
              this.sql.setValue('abioticos', result);
              this.SQLDbLoaded++;
              console.log(this.SQLDbLoaded)
            });
            //third call to getQueries.  This should probably be redone as get full array of queries, then run them all!
            this.sql.queryByName('initialDisease').then((result)=> {
              this.sql.setValue('disease', result);
              this.SQLDbLoaded++;
              console.log(this.SQLDbLoaded)
            });
            this.sql.queryByName('initialPests').then((result)=> {
              this.sql.setValue('pests', result);
              this.SQLDbLoaded++;
              console.log(this.SQLDbLoaded)
            });
          });
        }
      })


    })
  }

  startButtonClick() {
      this.nav.push(MainPage);
  }
}
