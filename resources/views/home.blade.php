@extends('layouts.app')

@section('content')
    <!--Start Home Section-->
    <div class="content content--intro current_content">
        <section class="home" id="home">
            <div class="full_height">

                <!-- nav -->
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                            <!-- LOGO -->
                            <a class="navbar-brand" href="{{ route('home') }}">Varma <span style="color: 
                                @if($user->color == 'yellow') #ffb100
                                @elseif($user->color == 'red') #e74c3c
                                @elseif($user->color == 'purple') #9b59b6
                                @elseif($user->color == 'blue') #00cae9
                                @elseif($user->color == 'green') #00c077
                                @endif
                                ">mvss</span> </a>

                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right menu">
                                <li>
                                    <a href="#about">About</a>
                                </li>
                                <li>
                                    <a href="#resume">Resume</a>
                                </li>
                                <li>
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li>
                                    <a href="#blog">Blog</a>
                                </li>
                                <li>
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!--.container-->
                </nav>

                <div class="content-wrapper full_height">
                    <div class="display-table content---wrapper">
                        <div class="display-table-cell">
                            <img src="{{ asset('storage/'.$user->image1) }}" alt="">
                            <h3 class="subtitle">Hello, I'm {{ $user->name }}</h3>
                            <div class="job">
                                @foreach ($user->professions as $r)
                                    <h2>{{ $r }}</h2>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--.full_height-->
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 full--width item">
                            <p>© 2020 Varma | All rights reserved.</p>
                        </div>
                        <div class="col-xs-6 text-right full--width item">
                            <!--Social links-->
                            <div class="social-icons">
                                <a target="_blank" href="https://github.com/{{ $user->github }}">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a target="_blank" href="https://www.facebook.com/{{ $user->facebook }}">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a target="_blank" href="https://twitter.com/{{ $user->twitter }}">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a target="_blank" href="https://www.linkedin.com/in/{{ $user->linkedin }}">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /content -->
    <!--End Home Section-->


    <!--Start About Section-->
    <section class="about content sec_content" id="about">
        <div class="content__inner">
            <a class="backToHome" href="#home" title="Back To Home">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <div class="scroll__content">
                <div class="sec__content padding-top-80 padding-bottom-80">
                    <div class="container">
                        <div class="sec_title">
                            <h2>My Story</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="grid__item-img" data-displacement="frontend/images/1.jpg" data-intensity="-0.4" data-speedin="0.7" data-speedout="0.3" data-easing="Sine.easeOut">
                                    <img src="{{ asset('storage/'.$user->image2) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="more-about-me">
                                    <p class="margin-bottom-0 sm-xs-margin-top-30">{{ $user->bio }}</p>

                                    <div class="more_info margin-top-30">
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="item">
                                                    <span class="info-title">Age : </span>
                                                    <span class="info-body">{{ $age + 1 }}</span>
                                                </div>

                                                <div class="item">
                                                    <span class="info-title">Date of birth : </span>
                                                    <span class="info-body">{{ $user->dob }}</span>
                                                </div>

                                                <div class="item">
                                                    <span class="info-title">Address : </span>
                                                    <span class="info-body">AndhraPradesh, India</span>
                                                </div>

                                            </div>
                                            <div class="col-sm-6 xs-margin-top-12">

                                                <div class="item">
                                                    <span class="info-title">Email : </span>
                                                    <span class="info-body">varma.dev.01@gmail.com</span>
                                                </div>

                                                <div class="item">
                                                    <span class="info-title">Phone : </span>
                                                    <span class="info-body">+91 {{ $user->mobile }}</span>
                                                </div>

                                                <div class="item">
                                                    <span class="info-title">Freelance : </span>
                                                    <span class="info-body">Available</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--.more_info-->
                                </div>
                                <!--.more-about-me-->
                            </div>
                            <!--.col-md-7-->
                        </div>
                        <!--.row-->

                        <!-- Services -->
                        <div class="services margin-top-60">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3 class="subtitle">What I Do</h3>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        @foreach ($services as $service)
                                            <div class="col-sm-6 col-md-4 item">
                                                <div class="content">
                                                    <div class="font-icon">
                                                        <i class="{{ $service->icon }}"></i>

                                                    </div>
                                                    <div class="service_content">
                                                        <h3>{{ $service->title}}</h3>
                                                        <p>{{ $service->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--.row-->
                        </div>

                        <!--Testimonials-->
                        <div class="testimonials margin-top-20">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3 class="subtitle">Testimonials</h3>
                                    <div class="arrows">
                                        <span class="pe-7s-angle-left prev-testi"></span>
                                        <span class="pe-7s-angle-right next-testi"></span>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div class="owl">

                                        @foreach ($testimonials as $testimonial)
                                        <!-- Testimonial - {{ $testimonial->id }} -->
                                        <div class="testimonial">
                                            <div class="testi-content">
                                                <p>{{ $testimonial->description }}</p>
                                            </div>
                                            <img src="{{ asset('storage/'.$testimonial->image) }}" alt="">
                                            <h4>{{ $testimonial->name }}</h4>
                                            <h5>{{ $testimonial->designation }}</h5>
                                        </div>                                            
                                        @endforeach

                                    </div>
                                    <!--.owl-->
                                </div>
                            </div>
                        </div>
                        <!--.testimonials-->


                        <!--Fun Facts-->
                        <div class="fun-facts margin-top-60">
                            <div class="row">
                                <div class="col-md-2">
                                    <h3 class="subtitle">Fun Facts</h3>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item">
                                                <span class="pe-7s-smile"></span>
                                                <h4>50+</h4>
                                                <h5>Happy Clients</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12 xs-margin-top-30">
                                            <div class="item">
                                                <span class="pe-7s-light"></span>
                                                <h4>2+</h4>
                                                <h5>Years Experience</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12 sm-xs-margin-top-30">
                                            <div class="item">
                                                <span class="pe-7s-medal"></span>
                                                <h4>2</h4>
                                                <h5>Awards Won</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12 sm-xs-margin-top-30">
                                            <div class="item">
                                                <span class="pe-7s-like2"></span>
                                                <h4>100+</h4>
                                                <h5>Projects Done</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!--.row-->
                                </div>
                                <!--.col-md-10-->
                            </div>
                            <!--.row-->
                        </div>
                        <!--.fun-facts-->

                    </div>
                    <!--.container-->
                </div>
                <!--.sec__content-->
            </div>
            <!--.scroll__content-->
        </div>
        <!--.content__inner-->
    </section>
    <!--End About Section-->


    <!--Start Resume Section-->
    <section class="content sec_content resume" id="resume">
        <div class="content__inner">
            <a class="backToHome" href="#home" title="Back To Home">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <div class="scroll__content">
                <div class="sec__content padding-top-80 padding-bottom-80">
                    <div class="container">
                        <div class="sec_title">
                            <h2>Resume</h2>
                        </div>
                        <div class="sec_title">
                            <button class="btn btn-primary"><a href="{{ route('user.download-resume') }}">Download Resume</a></button>
                        </div>
                        <div class="row">

                            <!--Education-->
                            <div class="col-md-6">
                                <h3 class="subtitle">Education</h3>

                                @foreach ($educations as $education)
                                <div class="item">
                                    <div class="date">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> <span>{{ $education->from }} - {{ $education->to }}</span>
                                    </div>
                                    <div class="content">
                                        <h4>{{ $education->title }}</h4>
                                        <p>{{ $education->school }}</p>
                                    </div>
                                </div>                                    
                                @endforeach

                            </div>
                            <!--.col-md-6-->

                            <!--Experience-->
                            <div class="col-md-6 sm-xs-margin-top-60">
                                <h3 class="subtitle">Experience</h3>

                                @foreach ($works as $work)
                                    <div class="item">
                                        <div class="date">
                                            <i class="fa fa-calendar" aria-hidden="true"></i> <span>{{ $work->from }} - {{ $work->to }}</span>
                                        </div>
                                        <div class="content">
                                            <h4>{{ $work->job }}</h4>
                                            <p>{{ $work->company }}</p>
                                        </div>
                                    </div>                                   
                                @endforeach
                            </div>
                            <!--.col-md-6-->
                        </div>
                        <!--.row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skills">

                                    <h3 class="subtitle margin-top-60">My Skills</h3>

                                    @foreach ($skills as $skill)
                                        @if ($skill->skill_type == 'technical')
                                            <!-- Skill -->
                                            <div class="skill">
                                                <h5 class="name">{{ $skill->title }}</h5>
                                                <span class="percentage">{{ $skill->profieciency }}%</span>
                                                <div class="progress_bg">
                                                    <div class="progress_bar"></div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    

                                </div>
                                <!--.skills-->
                            </div>
                            <div class="col-md-6">
                                <!-- Skills -->
                                <div class="skills">

                                    <h3 class="subtitle margin-top-60">Languages</h3>

                                    @foreach ($skills as $skill)
                                        @if ($skill->skill_type == 'language')
                                            <!-- Lang -->
                                            <div class="skill">
                                                <h5 class="name">{{ $skill->title }}</h5>
                                                <span class="percentage">{{ $skill->profieciency }}%</span>
                                                <div class="progress_bg">
                                                    <div class="progress_bar"></div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                                <!--.skills-->
                            </div>
                        </div>
                    </div>
                    <!--.container-->
                </div>
                <!--.sec__content-->
            </div>
            <!--.scroll__content-->
        </div>
        <!--.content__inner-->
    </section>
    <!--End Resume Section-->


    <!--Start Portfolio Section-->
    <section class="content sec_content portfolio" id="portfolio">
        <div class="content__inner">
            <a class="backToHome" href="#home" title="Back To Home">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <div class="scroll__content">
                <div class="sec__content padding-top-80 padding-bottom-80">
                    <div class="container">
                        <div class="sec_title">
                            <h2>Portfolio</h2>
                        </div>
                        <ul class="list-unstyled ul-filter">
                            <li data-filter="*" class="active_filter">all</li>
                            <li data-filter=".coding">coding</li>
                            <li data-filter=".design">Design</li>
                        </ul>

                        <div class="row grid">

                            @foreach ($portfolios as $p)
                                @if ($p->category == 'coding')
                                    <!--project (open url)-->
                                    <div class="col-xs-12 col-sm-6 col-md-4 item coding">
                                        <div class="project_content">
                                            <a href="{{ $p->link }}" target="_blank">
                                                <div class="my__img">
                                                    <img src="{{ asset('storage/'.$p->image) }}" alt='' width="400px" height="200px">
                                                </div>
                                                <div class="info">
                                                    <div class="display-table">
                                                        <div class="display-table-cell">
                                                            <h3>{{ $p->title }}</h3>
                                                            <p>Coding</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @else
                                    <!--project (Image Overlay)-->
                                    <div class="col-xs-12 col-sm-6 col-md-4 item design">
                                        <div class="project_content">
                                            <div class="my_img" data-mfp-src="{{ asset('storage/'.$p->image) }}">
                                                <img src="{{ asset('storage/'.$p->image) }}" alt='' width="400px" height="300px">
                                            </div>
                                            <div class="info">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <a href="#" class="image_overlay">
                                                            <h3>{{ $p->title }}</h3>
                                                            <p>Design</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <!--.container-->
                </div>
                <!--.sec__content-->
            </div>
            <!--.scroll__content-->
        </div>
        <!--.content__inner-->
    </section>
    <!--End Portfolio Section-->


    <!--Start Blog Section-->
    <section class="blog sec_content content" id="blog">
        <div class="content__inner">
            <a class="backToHome" href="#home" title="Back To Home">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <div class="scroll__content">
                <div class="sec__content padding-top-80 padding-bottom-80">
                    <div class="container">
                        <div class="sec_title">
                            <h2>My Blog</h2>
                        </div>

                        <div class="row">

                            <!-- article 1 -->
                            <!-- <div class="col-sm-6">
                                <div class="item">
                                    <a href="#">
                                        <div class="blog__img">
                                            <i class="pe-7s-news-paper"></i>
                                            <img src="frontend\images\blog\blog-1.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="content matchH">
                                        <p class="info">March 19, 2018</p>
                                        <h3>
                                            <a href="#">100 Ways to be more happy</a>
                                        </h3>
                                    </div>
                                </div>
                            </div> -->

                            <!-- article 2 -->
                            <!-- <div class="col-sm-6">
                                <div class="item">
                                    <a href="#">
                                        <div class="blog__img">
                                            <i class="pe-7s-news-paper"></i>
                                            <img src="frontend\images\blog\blog-2.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="content matchH">
                                        <p class="info">March 19, 2018</p>
                                        <h3>
                                            <a href="#">Tips to losing more weight</a>
                                        </h3>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="row">

                            <!-- article 3 -->
                            <!-- <div class="col-sm-6">
                                <div class="item">
                                    <a href="#">
                                        <div class="blog__img">
                                            <i class="pe-7s-news-paper"></i>
                                            <img src="frontend\images\blog\blog-3.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="content matchH">
                                        <p class="info">March 19, 2018</p>
                                        <h3>
                                            <a href="#">100 Ways to be more happy</a>
                                        </h3>
                                    </div>
                                </div>
                            </div> -->

                            <!-- article 4 -->
                            <!-- <div class="col-sm-6">
                                <div class="item">
                                    <a href="#">
                                        <div class="blog__img">
                                            <i class="pe-7s-news-paper"></i>
                                            <img src="frontend\images\blog\blog-4.jpg" alt="">
                                        </div>
                                    </a>
                                    <div class="content matchH">
                                        <p class="info">March 19, 2018</p>
                                        <h3>
                                            <a href="#">Tips to losing more weight</a>
                                        </h3>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="sec_title">
                            <h2>Coming Soon</h2>
                            <h1>Sit back and relax until then.</h1>
                        </div>

                    </div>
                    <!--.container-->
                </div>
                <!--.sec__content-->
            </div>
            <!--.scroll__content-->
        </div>
        <!--.content__inner-->
    </section>
    <!--End Blog Section-->


    <!--Start Contact Section-->
    <section class="content sec_content contact" id="contact">
        <div class="content__inner">
            <a class="backToHome" href="#home" title="Back To Home">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
            <div class="scroll__content">
                <div class="sec__content padding-top-80 padding-bottom-80">
                    <div class="container">
                        <div class="sec_title">
                            <h2>Contact Me</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-5">
                                <h3 class="subtitle margin-top-60">Get in Touch</h3>
                                <p>Need a Freelancer, Developer, Designer, Guide? <br> Go on fill the form!<strong></strong></p>
                                <div class="info">

                                    <div class="item">
                                        <span class="pe-7s-map-marker pe-3x pe-va icon"></span>
                                        <div>
                                            <span>Find Me</span>
                                            <p>AndhraPradesh, India</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <span class="pe-7s-mail pe-3x pe-va icon"></span>
                                        <div>
                                            <span>Mail Me</span>
                                            <p><a href="mailto:varma.dev.01@gmail.com">varma.dev.01@gmail.com</a></p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <span class="pe-7s-call pe-3x pe-va icon"></span>
                                        <div>
                                            <span>Call Me</span>
                                            <p><a href="tel:+919666855044">+91 9666855044</a></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-7">
                                <h3 class="subtitle margin-top-60">Contact Form</h3>
                                <div class="contact_form">
                                    <form action="{{ route('user.store-contact') }}" method="POST">
                                        @csrf
                                        <input placeholder="Name" name="name" type="text" class="form-control" required>
                                        <input placeholder="E-mail" name="email" type="email" class="form-control" required>
                                        <textarea placeholder="Message" name="message" class="form-control" required></textarea>
                                        
                                        <button type="submit" class="btn">Send Message</button>

                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--.container-->
                </div>
                <!--.sec__content-->
            </div>
            <!--.scroll__content-->
        </div>
        <!--.content__inner-->
    </section>
    <!--End Contact Section-->
@endsection
