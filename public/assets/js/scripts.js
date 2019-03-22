$(document).ready(function(){
  //Hace submit del formulario de contacto
  $('#enviar-form-contacto').click(function(e){
    e.preventDefault();
    $('#submit-form-contacto').click();
  });

  //Eventos navCol
  $('#navcol-toggle-submenu').on('mouseover',function(e){
    e.preventDefault();
    $(this).css('cursor','pointer');
  });

  //Scrolling al clicar en un elemento de navbar
    $('.nav-herramientas').click(function() {
      $('html, body').animate({
        scrollTop: $('#equipo').offset().top
      }, 500, function(){
        window.scrollTo(0, 1100);
      });
    });

    $('.nav-quienes-somos').click(function() {
      $('html, body').animate({
        scrollTop: $('#testimonials').offset().top
      }, 500);
    });

    $('.nav-contacto').click(function() {
      $('html, body').animate({
        scrollTop: $('#contacto').offset().top
      }, 500);
    });

    $('#services').click(function() {
      $('html, body').animate({
        scrollTop: $('#equipo').offset().top
      }, 500, function(){
        window.scrollTo(0, 1100);
      });
    });

    //Mostrar y ocultar formulario de cambiar contraseña
    $('#change-password-button').on('click', function(){
      $('#change-password-element').fadeToggle();
      $(this).hide();
    });

    //Scripts para formularios de edición
      //Editar Perfil
      $('#editarPerfil').on('click', function() {

        $('#profile-name').removeAttr('disabled');
        $('#apellido').removeAttr('disabled');
        $('#profile-email').removeAttr('disabled');
        $('#descripcion').removeAttr('disabled');
        /*$('#avatar').removeAttr('disabled');
        $('.upload-btn').removeAttr('disabled');*/

        $('#editarPerfil').fadeToggle(function(){
          $('#guardarPerfil').fadeToggle();
        });
      });

    //Editar coche
    $('#edit-car').on('click', function() {

      $('#car-code').removeAttr('disabled');
      $('#car-description').removeAttr('disabled');

      $('#edit-car').fadeToggle(function(){
        $('#save-car').fadeToggle();
      });
    });

    //Ajax para los datos de los sensores del coche
    $.ajax({
      url: 'api@lastdata',
      success: function(respuesta) {
      console.log(respuesta);
      //setInterval(respuesta,1000);
      },
      error: function() {
        console.log("No se ha podido obtener la información");
      }
    });
    //Otra posibilidad
    /*var uri = 'api/products';
    $(document).ready(function () {
      // Send an AJAX request
      $.getJSON(uri)
      .done(function (data) {
      // On success, 'data' contains a list of products.
        $.each(data, function (key, item) {
          // Add a list item for the product.
          $('<li>', { text: formatItem(item) }).appendTo($('#products'));
        });
      });
    });
    function formatItem(item) {
    return item.Name + ': $' + item.Price;
    }*/

    //Una posibilidad mal
    /*function getDatosSensores(){
      $.ajax({
            type: "GET",
            url: "/api/ApiLastDataController/show",
            data: dataString,
            success: function() {
                $('#counter').text(sum);
            }
        });
      $.get("/api/ApiLastDataController/show", function(data){
        var datos="";
        dump(data);
        /*if(data.length==0){
          datos+='<input type="text" value="No hay valor" disabled></div>';
        }else{
          for(var i = 0; i < data.length; i++){
            datos+='<input type="text" value="'+data[i].valor'" disabled></div>';
          }
        }
        setInterval(getDatosSensores,1000);
      })
    }*/
});
