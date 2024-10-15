

@extends('Layout.Dashboard')
<style>
    .dash_card {
    background-image: url('Dashboard_assets/img/cardone.jpg'); /* Replace with your actual image path */
    background-size: cover; /* Ensures the image covers the entire card */
    background-position: center;
    /* Centers the background image */
}

.dash_card_two {
    background-image: url('Dashboard_assets/img/cardtwo.jpg'); /* Replace with your actual image path */
    background-size: cover;
    background-position: center;
}

.dash_card_three {
    background-image: url('Dashboard_assets/img/cardthree.jpg'); /* Replace with your actual image path */
    background-size: cover;
    background-position: center;
}

.dash_card_four {
    background-image: url('Dashboard_assets/img/fuel.jpg'); /* Replace with your actual image path */
    background-size: cover;
    background-position: center;
}
.dash_card_five {
    background-image: url('Dashboard_assets/img/accident.jpg'); /* Replace with your actual image path */
    background-size: cover;
    background-position: center;
}
.dash_card_six {
    background-image: url('Dashboard_assets/img/card_six.jpg'); /* Replace with your actual image path */
    background-size: cover;
    background-position: center;
}

</style>
@section("AdminContent")

<main class="dashboard-main-content">
    <div class="container">
        <h1 class="text-dark mt-4"><b> Welcome to Dashboard</b>
            <hr>
           </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card dash_card"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/admin/users') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:150px; ">
                                <b style="color: white; margin-left: 70px;position: relative;
                                top:70px;background-color:green;
                                "><u>Environment</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>20</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dash_card_two"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/admin/role') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:150px; ">
                                <b style="color: white; margin-left: 130px;position: relative;
                                top:70px;background-color:green;
                                "><u>Safety</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>30</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dash_card_three"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/admin/post') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:150px; ">
                                <b style="color: white; margin-left: 55px;position: relative;
                                top:70px;background-color:green;
                                "><u>Water_Supply</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>10</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dash_card_four mt-5"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/admin/about') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:150px; ">
                                <b style="color: white; margin-left: 70px;position: relative;
                                top:70px;background-color:green;
                                "><u>Environment</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>10</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dash_card_five mt-5"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/admin/profile') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:150px; ">
                                <b style="color: white; margin-left: 110px;position: relative;
                                top:70px;background-color:green;
                                "><u>Accident</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>30</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>




            <div class="col-md-4">
                <div class="card dash_card_six mt-5"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/admin/gallery') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:150px; ">
                                <b style="color: white; margin-left: 90px;position: relative;

                                top:70px;background-color:green;
                                "><u> Production</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>10</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</main>


@endsection
