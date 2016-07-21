import {Component} from '@angular/core';
import {NavController, Modal, ViewController, NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup';
import {ImageFallback} from '../../directives/image-fallback'
import {VendorsPage} from '../vendors/vendors';
import {ImageFallback} from '../../directives/image-fallback'
/*
  Generated class for the InputsPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/inputs-popup/inputs-popup.html',
  directives:[ImageFallback]
})
export class InputsPopupPage {
  inputs:any;
  imageTest:any;

  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.inputs=params.data.input;
    this.imageTest = [
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 0},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 1},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 2},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 3},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 4},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 5}
    ]
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
