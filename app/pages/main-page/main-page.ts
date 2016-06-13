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

  updateUrl(stageIndex){
    var currentUrl=this.stages[stageIndex].file_url;
    var newUrl:string = currentUrl;
    var invalidCount:number=0;
    for (var char:string of currentUrl){
      if(char.charCodeAt(0)>127){
        console.log(char);
        newUrl = newUrl.replace(char,'_')
        invalidCount++
      }
    }
    this.stages[stageIndex].file_url=newUrl;
    //if no invalid characters then possibly file just missing
    if(invalidCount==0){this.stages[stageIndex].file_url='wp-content/sin imagen.png'}
  }
}
