@extends('main')
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

<body>

    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Travel section</h1>
                        <p class="text-white" style="margin-top: 20px;">Where would you like to go? </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cont2">
        <div class="places">
            <div class="place-cont">
                <img src='images/hero-slider-1.jpg'>    <!-- Enter picture of country here -->
                <h1>Egypt</h1>  <!-- Enter name of country here -->
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora eligendi delectus</p> <!-- Enter description of country here -->
                <a href="" class="bu">Learn more</a> <!-- Enter link of page here -->
            </div>
            <div class="place-cont">
                <img src="">
                <h1></h1>
                <p></p>
                <a href="" class="bu">Learn more</a>
            </div>
            <div class="place-cont">
                <img src="">
                <h1></h1>
                <p></p>
                <a href="" class="bu">Learn more</a>
            </div>
            <div class="place-cont">
                <img src="">
                <h1></h1>
                <p></p>
                <a href="" class="bu">Learn more</a>
            </div>
            <div class="place-cont">
                <img src="">
                <h1></h1>
                <p></p>
                <a href="" class="bu">Learn more</a>
            </div>
            <div class="place-cont">
                <img src="">
                <h1></h1>
                <p></p>
                <a href="" class="bu">Learn more</a>
            </div>
        </div>
    </div>


</body>