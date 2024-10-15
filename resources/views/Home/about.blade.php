@extends('Layout.layout')

@section('HSEContent')

<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">About
            <small>Subheading</small>
        </h1>
    </div>
</div>
<!-- Page Content -->
<div class="container">
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>
    </div>
    <!-- About Content -->
    <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="{{asset  ('assets/images/about-img.jpg')}}" alt="" />
            </div>
            <div class="col-lg-6">
                <h2>About Modern Business</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Team Members -->
    <div class="team-members-box">
        <h2>Our Team</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="card h-100 text-center">
                <img class="card-img-top" src="{{asset  ('assets/images/team_01.jpg')}}" alt="" />
                <div class="card-body">
                    <h4 class="card-title">Team Member</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                </div>
                <div class="card-footer">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card h-100 text-center">
                <img class="card-img-top" src="{{ asset ('assets/images/team_02.jpg')}}" alt="" />
                <div class="card-body">
                    <h4 class="card-title">Team Member</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                </div>
                <div class="card-footer">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <div class="card h-100 text-center">
                <img class="card-img-top" src="{{ asset ('assets/images/team_03.jpg')}}" alt="" />
                <div class="card-body">
                    <h4 class="card-title">Team Member</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia eum ipsum fugiat odio officiis odit.</p>
                </div>
                <div class="card-footer">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- Our Customers -->
    <div class="customers-box">
        <h2>Our Customers</h2>
        <div class="row">
            <div class="col-lg-2 col-sm-4 mb-4">
              <img class="img-fluid" src="{{ asset ('assets/images/logo_01.png')}}" alt="" />
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
              <img class="img-fluid" src="{{asset  ('assets/images/logo_02.png')}}" alt="" />
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
              <img class="img-fluid" src="{{ asset ('assets/images/logo_03.png')}}" alt="" />
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
              <img class="img-fluid" src="{{ asset ('assets/images/logo_04.png')}}" alt="" />
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
              <img class="img-fluid" src="{{ asset ('assets/images/logo_05.png')}}" alt="" />
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
              <img class="img-fluid" src="{{ asset ('assets/images/logo_06.png')}}" alt="" />
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Feedback Form -->
    <div class="feedback-form mt-5 mb-5">
        <h2 class="mb-4 text-center">We Value Your Feedback</h2>
        <div class="form-container p-4 border rounded shadow bg-light">
            <form>
                <!-- Row 1: Name and Email -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label"> Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label"> Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <!-- Row 2: Feedback Type -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="feedback-type" class="form-label">Feedback Type:</label>
                        <select class="form-select" id="feedback-type" name="feedback-type" required>
                            <option value="" disabled selected>Select feedback type</option>
                            <option value="suggestion">Suggestion</option>
                            <option value="complaint">Complaint</option>
                            <option value="praise">Praise</option>
                        </select>
                    </div>
                </div>

                <!-- Row 3: Comments -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="comments" class="form-label"> Comments:</label>
                        <textarea rows="4" class="form-control" id="comments" name="comments" required></textarea>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mt-3">Submit Feedback</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.container -->
</div>

@endsection
