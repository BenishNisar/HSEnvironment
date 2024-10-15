@extends('Layout.layout')
<style>
    .form-container {
        background-color: #f8f9fa; /* Light background color */
    }

    .form-label {
        font-weight: bold; /* Make labels bold */
    }

    .btn-primary {
        background-color: #007bff; /* Bootstrap primary color */
        border: none; /* Remove border */
        padding: 10px 20px; /* Increase padding */
        transition: background-color 0.3s; /* Smooth transition for hover effect */
    }

    .btn-primary:hover {
        background-color: #0056b3; /* Darker shade on hover */
    }
</style>
@section('HSEContent')


<header class="slider-main">
    <div id="carouselExampleIndicators"  class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner"  role="listbox" >
           <!-- Slide One - Set the background image for this slide in the line below -->
           <div class="carousel-item active" style="height:750px;background-image:   url('assets/images/pollution.gif')">
              <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px;">
                 <h1>Welcome to Health Safety Environment</h1>
                 <h5>Ensuring Safe and Sustainable Lawn Care for a Healthier Future.</h5>
              </div>
           </div>
           <!-- Slide Two - Set the background image for this slide in the line below -->
           <div class="carousel-item" style="height:750px;background-image:  url('assets/images/water_facuet.jpg')">
              <div class="carousel-caption d-none d-md-block" style="margin-bottom: 250px;">
                 <h1>Welcome to Health Safety Environment</h1>
                 <h5>Ensuring Safe and Sustainable Lawn Care for a Healthier Future.</h5>
              </div>
           </div>
           <!-- Slide Three - Set the background image for this slide in the line below -->
           <div class="carousel-item" style="height:750px;background-image:  url('assets/images/slider-03.jpg')">
              <div class="carousel-caption d-none d-md-block"  style="margin-bottom: 160px;">
                 <h1>Welcome to Health Safety Environment</h1>
                 <h5>Ensuring Safe and Sustainable Lawn Care for a Healthier Future.</h5>
              </div>
           </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<!-- Page Content -->
<div class="container">
    <div class="services-bar">
        <h1 class="my-4">Our Best Services </h1>
        <!-- Services Section -->
        <div class="row">
            <!-- Fuel / Energy Usage -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Fuel & Energy Usage</h4>
                    <div class="card-img">
                        <img class="img-fluid" style="height: 250px" src="{{ asset('assets/images/global.webp') }}" alt="Fuel Energy Usage" />
                    </div>
                    <div class="card-body">
                        <p class="card-text">Efficient use of fuel and energy sources to minimize waste and improve sustainability.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- GHG Emissions -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">GHG Emissions</h4>
                    <div class="card-img">
                        <img class="img-fluid" style="height: 250px" src="{{ asset('assets/images/FossilFuels.jpg') }}" alt="GHG Emissions" />
                    </div>
                    <div class="card-body">
                        <p class="card-text">Monitoring and reducing greenhouse gas emissions to meet environmental standards.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Water Management -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Water Management</h4>
                    <div class="card-img">
                        <img class="img-fluid" style="height: 250px" src="{{ asset('assets/images/water_manage.jpg') }}" alt="Water Management" />
                    </div>
                    <div class="card-body">
                        <p class="card-text">Implementing water conservation strategies and efficient usage methods.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Waste Management -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Waste Management</h4>
                    <div class="card-img">
                        <img class="img-fluid" style="height: 250px" src="{{ asset('assets/images/waste_management.jpg') }}" alt="Waste Management" />
                    </div>
                    <div class="card-body">
                        <p class="card-text">Proper disposal and recycling of waste to reduce environmental impact.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Soil Management -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Soil Management</h4>
                    <div class="card-img">
                        <img class="img-fluid" style="height: 250px" src="{{ asset('assets/images/soil.jpg') }}" alt="Soil Management" />
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ensuring soil health and sustainability for long-term agricultural success.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Human Rights Compliance -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Human Rights Compliance</h4>
                    <div class="card-img">
                        <img class="img-fluid" style="height: 250px" src="{{ asset('assets/images/human_rights.jfif') }}" alt="Human Rights Compliance" />
                    </div>
                    <div class="card-body">
                        <p class="card-text">Ensuring compliance with human rights standards in all operations.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
    </div>
    <!-- About Section -->
    <div class="about-main">
        <div class="row">
           <div class="col-lg-6">
              <h2>Health, Safety, and Environment (HSE)</h2>
              <h5>Our Commitment to HSE</h5>
              <ul>
                 <li>Ensuring a safe and hazard-free working environment for all employees and contractors.</li>
                 <li>Implementing best practices in lawn care to minimize environmental impact and promote eco-friendly solutions.</li>
                 <li>Providing continuous training and education on safety measures and environmental responsibility.</li>
                 <li>Maintaining compliance with all relevant health, safety, and environmental regulations and standards.</li>
                 <li>Reducing carbon emissions and adopting green technologies in our services.</li>
              </ul>
              <p>We believe that sustainability and safety go hand-in-hand. By integrating health, safety, and environmental practices into our everyday operations, we strive to create a positive impact on both our people and the planet.</p>
           </div>
           <div class="col-lg-6">
              <img class="img-fluid rounded" src="{{asset('assets/images/hse.jpg')}}" alt="Health, Safety, and Environment" />
           </div>
        </div>
        <!-- /.row -->
     </div>

<!-- Portfolio Section - Health, Safety, and Environment -->
<div class="portfolio-main">
    <h2>Our Health, Safety & Environment Initiatives</h2>
    <div class="row">
        <!-- GHG Emissions Reduction -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-img">
                    <a href="#">
                        <img class="card-img-top" style="height: 260px;"  src="{{asset ('assets/images/FossilFuels.jpg')}}" alt="GHG Emissions" />
                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">GHG Emissions Reduction</a>
                    </h4>
                    <p>Implementing energy-efficient practices to reduce greenhouse gas emissions and contribute to a sustainable future.</p>
                </div>
            </div>
        </div>

        <!-- Water Management -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-img">
                    <a href="#">
                        <img class="card-img-top" style="height: 260px;"  src="{{asset ('assets/images/water_manage.jpg')}}" alt="Water Management" />
                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Water Management</a>
                    </h4>
                    <p>Ensuring sustainable water use and conservation strategies for a healthier environment.</p>
                </div>
            </div>
        </div>

        <!-- Waste Management -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-img">
                    <a href="#">
                        <img class="card-img-top" style="height: 260px;"  src="{{asset ('assets/images/waste_management.jpg')}}" alt="Waste Management" />
                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Waste Management</a>
                    </h4>
                    <p>Effective waste management solutions to reduce environmental impact and promote recycling.</p>
                </div>
            </div>
        </div>

        <!-- Soil Management -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-img">
                    <a href="#">
                        <img class="card-img-top" style="height: 260px;" src="{{asset ('assets/images/soil.jpg')}}" alt="Soil Management" />
                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Soil Management</a>
                    </h4>
                    <p>Maintaining soil health and fertility through sustainable land management practices.</p>
                </div>
            </div>
        </div>

        <!-- Human Rights Compliance -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-img">
                    <a href="#">
                        <img class="card-img-top" style="height: 260px;" src="{{asset ('assets/images/human_rights.jfif')}}" alt="Human Rights Compliance" />
                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Human Rights Compliance</a>
                    </h4>
                    <p>Commitment to ethical labor practices and protecting human rights across all operations.</p>
                </div>
            </div>
        </div>

        <!-- Sustainable Practices -->
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <div class="card-img">
                    <a href="#">
                        <img class="card-img-top" style="height: 260px;" src="{{asset ('assets/images/sus.jpg')}}" alt="Sustainable Practices" />
                        <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="#">Sustainable Practices</a>
                    </h4>
                    <p>Implementing sustainable practices in our operations to minimize environmental impact.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>






    <hr>
    <!-- Get In Touch Now Section -->
    <div class="row mb-4">
        <div class="col-md-8">
            <h3>Commitment to Health, Safety, and the Environment</h3>

            <p>We adhere to strict health and safety standards by using eco-friendly products and sustainable methods that minimize our carbon footprint. Our team is trained in safe handling and application of all materials, ensuring a healthy environment for your plants and wildlife.</p>
        </div>
        <div class="col-md-4">
           <a class="btn btn-lg btn-secondary btn-block mt-5" href="#">Get In Touch Now</a>
        </div>
    </div>
</div>
<!-- /.container -->
@endsection
