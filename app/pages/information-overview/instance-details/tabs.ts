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
      <ion-tab tabIcon="clipboard" tabTitle="Posibilidades de gestión" [root]="tab2" [rootParams]="managementParams"></ion-tab>
    </ion-tabs>`
})
export class TabsPage {
  params:any;
  nav:NavController;
  tab1:InfoTab;
  tab2:ManagementTab;
  managementParams:any
  constructor(public nav: NavController, params:NavParams) {
    this.params=params.data;
    this.tab1 = InfoTab;
    this.tab2 = ManagementTab;
    //instance details already passed with nav controller but need to get management options
    this.managementParams={
      item:this.params.parent.infoSection,
      id:getId(this.params.instance),
      nombre:getNombre(this.params.instance)
    };

  }
}
//couple small fuunctions to make up for fact that naming system not consistent (e.g. ab_nombre vs pest_nombre)
function getId(instance){
  if(instance.abioticos_id){return instance.abioticos_id}
  if(instance.disease_id){return instance.disease_id}
  if(instance.pest_id){return instance.pest_id}
}

function getNombre(instance){
  if(instance.ab_nombre){return instance.ab_nombre}
  if(instance.dis_nombre){return instance.dis_nombre}
  if(instance.pest_nombre){return instance.pest_nombre}
}
