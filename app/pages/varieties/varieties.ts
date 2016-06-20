import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {AbioticPopupPage} from '../abiotic-popup/abiotic-popup';

/*
  Generated class for the VarietiesPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/varieties/varieties.html',
})
export class VarietiesPage {
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  variety:any;
  loaded:boolean;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform) {
    this.sql =sql;
    this.nav = nav;
    this.variety = this.sql.getValue('variety');
    this.loaded = false;


  }
}
