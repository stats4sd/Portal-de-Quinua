import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {VendorInfoTab} from './vendor-info-tab'
import {SaleListTab} from './sale-list-tab'
import {SqLiteService} from '../../../providers/sq-lite-service/sq-lite-service'

@Component({
  template: `
  <ion-navbar *navbar>
    <ion-title>{{params.vquien}}</ion-title>
  </ion-navbar>
    <ion-tabs>
      <ion-tab tabIcon="information-circle" tabTitle="Información" [root]="tab1" [rootParams]="params"></ion-tab>
      <ion-tab tabIcon="pricetags" tabTitle="
Productos en venta" [root]="tab2" [rootParams]="saleParams"></ion-tab>
    </ion-tabs>`
})
export class VendorTabsPage {
  params:any;
  nav:NavController;
  saleParams:any
  varieties:any;
  varietiesSet:any
  inputs:any;
  inputsSet:any;

  constructor(public sql:SqLiteService, nav: NavController, params:NavParams) {
    this.sql = sql;
    this.params=params.data;
    this.tab1 = VendorInfoTab;
    this.tab2 = SaleListTab;

    //get varieties and filter by vendor
    this.varietiesSet = this.sql.getValue("allVarieties")
    console.log(this.varietiesSet)
    console.log(this.params)
    this.varieties = this.sql.filterByList(this.varietiesSet,"vendorList",this.params.vendor_id)
    console.log(this.varieties);

    //get inputs and filter by vendor_id
    this.inputsSet = this.sql.getValue("allInputs")
    console.log(this.inputsSet)
    this.inputs = this.sql.filterByList(this.inputsSet,"vendorList",this.params.vendor_id)

    this.saleParams = {
      varieties:this.varieties,
      inputs:this.inputs
    }

    this.params.varietyCount = this.saleParams.varieties.length
    this.params.inputCount = this.saleParams.inputs.length
    //instance details already passed with nav controller but need to get management options


  }
}


//couple small fuunctions to make up for fact that naming system not consistent (e.g. ab_nombre vs pest_nombre)
function getItem(instance){
  if(instance.abioticos_id){return 'abioticos'}
  if(instance.disease_id){return 'disease'}
  if(instance.pest_id){return 'pest'}
}

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
