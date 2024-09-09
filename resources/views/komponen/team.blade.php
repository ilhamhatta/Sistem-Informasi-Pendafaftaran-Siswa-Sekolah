    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">
  
          <div class="section-title">
            <span>Team</span>
            <h2>Team</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>
  
          <div class="row">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
              <div class="member">
                <img src="assets/img/team/team-1.jpg" alt="">
                <h4>{{ $post->nama_baju }}</h4>
                <span>Chief Executive Officer</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Team Section -->