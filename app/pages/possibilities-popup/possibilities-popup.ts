import {Component} from '@angular/core';
import {NavController, Modal, ViewController, NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup';
import {ImageFallback} from '../../directives/image-fallback'
import {InputsPage} from '../inputs/inputs';
import {ImageFallback} from '../../directives/image-fallback'

/*
  Generated class for the PossibilitiesPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/possibilities-popup/possibilities-popup.html',
  directives: [ImageFallback]
})
export class PossibilitiesPopupPage {
  possibilities:any;
  id:any;

  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.possibilities=params.data;
    console.log(this.possibilities);
    //this.inputs
  }


  pushInputs() {
    this.nav.push(InputsPage,{item:"possibilities",id:this.possibilities.possibilities_id,nombre:this.possibilities.pos_nombre})
  }
}
