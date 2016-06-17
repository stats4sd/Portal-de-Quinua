import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {InfoTab} from './info-tab/info-tab'
import {ManagementTab} from './management-tab/management-tab'
import {PhotoTab} from './photo-tab/photo-tab'

@Component({
  templateUrl: 'build/pages/info-tabbed-popup/info-tabbed-popup.html',
})
export class InfoTabbedPopup {
  tab1Root: any = PhotoTab;
  tab2Root: any = InfoTab;
  tab3Root: any = ManagementTab;
  mySelectedIndex: number;

  constructor(navParams: NavParams) {
    this.mySelectedIndex = navParams.data.tabIndex || 0;
  }
}
