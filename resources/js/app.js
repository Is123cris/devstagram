import './bootstrap';

import Dropzone from 'dropzone';
Dropzone.autoDiscover = false; 

const dropzone = new Dropzone('#dropzone', {

    dictDefaultMessage: 'Imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'borrar archivo', 
    maxFiles: 1,
    uploadMultiple: false,
init:function(){
    if(document.querySelector(' [ name="imagen"]').value.trim()!='/'){
        const imagenPublicada={}
        imagenPublicada.size=1234;
        imagenPublicada.name=document.querySelector(' [ name="imegen"]').value;

        this.options.addedfile.call(this, imagenPublicada);
        this.options.thumbnail.call(this, imagenPublicada, '/uploads/${imagenPublicada.name}');

        imagenPublicada.previewElement.classList.add("dz-sucess", "dz-completw");
    }
}
});

dropzone.on("success", function(file, response){
    document.querySelector(' [ name="imagen"]').value=response.imagen;
})

dropzone.on("removedfile",function(){
    document.querySelector(' [ name="imagen"]').value='/';
})