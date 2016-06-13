import {Component} from "@angular/core";
import {NavController} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {StageInfoPage} from '../stage-info/stage-info'

@Component({
  templateUrl: 'build/pages/main-page/main-page.html',
  directives: [],
})
export class MainPage {
  stages:any;
  sql:any;
  nav:any;

  constructor(sql:SqLiteService, nav:NavController) {
    this.sql = sql;
    this.nav = nav;
    this.stages=sql.getValue('stages');
  }

  stageClick(stageId) {
    this.sql.setValue('activeStage',stageId);
    console.log(stageId);
    this.nav.push(StageInfoPage);
  }

  ionViewLoaded(){
    //put functions here to auto run once the page is fully loaded.
    //might be good to run all potential queries and cache results whilst user is idle
    //wait, we don't need anymore at this stage
  }
}
