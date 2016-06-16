import {Component} from "@angular/core";
import {NavController} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {StageInfoPage} from '../stage-info/stage-info'
import {ImageFallback} from '../../directives/image-fallback'

@Component({
  templateUrl: 'build/pages/stage-list/stage-list.html',
  directives: [ImageFallback],
})
export class StageList {
  stages:any;
  sql:any;
  nav:any;

  constructor(sql:SqLiteService, nav:NavController) {
    this.sql = sql;
    this.nav = nav;
    this.stages=sql.getValue('stages');
  }

  stageClick(i) {
    this.sql.setValue('stageArrayIndex',i);
    this.nav.push(StageInfoPage, {stageNumber:i});
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
        newUrl = newUrl.replace(char,'_')
        invalidCount++
      }
    }
    this.stages[stageIndex].file_url=newUrl;
    //if no invalid characters then possibly file just missing
    if(invalidCount==0){this.stages[stageIndex].file_url='wp-content/sin imagen.png'}
  }

  //deprecated url cleaning function
  /*cleanUrl(event){
    console.log(this)
    console.log('cleaning url');
    var currentUrl=event.srcElement.src;
    var newUrl:string = currentUrl;
    var invalidCount:number=0
    for (var char:string of currentUrl){
      if(char.charCodeAt(0)>127){
        newUrl = newUrl.replace(char,'_')
        invalidCount++
      }
    }
    if(invalidCount==0){return 'wp-content/sin imagen.png'}
    else{return newUrl}
  }*/
}
