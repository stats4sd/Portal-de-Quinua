import {Component} from '@angular/core';
import {NavController, NavParams, Modal} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImagePopup} from '../image-popup/image-popup'
import {InformationOverview} from '../information-overview/information-overview';

@Component({
  templateUrl: 'build/pages/stage-info/stage-info.html',
})

export class StageInfoPage {
  sql:any;
  stage:any;
  imageTest:any;
  stageResults:any;
  constructor(public nav: NavController, sql:SqLiteService) {
    this.nav = nav;
    this.sql = sql;
    this.stage = this.sql.getValue('allStages')[this.sql.getValue('stageArrayIndex')];
    this.stageResults = this.sql.filterAllByStage(this.stage.stage_id);
    this.imageTest = [
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 0},
      /*{src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 1},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 2},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 3},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 4},
      {src: 'wp-content/proinpa-logo.jpg', description: 'example image description', index: 5}*/
    ]
  }
  pushAbiotic(){this.nav.push(InformationOverview,{
    title:'Abioticos',
    infoSection:'abioticos',
    stage:this.stage,
    instances:this.stageResults.abiotics})}
  pushPests(){this.nav.push(InformationOverview, {
    title:'Plagas',
    infoSection:'plagas',
    instances:this.stageResults.pests,
    stage:this.stage})}
  pushDiseases(){this.nav.push(InformationOverview, {
    title:'Enfermedas',
    infoSection:'enfermedas',
    instances:this.stageResults.diseases,
    stage:this.stage})}

  imageClick(image){
    let modal = Modal.create(ImagePopup, {imageList:this.imageTest,activeImage:image, title:this.stage.nombre});
    this.nav.present(modal)
  }
  //function to calculate number of results behind each info link

}


