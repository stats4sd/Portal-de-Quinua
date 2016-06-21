import { Directive, ElementRef, Input } from '@angular/core';
@Directive({
        selector: '[image-fallback]',
        host: {'(error)': 'updateUrl()'}
        })
export class ImageFallback {
    private el:HTMLElement;
    constructor(el: ElementRef) {
        this.el=el.nativeElement;
        }
    updateUrl(){
        var oldUrl =this.el.src;
        //search for foreign characters, e.g. %B3%C3
        var invalid=(oldUrl.match(/%[A-Z][0-9]%[A-Z][A-Z0-9]/));
        if(invalid==null){
            console.log('no special characters, file missing?');
            this.el.src='wp-content/sin imagen.png'
          }
        else{
            console.log('special character found, renaming src file');
            var newUrl=oldUrl.replace(invalid[0],'_')
        this.el.src=newUrl;
      }
}
}
