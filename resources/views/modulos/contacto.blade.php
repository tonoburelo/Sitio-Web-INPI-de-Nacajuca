@extends('layouts.base')

@section('title', 'Contactanos')

@section('content')

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
       
    <div class="container">
    
      <div class="section-title">
      <br>
        <h2>Contacto</h2>
        <p>Para mayor informacion que desee obtener acerca de la institucion, asi como para contactar con algun dependiente, puede hacerlo comunicandose de manera presencial o enviandonos un mensaje explicando lo que le gustaria saber</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Locación:</h4>
              <p>Centro, 86220 Nacajuca, Tabasco</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Correo electrónico:</h4>
              <p>jbermudez@inpi.gob.mx</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Teléfono:</h4>
              <p>01 (914) 104 03 26</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d242563.0596846358!2d-93.26283205055455!3d18.207726718894893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.2936644!2d-93.2281994!4m5!1s0x85ee7b4b77bd4777%3A0x15b1ac7830810429!2sinpi%20nacajuca%20correo!3m2!1d18.1804193!2d-93.0151156!5e0!3m2!1sen!2smx!4v1653239893656!5m2!1sen!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Tu nombre</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <label for="name">Tu correo electrónico</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <label for="name">Asunto</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group mt-3">
              <label for="name">Mensaje</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Cargando</div>
              <div class="error-message"></div>
              <div class="sent-message">Tu mensaje ha sido enviado. Gracias!</div>
            </div>
            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
          </form>
        </div>

      </div>
      <br>
    </div>
    
  </section>
  <!-- End Contact Section --> 

@endsection  