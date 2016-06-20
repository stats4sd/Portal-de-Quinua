import {Component} from '@angular/core';
import {Modal, NavController,ViewController,NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup'
import {ImageFallback} from '../../directives/image-fallback'
import {PossibilitiesPage} from '../possibilities/possibilities';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

/*
  Generated class for the AbioticPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/abiotic-popup/abiotic-popup.html',
})
export class AbioticPopupPage {
  abioticos:any;
  id:any;
  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    console.log('loading page')
    this.params=params;
    this.abioticos=params.data;
    console.log(this.abioticos);
    console.log(this.abioticos.ab_nombre);
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
  pushPossibilities(){this.nav.push(PossibilitiesPage,{item:"abioticos",id:this.abioticos.abioticos_id,nombre:this.abioticos.ab_nombre})}

}
