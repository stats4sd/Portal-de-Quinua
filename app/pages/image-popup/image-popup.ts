import {Component} from '@angular/core';
import {Modal, NavController,ViewController} from 'ionic-angular';

@Component({
  templateUrl: 'build/pages/image-popup/image-popup.html',
})
export class ImagePopup {
  constructor(public nav: NavController, private viewCtrl: ViewController) {}

  close(){this.viewCtrl.dismiss()}
}
