import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {StageList} from '../stage-list/stage-list'
import {VarietiesPage} from '../varieties/varieties'
import {InformationOverview} from '../information-overview/information-overview'
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'
import {ImageFallback} from '../../directives/image-fallback'


/*
  Generated class for the CatalogueIndexPage page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  templateUrl: 'build/pages/catalogue-index/catalogue-index.html',
  directives: [ImageFallback],
})
export class CatalogueIndexPage {
  varieties:any;
  inputs:any;
  vendors:any;
  abiotics:any;
  diseases:any;
  pests:any;
  possibilities:any;
  sql:any;

  constructor(public nav: NavController, sql:SqLiteService) {
    this.sql = sql
    console.log(this.sql.getValue("allVarieties"));
    this.varieties = this.sql.getValue("allVarieties");
    console.log(this.varieties)
    this.inputs = this.sql.getValue("allInputs");
    this.vendors = this.sql.getValue("allVendors");
    this.abiotics = this.sql.getValue("allAbioticos");
    this.diseases = this.sql.getValue("allDiseases");
    this.pests = this.sql.getValue("allPests");
    this.possibilities = this.sql.getValue("allPossibilities");



  }

  pushVarieties() {
    this.nav.push(VarietiesPage)
  }

  pushAbiotic(){this.nav.push(InformationOverview,{
    title:'Abioticos',
    infoSection:'abioticos',
    instances:this.abiotics})
}

  pushPests(){this.nav.push(InformationOverview, {
  title:'Plagas',
  infoSection:'plagas',
  instances:this.pests
  })}

  pushDiseases(){this.nav.push(InformationOverview, {
  title:'Enfermedas',
  infoSection:'enfermedas',
  instances:this.diseases
  })}

}
