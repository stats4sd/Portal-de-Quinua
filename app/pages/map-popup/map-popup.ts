import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {MapService} from '../../providers/map-provider/map-provider';
import {SqLiteService} from "../../providers/sq-lite-service/sq-lite-service";
import {NavParams} from "ionic-angular/index";


@Component({
  templateUrl: 'build/pages/map-popup/map-popup.html',
})
export class MapPopupPage {
  vendors:any;
  params:any;
  inputVendors:any;
  constructor(public nav: NavController, private mapService:MapService, private sql:SqLiteService, private params:NavParams) {
    this.mapService=mapService;
    this.vendors=sql.getValue('allVendors');
    this.params=params.data;
    console.log(this.params)
    this.inputVendors=sql.getInputVendors(this.params.input.input_id);

  }
  ionViewLoaded() {
    var map = new L.Map('map', {
      zoomControl: false,
      center: new L.LatLng(-16.290154, -63.588653),
      zoom: 5,
      minZoom: 1,
      maxZoom: 9,
      layers: [this.mapService.baseMaps.Offline],
      touchZoom: false
    });

    L.control.zoom({ position: 'topright' }).addTo(map);
    L.control.layers(this.mapService.baseMaps).addTo(map);
    L.control.scale().addTo(map);

    //timeout function needed to recentre map in div
    setTimeout(function(){
      map.invalidateSize({reset:true});
    },0);
    //need to remove then readd as sometimes basemap disappears after navigating away
    map.removeLayer(this.mapService.baseMaps.Offline);
    map.addLayer(this.mapService.baseMaps.Offline);

    var redMarker = L.AwesomeMarkers.icon({
      icon: 'shopping-cart',
      markerColor: 'red',
      prefix:'fa'
    });

    var greyMarker = L.AwesomeMarkers.icon({
      icon: '',
      markerColor: 'black',
      prefix:'fa'
    });
//add different markers for vendors that have and that doesn't have - probably better way to do this
    for(let vendor of this.inputVendors.has){
      console.log(vendor)
      var marker = L.marker([vendor.latitude, vendor.longitude],{icon:redMarker}).addTo(map);
     marker.bindPopup(
         "<h3>"+vendor.vquien+"</h3>"
         +"<p>"+vendor.vdonde+"</p>"
         +"<p><strong>"+vendor.vtel+"</strong></p>"
     );
    }
    for(let vendor of this.inputVendors.hasnt){
      console.log(vendor)
      var marker = L.marker([vendor.latitude, vendor.longitude],{icon:greyMarker}).addTo(map);
      marker.bindPopup(
          "<h3>"+vendor.vquien+"</h3>"
          +"<p>"+vendor.vdonde+"</p>"
          +"<p><strong>"+vendor.vtel+"</strong></p>"
      );
    }
    this.mapService.map = map;
  }
}
var myIcon = L.icon({
  iconUrl: 'external-css/images/marker-icon.png',
  iconRetinaUrl: 'external-css/images/marker-icon-2x.png',
  iconSize: [38, 95],
  iconAnchor: [22, 94],
  popupAnchor: [-3, -76],
  shadowUrl: 'external-css/images/marker-shadow.png',
  shadowRetinaUrl: 'external-css/images/marker-shadow.png',
  shadowSize: [68, 95],
  shadowAnchor: [22, 94]
});

function getMarkerColour(input){
  console.log(input);
  console.log(input.input_id);
}
