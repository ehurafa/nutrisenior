$(document).ready(function(){
    
});


$(window).load(function(){
  loading();  
});

$(window).scroll(function(){      

});

function loading(){ 
    
    $('.preloader').fadeOut(300);
    $('.general, .rodape').fadeIn(400);
    acoes();
    slider();
    banners() ;
    homeSobre();
    diferenciaisCompleto();
     responsivo();

}


$(window).resize(function(){     
  banners();
  homeSobre();
  
});





function acoes(){  
 

  // menu mobile
  // select 
  // Create the dropdown base

  
  $("<select />").appendTo("header nav");
  $('header select').wrap('<div class="select" />');

  // Create default option "Go to..."
  $("<option />", {
    "selected": "selected",
    "value"   : "",
    "text"    : "MENU"
  }).appendTo("header nav select");

  // Populate dropdown with menu items
  $("header nav a").each(function() {
    var el = $(this);
  $("<option />", {
    "value"   : el.attr("href"),
    "text"    : el.text()
    }).appendTo("header nav select");
  });

  // To make dropdown actually work
  // To make more unobtrusive: http://css-tricks.com/4064-unobtrusive-page-changer/
  $("header nav select").change(function() {
   window.location = $(this).find("option:selected").val();
  });


  // addClass
  $('.page-template-pagina-home').addClass('page-home');
  $('.page-template-pagina-conhecimento-de-mercado').addClass('page-conhecimento-de-mercado');
  $('.page-template-pagina-historia').addClass('page-historia');
  $('.page-template-pagina-missao-visao-e-valores').addClass('page-missao-visao-e-valores');
  $('.page-template-pagina-profissionais-especializados').addClass('page-profissionais-especializados');
  $('.page-template-pagina-selo-de-qualidade').addClass('page-selo-de-qualidade');
  $('.page-template-pagina-empresa-completa').addClass('page-empresa-completa');
  $('.page-template-pagina-marcas').addClass('page-marcas');
  $('.page-id-20').addClass('biosen');
  $('.page-id-32').addClass('nutraline');
  $('.page-template-pagina-diferenciais-completo').addClass('page-diferenciais-completo');
  $('.page-template-pagina-noticias').addClass('page-noticias');
  $('.page-template-pagina-partner-solution').addClass('page-partner-solution');
  $('.page-template-pagina-localizacao').addClass('page-localizacao');
  $('.page-template-pagina-fale-conosco').addClass('page-fale-conosco');
  


}

function slider(){

  $('.page-home').each(function(){
/*
    $('#banner-home .slider').cycle({ 
    fx:     'fade', 
    speed: 600,
    timeout:3000, 
    before:  onBefore, 
    after:   onAfter,
    prev:   '#prev', 
    next:   '#next' 
 });*/
/*
  function onBefore() { 
    $('#banner-home .texto .title').animate({  marginRight : "-100%" },200);
    $('#banner-home .texto article').animate({  marginLeft : "-100%" },200);
    $('#banner-home .texto .mais').animate({  marginRight : "-100%" },200);
  } 

  function onAfter() { 
     // $('.full-banner-texto .texto .inner').animate({  marginRight : "0" },1000);

    $('#banner-home .texto .title').delay(100).animate({  marginRight : "0" },400);
    $('#banner-home .texto article').delay(300).animate({  marginLeft : "0" },400);
    $('#banner-home .texto .mais').delay(600).animate({  marginRight : "0" },400);
  }
*/
   $('#banner-home .texto .title').delay(400).animate({  marginRight : "0" },700);
    $('#banner-home .texto article').delay(1000).animate({  marginLeft : "0" },700);
    $('#banner-home .texto .mais').delay(1500).animate({  marginRight : "0" },700);

  });  



}


function banners(){
  $('#banner-home ').each(function(){

    //var altura = $(this).height();
    var alturaTexto = $(this).find('.texto').height();
    var MetadeAlturaTexto = alturaTexto / 2 + 22;   

    $(this).height(alturaTexto);
    $(this).find('.mask').height(alturaTexto);
    
    $('#banner-home .controls .seta').css('top', - alturaTexto );
    $('#banner-home .controls .seta').css('height', alturaTexto );
   
  });

  $('.full-banner-texto ').each(function(){

    //var altura = $(this).height();
    var alturaTexto = $(this).find('.texto').height();

    $(this).height(alturaTexto);
    $(this).find('.mask, .texto, .imagem').height(alturaTexto);    

    //marcas
    //$('.page-marcas.interna #banner .imagem .inner').height(alturaTexto);    
   
   
  });
}

function homeSobre(){
  $('#sobre').each(function(){

    var altura = $(this).height();
    var alturaTexto = $(this).find('.texto').height();

    $(this).height(altura);
    $(this).find('.bg').height(altura);
    
   
  });
}


function diferenciaisCompleto(){

  //selo de qualidade
  function selodeQualidade(){
    $('.page-diferenciais-completo #selo-de-qualidade').each(function(){

     var altura = $(this).height();
     var alturaTexto = $(this).find('.texto').height();

     $(this).height(altura);
     $(this).find('.bg').height(altura);

    });
  }selodeQualidade();

  // profissionais especializados
  function profissionaisEspecializados(){
    $('.page-diferenciais-completo #profissionais-epecializados').each(function(){

     var altura2 = $(this).height();
     var alturaTexto2 = $(this).find('.texto').height();

     $(this).height(altura2);
     $(this).find('.bg').height(altura2);

    });
  }profissionaisEspecializados();

  $(window).resize(function(){
    selodeQualidade();
    profissionaisEspecializados();
  });
  
}

function responsivo(){
  //361x480
  if( $(window).width() > 360 && $(window).width() < 481){
    $('.bloco-noticias .noticias').each(function(){
      $(this).find('.col:even').addClass('border-none');
    });
  }
}