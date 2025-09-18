
    <style>
        /* Contact Section Styles */
        .contact-section {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .contact-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .contact-header h2 {
            font-size: 2.5rem;
            font-weight: 300;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .contact-header p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .contact-form {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.1);
            border: 1px solid rgba(37, 99, 235, 0.1);
            margin: 0 auto 60px;
            max-width: 800px;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .form-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
        }
        
        .form-icon i {
            color: white;
            font-size: 30px;
        }
        
        .form-header h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .form-header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .contact-form label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        
        .input-group {
            position: relative;
            margin-bottom: 25px;
        }
        
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #2563eb;
            z-index: 10;
            width: 20px;
            text-align: center;
        }
        
        .message-icon {
            top: 20px;
            transform: none;
        }
        
        .contact-form .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 15px 15px 15px 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .contact-form .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15);
            background: white;
        }
        
        .contact-form textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .contact-form .form-control::placeholder {
            color: #999;
            font-style: italic;
        }
        
        /* Contact Info Cards */
        .contact-info-cards {
            margin-top: 60px;
        }
        
        .contact-card {
            background: white;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            text-align: center;
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(37, 99, 235, 0.1);
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            border-color: #2563eb;
        }
        
        .contact-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }
        
        .contact-card-icon i {
            color: white;
            font-size: 24px;
        }
        
        .contact-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }
        
        .contact-card p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 5px;
        }
        
        .contact-card a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .contact-card a:hover {
            color: #1d4ed8;
        }
        
        .btn-send {
            background: #2563eb;
            color: white;
            border: none;
            padding: 14px 40px;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .btn-send:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(37, 99, 235, 0.3);
        }
        
        .contact-info {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: 100%;
        }
        
        .contact-info h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .contact-info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: #2563eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .contact-icon i {
            color: white;
            font-size: 20px;
        }
        
        .contact-text h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        
        .contact-text p {
            color: #666;
            margin: 0;
            line-height: 1.6;
        }
        
        .contact-text a {
            color: #2563eb;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .contact-text a:hover {
            color: #1d4ed8;
        }
        
        /* Footer Styles */
        .site-footer {
            background: #1a1a1a;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-widget h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: white;
            margin-bottom: 25px;
            border-bottom: 2px solid #2563eb;
            padding-bottom: 10px;
            display: inline-block;
        }
        
        .footer-widget h4 {
            font-size: 1.1rem;
            font-weight: 500;
            color: white;
            margin-bottom: 15px;
        }
        
        .footer-widget p {
            line-height: 1.8;
            color: #ccc;
            margin-bottom: 15px;
        }
        
        /* Footer Brand Section */
        .footer-brand h3 {
            font-size: 2rem;
            color: #2563eb;
            margin-bottom: 15px;
        }
        
        .footer-description {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .footer-social-section {
            margin-top: 20px;
        }
        
        .footer-social-section p {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        
        /* Office Information */
        .footer-office {
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 1px solid #333;
        }
        
        .footer-office:last-of-type {
            border-bottom: none;
        }
        
        .office-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .office-header i {
            color: #2563eb;
            margin-right: 10px;
            width: 20px;
        }
        
        .office-header h4 {
            margin: 0;
            font-size: 1.1rem;
            color: #2563eb;
        }
        
        .footer-contact-info {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #333;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .contact-item i {
            color: #2563eb;
            margin-right: 15px;
            width: 20px;
        }
        
        .contact-item a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .contact-item a:hover {
            color: #2563eb;
        }
        
        /* Schedule Section */
        .footer-schedule {
            margin-bottom: 30px;
        }
        
        .schedule-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .schedule-header i {
            color: #2563eb;
            margin-right: 10px;
            width: 20px;
        }
        
        .schedule-content {
            background: #2a2a2a;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #2563eb;
        }
        
        .schedule-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #333;
        }
        
        .schedule-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .schedule-item strong {
            color: #2563eb;
        }
        
        .schedule-item span {
            color: #ccc;
        }
        
        /* Certificates Section */
        .footer-certificates {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #333;
        }
        
        .certificate-links {
          color: blue;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .certificate-link {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            background: #2a2a2a;
            border-radius: 8px;
            color: #2563eb;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 4px solid #2563eb;
        }
        
        .certificate-link:hover {
            background: #333;
            color: #1d4ed8;
            transform: translateX(5px);
        }
        
        .certificate-link i {
            color: #2563eb;
            margin-right: 10px;
        }
        
        .footer-social {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .footer-social a {
            width: 40px;
            height: 40px;
            background: #2563eb;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
        }
        
        .footer-social a:hover {
            background: #1d4ed8;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.5);
        }
        
        .footer-social a:focus {
            outline: 2px solid #1d4ed8;
            outline-offset: 3px;
        }
        
        .footer-link {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .footer-link li {
            margin-bottom: 15px;
            color: white;
            line-height: 1.8;
        }
        
        .footer-link a {
            color: #2563eb;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .footer-link a:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }
        
        .footer-link a:focus {
            outline: 2px solid #1d4ed8;
            outline-offset: 2px;
            border-radius: 2px;
        }
        
        .footer-bottom {
            border-top: 1px solid #333;
            margin-top: 40px;
            padding-top: 30px;
            text-align: center;
            color: white;
        }
        
        .loader-icon {
            stroke: #2563eb !important;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .contact-section {
                padding: 60px 0;
            }
            
            .contact-header h2 {
                font-size: 2rem;
            }
            
            .contact-form, .contact-info {
                padding: 30px 20px;
            }
            
            .contact-info h3 {
                font-size: 1.3rem;
            }
            
            .site-footer {
                padding: 40px 0 20px;
            }
            
            .footer-brand h3 {
                font-size: 1.5rem;
            }
            
            .footer-widget h3 {
                font-size: 1.2rem;
            }
            
            .schedule-content {
                padding: 15px;
            }
            
            .schedule-item {
                flex-direction: column;
                gap: 5px;
            }
            
            .certificate-links {
                gap: 8px;
            }
            
            .certificate-link {
                padding: 10px 12px;
                font-size: 0.9rem;
            }
            
            .footer-bottom .row {
                text-align: center;
            }
            
            .footer-bottom .col-md-6 {
                margin-bottom: 10px;
            }
            
            .footer-bottom .text-md-end {
                text-align: center !important;
            }
        }
    </style>
    
    <section id="contact" class="contact-section">
      <div class="container">
        <div class="contact-header">
            <h2>Contáctanos</h2>
            <p>Estamos aquí para ayudarte con tus necesidades industriales</p>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10 col-xl-8">
            <form action="#" method="post" class="contact-form">
              <div class="form-header">
                <div class="form-icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <h3>Envíanos un mensaje</h3>
                <p>Completa el formulario y nos pondremos en contacto contigo</p>
              </div>
              
              <div class="row justify-content-center">
                <div class="col-md-6 form-group">
                  <label for="name">Nombre *</label>
                  <div class="input-group">
                    <div class="input-icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input type="text" id="name" class="form-control" required placeholder="Tu nombre completo">
                  </div>
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Teléfono</label>
                  <div class="input-group">
                    <div class="input-icon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="tel" id="phone" class="form-control" pattern="[0-9\-\+\s\(\)]+" placeholder="Tu número de teléfono">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-12 form-group">
                  <label for="email">Email *</label>
                  <div class="input-group">
                    <div class="input-icon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <input type="email" id="email" class="form-control" required placeholder="tu@email.com">
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-12 form-group">
                  <label for="message">Mensaje *</label>
                  <div class="input-group">
                    <div class="input-icon message-icon">
                      <i class="fa fa-comment"></i>
                    </div>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="5" required minlength="10" placeholder="Describe tu consulta o proyecto..."></textarea>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-12 form-group text-center">
                  <button type="submit" class="btn-send">
                    <i class="fa fa-paper-plane"></i>
                    Enviar mensaje
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        
      </div>
    </section>


    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="footer-widget">
              <h3>INGFRAMEX</h3>
              <p>Líderes en soluciones industriales para medición y control.</p>
              <div class="footer-social">
                <a href="https://www.facebook.com/ingframex/" target="_blank" title="Facebook">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="https://mx.linkedin.com/company/mxingframex" target="_blank" title="LinkedIn">
                  <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/ingframex/" target="_blank" title="Instagram">
                  <i class="fa fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="footer-widget">
              <h3>Oficinas</h3>
              <p><strong>Monterrey:</strong><br>Ave Bernardo Reyes 1805 Nte</p>
              <p><strong>Querétaro:</strong><br>Armando Birlain Schaffler 2001</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="footer-widget">
              <h3>Contacto</h3>
              <p><i class="fa fa-phone"></i> <a href="tel:+524421243334" style="color: #2563eb;">+52 442 124 3334</a></p>
              <p><i class="fa fa-envelope"></i> <a href="mailto:contacto@ingframex.com" style="color: #2563eb;">contacto@ingframex.com</a></p>
              <p><i class="fa fa-clock-o"></i> Lun-Vie: 8AM-4PM | Sáb: 8AM-3PM</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="footer-widget">
              <h3>Certificaciones</h3>
              <div class="certificate-links">
                <a href="/Certificate_Ingframexp_Mexico_2019_11.pdf" target="_blank">
                  <i class="fa fa-certificate"></i> Certificado Optris
                </a>
                <a href="/CERTIFICATE DISTRIBUTOR_Ingfrarex.pdf" target="_blank">
                  <i class="fa fa-certificate"></i> Certificado Telea
                </a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="footer-bottom">
          <div class="row align-items-center">
            <div class="col-md-6">
              <p>&copy; <script>document.write(new Date().getFullYear());</script> INGFRAMEX Querétaro. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-md-end">
              <p>Tecnología, ingeniería y soluciones</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      $('#contact-button').on('click', function(){
        $("html, body").animate({ scrollTop: $('#contact').offset().top }, 1000);
      })
      $('input[type="submit"]').on('click', function(e){
        e.preventDefault()
        let data = {}

        data.name = $('#name').val()
        data.phone = $('#phone').val()
        data.email = $('#email').val()
        data.message = $('#message').val()

        $.ajax({
          url:  "https://linupsales.com/api/websites",
          method: "POST",
          dataType: "json",
          crossDomain: true,
          contentType: "application/json; charset=utf-8",
          data: JSON.stringify(data),
          cache: false,
          beforeSend: function (xhr) {
              /* Authorization header */
              xhr.setRequestHeader("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6Ijc5MTIyYzEwYmNjZWIwNzU5ZDlhODZhOTA4ZTk1YThmNjQ5NDM4ZWM4MWNlYmY1MWJkMWQ3ZTJmNWRiMmQ5NzAxZmZlNmRhODAzYmEwYWZlIn0.eyJhdWQiOiIxIiwianRpIjoiNzkxMjJjMTBiY2NlYjA3NTlkOWE4NmE5MDhlOTVhOGY2NDk0MzhlYzgxY2ViZjUxYmQxZDdlMmY1ZGIyZDk3MDFmZmU2ZGE4MDNiYTBhZmUiLCJpYXQiOjE1NzI5MDIyNDAsIm5iZiI6MTU3MjkwMjI0MCwiZXhwIjoxNjA0NTI0NjQwLCJzdWIiOiI5Iiwic2NvcGVzIjpbXX0.TS11FgtT44Rz8djXdj4xl9n_mdtMCHf-AkbBKGQS82Q-ACyMAwuhxRF6hX4oS2Ysvx3Im2bTa3H3L0-_IZnA-Uf37fPS12QbYDfJTMW9GlUdc8C9VLbr6LXGstUm4T1QlO3GzpPdnhqT3JSNT3pmupIWFMlXNFqiq7Pi1WA-j73-xxAzumOFy_fWh8MeEgUOINUZP0KKzcieuUpAZEdHryeXx0gI9oyOtv2Iv90zFGJVsr5KG6ftaQBGJsfBre_Q6HDq0vArF3id0loJLCelAN_uwViojz_yOijeDh3PSy5G7U8mlyJKXGSeqZxE8nBd6wCoXTV2c-ifqGLmodCycUb07suOLqwn66DwqEBJJj4N94W41cZEfx9YfgWYA93UKog8KsVgcl6gh7ZrtowW3YrZZNuZHQi4MME5v1uh-lDWasAJ6u4t7zTKY9c6tscxgyKBoHGTsNOoNcTXZjzZPIOBxjraVIGcHKbVKzAyR3D1E4OkhrDVLx8okfZF2r1RND6eHJT7y4aAGYuTgii3oerAPkVeDhd2ZYwCUmpV6cMI7HB17qCpdbWYvUP0sMvXutpVPeLC41iqato6EmnhJLl6nDyA7mtnjcgE3oykNXkkGgoimA1CV9ooXVnTANbOyMlKQVmXnO5LOaNUrOSyW_e0lhjKk3VhlqRwpXaiPoM");
              xhr.setRequestHeader("X-Mobile", "false");
          },
          success: function (data) {
            $('#name').val('')
            $('#phone').val('')
            $('#email').val('')
            $('#message').val('')
            alert('Gracias por tu mensaje');
          },
          error: function (jqXHR, textStatus, errorThrown) {
            alert('Ocurrió un error! Por favor contáctanos via telefónica');
          }
        });
      })
    </script>
    
  </body>
</html>
