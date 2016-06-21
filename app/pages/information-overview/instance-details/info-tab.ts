import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {ImageFallback} from '../../../directives/image-fallback'

@Component({
  templateUrl: 'build/pages/information-overview/instance-details/info-tab.html',
  directives: [ImageFallback],
})
export class InfoTab {
  params:any;
  imageTest:any;
  parent:any;
  instance:any;
  constructor(public nav: NavController, params:NavParams) {
    this.params=params.data;
    this.imageTest=[];
    this.parent=this.params.parent;
    this.instance=this.params.instance;
    console.log(this.parent);
    console.log(this.instance)
  }
}
