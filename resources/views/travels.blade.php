@extends("main")

@section('center')
<div class="travels-card">
    <div class="card text-bg-dark">
        <img src="images/img_1.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Inner travels</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small>Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card text-bg-dark">
        <img src="images/hero-slider-2.jpg" class="card-img" alt="...">
        <div class="card-img-overlay">
          <h5 class="card-title">Outer travels</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small>Last updated 3 mins ago</small></p>
        </div>
      </div>

        
</div>

<style>
    .travels-card{
        width: 50%;
        margin-left:50%; 
        transform: translateX(-50%);
        height: 10rem;
        display: flex;
        /* flex-direction: column; */
        gap: 10px;
        margin-bottom: 120rem
        
        

    }

    .travels-card img{
        height: 20rem;
    }
</style>




  </div>@endsection