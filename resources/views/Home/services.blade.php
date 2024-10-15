@extends('Layout.layout')
@section('HSEContent')

<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Services
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
            <li class="breadcrumb-item active">Services</li>
        </ol>
    </div>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="{{ asset ('assets/images/road_Acci.webp')}}" alt="" />

    <!-- Services Section -->
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

    <!-- Risk Assessment Form -->
    <div class="form-section my-5">
        <h2>Risk Assessment Form</h2>
        <div class="form-container p-4 border rounded shadow bg-light">
            <p>Please fill out the form below to assess potential risks in your workspace. Accurate information is vital for identifying hazards and ensuring safety.</p>
            <form method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="assessor_name" class="form-label">Assessor's Name:</label>
                        <input type="text" class="form-control" id="assessor_name" name="assessor_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="assessment_date" class="form-label">Assessment Date:</label>
                        <input type="date" class="form-control" id="assessment_date" name="assessment_date" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="risk_description" class="form-label">Risk Description:</label>
                        <textarea rows="4" class="form-control" id="risk_description" name="risk_description" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mt-3">Submit Risk Assessment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Audit Request Form -->
    <div class="form-section my-5">
        <h2>Audit Request Form</h2>
        <div class="form-container p-4 border rounded shadow bg-light">
            <p>To ensure compliance with safety regulations, please complete the audit request form below. This will help us plan and execute audits effectively.</p>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="requester_name" class="form-label">Requester's Name:</label>
                        <input type="text" class="form-control" id="requester_name" name="requester_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="audit_date" class="form-label">Preferred Audit Date:</label>
                        <input type="date" class="form-control" id="audit_date" name="audit_date" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="audit_scope" class="form-label">Scope of Audit:</label>
                        <textarea rows="4" class="form-control" id="audit_scope" name="audit_scope" required></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mt-3">Submit Audit Request</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Our Customers -->
    <div class="customers-box">
        <h2>Our Customers</h2>
        <div class="row">
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="{{ asset ('assets/images/logo_01.png')}}" alt="" />
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="{{ asset ('assets/images/logo_02.png')}}" alt="" />
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

</div>
<!-- /.container -->

@endsection
