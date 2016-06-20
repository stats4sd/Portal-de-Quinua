import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {AbioticPopupPage} from '../abiotic-popup/abiotic-popup';
/*
  Generated class for the AbioticosPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/abiotic/abiotic.html',
  directives: [ImageFallback],

})
export class Abiotic{
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  abioticos:any;
  loaded:boolean;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform) {
    console.log('loading abiotic page')
    this.sql = sql;
    this.nav = nav;
    this.abioticos = [];
    this.loaded = false;
    //grab chosen stage ID and full pest list data
    this.stage=this.sql.getValue('allStages')[this.sql.getValue('stageArrayIndex')];
    // this.pests = this.sql.getValue('pests');
    //
    // //iterate through pest data and turn stageList into an array
    // ////will eventually move to main data handling area and generalise for other types of idList...
    // for(var pest of this.pests) {
    //   pest.stageList = pest.stageList.split(",")
    //   console.log(pest);
    // }
    console.log(this.stage);

    //call query to generate Abiotic list.
    platform.ready().then(() => {
      this.sql.query("", "filter", "abioticos", "stage", this.stage.stage_id).then((result)=> {
        this.abioticos = result;
        console.log(result);
        this.loaded = true;
        console.log(this.loaded)
      });
    });

  }

  abioticClick(i) {
    console.log(i)
    this.sql.setValue('abioticArrayIndex',i);
    this.nav.push(AbioticPopupPage, this.abioticos[i]);
  }


}
