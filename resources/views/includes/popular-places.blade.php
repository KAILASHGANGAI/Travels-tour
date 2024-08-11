<div class="container">
    <h2 class="text-center my-5 section-title">Popular Places Of Nepal</h2>

    <div class="row">
        <div class="col-sm-3">
            <div class="second hero">
                <img class="hero-profile-img" src="{{ asset('web/images/pasupati.jpg') }}"
                    alt="">
                <div class="hero-description-bk"></div>
                <div class="hero-logo">
                    <img src="{{ asset('web/images/pasupati.jpg') }}"
                        alt="">
                </div>
                <div class="hero-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="hero-date">
                    <p>20.02.2019</p>
                </div>
                <div class="hero-btn">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="second hero">
                <img class="hero-profile-img" src="{{ asset('web/images/pasupati.jpg') }}"
                    alt="">
                <div class="hero-description-bk"></div>
                <div class="hero-logo">
                    <img src="{{ asset('web/images/pasupati.jpg') }}"
                        alt="">
                </div>
                <div class="hero-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="hero-date">
                    <p>20.02.2019</p>
                </div>
                <div class="hero-btn">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="second hero">
                <img class="hero-profile-img" src="{{ asset('web/images/pasupati.jpg') }}"
                    alt="">
                <div class="hero-description-bk"></div>
                <div class="hero-logo">
                    <img src="{{ asset('web/images/pasupati.jpg') }}"
                        alt="">
                </div>
                <div class="hero-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="hero-date">
                    <p>20.02.2019</p>
                </div>
                <div class="hero-btn">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
         <div class="col-sm-3">
            <div class="second hero">
                <img class="hero-profile-img" src="{{ asset('web/images/pasupati.jpg') }}"
                    alt="">
                <div class="hero-description-bk"></div>
                <div class="hero-logo">
                    <img src="{{ asset('web/images/pasupati.jpg') }}"
                        alt="">
                </div>
                <div class="hero-description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="hero-date">
                    <p>20.02.2019</p>
                </div>
                <div class="hero-btn">
                    <a href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .hero {
    display: inline-block;
    position: relative;
    width: inherit;
    min-width: 100%;
    height: 400px;
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.3);
    margin-bottom: 15px;
}

.hero-profile-img {
    height: 70%;
}

.hero-description-bk {
    background-image: linear-gradient(0deg, #3f5efb, #fc466b);
    border-radius: 30px;
    position: absolute;
    top: 55%;
    left: -5px;
    height: 65%;
    width: 108%;
    transform: skew(10deg, -9deg);
}

.second .hero-description-bk {
    background-image: linear-gradient(-20deg, #bb7413, #e7d25c)
}

.hero-description {
    position: absolute;
    color: #fff;
    font-weight: 900;
    left: 17px;
    bottom: 17%;
}

.hero-btn {
    position: absolute;
    color: #fff;
    right: 30px;
    bottom: 10%;
    padding: 10px 20px;
    border: 1px solid #fff;
}

.hero-btn a {
    color: #fff;
}




</style>