<html>

<head>
    <title>Abid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
    <style>
        @media (min-width: 414px) {
            .card-group>.card {
                flex: 2 0 50%;
            }

            .card-group {
                flex-flow: row wrap;
            }
        }

        @media (min-width: 1024px) {
            .card-group>.card {
                flex: 1 0 0%;
            }
        }
    </style>
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
                <li class="nav-item active">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <div class="navbar-nav ml-auto nav-flex-icons">
                <div class="box-phone">079 694 3234</div>
            </div>
        </div>
    </nav>
    {{-- <div class="container-fluid team-bg text-white align-middle">
        <div class="container">
            <blockquote class="blockquote font-weight- font-weight-normal">
                <p class="mb-0">We are gathering members who live and work in a city with the most beautiful and livable
                    beaches in the Central Coast in particular and Vietnam in general. We gather from enthusiastic young
                    members We have 1-2 years of experience to veteran members who have 6 years of experience. We have
                    great
                    passion for technology and want to cooperate with domestic and foreign customers to develop
                    ourselves.
                </p>

                <footer class="blockquote-footer mb-3 text-white-50">From <cite title="Source Title">Abid</cite>
                </footer>
            </blockquote>
        </div>
    </div> --}}
    <div class="container">
        <section class="my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-group">
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/58666101_2285626811763539_4583215242862919680_n.jpg?_nc_cat=103&_nc_oc=AQmoLCvSs7Kt3_yEpvEc-7Z530d8DHWcbpqN47ZLk3encScl8kEM15qBbvFj7h3aoic&_nc_ht=scontent.fdad1-1.fna&oh=77bc2beb1319bd5d55bcfb1a0d2438e0&oe=5D915AFA"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Thanh Nguyen Tien</h4>
                                </a>
                                <a class="card-meta">Friends</a>
                                <p class="card-text">Anna is a web designer living in New York.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>83 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2012</p>
                            </div>
                        </div>
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://scontent.fdad1-1.fna.fbcdn.net/v/t1.0-9/31655642_1595650953882860_3598976903769227264_n.jpg?_nc_cat=106&_nc_oc=AQnMklRjjIuemWnqbL-ZTUq8sphZ9ohdzSklDdSpI5PED-5xfg63zqBvLYUUacUvhPU&_nc_ht=scontent.fdad1-1.fna&oh=f300f7f62959cdaceed295225195f28d&oe=5D837DD7"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Dao Quoc Viet</h4>
                                </a>
                                <a class="card-meta">Friends</a>
                                <p class="card-text">Anna is a web designer living in New York.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>83 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2012</p>
                            </div>
                        </div>
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://i.imgur.com/bQs0wg6.png"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Nguyen Xuan Trung</h4>
                                </a>
                                <a class="card-meta">Coworker</a>
                                <p class="card-text">John is a copywriter living in Seattle.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>48 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2015</p>
                            </div>
                        </div>
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/61876370_2825598257665919_3535648680436563968_n.jpg?_nc_cat=109&_nc_oc=AQksVknUTcMX5-nw03rEl477rRD14s3JxC3EOHPpZQPRB_bkMw0sjPE9OzaEp-_3A28&_nc_ht=scontent.fdad2-1.fna&oh=bb8dc521c84ccda052d5a83e000b06cc&oe=5D7D9554"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Duong PH</h4>
                                </a>
                                <a class="card-meta">Coworker</a>
                                <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>127 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2014</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-group">
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/62084186_440340436524870_8416301098721083392_n.jpg?_nc_cat=109&_nc_oc=AQlgsTM73hteHt8FepmQ7frkGtnBw_-fxnPOsVD1jXOGv0zfRr3eZM5yLZORDkSzpb8&_nc_ht=scontent.fdad2-1.fna&oh=c649f6f09b97b177c7d89535728acd90&oe=5D9F726F"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Dinh Phuoc Viet</h4>
                                </a>
                                <a class="card-meta">Friends</a>
                                <p class="card-text">Anna is a web designer living in New York.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>83 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2012</p>
                            </div>
                        </div>
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://i.imgur.com/WnsYwQ9.png"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Anh Nguyen Dac</h4>
                                </a>
                                <a class="card-meta">Friends</a>
                                <p class="card-text">Anna is a web designer living in New York.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>83 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2012</p>
                            </div>
                        </div>
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(27).jpg"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Duong Le</h4>
                                </a>
                                <a class="card-meta">Coworker</a>
                                <p class="card-text">John is a copywriter living in Seattle.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>48 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2015</p>
                            </div>
                        </div>
                        <div class="card card-personal mb-4">
                            <div class="view overlay">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Avatars/img%20(28).jpg"
                                    alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a>
                                    <h4 class="card-title">Hoai Linh Bui Le</h4>
                                </a>
                                <a class="card-meta">Coworker</a>
                                <p class="card-text">Sara is a video maker living in Tokyo.</p>
                                <hr>
                                <a class="card-meta"><span><i class="fas fa-user"></i>127 Friends</span></a>
                                <p class="card-meta float-right">Joined in 2014</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>