@extends('component.master')
@section('content')
<div id="scroll-container">
    <div id="content-wrap">

        <div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-content-parallax">
            <div class="page-header-inner tt-wrap">

                <!-- Begin page header image 
        ============================= -->
                <div class="ph-image">
                    <div class="ph-image-inner">
                        <img src="assets/img/page-header/ph-5.jpg" alt="Image">
                    </div>
                </div>
                
                <div class="ph-caption">
                    <h1 class="ph-caption-title ph-appear">About</h1>
                    <div class="ph-caption-title-ghost ph-appear">About</div>
                    <div class="ph-caption-subtitle ph-appear">Abhinav Kapila</div>
                </div>
                <!-- End page header caption -->

            </div> <!-- /.page-header-inner -->

            <!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset) 
    ============================== -->
            <a href="#page-content" class="scroll-down-circle" data-offset="30">
                <div class="sdc-inner ph-appear">
                    <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                    <svg viewBox="0 0 500 500">
                        <defs>
                            <path
                                d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                id="textcircle"></path>
                        </defs>
                        <text dy="30">
                            <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                        </text>
                    </svg>
                </div> <!-- /.sdc-inner -->
            </a>
            <!-- End scroll down circle -->

            <!-- Begin made with love 
    ========================== -->
            <div class="made-with-love ph-appear">
                <div class="mwl-inner">
                    <div class="mwl-text">Made with</div>
                    <div class="mwl-icon"><i class="far fa-heart"></i></div>
                </div>
            </div>
            <!-- End made with love -->

        </div>
        <!-- End page header -->
    </div>

    <section id="about" class="st-about-wrap">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">ABOUT ME</h4>
                <h2 class="st-section-heading-subtitle">ABOUT ME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wo fadeInLeft">
                    <div class="st-about-img-wrap">
                        <div class="st-about-img st-dynamic-bg st-bg" data-src="assets2/img/section/about.jpg"></div>
                    </div>
                    <div class="st-height-b0 st-height-lg-b30"></div>
                </div>
                <div class="col-lg-6">
                    <div class="st-vertical-middle">
                        <div class="st-vertical-middle-in">
                            <div class="st-text-block st-style1">
                                <h2 class="st-text-block-title">Hi There! I'm Abhinav Kapila</h2>
                                <h4 class="st-text-block-subtitle">Visual Designer</h4>
                                <div class="st-text-block-text">
                                    <p>I am a Visual Designer with a strong focus on digital branding. Visul design
                                        seeks to attract, inspire, create desires and motivate people to respond to
                                        messages, with a view to making a favorable impact.</p>
                                </div>
                                <ul class="st-text-block-details st-mp0">
                                    <li><span>Birthday</span> : <span>May 07, 1990</span></li>
                                    <li><span>Phone</span> : <span>+1 876-369-9009</span></li>
                                    <li><span>Email</span> : <span>devis@example.com</span></li>
                                    <li><span>From</span> : <span>2661 Hich meadow lane bear creek</span></li>
                                    <li><span>Language</span> : <span>English, Germanic</span></li>
                                    <li><span>Freelance</span> : <span>Available</span></li>
                                </ul>
                                <div class="st-text-block-btn">
                                    <a href="#" class="st-btn st-style1 st-color1">Download CV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="resume" class="st-dark-bg">
        <div class="st-height-b100 st-height-lg-b80"></div>
        <div class="container">
            <div class="st-section-heading st-style1">
                <h4 class="st-section-heading-title">RESUME</h4>
                <h2 class="st-section-heading-subtitle">RESUME</h2>
            </div>
            <div class="st-height-b25 st-height-lg-b25"></div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Experience -->
                <div class="col-lg-6">
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="assets2/img/icon/resume-icon1.png" alt="resume-icon">
                            <h2 class="st-resume-heading-title">Experience</h2>
                        </div>

                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Senior UX/UI Designer</h3>
                                <div class="st-resume-timeline-duration">Jan 2020 - Present</div>
                                <h4 class="st-resume-timeline-subtitle">Bergnaum, Hills and Howe</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>
                            <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Product Designer</h3>
                                <div class="st-resume-timeline-duration">Jan 2016 - December 2019</div>
                                <h4 class="st-resume-timeline-subtitle">Langosh, Sipes and Raynor</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>
                            <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">UI/UX Designer</h3>
                                <div class="st-resume-timeline-duration">Jan 2014 - December 2015</div>
                                <h4 class="st-resume-timeline-subtitle">Strosin, Maggio and Homenick</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>
                            <!-- st-resume-timeline -->
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="col-lg-6">

                    <div class="st-height-b0 st-height-lg-b50"></div>
                    <div class="st-resume-wrap">
                        <div class="st-resume-heading">
                            <img src="assets2/img/icon/resume-icon2.png" alt="resume-icon">
                            <h2 class="st-resume-heading-title">Education</h2>
                        </div>
                        <div class="st-height-b50 st-height-lg-b30"></div>

                        <div class="st-resume-timeline-wrap">
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Master of Computer Science</h3>
                                <div class="st-resume-timeline-duration">2015 - 2016</div>
                                <h4 class="st-resume-timeline-subtitle">University of XYZ</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>
                            <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Bachelor of Computer Science</h3>
                                <div class="st-resume-timeline-duration">2010 - 2014</div>
                                <h4 class="st-resume-timeline-subtitle">University of ABC</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>
                            <!-- st-resume-timeline -->
                            <div class="st-height-b50 st-height-lg-b30"></div>
                            <div class="st-resume-timeline">
                                <h3 class="st-resume-timeline-title">Diploma in Computer Science</h3>
                                <div class="st-resume-timeline-duration">2006 - 2010</div>
                                <h4 class="st-resume-timeline-subtitle">XYZ Institution</h4>
                                <div class="st-resume-timeline-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nulla,
                                        tincidunt id faucibus sed, suscipit feugiat turpis.</p>
                                </div>
                            </div>
                            <!-- st-resume-timeline -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-height-b100 st-height-lg-b80"></div>
    </section>
    @endsection