  (function() {
      'use strict';
      window.addEventListener('load', function() {
          // Seleccionar el formulario para validar
          var forms = document.getElementsByClassName('needs-validation');
          // Validar cada campo y prevenir que se envie
          var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                      event.prevenDefault();
                      event.stopPropagation();

                  } else {
                      var nombre = document.getElementById('nombre').value,
                          email = document.getElementById('email').value,
                          mensaje = document.getElementById('mensaje').value;
                      console.log(nombre);
                      console.log(email);
                      console.log(mensaje);

                      var xhr = new XMLHttpRequest();

                      xhr.open('POST', 'http://localhost:8888/PapeleriaL&C/inc/enviar.php', );


                      xhr.upload() = function() {};


                      xhr.send();


                  }
                  form.classList.add('was-validated');
              }, false);
          });
      }, false);
  })();