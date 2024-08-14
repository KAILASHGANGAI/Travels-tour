<div class="container my-5">
    <h2 class="text-center mb-4">Book Your Hotel In this location</h2>
    <div class="row">
        <!-- Hotel 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('web/images/hotesl/1.avif') }}" class="card-img-top" alt="OYO 135 Lost Garden">
                <div class="card-body">
                    <h5 class="card-title">OYO 135 Lost Garden Apartment and Guest House</h5>
                    <p class="card-text">Lazimpat, Kathmandu</p>
                    <p class="card-text"><strong>4.2</strong> (31 reviews) • Very Good</p>
                    <p class="price">NPR1349 <span class="discount-price">NPR1482</span> 8% off</p>
                    <a href="#" class="btn btn-book w-100">Book Now</a>

                </div>
            </div>
        </div>
        <!-- Hotel 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('web/images/hotesl/2.avif') }}" class="card-img-top"
                    alt="OYO 160 Hotel Shraddha Palace">
                <div class="card-body">
                    <h5 class="card-title">OYO 160 Hotel Shraddha Palace</h5>
                    <p class="card-text">Near Pashupatinath Temple, Kathmandu</p>
                    <p class="card-text"><strong>4.4</strong> (51 reviews) • Very Good</p>
                    <p class="price">NPR1298</p>
                    <a href="#" class="btn btn-book w-100">Book Now</a>

                </div>
            </div>
        </div>
        <!-- Hotel 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('web/images/hotesl/1.avif') }}" class="card-img-top" alt="OYO 206 Mount View Homes">
                <div class="card-body">
                    <h5 class="card-title">OYO 206 Mount View Homes</h5>
                    <p class="card-text">Near Arunima H.S. School, Boudhha, Kathmandu</p>
                    <p class="card-text"><strong>5.0</strong> (8 reviews) • Fabulous</p>
                    <p class="price">NPR1800</p>
                    <a href="#" class="btn btn-book w-100">Book Now</a>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .card-text {
        font-size: 1rem;
    }

    .price {
        color: red;
        font-weight: bold;
    }

    .discount-price {
        text-decoration: line-through;
        color: grey;
        font-size: 0.9rem;
    }

    .btn-book {
        background-color: orange;
        color: white;
        font-weight: bold;
    }

    .btn-book:hover {
        background-color: darkorange;
        color: white;
    }
     /* Image scaling effect */
     .card-img-top {
            transition: transform 0.3s ease;
        }
        .card:hover  {
           background: #ff6e01;
           color: #fff;
        }
</style>
