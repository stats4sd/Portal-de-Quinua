import {Component} from '@angular/core';
import {NavController, Modal, ViewController, NavParams} from 'ionic-angular';
import {ImagePopup} from '../image-popup/image-popup';
import {ImageFallback} from '../../directives/image-fallback'
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'


@Component({
  templateUrl: 'build/pages/possibilities-popup/possibilities-popup.html',
  directives: [ImageFallback]
})
export class PossibilitiesPopupPage {
  possibilities:any;
  id:any;
  inputs:any;

  constructor(public nav: NavController, viewCtrl: ViewController, private params:NavParams, private sql:SqLiteService) {
    this.params=params;
    this.possibilities=params.data;
    console.log(this.possibilities);
    this.inputs=sql.getInputs(this.possibilities.inputList)
  }

  pushInputs(input) {
    console.log(input);
    this.nav.push(InputsPopupPage,{inputId:input.input_id, input:input});
  }
}
