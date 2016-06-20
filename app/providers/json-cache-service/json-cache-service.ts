import {Injectable} from '@angular/core';
import {Http} from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class JsonCacheService {
  data: any = null;
  jsonData:any=null;

  constructor(public http: Http) {}

  loadFromJson(){
    if (this.jsonData) {
      return Promise.resolve(this.data);
    }
    return new Promise(resolve => {
      this.http.get('cachedQueries.json')
          .map(res => res.json())
          .subscribe(data => {
            this.jsonData = data;
            resolve(this.jsonData);
          });
    });
  }

  load() {
    if (this.data) {
      return Promise.resolve(this.data);
    }

    return new Promise(resolve => {
      this.http.get('path/to/data.json')
        .map(res => res.json())
        .subscribe(data => {
          this.data = data;
          resolve(this.data);
        });
    });
  }
}

