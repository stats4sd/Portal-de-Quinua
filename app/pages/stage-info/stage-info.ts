import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

@Component({
  templateUrl: 'build/pages/stage-info/stage-info.html',
})
export class StageInfoPage {
  sql:any
  constructor(public nav: NavController, sql:SqLiteService) {
    this.nav=nav;
    this.sql=sql;
    this.stage=this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    this.imageTest=[
      {number:1},
      {number:1},
      {number:1},
      {number:1},
      {number:1},
      {number:1},
      {number:1},
    ]
    console.log(this.stage)
  }

  imageClick(imageInfo){
    console.log(imageInfo)
  }

}
