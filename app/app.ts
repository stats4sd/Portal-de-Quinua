import {Component} from "@angular/core";
import {Platform, ionicBootstrap} from 'ionic-angular';
import {StatusBar, Splashscreen} from 'ionic-native';
import {StartPage} from './pages/start-page/start-page';
import {SqLiteService} from './providers/sq-lite-service/sq-lite-service';
import {JsonCacheService} from './providers/json-cache-service/json-cache-service';


@Component({
  template: '<ion-nav [root]="rootPage"></ion-nav>',
  providers:[[SqLiteService],[JsonCacheService]]
})
export class MyApp {
  rootPage: any = StartPage;

  constructor(platform: Platform) {
    platform.ready().then(() => {
      navigator.splashscreen.hide();
      StatusBar.styleDefault();
      Splashscreen.hide();
    });
  }
}

ionicBootstrap(MyApp);
