@extends('Layout.layout')
<style>
    .contact-left {
    background-color: #f8f9fa; /* Light background for contrast */
}

.contact-left h3 {
    font-family: 'Arial', sans-serif; /* Choose a clean, modern font */
    font-weight: bold;
    color: #333; /* Darker text color for better readability */
}

.form-group label {
    font-weight: bold; /* Make labels stand out */
    color: #555; /* Slightly darker color for labels */
}

.btn-primary {
    background-color: #007bff; /* Bootstrap primary color */
    border: none; /* Remove border */
    padding: 10px; /* Add some padding for better appearance */
    border-radius: 5px; /* Round the button corners */
}

.btn-primary:hover {
    background-color: #0056b3; /* Darker shade on hover */
}

.form-control {
    border-radius: 5px; /* Round the input corners */
    border: 1px solid #ced4da; /* Custom border color */
}

/* Add some margin to the bottom of the form group */
.form-group {
    margin-bottom: 20px;
}

/* Center the button */
button[type="submit"] {
    margin-top: 10px; /* Space above the button */
}

    </style>
@section("HSEContent")
<!-- full Title -->
<div class="full-title">
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact
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
            <li class="breadcrumb-item active">Contact</li>
        </ol>
    </div>

  <!-- Content Row -->
  <div class="row">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
      <!-- Embedded Google Map -->
      <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4 contact-right">
      <h3>Contact Details</h3>
      <p>
        3481 Melrose Place
        <br>Beverly Hills, CA 90210
        <br>
      </p>
      <p>
        <abbr title="Phone">P</abbr>: (123) 456-7890
      </p>
      <p>
        <abbr title="Email">E</abbr>:
        <a href="mailto:name@example.com">name@example.com
        </a>
      </p>
      <p>
        <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
      </p>
    </div>
  </div>
  <!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row justify-content-center">
    <div class="col-lg-8 mb-4 contact-left p-4 border rounded shadow">
        <h3 class="text-center mb-4">Send us a Message</h3>
        <form name="sentMessage" id="contactForm" novalidate>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Full Name:</label>
                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
                <div class="form-group col-md-6">
                    <label for="message">Message:</label>
                    <textarea rows="5" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-md">Send Message</button>
            </div>
        </form>
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container -->


@endsection
