<html>

<head>
    <title>Abid</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
</head>

<body>
    <nav class="navbar bg-light navbar-expand-lg nav-bar navbar-light scrolling-navbar">
        <a class="navbar-brand" style="width:200px" href="#"><img
                src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0f/Logo_of_Consumer_Electronics_Show.svg/1200px-Logo_of_Consumer_Electronics_Show.svg.png"
                height="30" alt="mdb logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/service">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="navbar-nav ml-auto nav-flex-icons">
                <div class="box-phone">079 694 3234</div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-7">
                <div class="logo-wrapper sn-ad-avatar-wrapper justify-content-center d-flex mb-4 mt-5">
                    <a href="#"></a><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" width="100"
                        class="rounded-circle">
                </div>
                <p class="mb-0 text-center">We are gathering members who live and work in a city with the most beautiful
                    and livable
                    beaches in the Central Coast in particular and Vietnam in general. We gather from enthusiastic young
                    members We have 1-2 years of experience to veteran members who have 6 years of experience.
                </p>
                <img src="https://i.imgur.com/hZHED9p.png" style="position: absolute;bottom:0;" width="100%">
            </div>
            <div class="col-md-5">
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top"
                            src="https://www.ineedaword.org/wp-content/uploads/2018/06/contact-us-banner.jpg"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">CONTACT US</h4>
                        <form class="text-center">
                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- First name -->
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control"
                                        placeholder="First name">
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text" id="defaultRegisterFormLastName" class="form-control"
                                        placeholder="Last name">
                                </div>
                            </div>
                            <select class="browser-default custom-select mb-4">
                                <option value="" selected disabled>Gender</option>
                                <option value="2">Male</option>
                                <option value="3">Female</option>
                            </select>
                            <!-- E-mail -->
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4"
                                placeholder="E-mail">

                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4"
                                placeholder="Mobile Phone">
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4"
                                placeholder="Company Name">

                            <div class="form-group">
                                <textarea class="form-control rounded-0" placeholder="Brief about the project"
                                    id="exampleFormControlTextarea2" rows="3"></textarea>
                            </div>

                            <!-- Sign up button -->
                            <button class="btn btn-info my-4 btn-rounded" type="submit">Get Started</button>
                        </form>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>