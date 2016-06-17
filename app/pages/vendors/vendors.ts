import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup';
import {ImageFallback} from '../../directives/image-fallback'
import {VendorsPopupPage} from '../vendors-popup/vendors-popup';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

/*
  Generated class for the VendorsPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/vendors/vendors.html',
  directives: [ImageFallback],

})
export class VendorsPage {
  vendors:any;
  id:any;
  stages:any;
  stage:any;
  nav:any;
  loaded:boolean;
  item:any;
  itemId:any;
  itemNombre:any;
  possibilities:any;
  paramsdata:any;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform, private params:NavParams) {

    this.sql=sql;
    this.nav=nav;

    this.params=params.data;
    this.item=this.params.item;
    this.itemId=this.params.id;
    this.itemNombre=this.params.nombre;

    this.vendors = [];
    this.loaded = false;
    console.log(this.item);
    console.log(this.itemId);
    console.log(this.itemNombre);
    //call query to generate Abiotic list.

    platform.ready().then(() => {
      this.sql.query("", "filter", "vendor", this.item, this.itemId).then((result)=> {
        this.vendors = result;
        console.log(result);
        this.loaded = true;
        console.log(this.loaded)
        console.log(this.vendors[0].file_url)
      });
    });


  }
  vendorClick(i) {
    this.sql.setValue('possArrayIndex',i);
    this.nav.push(VendorsPopupPage, this.vendors[i]);
  }


}
