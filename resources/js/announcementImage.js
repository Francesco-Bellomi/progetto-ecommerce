//  const Dropzone = require("dropzone");



document.addEventListener('DOMContentLoaded',function (){
    //document ready!!!

    if(document.querySelectorAll('#drophere').length > 0){
        let csrfToken=$('meta[name="csrf-token"]').attr('content');
        let uniqueSecret=$('input[name="uniqueSecret"]').attr('value');
         let myDropzone = new window.Dropzone('#drophere', {
             url : '/announcement/images/upload',
              params:{
                  _token:csrfToken,
                  uniqueSecret:uniqueSecret
              }
         })
    
     
         




         
    }

})