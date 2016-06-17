import {Component} from '@angular/core';
import {NavController, Modal, ViewController, NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup';
import {ImageFallback} from '../../directives/image-fallback'
import {InputsPage} from '../inputs/inputs';

/*
  Generated class for the VendorsPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/vendors-popup/vendors-popup.html',
})
export class VendorsPopupPage {
  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.vendors=params.data;
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
  let modal = Modal.create(ImagePopup, {imageList:this.imageTest,activeImage:image, title:this.abioticos.ab_nombre});
  this.nav.present(modal)
}

}
