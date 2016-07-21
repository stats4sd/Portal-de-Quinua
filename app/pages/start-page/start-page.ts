import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {StageList} from '../stage-list/stage-list'
import {CatalogueIndexPage} from '../catalogue-index/catalogue-index'
import {MapPopupPage} from '../map-popup/map-popup'
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {JsonCacheService} from '../../providers/json-cache-service/json-cache-service'

@Component({
  templateUrl: 'build/pages/start-page/start-page.html',
})
export class StartPage {
  stages:any;
  sql:any;
  slides:any;
  jsonDbLoaded:boolean;
  SQLDbLoaded:boolean=false;
  loadSQL:boolean;
  sliderOptions:any;
  queryNumber:number;

  constructor(public nav: NavController, sql: SqLiteService, platform:Platform, private cache:JsonCacheService ) {
    this.cache = cache;
    this.sql = sql;
    this.stages = [];
    //dbLoaded displays start button when loaded.
    this.jsonDbLoaded = false;
    //variable to decide whether to attempt loading sql - will need to determine script for use and update html page accordingly
    this.loadSQL = true;


    //initialise masterQueries variable and count objects
    this.queryNumber = this.sql.getAllQueriesLength();
    var masterQueries = this.sql.getAllQueries();

    //initial page can be turned into multiple page swipes if wanted (add more slides to array)
    this.sliderOptions = {
      pager: false
    };
    this.slides = [
      {
        title: "<b>Portal de Quinua</b>",
        description: "Esta aplicación está diseñada para informar sobre cultivo de la quinua y los problemas asociado.",
        image: "wp-content/thrashing-quinua.jpeg",
      },
    ];
    //when platform is ready load database. sets dbLoaded variable true which shows enter button
    platform.ready().then(() => {
      //first load cachedDB
      this.cache.loadFromJson().then((result)=> {
        console.log('DB cache loaded');
        this.jsonDbLoaded = true;
      }).then(()=> {
        this.sql.loadFromJson().then((results)=> {
          console.log('db cache 2 loaded');
          //load sql db if required
          if (this.loadSQL == true) {
            sql.loadDatabase().then((result)=> {

              //run array of queries - note should move logic into sq lite service
              //define list of query names
              var queryList = ['allStages', 'allAbioticos', 'allPests', 'allPossibilities', 'allDiseases', 'allInputs', 'allVarieties', 'allVendors']
              //define function that queries
              var queryFn = function (queryName) {
                sql.query(queryName).then((res)=>{})
              };
              //defining mapping of queries to function - now have an array of functions ready to execute
              var allQueries = queryList.map(queryFn);
              //run multiple promise statement - waits for all async calls to finish and returns one object with all in
              Promise.all(allQueries).then((res) => {
                console.log('executed all queries');
                console.log(results);
                this.SQLDbLoaded=true;
                //save results in correct key-value pair in sql service
                for(let res in results){
                  this.sql.setValue(res,results[res])
                }
              })

  })}})})})}

  startButtonClick() {
      this.nav.push(StageList);
  }

  catalogueButtonClick() {
    this.nav.push(CatalogueIndexPage)
  }

  mapButtonClick() {
    this.nav.push(MapPopupPage)
  }
}
