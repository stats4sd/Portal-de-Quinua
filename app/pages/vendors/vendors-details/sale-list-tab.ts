import {Component} from '@angular/core';
import {NavController, Platform, NavParams} from 'ionic-angular';
import {SqLiteService} from '../../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../../directives/image-fallback'
import {PossibilitiesPopupPage} from '../../possibilities-popup/possibilities-popup'
import {VarietiesPopupPage} from '../../varieties-popup/varieties-popup';



/*
  Generated class for the ManagementTabPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/vendors/vendors-details/sale-list-tab.html',
  directives: [ImageFallback]
})
export class SaleListTab {
  sql:any;
  stage:any;
  nav:any;
  abioticos:any;
  loaded:boolean;
  item:any;
  itemId:any;
  itemNombre:any;
  possibilities:any;
  inputs:any;
  varieties:any;
  possibilitiesSet:any;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform, private params:NavParams) {
    this.sql = sql;
    this.nav = nav;

    //possibilities can be called from stages OR any of the risks. The params.item value tells us where the call came from.
    this.params=params.data;
    console.log(this.params)

    this.inputs = this.params.inputs
    this.varieties = this.params.varieties



  }

  varietyClick(i) {
    this.sql.setValue('varietyIndex',i);
    this.nav.push(VarietiesPopupPage, {varietyId:i, variety:this.varieties[i]});
  }

  inputClick(i) {
    this.sql.setValue('inputIndex',i);
    this.nav.push(InputsPopupPage, {inputId:i, input:this.inputs[i]});
  }

  /*
  pushInputs() {
    this.nav.push(InputsPage,{item:"possibilities",id:this.possibilities.possibilities_id,nombre:this.possibilities.pos_nombre})
  }*/

}
