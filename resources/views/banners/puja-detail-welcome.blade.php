<div class="banner ">
    <div class="container row">
        <div class="banner-content col-sm-8">
            <h1>Hundreds of Amazing Destinations</h1>
            <p>We offer a variety of destinations to travel to, ranging from exotic to some extreme ones...
                <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, maiores!
            </p>
            <p>
                Call On: +977986541236
            </p>
            <a href="#" class="btn btn-outline-light">Book Now</a>
            <a href="#" class="btn btn-outline-light">Make A Call</a>
        </div>
        <div class="col-sm-4">
            <img class="img-fluid puja-img" src="{{ asset('web/images/gods/ganesh.png') }}" alt="">
        </div>
    </div>
</div>
<style>
    .banner {
        position: relative;
        background-image:
            linear-gradient(rgba(255, 110, 1, 0.8), rgba(243, 156, 18, 0.8)),
            url({{ asset('web/images/bg/e1386ef8-db01-43aa-a7c9-b84819d815cd.jpg') }});
        background-size: cover;

        background-position: center;
        height: 90vh;

    }

    .puja-img {
        position: absolute;
        right: 3rem;
        width: 400px;
        bottom: 0;
    }

    .banner-content {
        position: absolute;
        top: 50%;
        left: 6%;
        transform: translateY(-50%);
        width: 60%;
    }

    .banner-content h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .banner-content p {
        font-size: 1.25rem;
        margin-bottom: 30px;
    }

    .banner-content .btn {
        font-size: 1rem;
        padding: 10px 20px;
    }
</style>
