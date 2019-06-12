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
        <div class="row d-flex justify-content-center mt-5">
            <h1 class="font-weight-normal">Tell us your idea</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <p>We like fast - the same way the technology market moves, in the time it takes you to say
            </p>
            <p>"I've got a
                great idea", someone else has already started working on a similar project half the world away. Tell us
            </p>
            <p>about your idea, and we're sure we can take to the next level.</p>
        </div>
        <div class="row d-flex justify-content-center"><a href="/contact/contact-us" class="btn btn-danger btn-rounded">CONTACT US</a></div>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>