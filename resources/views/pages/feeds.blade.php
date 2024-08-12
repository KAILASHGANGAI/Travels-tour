@extends('layouts.app')
@section('style')
    <style>
        .sidebar {
            background-color: white;
            border-radius: 10px;
            padding: 15px;
            position: sticky;
            top: 50px;
        }

        .feed {
            background-color: white;
            border-radius: 10px;

            margin-bottom: 20px;

        }

        .profile-picture {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        .post-actions a {
            color: #ff6e01;
            margin-right: 15px;
            cursor: pointer;
        }

        .post-actions a:hover {
            text-decoration: underline;
        }

        .comment-section {
            border-top: 1px solid #e9ebee;
            padding-top: 15px;
        }

        .comment {
            display: flex;
            margin-bottom: 15px;
        }

        .comment .profile-picture {
            width: 30px;
            height: 30px;
        }

        .comment .comment-content {
            background-color: #f0f2f5;
            border-radius: 20px;
            padding: 10px;
            margin-left: 10px;
            max-width: 80%;
        }

        .comment-input {
            margin-top: 10px;
            display: flex;
        }

        .comment-input .form-control {
            border-radius: 20px;
            margin-right: 10px;
        }

        .like-count {
            color: #ff6e01;
            margin-right: 15px;
        }

        .banner {
            background-color: #ff6e01;
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .banner h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        .banner p {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .status-update {
            background-color: white;
            border-radius: 10px;
            
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .status-update textarea {
            box-shadow: none;
            outline: none;
            width: 100%;
          
        }
        .status-update textarea::placeholder {
            color: #adb5bd;
            font-weight: 500;
        }
        .status-update textarea:focus {
            border: none;
            box-shadow: none;
        }
    </style>
@endsection
@section('main-content')
    <!-- Short Heading Banner -->
    <div class="banner pt-3">

    </div>
    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-3">

                <div class="sidebar">
                    <h5>Your Shortcuts</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Places</a></li>
                        <li><a href="#">Temples</a></li>
                        <li><a href="#">Pujas</a></li>
                        <li><a href="#">Articles</a></li>
                    </ul>
                </div>
            </div>

            <!-- Feed -->
            <div class="col-lg-6">
                <div class="feed shadow p-2">
                    <div class=" align-items-center mb-3">
                        <div class="d-flex justify-content-space">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture m-2"
                                alt="Profile Picture">
                            <div class="status-update mb-4">
                                <textarea class="form-control w-100" placeholder="What's on your mind?"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">

                        <a href="#" class="text-decoration-none">Photo/Video</a>

                    </div>
                    <button class="btn btn-warning w-100" type="submit">Post</button>

                </div>
                <!-- Example Post -->
                <div class="feed shadow p-2">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture" alt="Profile Picture">
                        <div class="ms-3">
                            <h6 class="mb-0">User Name</h6>
                            <small class="text-muted">5 mins ago</small>
                        </div>
                    </div>
                    <p>Had an amazing day at the park today!</p>
                    <img src="{{ asset('web/images/pasupati.jpg') }}" class="img-fluid rounded" alt="Post Image">

                    <!-- Like and Comment Section -->
                    <div class="post-actions mt-3">
                        <a href="#">Like</a>
                        <a href="#">Comment</a>
                        <a href="#">Share</a>
                    </div>
                    <div class="like-count mt-2">
                        <small>20 people liked this</small>
                    </div>

                    <!-- Comments Section -->
                    <div class="comment-section mt-3">
                        <div class="comment">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture"
                                alt="Commenter Picture">
                            <div class="comment-content">
                                <h6 class="mb-1">Commenter 1</h6>
                                <p class="mb-0">That sounds like a great day!</p>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture"
                                alt="Commenter Picture">
                            <div class="comment-content">
                                <h6 class="mb-1">Commenter 2</h6>
                                <p class="mb-0">Wish I could have joined!</p>
                            </div>
                        </div>

                        <!-- Add a Comment -->
                        <div class="comment-input mt-3">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture"
                                alt="Your Profile Picture">
                            <input type="text" class="form-control" placeholder="Write a comment...">
                            <button class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </div>
                <div class="feed shadow p-2">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture" alt="Profile Picture">
                        <div class="ms-3">
                            <h6 class="mb-0">User Name</h6>
                            <small class="text-muted">5 mins ago</small>
                        </div>
                    </div>
                    <p>Had an amazing day at the park today!</p>
                    <img src="{{ asset('web/images/pasupati.jpg') }}" class="img-fluid rounded" alt="Post Image">

                    <!-- Like and Comment Section -->
                    <div class="post-actions mt-3">
                        <a href="#">Like</a>
                        <a href="#">Comment</a>
                        <a href="#">Share</a>
                    </div>
                    <div class="like-count mt-2">
                        <small>20 people liked this</small>
                    </div>

                    <!-- Comments Section -->
                    <div class="comment-section mt-3">
                        <div class="comment">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture"
                                alt="Commenter Picture">
                            <div class="comment-content">
                                <h6 class="mb-1">Commenter 1</h6>
                                <p class="mb-0">That sounds like a great day!</p>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture"
                                alt="Commenter Picture">
                            <div class="comment-content">
                                <h6 class="mb-1">Commenter 2</h6>
                                <p class="mb-0">Wish I could have joined!</p>
                            </div>
                        </div>

                        <!-- Add a Comment -->
                        <div class="comment-input mt-3">
                            <img src="{{ asset('web/images/pasupati.jpg') }}" class="profile-picture"
                                alt="Your Profile Picture">
                            <input type="text" class="form-control" placeholder="Write a comment...">
                            <button class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar 2 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <h5>Sponsored</h5>
                    <img src="{{ asset('web/images/pasupati.jpg') }}" class="img-fluid rounded mb-3" alt="Ad">
                    <img src="{{ asset('web/images/pasupati.jpg') }}" class="img-fluid rounded" alt="Ad">
                </div>
            </div>
        </div>
    </div>
@endsection
