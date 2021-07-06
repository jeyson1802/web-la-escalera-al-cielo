
$(document).ready(function(){
    inicializarVariables();
    inicializarComponentes();
    activarEstiloOpcionSeleccionado();
});

function inicializarVariables() {
}

function inicializarComponentes() {
  
}
function activarEstiloOpcionSeleccionado() {

    debugger;

    var pathName = $(location).attr('pathname');
  
    if(pathName == '/') {
      $(".header__list.activo").removeClass("activo");
      $("#url-inicio").addClass("activo");
      return;
    }
  
    var arrayPathName = pathName.split('/');
    var opcion = arrayPathName[1];
    $(".header__list.activo").removeClass("activo");
    if(opcion === 'quienessomos' || opcion === 'misionvision' || opcion === 'organigrama') {
      $("#url-organizacion").addClass("activo");
    } else {
      $("#url-" + opcion).addClass("activo");
    }
    
    
}