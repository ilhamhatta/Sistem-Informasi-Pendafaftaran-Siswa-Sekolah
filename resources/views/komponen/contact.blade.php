<!-- ======= Contact Section ======= -->
<section id="contact" class="contact pb-0 pt-2">
    <div class="container">

      <div class="section-title ">
        <span>Kontak</span>
        <h2>Kontak</h2> 
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Alamat</h3>
            <a href="https://goo.gl/maps/KJt52QfjZqtoUDym9" target="_blank" class="text-dark"><p>Kotabaru Seberida, Kec. Keritang, Kabupaten Indragiri Hilir, Riau 29273</p></a>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Jl. Masjid Raya, Kotabaru Seberida, Kec. Keritang, Kabupaten Indragiri Hilir, Riau 29273&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <div class="info-box mb-4">
            <form action="/store" method="post" style="background-color: white" class="ms-4 me-4">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button class="btn btn-danger mt-3 rounded-0" type="submit">Kirim</button></div>
            </form>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Contact Section -->