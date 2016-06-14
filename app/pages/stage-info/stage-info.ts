import {Component} from '@angular/core';
import {NavController, Modal} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {Abiotic} from '../abiotic/abiotic'
import {Diseases} from '../diseases/diseases'
import {Pests} from '../pests/pests'
import {Varieties} from '../varieties/varieties'
import {FullStage} from '../full-stage/full-stage'
import {ImagePopup} from '../image-popup/image-popup'

@Component({
  templateUrl: 'build/pages/stage-info/stage-info.html',
})
export class StageInfoPage {
  sql:any;
  constructor(public nav: NavController, sql:SqLiteService) {
    this.nav = nav;
    this.sql = sql;
    this.stage = this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    this.imageTest = [
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 1},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 2},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 3},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 4},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 5},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 6}
    ]
  }
  pushAbiotic(){this.nav.push(Abiotic)}
  pushPests(){this.nav.push(Pests)}
  pushVarieties(){this.nav.push(Varieties)}
  pushDiseases(){this.nav.push(Diseases)}
  pushFullStage(){this.nav.push(FullStage)}

  imageClick(image){
    console.log(image);
    let modal = Modal.create(ImagePopup);
    this.nav.present(modal);

  }
}
