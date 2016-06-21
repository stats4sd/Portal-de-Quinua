import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {VarietiesPopupPage} from '../varieties-popup/varieties-popup';

/*
  Generated class for the VarietiesPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/varieties/varieties.html',
  directives: [ImageFallback],

})
export class VarietiesPage {
  stages:any;
  stage:any;
  nav:any;
  variety:any;
  loaded:boolean;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform) {
    this.sql =sql;
    this.nav = nav;
    this.variety = this.sql.getValue('allVarieties');
    console.log(this.variety)


  }

  varietyClick(i) {
    this.sql.setValue('varietyIndex',i);
    this.nav.push(VarietiesPopupPage, {varietyId:i, variety:this.variety[i]});
  }
}
