@extends('layouts.app')

@section('content')
<!-- breadcrumb -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>About Us</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about__pic">
                    <img src="img/about/about-us.webp" alt="" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Who We Are ?</h4>
                    <p>
                        Contextual advertising programs sometimes have strict policies
                        that need to be adhered too. Let’s take Google as an example.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Who We Do ?</h4>
                    <p>
                        In this digital generation where information can be easily
                        obtained within seconds, business cards still have retained
                        their importance.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="about__item">
                    <h4>Why Choose Us</h4>
                    <p>
                        A two or three storey house is the ideal way to maximise the
                        piece of earth on which our home sits, but for older or infirm
                        people.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="testimonial__text">
                    <span class="icon_quotations"></span>
                    <p>
                        “Going out after work? Take your butane curling iron with you to
                        the office, heat it up, style your hair before you leave the
                        office and you won’t have to make a trip back home.”
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__pic">
                            <img src="img/about/testimonial-profile.webp" alt="" />
                        </div>
                        <div class="testimonial__author__text">
                            <h5>Augusta Schultz</h5>
                            <p>Fashion Design</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="testimonial__pic set-bg" data-setbg="img/about/testimonial-pic.jpg"></div>
            </div>
        </div>
    </div>
</section>

<section class="counter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">102</h2>
                    </div>
                    <span>Our <br />Clients</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">30</h2>
                    </div>
                    <span>Total <br />Categories</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">102</h2>
                    </div>
                    <span>In <br />Country</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter__item">
                    <div class="counter__item__number">
                        <h2 class="cn_num">98</h2>
                        <strong>%</strong>
                    </div>
                    <span>Happy <br />Customer</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Team</span>
                    <h2>Meet Our Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="img/about/team-1.webp" alt="" />
                    <h4>John Smith</h4>
                    <span>C.E.O</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="img/about/team-2.png" alt="" />
                    <h4>Akhmadheta Hafid</h4>
                    <span>C.T.O</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="img/about/team-3.jpg" alt="" />
                    <h4>Rosi Latansa</h4>
                    <span>Manager</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item">
                    <img src="img/about/team-4.webp" alt="" />
                    <h4>Lucy Myers</h4>
                    <span>Manager</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clients spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Partner</span>
                    <h2>Happy Clients</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-1.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-2.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-3.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-4.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-5.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-6.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-7.png" alt="" /></a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                <a href="#" class="client__item"><img src="img/about/company-8.png" alt="" /></a>
            </div>
        </div>
    </div>
</section>
@endsection