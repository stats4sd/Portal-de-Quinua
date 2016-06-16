import {Component} from '@angular/core';
import {NavController,Modal,ViewController,NavParams} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {DiseasePopupPage} from '../disease-popup/disease-popup';

/*
  Generated class for the DiseasesPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/diseases/diseases.html',
  directives: [ImageFallback],

})
export class Diseases {
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  disease:any;
  loaded:boolean;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform ) {
    this.sql = sql;
    this.nav = nav;
    this.disease = [];
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
      this.sql.query("", "filter", "disease", "stage", this.stage.stage_id).then((result)=> {
        this.disease = result;
        console.log(result);
        this.loaded = true;
        console.log(this.loaded)
      });
    });
  }

  diseaseClick(i) {
    this.sql.setValue('diseaseArrayIndex',i);
    this.nav.push(DiseasePopupPage, this.disease[i]);
  }
}
