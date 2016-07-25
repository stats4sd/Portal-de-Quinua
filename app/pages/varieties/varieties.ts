import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'
import {VarietiesPopupPage} from '../varieties-popup/varieties-popup';

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
  searchQuery:any;
  items:any;

  constructor(public sql:SqLiteService, nav: NavController) {
    this.sql =sql;
    this.nav = nav;
    this.variety = this.sql.getValue('allVarieties');
    console.log(this.variety);
    this.searchQuery = '';
    this.initializeItems();
  }

  initializeItems() {
    this.items = this.variety;
    console.log(this.items);
  }

  getItems(searchbar) {
    // Reset items back to all of the items
    this.initializeItems();
    // set q to the value of the searchbar
    var q = searchbar.value;
    // if the value is an empty string don't filter the items
    if (q.trim() == '') {
      return;
    }
    this.items = this.items.filter((v) => {
      if (v.nombre.toLowerCase().indexOf(q.toLowerCase()) > -1) {
        return true;
      }
      return false;
    })
  }

  varietyClick(item) {
    console.log(item);
    this.sql.setValue('varietyIndex',item.variety_id);
    this.nav.push(VarietiesPopupPage, {varietyId:item.variety_id, variety:item});
  }
}
