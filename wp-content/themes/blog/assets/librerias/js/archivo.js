jQuery(document).ready(function ($) {
    
    function contruirCarrusel() {
        // Consulta que alimenta el carrusel con las entradas con imagens
        $.get("/blog/wp-json/wp/v2/posts?per_page=100&order=asc").done(function (carData) {
          $.each(carData, function (carKey, carValue) {
            var cuadros = '<div data-id="' + carValue.id + '" class="swiper-slide prueba d-flex justify-content-center align-items-center" style="background-image: url(' + carValue.better_featured_image['source_url'] + '); background-size: cover;"><p class="text-center texto px-1">' + carValue.title["rendered"] + '</p></div>';
            $("#mostrarcarrusel").append(cuadros);
          });
          var swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: false,
            spaceBetween: 30,
            clickable: true,
            slidesPerView: 3,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
    
            // Navigation arrows
           
    
    
        });
    
          
    
          $('.prueba').click(function () {
            
            
            $.get("/blog/wp-json/wp/v2/posts/" + $(this).data("id"), function (entData) {
                $("#showentrada").empty()
                var entradaHTML = '<img class=" col-md-4 col-12 borde1 offset-md-4" src="' + entData.       better_featured_image['source_url'] + '" alt="xs">' +
                  '<div class="resultado col-md-4 col-12 offset-md-4"><h3  class="text-center semana1 pt-1">' +
                  entData.title["rendered"] +
                  entData.content["rendered"] +
                  "</div>";
                // Vaciar y agregar el contenido al carrusel
                $("#showentrada").append(entradaHTML);
              });
          });
        });
      }
      // Llamar a la función para mostrar todas las entradas al cargar la página
      contruirCarrusel();
      $('#botonmodal').click(function(){
        $.get('/blog/probando.php').done(function (proData, status) {
            proData = $.parseJSON(proData);
            var sentimientos = '<p>'+proData[0].descripcion+'</p>';
            $('#modalprueba .modal-body').empty().append(sentimientos);
        });
        $('#modalprueba').modal('show')
      })
});