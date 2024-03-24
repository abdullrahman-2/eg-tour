@extends("main")

@section('hero-content')
<h1>Travel with us!</h1>
@endsection

<style>
  .travels-card {
    width: 100%;
    margin-left: 50%;
    transform: translateX(-50%);
    height: 45rem;
    display: flex;
    justify-content: space-around;
    margin-bottom: 100px;
  }

  .carousel {
    width: 30%;
    border-radius: 20px;
  }

  .carousel .title {
    text-align: center;
    border-radius: 0 0 0 5px;
    /* background: linear-gradient(to top, rgb(36, 39, 40), rgb(23, 101, 150)); */
    color: white;
  }

  .carousel .title a {
    width: 80%;
    font-size: 24px;
    border-radius: 40px;
    background-color: transparent;
    border: 2px solid white;
    color: white;
    transition: 0.2s;
  }

  .carousel .title a:hover {
    background-color: white;
    color: black;
    border: 2px solid black;
    transform: scale(1.1);
  }

  .title {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    height: 200px;
  }

  img {
    mask-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1));
  }

  .travels-card img {
    height: 30rem;
    border-radius: 20px 20px 0 0;
  }

  #carouselExampleSlidesOnly {
    background: linear-gradient(to top, rgb(36, 39, 40), rgb(23, 101, 150));
  }
</style>

@section('center')

<div class="travels-card">

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/wallpaperflare.com_wallpaper (5).jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/wallpaperflare.com_wallpaper.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/egy.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <div class="title">

      <h1>Inner Travels</h1>
      <a class="btn btn-secondary" href="innertravels">Discover</a>

    </div>

  </div>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/hero-slider-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/hero-slider-2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/hero-slider-3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>

    <div class="title">

      <h1>Outer Travels</h1>
      <a class="btn btn-secondary" href="outertravels">Discover</a>

    </div>

  </div>


</div>

@endsection