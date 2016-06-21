import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {InfoTab} from './info-tab'
import {ManagementTab} from './management-tab'

@Component({
  template: `
  <ion-navbar *navbar>
    <ion-title *ngIf="params.instance.dis_nombre">{{params.instance.dis_nombre}}</ion-title>
    <ion-title *ngIf="params.instance.ab_nombre">{{params.instance.ab_nombre}}</ion-title>
    <ion-title *ngIf="params.instance.pes_nombre">{{params.instance.pes_nombre}}</ion-title>
  </ion-navbar>
    <ion-tabs>
      <ion-tab tabIcon="information-circle" tabTitle="Información" [root]="tab1" [rootParams]="params"></ion-tab>
      <ion-tab tabIcon="clipboard" tabTitle="Posibilidades de gestión" [root]="tab2" [rootParams]="params"></ion-tab>
    </ion-tabs>`
})
export class TabsPage {
  params:any;
  nav:NavController;
  tab1:InfoTab;
  tab2:ManagementTab;
  constructor(public nav: NavController, params:NavParams) {
    this.params=params.data;
    this.tab1 = InfoTab;
    this.tab2 = ManagementTab;
    //instance details already passed with nav controller but need to get management options

  }
}
