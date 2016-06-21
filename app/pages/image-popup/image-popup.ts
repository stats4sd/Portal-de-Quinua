import {Component} from '@angular/core';
import {Modal, NavController,ViewController,NavParams} from 'ionic-angular';

@Component({
  templateUrl: 'build/pages/image-popup/image-popup.html',
})
export class ImagePopup {
  galleryMeta:any;
  slideOptions:any;
  constructor(private viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.galleryMeta=this.params.data;
    console.log(this.galleryMeta);
    this.slideOptions={
      initialSlide:this.galleryMeta.activeImage.index
    }
  }
  close(){this.viewCtrl.dismiss()}
}
