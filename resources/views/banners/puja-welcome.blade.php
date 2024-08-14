<div class="banner">
    <div class="banner-content">
        <h1>Hundreds of Amazing Destinations</h1>
        <p>We offer a variety of destinations to travel to, ranging from exotic to some extreme ones...
           <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, maiores!
        </p>
        <p>
            Call On: +977986541236
        </p>
        <a href="#" class="btn btn-outline-light">Learn More</a>
    </div>
    <div class="search-form">
        <h6 class="text-center">Book Your Puja Appoinment !</h6>
        <form>
            <div class="form-group mb-2">
                <label for="from">Name: </label>
                <input type="text" class="form-control" id="from" placeholder="Full Name..">
            </div>
            <div class="form-group mb-2">
                <label for="to">Phone</label>
                <input type="text" class="form-control" id="to" placeholder="+977 980123456">
            </div>
            <div class="form-group mb-2">
                <label for="depart-date">Puja Date</label>
                <input type="date" class="form-control" id="depart-date">
            </div>
            <div class="form-group mb-2">
                <label for="duration">Puja Name:</label>
                <select class="form-control" id="duration">
                    <option>Select Your Puja</option>
                    <option>1-3 days</option>
                    <option>1 week</option>
                    <option>2 weeks</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label>Adults</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-light">-</button>
                    </div>
                    <input type="text" class="form-control text-center" value="2">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-light">+</button>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Children</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-light">-</button>
                    </div>
                    <input type="text" class="form-control text-center" value="0">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-light">+</button>
                    </div>
                </div>
            </div> --}}
          <div class="text-center">
            <button type="submit" class="btn btn-warning btn-block m-4">Book Appoinment</button>
          </div>
        </form>
    </div>
</div>
<style>
    .banner {
        position: relative;
        background-image:
            linear-gradient(rgba(255, 110, 1, 0.8)
            , rgba(243, 156, 18, 0.8)),
            url({{ asset('web/images/bg/e1386ef8-db01-43aa-a7c9-b84819d815cd.jpg') }});
        background-size: cover;

        background-position: center;
        height: 90vh;
     
    }

    .banner-content {
        position: absolute;
        top: 50%;
        left: 10%;
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
