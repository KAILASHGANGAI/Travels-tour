@extends('layouts.app')
@section('style')
    <style>
        .tour-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .tour-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .tour-info {
            /* padding: 15px; */
        }

        .tour-info h5 {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .tour-info p {
            font-size: 0.9rem;
            color: #555;
        }

        .tour-info .rating {
            color: orange;
        }

        .tour-info .btn {
            margin-top: 10px;
        }

        .tour-booking {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
@section('main-content')
    @include('banners.puja-welcome')
    <div class="container mt-5">

        <div class="row">
            <!-- Tour Cards Section -->
            <div class="col-md-8">
                <h1 class="text-center my-4">Puja Lists Of Different Places and Temples.</h1>

                <div class="tour-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('web/images/pooja/rudrabhishek.jpg') }}" alt="India Spiritual Tour with Taj Mahal">
                        </div>
                        <div class="col-md-8">
                            <div class="tour-info d-flex">
                                <div class="pt-2 p">
                                    <h5>India Spiritual Tour with Taj Mahal</h5>
                                    <p>Delhi - Mathura - Vrindavan</p>
                                    <p class="card-text text-muted">Rs. 2,500 - Rs. 35000</p>

                                    <p>India Spiritual Tour with Taj Mahal has been specially crafted...</p>
                                    <a href="{{ route('pujaDetails') }}" class="btn btn-danger btn-sm">View Details</a>

                                </div>
                                <div class="float-end pt-5 px-4 mt-4">
                                    <span>Very Good </span> <br>
                                    <span class="rating">★★★★</span>
                                    <a href="#" class="btn btn-warning btn-sm">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('web/images/pooja/grih.jpg')}}" alt="India Spiritual Tour with Taj Mahal">
                        </div>
                        <div class="col-md-8">
                            <div class="tour-info d-flex">
                                <div class="pt-2 p">
                                    <h5>India Spiritual Tour with Taj Mahal</h5>
                                    <p>Delhi - Mathura - Vrindavan</p>
                                        
                                    <p>India Spiritual Tour with Taj Mahal has been specially crafted...</p>
                                    <a href="#" class="btn btn-danger btn-sm">View Details</a>

                                </div>
                                <div class="float-end pt-5 px-4 mt-4">
                                    <span>Very Good </span> <br>
                                    <span class="rating">★★★★</span>
                                    <a href="#" class="btn btn-warning btn-sm">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tour-card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('web/images/pooja/20220829_233310.jpg') }}" class="h-100" alt="India Spiritual Tour with Taj Mahal">
                        </div>
                        <div class="col-md-8">
                            <div class="tour-info d-flex">
                                <div class="pt-2 p">
                                    <h5>India Spiritual Tour with Taj Mahal</h5>
                                    <p>Delhi - Mathura - Vrindavan</p>
                                        
                                    <p>India Spiritual Tour with Taj Mahal has been specially crafted...</p>
                                    <a href="#" class="btn btn-danger btn-sm">View Details</a>

                                </div>
                                <div class="float-end pt-5 px-4 mt-4">
                                    <span>Very Good </span> <br>
                                    <span class="rating">★★★★</span>
                                    <a href="#" class="btn btn-warning btn-sm">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Booking Form Section -->
            <div class="col-md-4">
                <div class="tour-booking">
                    <h5 class="text-left">Filters <hr></h5>
                    <form>
                       
                        <div class="form-group mb-2">
                            <label for="date">Special Date: </label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="form-group mb-2">
                            <label for="duration">Gods</label>
                            <select class="form-control" id="duration">
                                <option value="">Select</option>

                                <option value="4">Shiva</option>
                                <option value="10">Ganesh</option>
                                <option value="15">Laxmi</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="hotel">Locations</label>
                            <select class="form-control" id="hotel">
                                <option value="">Select</option>

                                <option value="3">Kathmandu</option>
                                <option value="4">Pokhara</option>
                                <option value="5">Lalitpur</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="hotel">Temples</label>
                            <select class="form-control" id="hotel">
                                <option value="">Select</option>
                                <option value="3">Pashupati Nath</option>
                            </select>
                        </div>
                        
                        <div class="text-center my-3">
                        <button type="submit" class="btn btn-danger  btn-block">Get a Free Quote</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
