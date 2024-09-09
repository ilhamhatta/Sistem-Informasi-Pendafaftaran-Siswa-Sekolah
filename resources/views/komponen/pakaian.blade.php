    <!-- ======= Portfolio Section ======= -->
    <section id="pakaian" class="portfolio">
        <div class="container">
  
          <div class="section-title pb-0 pt-0">
            <span>Pakaian</span>
            <h2>Pakaian</h2>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                @foreach ($categories as $category)
                <li data-filter=".filter-{{ $category->id }}">{{ $category->kategori_baju }}</li>
                @endforeach
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
            @foreach ($posts as $post)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $post->category->id }}">
              <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $post->nama_baju }}</h4>
                <p>{{ $post->category->kategori_baju }}</p>
                <a href="{{ asset('storage/' . $post->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $post->nama_baju }}"><i class="bi bi-eye-fill"></i></a>
                <a href="/detail-barang/{{ $post->slug }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
            @endforeach
  
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->