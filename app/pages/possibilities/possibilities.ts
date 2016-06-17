import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {PossibilitiesPopupPage} from '../possibilities-popup/possibilities-popup';

/*
  Generated class for the PossibilitiesPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/possibilities/possibilities.html',
  directives: [ImageFallback],

})
export class PossibilitiesPage {
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  abioticos:any;
  loaded:boolean;
  item:any;
  itemId:any;
  itemNombre:any;
  possibilities:any;
  paramsdata:any;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform, private params:NavParams) {
    this.sql = sql;
    this.nav = nav;

    //possibilities can be called from stages OR any of the risks. The params.item value tells us where the call came from.
    this.params=params.data;
    //this.paramsdata=this.params.data;
    //grab chosen item ID and full pest list data
    this.item=this.params.item;
    this.itemId=this.params.id;
    this.itemNombre=this.params.nombre

    this.possibilities = [];
    this.loaded = false;

    // this.pests = this.sql.getValue('pests');
    //
    // //iterate through pest data and turn stageList into an array
    // ////will eventually move to main data handling area and generalise for other types of idList...
    // for(var pest of this.pests) {
    //   pest.stageList = pest.stageList.split(",")
    //   console.log(pest);
    // }
    console.log(this.item);
    console.log(this.itemId);
    console.log(this.itemNombre);
    //call query to generate Abiotic list.
    platform.ready().then(() => {
      this.sql.query("", "filter", "possibilities", this.item, this.itemId).then((result)=> {
        this.possibilities = result;
        console.log(result);
        this.loaded = true;
        console.log(this.loaded)
      });
    });

  }

  possClick(i) {
    this.sql.setValue('possArrayIndex',i);
    this.nav.push(PossibilitiesPopupPage, this.possibilities[i]);
  }
}
