import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

/*
  Generated class for the AbioticosPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/abiotic/abiotic.html',
})
export class Abiotic{
  stages:any;
  sql:any;
  stage:any;
  nav:any;
  abioticos:any;

  constructor(public sql:SqLiteService, nav: NavController) {
    this.sql = sql;
    this.nav = nav;
    this.stage=this.sql.getValue('stages')[this.sql.getValue('stageArrayIndex')];
    this.abioticos = this.sql.getValue('abioticos');
    console.log('abioticos = ' +  this.sql.getValue('abioticos'));
  }

  updateUrl(stageIndex){
    var currentUrl=this.abioticos[stageIndex].file_url;
    var newUrl:string = currentUrl;
    var invalidCount:number=0;
    for (var char:string of currentUrl){
      if(char.charCodeAt(0)>127){
        newUrl = newUrl.replace(char,'_');
        invalidCount++
      }
    }
    this.abioticos[stageIndex].file_url=newUrl;
    //if no invalid characters then possibly file just missing
    if(invalidCount==0){this.abioticos[stageIndex].file_url='wp-content/sin imagen.png'}
  }




}
