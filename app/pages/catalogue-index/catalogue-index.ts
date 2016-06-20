import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {Platform} from 'ionic-angular';
import {StageList} from '../stage-list/stage-list'
import {VarietiesPage} from '../varieties/varieties'
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
  constructor(public nav: NavController, sql:SqLiteService) {

  }

  pushVarieties() {
    this.nav.push(VarietiesPage)

  }
}
