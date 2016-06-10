import {Component} from "@angular/core";
import {SqLiteService} from '../../providers/sq-lite-service/sq-lite-service'

@Component({
  templateUrl: 'build/pages/main-page/main-page.html',
  directives: [],
})
export class MainPage {
  stages:any;
  sql:any;

  constructor(sql:SqLiteService) {
    this.sql=sql;
    console.log(this.stages)
    this.sql.query('SELECT * FROM stage').then((result)=>{
      this.stages=result;
    })
  }

  stageClick(stageId){
    console.log('stage id: '+stageId)
  }

}
