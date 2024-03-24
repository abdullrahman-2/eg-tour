@extends('main')
@section('active_nav')
        <li><a href="/">Home</a></li>
        <li class="active"><a href="/travels">travels</a></li>
        <li><a href="/contact">Contact Us</a></li>
@endsection
@section('hero-content')
<h1 class="mb-0">{{$items[0]->name}}</h1>
<p class="text-white">{{$items[0]->description}}</p>
@endsection
@section('center')

  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <img style="height: 700px; width: 550px; object-fit:cover;" src='{{asset($items[0]->primary_img)}}' alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          <!-- commented carousel till we decide to keep it or not with major vote -->
          <!-- <div class="owl-single dots-absolute owl-carousel">
            <img src="../../images/slider-2.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
            <img src="../../images/slider-3.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
            <img src="../../images/slider-4.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
            <img src="../../images/slider-5.jpg" alt="Free HTML Template by Untree.co" class="img-fluid rounded-20">
          </div> -->
        </div>
        <div class="col-lg-5 pl-lg-5 ml-auto my-auto">
          <h2 class="section-title mb-4">{{$items[0]->name}}</h2>
          <p>{{$items[0]->description}}</p>
          <ul class="list-unstyled two-col clearfix">
            <li><h5>Price: {{$items[0]->price}}$</h5></li>
            <li><h5>Duration: {{$items[0]->duration}} Hours</h5></li>
          </ul>
          <h5>Program:</h5>
          <p>{{$items[0]->program}}</p>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h2 class="section-title mb-3 text-center">Team</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">James Watson</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">Carl Anderson</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_4.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">Michelle Allison</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 rounded-20">
            <div class="px-3">
              <h3 class="mb-0">Drew Wood</h3>
              <p>Co-Founder &amp; CEO</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div> -->




  <div class="untree_co-section testimonial-section mt-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
          <h2 class="section-title text-center mb-5">Testimonials</h2>

          <div class="owl-single owl-carousel no-nav">
            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Adam Aderson</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Lukas Devlin</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

            <div class="testimonial mx-auto">
              <figure class="img-wrap">
                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
              </figure>
              <h3 class="name">Kayla Bryant</h3>
              <blockquote>
                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="py-5 cta-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
          <p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
          <p class="mb-0"><a href="/contact" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
        </div>
      </div>
    </div>
  </div>

  @endsection