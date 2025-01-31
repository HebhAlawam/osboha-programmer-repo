@extends('layouts\app')

@section('section')
    <section id="home">
        <div class="overlay-1"></div>
        <div class="overlay-2"></div>
        <div class="main-nav">
            <div class="menu-toggle">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
        </div>
        <div class="menu-sidebar fixed">
            <div class="menu-items">
                <ul>
                    <li>
                        <a href="#home" class="home active smooth-scroll" data-text="home">home</a>
                    </li>
                    <li>
                        <a href="#about" class="about smooth-scroll" data-text="about">about</a>
                    </li>
                    <li>
                        <a href="#services" class="services smooth-scroll" data-text="services">services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="portfolio smooth-scroll" data-text="works">works</a>
                    </li>
                    <li>
                        <a href="#blog" class="blog smooth-scroll" data-text="blog">blog</a>
                    </li>
                    <li>
                        <a href="#opinions" class="opinions smooth-scroll" data-text="testimonials">testimonials</a>
                    </li>
                    <li>
                        <a href="#stats" class="stats smooth-scroll" data-text="stats">stats</a>
                    </li>
                    <li>
                        <a href="#contact" class="contact smooth-scroll" data-text="contact">contact</a>
                    </li>
                </ul>
            </div>
            <div class="social-items">
                <ul>
                    <li>
                        <a class="hint--bottom" href="https://www.facebook.com/profile.php?id=100010170575235" aria-label="Facebook" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a class="hint--bottom" href="https://www.instagram.com" aria-label="Instagram" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="hint--bottom" href="https://www.linkedin.com" aria-label="Linkedin" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a class="hint--bottom" href="https://github.com" aria-label="Github" target="_blank">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a class="hint--bottom" href="https://codepen.io" aria-label="Codepen" target="_blank">
                            <i class="fa fa-codepen"></i>
                        </a>
                    </li>
                    <li>
                        <a class="hint--bottom" href="https://www.blogger.com" aria-label="Blog" target="_blank">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="round"></div>
        <div id="home-content" class="text-center">
            <div id="home-content-inner">
                <div id="home-profile"></div>
                <h1 id="profile-heading">
                    <span id="home-profile-info"></span>
                </h1>
                <div class="scroll-indicator">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-heading">
                            <h5>Who am I ?</h5>
                            <h2> Let me talk <br />
                                <strong>about </strong>myself
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum sunt, nostrum impedit ut nihil neque molestiae consequuntur, expedita voluptate quisquam velit, quo nisi numquam quasi temporibus vero dolorem amet eius. Lorem ipsum dolor sit. <strong>
                                <i style="letter-spacing: 1px">
                                    <a href="#contact" class="smooth-scroll">cmaxime illo voluptate </a>
                                </i> </strong>ipsum, maxime illo voluptate consequuntur qui quaerat, quia ab et officiis dolorem autem nihil fuga optio quasi ipsa accusamus laudantium quod eligendi. </p>
                        <a class="btn btn-general btn-blue" href="#" title="download resume" target="_blank"">Get Resume</a>
                </div>
                <div class=" col-md-6 text-center">
                            <img src="{{asset('assets/image/profile/shefaa_1.jpg')}}" alt="Shefaa" />
                    </div>
                </div>
                <div id="progress-elements">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>HTML 5 / CSS 3 / SASS</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>95%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>Bootstrap</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>JavaScript / Typescript / Vue.js</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>Docker</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>PHP / Laravel</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>MySql / PostgreSQL</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>Azure</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>65%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="skill">
                                    <h4>Kubernetes / Helm</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-heading">
                            <h5>What do i offer?</h5>
                            <h2> Special <br />
                                <strong>Services</strong> for you
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="service-boxes">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <i class="fa fa-laptop i-blue" aria-hidden="true"></i>
                                <h3>Infographic design</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <i class="fa fa-code i-red" aria-hidden="true"></i>
                                <h3>Web development</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <i class="fa fa-life-ring i-pink" aria-hidden="true"></i>
                                <h3>Support</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <i class="fa fa-paper-plane-o i-green" aria-hidden="true"></i>
                                <h3>Boost your apps</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <i class="fa fa-search i-brown" aria-hidden="true"></i>
                                <h3>SEO</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-box text-center">
                                <i class="fa fa-thumbs-o-up i-yellow" aria-hidden="true"></i>
                                <h3>Freiendly Services</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-heading">
                            <h5>Lorem ipsum?</h5>
                            <h2> My <br />Lastest <strong>Works</strong>
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="isotope-filters">
                            <button class="btn active" data-filter="*">
                                <span>All</span>
                            </button>
                            <button class="btn" data-filter=".design">
                                <span>Designs</span>
                            </button>
                            <button class="btn" data-filter=".web">
                                <span>Website</span>
                            </button>
                            <button class="btn" data-filter=".front">
                                <span>Frontend</span>
                            </button>
                            <button class="btn" data-filter=".back">
                                <span>Backend</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio-wrapper">
                <div class="container-fluid">
                    <div class="row no-gutters">
                        <div id="isotope-container">
                            <div class="col-md-3 col-sm-6 col-xs-12 design">
                                <div class="portfolio-item">
                                    <a href="#" title="portfolio" target="_blank">
                                        <img src="{{asset('assets/image/infographic/القراءة_الجردية.png')}}" class="img-responsive" alt="Reading" />
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <h3>Read more effectively</h3>
                                                <span></span>
                                                <p>Lorem ipsum dolor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 design">
                                <div class="portfolio-item">
                                    <a href="#" title="portfolio" target="_blank">
                                        <img src="{{asset('assets/image/infographic/الاقتداء_بالنبي.png')}}" class="img-responsive" alt="Prophet" />
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <h3>Prophet Muhammad</h3>
                                                <span></span>
                                                <p>Lorem ipsum dolor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web front">
                                <div class="portfolio-item">
                                    <a href="#" title="portfolio" target="_blank">
                                        <img src="{{asset('assets/image/portfolio/portfolio-01.png')}}" class="img-responsive" alt="portfolio" />
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <h3>Portfolio</h3>
                                                <span></span>
                                                <p>Lorem ipsum dolor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 back">
                                <div class="portfolio-item">
                                    <a href="#" title="portfolio" target="_blank">
                                        <img src="{{asset('assets/image/portfolio/portfolio-01.png')}}" class="img-responsive" alt="portfolio" />
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <h3>Portfolio</h3>
                                                <span></span>
                                                <p>Lorem ipsum dolor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web front">
                                <div class="portfolio-item">
                                    <a href="#" title="portfolio" target="_blank">
                                        <img src="{{asset('assets/image/portfolio/portfolio-01.png')}}" class="img-responsive" alt="portfolio" />
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <h3>Portfolio</h3>
                                                <span></span>
                                                <p>Lorem ipsum dolor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12 web back">
                                <div class="portfolio-item">
                                    <a href="#" title="portfolio" target="_blank">
                                        <img src="{{asset('assets/image/portfolio/portfolio-01.png')}}" class="img-responsive" alt="portfolio" />
                                        <div class="portfolio-item-overlay">
                                            <div class="portfolio-item-details text-center">
                                                <h3>Portfolio</h3>
                                                <span></span>
                                                <p>Lorem ipsum dolor</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio-btn text-center">
                                <a href="#" class="btn btn-general btn-blue" target="_blank" title="see more">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-4">
                        <div id="blog-left">
                            <div class="vertical-heading">
                                <h5>Lorem ipsum</h5>
                                <h2>Lastest<br />
                                    <strong>blog</strong> posts
                                </h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis ratione fuga sapiente atque esse vitae exercitationem, dolorum soluta! Doloremque molestiae mollitia culpa dolore voluptatibus aliquid amet quos. Maxime, dolorem sit.</p>
                            <div id="blog-btn">
                                <a class="btn btn-general btn-blue" aria-label="Blog" href="https://blogger.com" title="go to blog" target="_blank">Go to blog</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-8">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 non-padding">
                                <div class="blog-post">
                                    <h4>Lorem ipsum dolor, sit amet!</h4>
                                    <p>Esse illo earum odit unde aspernatur quod dolore beatae nesciunt quas quasi magni animi exercitationem vel maiores possimus iusto hic, totam in!</p>
                                    <a href="#" title="see the post" target="_blank">See the post ➜</a>
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-8 col-xs-6 post-author">
                                                <p><img src="{{asset('assets/image/blog/author.webp')}}" alt="author" class="img-circle" /> John Doe</p>
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-6 post-date">
                                                <p class="text-right">December 03, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 non-padding">
                                <div class="blog-post">
                                    <h4>Lorem ipsum dolor, sit amet!</h4>
                                    <p>Esse illo earum odit unde aspernatur quod dolore beatae nesciunt quas quasi magni animi exercitationem vel maiores possimus iusto hic, totam in!</p>
                                    <a href="#" title="see the post" target="_blank">See the post ➜</a>
                                    <div class="post-meta">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-8 col-xs-6 post-author">
                                                <p><img src="{{asset('assets/image/blog/author.webp')}}" alt="author" class="img-circle" /> John Doe</p>
                                            </div>
                                            <div class="col-md-6 col-sm-4 col-xs-6 post-date">
                                                <p class="text-right">December 03, 2018</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="opinions">
        <div id="advice">
            <div class="content-box-md">
                <div id="services-tabs">
                    <ul class="text-center">
                        <li>
                            <a href="#service-tab-1">Be Creative</a>
                        </li>
                        <li>
                            <a href="#service-tab-2">Get your idea</a>
                        </li>
                        <li>
                            <a href="#service-tab-3">Desgin</a>
                        </li>
                        <li>
                            <a href="#service-tab-4">Code</a>
                        </li>
                    </ul>
                    <div id="service-tab-1" class="service-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 image-tab image-tab-01"></div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>01</h2>
                                        <h3>Lorem ipsum dolor sit amet.</h3>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit delectus dignissimos ex aut, nihil iure beatae consequuntur fuga distinctio aspernatur odio magni maiores aperiam ut quisquam nesciunt numquam repellendus amet! </p>
                                        <div id="services-02-btn-01">
                                            <a class="btn btn-general btn-blue smooth-scroll" href="#contact" title="get in touch">Get in touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service-tab-2" class="service-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 image-tab image-tab-02"></div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>02</h2>
                                        <h3>Lorem ipsum dolor sit amet.</h3>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit delectus dignissimos ex aut, nihil iure beatae consequuntur fuga distinctio aspernatur odio magni maiores aperiam ut quisquam nesciunt numquam repellendus amet! </p>
                                        <div id="services-02-btn-02">
                                            <a class="btn btn-general btn-blue smooth-scroll" href="#contact" title="get in touch">Get in touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service-tab-3" class="service-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 image-tab image-tab-03"></div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>03</h2>
                                        <h3>Lorem ipsum dolor sit amet.</h3>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit delectus dignissimos ex aut, nihil iure beatae consequuntur fuga distinctio aspernatur odio magni maiores aperiam ut quisquam nesciunt numquam repellendus amet! </p>
                                        <div id="services-02-btn-03">
                                            <a class="btn btn-general btn-blue smooth-scroll" href="#contact" title="get in touch">Get in touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="service-tab-4" class="service-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 image-tab image-tab-04"></div>
                                <div class="col-md-6">
                                    <div class="tab-bg">
                                        <h2>04</h2>
                                        <h3>Lorem ipsum dolor sit amet.</h3>
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit delectus dignissimos ex aut, nihil iure beatae consequuntur fuga distinctio aspernatur odio magni maiores aperiam ut quisquam nesciunt numquam repellendus amet! </p>
                                        <div id="services-02-btn-04">
                                            <a class="btn btn-general btn-blue smooth-scroll" href="#contact" title="get in touch">Get in touch</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="vertical-heading">
                            <h5>Lorem ipsum?</h5>
                            <h2><strong>Customer</strong> feedback</h2>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div id="testimonial-slider" class="owl-carousel owl-theme">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3>Satisfaction level</h3>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="stars text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="review"> Dolor sit amet consectetur adipisicing <a href="#" title="website" target="_blank" class="testimonial_link">
                                        <b>
                                            <i> example.org </i>
                                        </b>
                                    </a> lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, nesciunt? Iste deleniti beatae, tenetur cumque nisi molestiae eaque unde possimus ad illo, architecto quod vero officiis rem, suscipit ab ipsam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consectetur fugiat consequatur, totam quasi sed laboriosam consequuntur itaque, dicta enim voluptates harum adipisci. Culpa fuga alias non impedit consectetur rem! </p>
                                <div class="author">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="author-img">
                                                <img src="{{asset('assets/image/profile/shefaa_2.jpg')}}" alt="client" class="img-circle" />
                                            </div>
                                            <div class="author-name-des">
                                                <p>Shefaa Al Deek</p>
                                                <p class="testimonial_work">
                                                    <i>Software Engineer</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3>Satisfaction level</h3>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="stars text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="review"> Dolor sit amet consectetur adipisicing <a href="#" title="website" target="_blank" class="testimonial_link">
                                        <b>
                                            <i> example.org </i>
                                        </b>
                                    </a> lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, nesciunt? Iste deleniti beatae, tenetur cumque nisi molestiae eaque unde possimus ad illo, architecto quod vero officiis rem, suscipit ab ipsam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consectetur fugiat consequatur, totam quasi sed laboriosam consequuntur itaque, dicta enim voluptates harum adipisci. Culpa fuga alias non impedit consectetur rem! </p>
                                <div class="author">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="author-img">
                                                <img src="{{asset('assets/image/profile/shefaa_2.jpg')}}" alt="client" class="img-circle" />
                                            </div>
                                            <div class="author-name-des">
                                                <p>Shefaa Al Deek</p>
                                                <p class="testimonial_work">
                                                    <i>Software Engineer</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3>Satisfaction level</h3>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="stars text-right">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="review"> Dolor sit amet consectetur adipisicing <a href="#" title="website" target="_blank" class="testimonial_link">
                                        <b>
                                            <i> example.org </i>
                                        </b>
                                    </a> lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, nesciunt? Iste deleniti beatae, tenetur cumque nisi molestiae eaque unde possimus ad illo, architecto quod vero officiis rem, suscipit ab ipsam? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem consectetur fugiat consequatur, totam quasi sed laboriosam consequuntur itaque, dicta enim voluptates harum adipisci. Culpa fuga alias non impedit consectetur rem! </p>
                                <div class="author">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="author-img">
                                                <img src="{{asset('assets/image/profile/shefaa_2.jpg')}}" alt="client" class="img-circle" />
                                            </div>
                                            <div class="author-name-des">
                                                <p>Shefaa Al Deek</p>
                                                <p class="testimonial_work">
                                                    <i>Software Engineer</i>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="stats">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="vertical-heading">
                            <h5>Lorem ipsum</h5>
                            <h2> Funny <br />
                                <strong>statictics </strong> facts
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="stats-item text-center">
                            <i class="fa fa-code"></i>
                            <h3 class="counter">13000</h3>
                            <p>Lines code</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="stats-item text-center">
                            <i class="fa fa-moon-o"></i>
                            <h3 class="counter">11</h3>
                            <p>Sleepless nights</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="stats-item text-center">
                            <i class="fa fa-coffee"></i>
                            <h3 class="counter">1000</h3>
                            <p>Cups of coffee</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="stats-item text-center">
                            <i class="fa fa-clock-o"></i>
                            <h3 class="counter">104</h3>
                            <p>Working hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="contact-left">
                            <div class="vertical-heading">
                                <h5>Lorem ipsum</h5>
                                <h2> Get <br /> in <strong>touch</strong>
                                </h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, unde. Molestiae, fugit nulla? Voluptatibus blanditiis iure quod, possimus, error debitis, porro incidunt nihil quis eos veniam ex id ipsa recusandae.</p>
                            <div id="offices">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="office">
                                            <ul class="office-details">
                                                <li>
                                                    <i class="fa fa-mobile"></i>
                                                    <span>+111 22 333 44 55</span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope"></i>
                                                    <span>
                                                        <a class="hint--bottom" href="mailto:example@gmail.com" aria-label="Mesaj göndər" rel="noopener">example@gmail.com</a>
                                                    </span>
                                                </li>
                                                <li>
                                                    <i class="fa fa-map-marker"></i>
                                                    <span>London, England</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="social-list">
                                <li>
                                    <a class="hint--bottom" href="https://www.facebook.com" aria-label="Facebook" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="hint--bottom" href="https://www.instagram.com" aria-label="Instagram" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="hint--bottom" href="https://www.linkedin.com/in/fada-arzimanli" aria-label="Linkedin" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/typed.min.js')}}"></script>
    <script src="{{asset('assets/js/sketch.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.iMissYou.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.responsiveTabs.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        function Particle(x, y, radius) {
            this.init(x, y, radius);
        }

        Particle.prototype = {
            init: function(x, y, radius) {
                this.alive = true;

                this.radius = radius || 10;
                this.wander = 0.15;
                this.theta = random(TWO_PI);
                this.drag = 0.92;
                this.color = "#fff";

                this.x = x || 0.0;
                this.y = y || 0.0;

                this.vx = 0.0;
                this.vy = 0.0;
            },

            move: function() {
                this.x += this.vx;
                this.y += this.vy;

                this.vx *= this.drag;
                this.vy *= this.drag;

                this.theta += random(-0.5, 0.5) * this.wander;
                this.vx += sin(this.theta) * 0.1;
                this.vy += cos(this.theta) * 0.1;

                this.radius *= 0.96;
                this.alive = this.radius > 0.5;
            },

            draw: function(ctx) {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, TWO_PI);
                ctx.fillStyle = this.color;
                ctx.fill();
            },
        };

        var MAX_PARTICLES = 280;
        var COLOURS = ["#69D2E7", "#A7DBD8", "#E0E4CC", "#F38630", "#FA6900", "#FF4E50", "#F9D423"];

        var particles = [];
        var pool = [];

        var demo = Sketch.create({
            container: document.getElementById("container"),
            retina: "auto",
        });

        demo.setup = function() {
            // Set off some initial particles.
            var i, x, y;

            for (i = 0; i < 20; i++) {
                x = demo.width * 0.5 + random(-100, 100);
                y = demo.height * 0.5 + random(-100, 100);
                demo.spawn(x, y);
            }
        };

        demo.spawn = function(x, y) {
            var particle, theta, force;

            if (particles.length >= MAX_PARTICLES) pool.push(particles.shift());

            particle = pool.length ? pool.pop() : new Particle();
            particle.init(x, y, random(5, 40));

            particle.wander = random(0.5, 2.0);
            particle.color = random(COLOURS);
            particle.drag = random(0.9, 0.99);

            theta = random(TWO_PI);
            force = random(2, 8);

            particle.vx = sin(theta) * force;
            particle.vy = cos(theta) * force;

            particles.push(particle);
        };

        demo.update = function() {
            var i, particle;

            for (i = particles.length - 1; i >= 0; i--) {
                particle = particles[i];

                if (particle.alive) particle.move();
                else pool.push(particles.splice(i, 1)[0]);
            }
        };

        demo.draw = function() {
            demo.globalCompositeOperation = "lighter";

            for (var i = particles.length - 1; i >= 0; i--) {
                particles[i].draw(demo);
            }
        };

        demo.mousemove = function() {
            var particle, theta, force, touch, max, i, j, n;

            for (i = 0, n = demo.touches.length; i < n; i++) {
                (touch = demo.touches[i]), (max = random(1, 4));
                for (j = 0; j < max; j++) {
                    demo.spawn(touch.x, touch.y);
                }
            }
        };
    </script>
@endsection