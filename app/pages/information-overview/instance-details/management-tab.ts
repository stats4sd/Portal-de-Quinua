import {Component} from '@angular/core';
import {NavController, Platform, NavParams} from 'ionic-angular';
import {SqLiteService} from '../../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../../directives/image-fallback'
import {PossibilitiesPopupPage} from '../../possibilities-popup/possibilities-popup'

/*
  Generated class for the ManagementTabPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/information-overview/instance-details/management-tab.html',
  directives: [ImageFallback]
})
export class ManagementTab {
  sql:any;
  stage:any;
  nav:any;
  abioticos:any;
  loaded:boolean;
  item:any;
  itemId:any;
  itemNombre:any;
  possibilities:any;
  params:any;

  constructor(public sql:SqLiteService, nav: NavController, platform:Platform, private params:NavParams) {
    this.sql = sql;
    this.nav = nav;

    //possibilities can be called from stages OR any of the risks. The params.item value tells us where the call came from.
    this.params=params.data;
    console.log(this.params)
    this.item=this.params.item;
    this.itemId=this.params.id;
    this.itemNombre=this.params.nombre
    this.possibilities = [];
    this.loaded = false;

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
  /*
  pushInputs() {
    this.nav.push(InputsPage,{item:"possibilities",id:this.possibilities.possibilities_id,nombre:this.possibilities.pos_nombre})
  }*/

}
