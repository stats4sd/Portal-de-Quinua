import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

/*
  Generated class for the AbioticosPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/abioticos/abioticos.html',
})
export class AbioticosPage {

  stages:any;
  sql:any;
  nav:any;

  constructor(public sql:SqLiteService, nav: NavController) {
    this.sql = sql;
    this.nav = nav;
  }
}
