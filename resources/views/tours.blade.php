@extends('main')

@section('hero-content')
    <h1>{{$categoryName->category_name}}</h1>
    <style>
        .intro-wrap h1{
            text-align: center;
            position: absolute;
            top: -50%;
            transform: translate(50%, 50%);
            font-size: 100px;
        }
    </style>
@endsection

@section('center')

<style>
    .cont2 {
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        width: 100vw;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .places {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        gap: 100px;
    }

    .place-cont {
        height: 500px;
        width: 350px;
        background-color: rgb(26, 55, 77);
        color: white;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 25px;
        border-radius: 20px;
        overflow: hidden;
    }

    .place-cont p{
        padding-inline: 1rem;
    }

    p{
        text-align: center;
        margin: 0 8px 0 8px;
    }

    img {
        width: 100%;
        height: 65%;
        object-fit: cover;
        mask-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1));
        transition: 1s;
        border-radius: 20px;
    }

    img:hover{
        height: 100%;
        mask-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1), rgba(0, 0, 0, 1));
    }

    .bu {
        height: 40px;
        width: 70%;
        background-color: white;
        color: black;
        border-radius: 40px !important;
        border: none;
        transition: 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 1rem;
    }

    .bu:hover {
        background: rgb(26, 55, 77);
        letter-spacing: 5px;
        transform: scale(1.1);
        color: white;
        font-size: larger;
        border: 2px solid;
    }
</style>

    <div class="cont2">
        <div class="places">

            @foreach($items as $item)
                <div class="place-cont">
                    <img src='{{asset($item->img_path)}}'>    <!-- Enter picture of country here -->
                    <h1>{{$item->name}}</h1>  <!-- Enter name of country here -->
                    <p>{{$item->description}}</p> <!-- Enter description of country here -->
                    <a href="{{"about/" . $item->tour_id}}" class="bu">Learn more</a> <!-- Enter link of page here -->
                </div>
            
            @endforeach
            
        </div>
    </div>

@endsection