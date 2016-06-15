import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'

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

  constructor(public sql:SqLiteService, nav: NavController) {
    this.sql = sql;
    this.nav = nav;
    this.stage=this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    this.disease = this.sql.getValue('disease');
    console.log('disease = ' +  this.sql.getValue('disease'));
  }




}
