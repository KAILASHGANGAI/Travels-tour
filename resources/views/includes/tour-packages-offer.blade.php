<div class="container my-5">
    <h2 class="section-title">Best tour Package offers for You</h2>
    <p class="sub-title">choose your next destination</p>
    <div class="row">
        <!-- Package 1 -->
        <div class="col-md-3">
            <div class="package-card">
               
                <img src="{{ asset('web/images/hotesl/2.avif') }}" alt="Lotus Delhi">
                <div class="package-details">
                    <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</p>
                    <div class="details-icons">
                        <span><i class="fa fa-heart"></i> 86415</span>
                        <span><i class="fa fa-comment"></i> 4586</span>
                    </div>
                </div>
                <div class="card-body">
                    <span
                     class="price">$2648</span>
                    <span class="days-badge">5 Days India</span>
                </div>
            </div>
        </div>

        <!-- Package 2 -->
        <div class="col-md-3">
            <div class="package-card">
             
                <img src="{{ asset('web/images/hotesl/1.avif') }}" alt="Burj Khalifa">
                <div class="package-details">
                    <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</p>
                    <div class="details-icons">
                        <span><i class="fa fa-heart"></i> 86415</span>
                        <span><i class="fa fa-comment"></i> 4586</span>
                    </div>
                </div>
                <div class="card-body">
                    <span class="price">$2648</span>
                    <span class="days-badge">5 Days Dubai</span>
                </div>
            </div>
        </div>

        <!-- Package 3 -->
        <div class="col-md-3">
            <div class="package-card">
         
                <img src="{{ asset('web/images/hotesl/2.avif') }}" alt="Pyramids Egypt">
                <div class="package-details">
                    <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</p>
                    <div class="details-icons">
                        <span><i class="fa fa-heart"></i> 86415</span>
                        <span><i class="fa fa-comment"></i> 4586</span>
                    </div>
                </div>
                <div class="card-body">
                    <span class="price">$2648</span>
                    <span class="days-badge">7 Days Egypt</span>
                </div>
            </div>
        </div>

        <!-- Package 4 -->
        <div class="col-md-3">
            <div class="package-card">
             
                <img src="{{ asset('web/images/hotesl/1.avif') }}" alt="Mountain Vietnam">
                <div class="package-details">
                    <p>Included: Air ticket, Hotel, Breakfast, Tours, Airport Transfer</p>
                    <div class="details-icons">
                        <span><i class="fa fa-heart"></i> 86415</span>
                        <span><i class="fa fa-comment"></i> 4586</span>
                    </div>
                </div>
                <div class="card-body">
                    <span class="price">$2648</span>
                    <span class="days-badge">7 Days Vietnam</span>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
   
    .section-title {
        text-align: center;
        font-size: 2rem;
       
        font-weight: bold;
    }

    .sub-title {
        text-align: center;
        margin-bottom: 40px;
        font-size: 1.2rem;
        color: #555;
    }

    .package-card {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        text-align: center
    }

    .package-card img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .package-card:hover img {
        transform: scale(1.1);
    }

    .package-card .card-body {
       
        text-align: center;
    }

    .package-title {
        background-color: #d6f5d6;
        font-size: 1rem;
        padding: 5px 10px;
        border-radius: 20px;
  
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
        margin-bottom: 10px;
    }

    .price {
        font-size: 1.5rem;
        font-weight: bold;
        color: #000;

    }

    .package-details {
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: left;
        font-size: 0.9rem;
    }

    .details-icons {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .details-icons i {
        color: #ff6b6b;
    }

    .days-badge {
        background-color: #000;
        color: white;
        padding: 8px;
        border-radius: 50%;
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 0.8rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .package-card {
            margin-bottom: 20px;
        }
    }
</style>