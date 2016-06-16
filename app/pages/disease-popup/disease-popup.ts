import {Component} from '@angular/core';
import {Modal, NavController,ViewController,NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup'
import {ImageFallback} from '../../directives/image-fallback'

/*
  Generated class for the DiseasePopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/disease-popup/disease-popup.html',
})
export class DiseasePopupPage {
  disease:any;
  id:any;
  imageTest:any;
  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {

      this.params=params;
      this.disease=params.data;
      console.log(this.disease);
      //this.abioticos=this.params.abioticos;
      //this.id=this.params.id;
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
