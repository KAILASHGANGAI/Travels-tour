<div class="container-fluid webinar-banner">
    <div class="row">
        <div class="col-md-6 webinar-content">
         
            <h1 class="webinar-title">ONLINE BUSINESS <br> CONFERENCE</h1>
            <p class="webinar-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            <div class="webinar-social">
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/twitter.png"/></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/facebook.png"/></a>
                <a href="#"><img src="https://img.icons8.com/ios-filled/50/ffffff/instagram.png"/></a>
            </div>
            <p class="webinar-handle">@WEBINAR</p>
            <p class="webinar-website">WWW.WEBSITE.COM</p>
        </div>
        <div class="col-md-6 webinar-image">
            <div class="speaker-info">
                <h4 class="speaker-name">ANNA SCORTIN</h4>
                <p class="speaker-title">ANALYTICAL CONSULTANT</p>
            </div>
            <div class="webinar-timing">
                <p class="date">DATE: JULY, 16TH</p>
                <p class="time">TIME: 16:00 - 18:00</p>
            </div>
        </div>
    </div>
    <div class="curve-shape">
            <img src="{{ asset('web/images/pasupati.jpg') }}" alt="Webinar Speaker" class="img-fluid">

    </div>
</div>

<style>

.webinar-banner {
    background: linear-gradient(to right, rgba(196, 122, 3, 0.8),  rgba(0, 0, 0, 0.8)),
                url('{{ asset('web/images/pasupati.jpg') }}') no-repeat center center;
    background-size: cover;
    color: white;
    padding: 50px 0;
    position: relative;
    overflow: hidden;
}

.webinar-content {
    padding: 20px 40px;
    z-index: 1;
    position: relative;
}



.webinar-title {
    font-size: 48px;
    font-weight: bold;
    line-height: 1.2;
}

.webinar-description {
    margin: 20px 0;
    font-size: 16px;
}

.webinar-social img {
    margin: 0 10px;
    width: 32px;
    height: 32px;
}

.webinar-handle,
.webinar-website {
    font-size: 14px;
    margin-top: 20px;
}

.webinar-image {
    position: relative;
    z-index: 1;
}

.speaker-info {
    position: absolute;
    top: 20px;
    right: 40px;
    text-align: right;
    z-index: 2;
    
    
}

.speaker-name {
    font-size: 24px;
    font-weight: bold;
}

.speaker-title {
    font-size: 16px;
    font-style: italic;
}

.webinar-timing {
    position: absolute;
    bottom: 20px;
    right: 40px;
    text-align: right;
    z-index: 2;
}

.date,
.time {
    font-size: 18px;
}

.curve-shape {
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to right, #f9a825, #f9a825);
    clip-path: polygon(75% 0, 100% 0, 100% 100%, 50% 100%);
    z-index: 0;
}

</style>