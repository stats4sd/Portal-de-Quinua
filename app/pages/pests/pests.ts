import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'


/*
  Generated class for the PestsPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/pests/pests.html',
  directives: [ImageFallback],

})
export class Pests {
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  disease:any;
  pests:any;
  pLen:any;

  constructor(public sql:SqLiteService, nav: NavController) {
    this.sql = sql;
    this.nav = nav;
    this.stage=this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    this.pests = this.sql.getValue('pests');
    console.log('pests = ')
    console.log(this.pests);
    console.log(this.pests[0].stageList);

    for(var i=0; i<this.pests.length; i++) {
      this.pests[i].stageList = this.pests[i].stageList.split(",")
      console.log(this.pests[i]);
    }

    console.log('new pests = ');
    console.log(this.pests)
  }

}
