<div class="container-fluid webinar-banner">
    <div class="row">
        <div class="col-md-12 mx-auto text-center webinar-content">
         
            <h1 class="webinar-title">Our<br>Latest Blogs & News</h1>
            <p class="webinar-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
           
          
        </div>
        
    </div>
</div>
<style>
   
   .webinar-banner {
    background: linear-gradient(to right, rgba(249, 168, 37, 0.7), rgba(196, 122, 3, 0.9)), 
            url('{{ asset('web/images/pasupati.jpg') }}') no-repeat center center;
    background-size: cover;
    color: white;
    padding: 50px  50px 0 0;
    position: relative;
}

.webinar-content {
    padding: 20px 40px;
}

.live-webinar {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 10px;
}

.live-icon {
    color: #ff4081;
    margin-right: 10px;
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
    text-align: right;
    padding-right: 40px;
}

.speaker-info {
    position: absolute;
    top: 20px;
    right: 40px;
    text-align: right;
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
}

.date,
.time {
    font-size: 18px;
}

.webinar-image img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
}

</style>