Dropzone.options.myAwesomeDropzone = {
    init: function() {
    
     this.on("success", function(file) {
   
       var ext = checkFileExt(file.name); // Get extension
       var newimage = "";
   
       // Check extension
       if(ext != 'png' && ext != 'jpg' && ext != 'jpeg'){
         newimage = "upload/logo.png"; // default image path
       }
    
       this.createThumbnailFromUrl(file, newimage);
     });
    }
   };
   
   // Get file extension
   function checkFileExt(filename){
     filename = filename.toLowerCase();
     return filename.split('.').pop();
   }