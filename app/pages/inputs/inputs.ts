import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {InputsPopupPage} from '../inputs-popup/inputs-popup'
/*
  Generated class for the InputsPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/inputs/inputs.html',
  directives: [ImageFallback],

})
export class InputsPage {
  nav:any;
  item:any;
  itemId:any;
  itemNombre:any;
  inputs:any;
  loaded:any;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform, private params:NavParams) {
    this.sql=sql;
    this.nav=nav;
    this.params=params.data;
    this.item=this.params.item;
    this.itemId=this.params.id;
    this.itemNombre=this.params.nombre;

    this.inputs = [];
    this.loaded = false;

    platform.ready().then(() => {
      this.sql.query("", "filter", "inputs", this.item, this.itemId).then((result)=> {
        this.inputs = result;
        this.loaded = true;
        console.log(this.loaded);
        console.log(result)
      });
    });
  }

  inputClick(i) {
    this.sql.setValue('possArrayIndex',i);
    this.nav.push(InputsPopupPage,this.inputs[i]);
  }



}
