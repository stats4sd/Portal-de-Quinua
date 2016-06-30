import {Component} from '@angular/core';
import {NavController, Modal, ViewController, NavParams} from 'ionic-angular';
import {ImagePopup} from '../../image-popup/image-popup';
import {ImageFallback} from '../../../directives/image-fallback'
import {InputsPage} from '../../inputs/inputs';

/*
  Generated class for the VendorsPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/vendors/vendors-details/vendor-info-tab.html',
})
export class VendorInfoTab {
  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.vendors=params.data;
    console.log(params.data)

}

}
