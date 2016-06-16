import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {PestPopupPage} from '../pest-popup/pest-popup';


/*
  Generated class for the PestsPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/pests/pests.html',
  directives: [ImageFallback],

})
export class Pests {
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  disease:any;
  pests:any;
  pLen:any;
  loaded:any;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform) {
    this.sql = sql;
    this.nav = nav;
    this.pests = [];
    this.loaded = false;

    //grab chosen stage ID and full pest list data
    this.stage=this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    // this.pests = this.sql.getValue('pests');
    //
    // //iterate through pest data and turn stageList into an array
    // ////will eventually move to main data handling area and generalise for other types of idList...
    // for(var pest of this.pests) {
    //   pest.stageList = pest.stageList.split(",")
    //   console.log(pest);
    // }
    console.log(this.stage);
    platform.ready().then(() => {
      this.sql.query("", "filter", "pests", "stage", this.stage.stage_id).then((result)=> {
        this.pests = result;
        console.log(result);
        this.loaded = true;
        console.log(this.loaded)
      })
    });
  }

  pestClick(i) {
    this.sql.setValue('abioticArrayIndex',i);
    this.nav.push(PestPopupPage, this.pests[i]);
  }


}
