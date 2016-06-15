import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'

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

  constructor(public sql:SqLiteService, nav: NavController) {
    this.sql = sql;
    this.nav = nav;
    this.stage=this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    this.abioticos = this.sql.getValue('abioticos');
    console.log('abioticos = ' +  this.sql.getValue('abioticos'));
  }





}
