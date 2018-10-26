function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

getUrlParameter('idresiduo');
getUrlParameter('idlocal');

function GetSuppliersByResidueGroupAndLocation(residueGroupId, cityId){

  jQuery.ajax({
    url: 'http://apiv2.vgresiduos.com.br/api/RequestResource/GetSuppliersByResidueGroupAndLocation',
    type: 'POST',
    headers: {'X-Requested-With': 'XMLHttpRequest',
    'token': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJpZCI6MzA2NjIsInVzZXJJZCI6MzA2NjIsImVtYWlsIjoiYm1vcmVpcmFAdmVyZGVnaGFpYS5jb20uYnIiLCJjbGllbnRJZCI6MSwiY2xpZW50R3JvdXBJZCI6MSwibmFtZSI6IkJJQU5DQSBSVUJJQSBCUkFaIiwidXNlcm5hbWUiOiJibW9yZWlyYUB2ZXJkZWdoYWlhLmNvbS5iciJ9.r9pxbPBCOhgDCSGE-OJdaiva0LzNRH36ZHZksPrqIgswLmI7kiWhRfkLanjXLEUHAUt3W1FtvXAORtFKwXvyQQ'},
    contentType: 'application/json; charset=utf-8',
    
    dataType: 'json',
    data:JSON.stringify({"residueGroupId":residueGroupId,"cityId":cityId,"quantityPaying":2,"quantityNotPaying":6}),
    
    success: function (results) {
      var list = results.content.list;
      var i = 0;
      $(".paying").each(function(index, element) {
         var supplier = list[i];
         $(element).find(".nameTratador").html(supplier.Name);
         $(element).find(".cityTratador").html(supplier.City.Description);
         $(element).find(".estateTratador").html(supplier.State.Abbreviation);
         i++;
      });
    },
    error: function(error){
      console.log(error)
    }
  });  
};