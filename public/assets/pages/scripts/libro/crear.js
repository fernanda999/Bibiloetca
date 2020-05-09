$(document).ready(function() {
    Biblioteca.validacionGeneral('form-genenal');
    $('#foto').fileinput({// la funcion
        language: 'es',
        allowedFileExtensions:['jpg','jpeg','png'], //estensiones permitidas
        maxFileSize: 1000,//megas ybtamno
        showUpload: false,//mostrame una imagen
        showClose:  false,
        initialPreviewAsData: true,//mostra una imgaen
        dropZoneEnabled: false,
        theme: "fas",
    });
});
