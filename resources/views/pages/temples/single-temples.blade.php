@extends('layouts.app')
@section('style')
<style>
    .search-form{
        margin-top: 2rem;
        position: unset;
        position: sticky;
        top: 5rem;
    }
</style>
@endsection
@section('main-content')
    @include('banners.puja-detail-welcome')
   
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class=" my-5">
                    <h2 class="mb-4">Mangalnath Mangal Bhat Puja Information</h2>
                    
                    <!-- Card 1: About -->
                    <div class="card mb-3">
                        <div class="card-header">About</div>
                        <div class="card-body">
                            According to Jyotish Shastra if a Mangal is present in the first, fourth, seventh, eighth, and twelfth positions in Janam Kundali, the man or woman is called a Manglik. In this situation, they suffer from several problems and can only marry another Manglik. Mangal Shanti Puja is the solution and is performed at the Mangalnath temple in Ujjain. The puja helps solve issues like shortages, illness, and other problems.
                            <br><br>
                            <strong>Performed with:</strong> Ganapati Pujan and offering rice to Mangal at Mangalnath Mandir.
                            <br><strong>No. of Brahmin needed:</strong> 01
                            <br><strong>Clothes:</strong> Black and green colored clothes are to be worn in the puja.
                        </div>
                    </div>
                
                    <!-- Card 2: Benefits -->
                    <div class="card mb-3">
                        <div class="card-header">Benefits of Mangalnath Mangal Bhat Puja</div>
                        <div class="card-body">
                            Mangalnath Mangal Bhat Puja in Ujjain helps in removing dosh in marriages. It also helps in achieving good health, career, and business growth.
                        </div>
                    </div>
                
                    <!-- Card 3: Place of Puja -->
                    <div class="card mb-3">
                        <div class="card-header">Place of Puja</div>
                        <div class="card-body">
                            <strong>At:</strong> Mangalnath Mandir, Ujjain
                        </div>
                    </div>
                
                    <!-- Card 4: When to Perform Puja -->
                    <div class="accordion mb-3" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    When to Perform Mangalnath Mangal Bhat Puja in Ujjain?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    This Puja can be performed on any day of the year according to the Sastra and Muhurat.
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Card 5: Puja Duration -->
                    <div class="card mb-3">
                        <div class="card-header">Mangalnath Mangal Bhat Puja Duration</div>
                        <div class="card-body">
                            Mangalnath Mangal Bhat Puja in Ujjain takes around 30 to 45 minutes.
                        </div>
                    </div>
                
                    <!-- Card 6: Yajman Details -->
                    <div class="card mb-3">
                        <div class="card-header">Yajman Details</div>
                        <div class="card-body">
                            <strong>Total Yajman:</strong> 4
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
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
        </div>
    </div>

    @include('includes.hotel')

    @include('includes.tour-packages-offer')
@endsection
