import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {Abiotic} from '../abiotic/abiotic'
import {Diseases} from '../diseases/diseases'
import {Pests} from '../pests/pests'
import {VarietiesPage} from '../varieties/varieties'
import {FullStage} from '../full-stage/full-stage'
import {ImagePopup} from '../image-popup/image-popup'
import {PossibilitiesPage} from '../possibilities/possibilities';

@Component({
  templateUrl: 'build/pages/stage-info/stage-info.html',
})

export class StageInfoPage {
  sql:any;
  stage:any;
  imageTest:any;
  badgeInfo:any;
  constructor(public nav: NavController, sql:SqLiteService) {
    this.nav = nav;
    this.sql = sql;
    this.stage = this.sql.getValue('allStages')[this.sql.getValue('stageArrayIndex')];
    this.badgeInfo = this.sql.getInfoLengths(this.stage.stage_id);
    this.imageTest = [
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 0},
      /*{src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 1},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 2},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 3},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 4},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 5}*/
    ]
  }
  pushAbiotic(){this.nav.push(Abiotic)}
  pushPests(){this.nav.push(Pests)}
  pushVarieties(){this.nav.push(VarietiesPage)}
  pushDiseases(){this.nav.push(Diseases)}
  //possibilities page requires additional values, as many pages link to it.
  pushPossibilities(){this.nav.push(PossibilitiesPage,{item:"stage",id:this.stage.stage_id,nombre:this.stage.nombre})}

  imageClick(image){
    let modal = Modal.create(ImagePopup, {imageList:this.imageTest,activeImage:image, title:this.stage.nombre});
    this.nav.present(modal)
  }
  //function to calculate number of results behind each info link

}


