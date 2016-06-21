import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {InstanceDetails} from './instance-details/instance-details'

@Component({
  templateUrl: 'build/pages/information-overview/information-overview.html',
})
export class InformationOverview {
  params:any;
  constructor(public nav: NavController, params:NavParams) {
    this.params=params.data;
    console.log(this.params)
  }
  instanceClick(index){
    this.nav.push(InstanceDetails,{
      instance:this.params.instances[index],
      parent:this.params,
    })
  }
}
