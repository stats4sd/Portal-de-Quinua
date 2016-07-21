import {Component} from '@angular/core';
import {NavController, Modal, ViewController, NavParams} from 'ionic-angular';
import {ImagePopup} from '../../image-popup/image-popup';
import {ImageFallback} from '../../../directives/image-fallback'
import {VendorsPage} from '../../vendors/vendors';
import {ImageFallback} from '../../../directives/image-fallback'

@Component({
  templateUrl: 'build/pages/inputs/input-details/input-info-tab.html',
  directives:[ImageFallback]
})
export class InputInfoTab {
  inputs:any;
  imageTest:any;

  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.inputs=params.data.input;
    console.log(this)
  }

  imageClick(image){
    let modal = Modal.create(ImagePopup, {imageList:this.imageTest,activeImage:image, title:this.inputs.pnombre});
    this.nav.present(modal)
  }
  pushVendors() {
    this.nav.push(VendorsPage,{item:"input",id:this.inputs.input_id,nombre:this.inputs.pnombre})
  }
  returnBool(x){
    if(x==0){return 'close-circle'}
    else if(x==1){return 'checkmark-circle'}
    else{return 'No Conocida'}
  }
  colourClass(x){
    if(x==0){return 'False'}
    else if(x==1){return 'True'}
    else{return 'help-circle'}
  }
}
