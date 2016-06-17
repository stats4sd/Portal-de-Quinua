import {Component} from '@angular/core';
import {NavController,NavParams, Modal} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup'
import {PossibilitiesPage} from '../possibilities/possibilities';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'


/*
  Generated class for the PestPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/pest-popup/pest-popup.html',
})
export class PestPopupPage {
  pest:any;
  id:any;
  constructor(public nav: NavController, private params:NavParams) {
      this.params=params;
      this.pest=params.data;
      console.log(this.pest)
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

  pushPossibilities(){this.nav.push(PossibilitiesPage,{item:"pest",id:this.pest.pest_id,nombre:this.pest.pest_nombre})}

}
