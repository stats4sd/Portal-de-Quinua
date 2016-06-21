import {Component} from '@angular/core';
import {Modal, NavController,ViewController,NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup'
import {ImageFallback} from '../../directives/image-fallback'
import {PossibilitiesPage} from '../possibilities/possibilities';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

/*
  Generated class for the VarietiesPopupPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/varieties-popup/varieties-popup.html',
})
export class VarietiesPopupPage {
  variety:any;
  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams) {
    this.params=params;
    this.variety=params.data.variety;
    console.log(this.variety);

    //split onombres into array;
    this.onombres = this.variety.onombre.split(",");
    console.log(this.onombres);

  }
}
