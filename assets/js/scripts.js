jQuery("#openNav").click(function(){
      document.getElementById("mySidenav").style.width = "250px";
      document.getElementById("masthead").style.marginLeft = "250px";
});

jQuery("#closeNav").click(function(){
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("masthead").style.marginLeft= "0";
});

$(document).ready(function(){
  $('.slides').slick({
   	autoplay: true,
  });
});

$(document).ready(function(){
  $('.equipe').slick({
   	autoplay: true,
    infinite: true,
    speed: 300,
  	slidesToShow: 1,
  	adaptiveHeight: true,
  });
});

jQuery(window).scroll(function() {    
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 1) {
    jQuery(".idHeader").addClass("white-header");
    jQuery(".logo-top").addClass("logo-top-v");
  } else {
    jQuery(".idHeader").removeClass("white-header");
    jQuery(".logo-top").removeClass("logo-top-v");
  }
});

function scrollToElement(selector, offset){
  jQuery("html, body").animate({
    scrollTop: jQuery(selector).offset().top + offset + 'px'
  }, 'slow');
}

jQuery.ajax({
  url: 'https://apiv2.vgresiduos.com.br/api/RequestResource/GetPayingSuppliersList',
  type: 'POST',
  headers: {'X-Requested-With': 'XMLHttpRequest',
  'token': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpZCI6MzA2NjIsInVzZXJJZCI6MzA2NjIsImVtYWlsIjoiYm1vcmVpcmFAdmVyZGVnaGFpYS5jb20uYnIiLCJjbGllbnRJZCI6MSwiY2xpZW50R3JvdXBJZCI6MSwibmFtZSI6IkJJQU5DQSBSVUJJQSBCUkFaIiwidXNlcm5hbWUiOiJibW9yZWlyYUB2ZXJkZWdoYWlhLmNvbS5iciJ9.r9pxbPBCOhgDCSGE-OJdaiva0LzNRH36ZHZksPrqIgswLmI7kiWhRfkLanjXLEUHAUt3W1FtvXAORtFKwXvyQQ'},
  contentType: 'application/json; charset=utf-8',

  success: function (response) {
    
      var list = response.content.list;
      var i = 0;
      $(".supplier").each(function(index, element) {
         var supplier = list[i];
         $(element).find(".name").html(supplier.Name);
         $(element).find(".city").html(supplier.City.Description);
         $(element).find(".estate").html(supplier.State.Abbreviation);
         i++;
      });
    
  },
  error: function(error){
    console.log(error)
  }
});

jQuery( function() {
  var suggestions = [];
  jQuery.ajax({
    url: 'https://apiv2.vgresiduos.com.br/api/RequestResource/GetResidueGroupList',
    type: 'POST',
    headers: {'X-Requested-With': 'XMLHttpRequest',
    'token': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpZCI6MzA2NjIsInVzZXJJZCI6MzA2NjIsImVtYWlsIjoiYm1vcmVpcmFAdmVyZGVnaGFpYS5jb20uYnIiLCJjbGllbnRJZCI6MSwiY2xpZW50R3JvdXBJZCI6MSwibmFtZSI6IkJJQU5DQSBSVUJJQSBCUkFaIiwidXNlcm5hbWUiOiJibW9yZWlyYUB2ZXJkZWdoYWlhLmNvbS5iciJ9.r9pxbPBCOhgDCSGE-OJdaiva0LzNRH36ZHZksPrqIgswLmI7kiWhRfkLanjXLEUHAUt3W1FtvXAORtFKwXvyQQ'},
    contentType: 'application/json; charset=utf-8',

    success: function (result) {
    jQuery.each(result.content.list, function(i, item){   
      suggestions.push({
        label: item.Name,
        id: item.ID
      });               
    });
    }
  });

    jQuery( "#residuo" ).autocomplete({
    minLength: 3,
    //source
    source: suggestions,
    //select
    select: function(e, ui) {
      jQuery("#idresiduo").val(ui.item.id);     
    }
    });
} );

jQuery( function() {
  var suggestions = [];
  jQuery.ajax({
    url: 'https://apiv2.vgresiduos.com.br/api/LocationResource/GetAllCities',
    type: 'POST',
    headers: {'X-Requested-With': 'XMLHttpRequest',
    'token': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpZCI6MzEwNzEsInVzZXJJZCI6MzEwNzEsImVtYWlsIjoiZ3VpbGhlcm1lLmd1c21hbkBsZzcuY29tLmJyIiwiY2xpZW50SWQiOjYxOTksImNsaWVudEdyb3VwSWQiOjM0MDQsIm5hbWUiOiJHdWlsaGVybWUgR3VzbWFuIiwidXNlcm5hbWUiOiJndWlsaGVybWUuZ3VzbWFuQGxnNy5jb20uYnIifQ.BzuzAiXNOe1nt-_3zuCGK0xamSyryvlNW_SSzdwAuy1yNVP6twoFZBEr6SqSIwiObNjQVMsgIr4IgGvWCh2YQw'},
    contentType: 'application/json; charset=utf-8',
    
      dataType: 'json',
      data:JSON.stringify({pageSize: 10, pageNumber: 1, query: "", id: 0}),
    
   success: function (local) {
    jQuery.each(local.content.list, function(i, item){   
      suggestions.push({
        label: item.Description,
        id: item.ID
      });               
    });
    },
    error: function(error){
      console.log(error)
    }
  });

    jQuery( "#local" ).autocomplete({
    minLength: 3,
    //source
    source: suggestions,
    //select
    select: function(e, ui) {
      jQuery("#idlocal").val(ui.item.id);     
    }
    });    
});

function redirect() {

  var residuo = jQuery("#idresiduo").val();
  var local = jQuery("#idlocal").val(); 

  window.location = 'http://localhost/sites/vg-residuos/resultados-busca?idresiduo='+residuo+'&idlocal='+local;

};