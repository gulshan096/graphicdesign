@extends('component.master')
@section('content')
    <div id="page-header" class="ph-full ph-cap-sm ph-image-cropped ph-image-cover-3 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{ asset('assets/img/page-header/ph-6.jpg') }}" alt="Image">
                </div>
            </div>


            <div class="ph-caption max-width-1000">
                <h1 class="ph-caption-title ph-appear font-normal"><em>Hello stranger!</em><br> We are a
                    creative design agency based in Melbourne. We bring your <em><u>ideas</u></em> to life.
                </h1>
                <div class="ph-caption-title-ghost ph-appear">Hello!</div>

            </div>

        </div>

        <a href="#page-content" class="scroll-down-circle" data-offset="30">
            <div class="sdc-inner ph-appear">
                <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
                <svg viewBox="0 0 500 500">
                    <defs>
                        <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                            id="textcircle"></path>
                    </defs>
                    <text dy="30">
                        <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                    </text>
                </svg>
            </div>
        </a>


        <div class="made-with-love ph-appear">
            <div class="mwl-inner">
                <div class="mwl-text">Made with</div>
                <div class="mwl-icon"><i class="far fa-heart"></i></div>
            </div>
        </div>


    </div>
    <div id="page-content">

        <div class="tt-section no-padding-bottom">
            <div class="tt-section-inner">

                <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">Latest Projects</h3>
                    <h2 class="tt-heading-title">Works</h2>
                    <div class="tt-btn tt-btn-link margin-top-20">
                        <a href="portfolio-grid-creative-1.html" data-hover="See All Works">See All
                            Works</a>
                    </div>
                </div>


                <div id="portfolio-grid" class="pgi-cap-inside pgi-hover">

                    <div class="tt-grid ttgr-layout-creative-2 ttgr-not-cropped ttgr-gap-4">

                        <div class="tt-grid-items-wrap isotope-items-wrap">

                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">

                                    <div class="portfolio-grid-item">
                                        <a href="single-project-1.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">

                                            <div class="pgi-image-holder cover-opacity-2">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                                            alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">Victorian Girls</h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">People</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="tt-grid-item isotope-item creative">
                                <div class="ttgr-item-inner">

                                    <div class="portfolio-grid-item anim-parallax">
                                        <a href="single-project-2.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">

                                            <div class="pgi-image-holder cover-opacity-2">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ asset('assets/img/portfolio/portfolio-2.jpg') }}"
                                                            alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">Smithy</h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">Creative</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">

                                    <div class="portfolio-grid-item">
                                        <a href="single-project-3.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">

                                            <div class="pgi-image-holder cover-opacity-2">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-video-wrap ttgr-height">
                                                        <video class="pgi-video" loop muted preload="metadata"
                                                            poster="{{ asset('assets/vids/fashion-week.jpg') }}">
                                                            <source src="{{ asset('assets/vids/fashion-week.mp4') }}"
                                                                type="video/mp4">
                                                            <source src="{{ asset('assets/vids/fashion-week.webm') }}"
                                                                type="video/webm">
                                                        </video>
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">Washion Week</h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">People</div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="tt-grid-item isotope-item nature">
                                <div class="ttgr-item-inner">

                                    <div class="portfolio-grid-item">
                                        <a href="single-project-4.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">

                                            <div class="pgi-image-holder cover-opacity-2">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="{{ asset('assets/img/portfolio/portfolio-3.jpg') }}"
                                                            alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">Mystery Forest</h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">Nature</div>

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
        </div>


        <div class="tt-section padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p">
            <div class="tt-section-inner tt-wrap max-width-1100">

                <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-15-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">What We Do</h3>
                    <h2 class="tt-heading-title">Services</h2>
                </div>


                <div class="tt-accordion tt-ac-xlg tt-ac-borders">
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">UX / Research</h3>
                            <div class="tt-accordion-subtext">Mauris mauris ante</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div>
                        <div class="tt-accordion-content max-width-800">
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                            <div class="tt-btn tt-btn-link">
                                <a href="dummy-page.html" data-hover="Read More">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Digital Strategy</h3>
                            <div class="tt-accordion-subtext">Vivamus nisi</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div>
                        <div class="tt-accordion-content max-width-800">
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                            <div class="tt-btn tt-btn-link">
                                <a href="dummy-page.html" data-hover="Read More">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Branding</h3>
                            <div class="tt-accordion-subtext">Nam min proin eget</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div>
                        <div class="tt-accordion-content max-width-800">
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                            <div class="tt-btn tt-btn-link">
                                <a href="dummy-page.html" data-hover="Read More">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <h3 class="tt-ac-head-title">Marketing</h3>
                            <div class="tt-accordion-subtext">Condimentum sit amet</div>
                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret magnetic-item"></div>
                            </div>
                        </div>
                        <div class="tt-accordion-content max-width-800">
                            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                            </p>
                            <div class="tt-btn tt-btn-link">
                                <a href="dummy-page.html" data-hover="Read More">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div
            class="tt-section padding-top-xlg-150 padding-bottom-xlg-100 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
            <div class="tt-section-inner">

                <div class="tt-testimonials-slider ts-full-width text-center cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup"
                    data-loop="true" data-simulate-touch="true" data-speed="900">

                    <div class="swiper">

                        <div class="swiper-wrapper">

                            <div class="swiper-slide font-alter">
                                <div class="tt-ts-item">
                                    <div class="tt-ts-text">
                                        "One of the best template I've ever had. I love it! It's fully
                                        customizable, well coded, fast and responsive - fitting for all kind
                                        of devices."
                                    </div>
                                    <div class="tt-ts-subtext">- Wironimo</div>
                                </div>
                            </div>


                            <div class="swiper-slide font-alter">
                                <div class="tt-ts-item">
                                    <div class="tt-ts-text">
                                        "Brilliant template. Tons of options, many concepts, design
                                        flexibility, code quality, explanatory comments in each section for
                                        easy styling."
                                    </div>
                                    <div class="tt-ts-subtext">- Gneto</div>
                                </div>
                            </div>


                            <div class="swiper-slide font-alter">
                                <div class="tt-ts-item">
                                    <div class="tt-ts-text">
                                        "Easy to customize, plenty of choices to display your portfolio,
                                        fast loading times. Excellent support."
                                    </div>
                                    <div class="tt-ts-subtext">- Brendak</div>
                                </div>
                            </div>


                            <div class="swiper-slide font-alter">
                                <div class="tt-ts-item">
                                    <div class="tt-ts-text">
                                        "Very nice design and well organised and commented code. Also good
                                        customer service."
                                    </div>
                                    <div class="tt-ts-subtext">- Gazzzzz</div>
                                </div>
                            </div>


                            <div class="swiper-slide font-alter">
                                <div class="tt-ts-item">
                                    <div class="tt-ts-text">
                                        "I founded a bug on Iphone and Ipad and the author fixed very
                                        quickly. I appreciated his efforts and his quickness in solving the
                                        problem."
                                    </div>
                                    <div class="tt-ts-subtext">- Admanente</div>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="tt-ts-nav-prev">
                        <div class="tt-ts-nav-arrow magnetic-item"></div>
                    </div>
                    <div class="tt-ts-nav-next">
                        <div class="tt-ts-nav-arrow magnetic-item"></div>
                    </div>

                    <div class="tt-ts-pagination hide-cursor"></div>
                </div>

            </div>
        </div>


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner">

                <div class="tt-scrolling-text scr-text-stroke font-italic" data-scroll-speed="15">
                    <div class="tt-scrolling-text-inner text-dark-3"
                        data-text="Let's create something awesome together! -">
                        Let's create something awesome together! -
                    </div>
                </div>


                <div class="tt-scrolling-text scr-text-stroke scr-text-reverse font-italic" data-scroll-speed="15">
                    <div class="tt-scrolling-text-inner text-dark-3"
                        data-text="Let's create something awesome together! -">
                        Let's create something awesome together! -
                    </div>
                </div>

            </div>
        </div>


        <div
            class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 padding-left-sm-3-p padding-right-sm-3-p bg-white-accent-3">
            <div class="tt-section-inner tt-wrap max-width-900">

                <div class="tt-heading tt-heading-lg margin-bottom-10-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle text-gray">Get in Touch</h3>
                    <h2 class="tt-heading-title">Drop Us<br> a Line</h2>
                </div>


                <form id="tt-contact-form" class="tt-form-minimal anim-fadeinup">

                    <input type="hidden" name="project_name" value="yourwebsiteaddress.com">
                    <input type="hidden" name="admin_email" value="your@email.com">
                    <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com">

                    <div class="tt-row">
                        <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>Name <span class="required">*</span></label>
                                <input class="tt-form-control" type="text" name="Name" placeholder="" required>
                            </div>
                        </div>
                        <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input class="tt-form-control" type="email" name="Email" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="tt-form-group">
                        <label>Subject <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="Subject" placeholder="" required>
                    </div>
                    <div class="tt-form-group">
                        <label>Select an option <span class="required">*</span></label>
                        <select class="tt-form-control" name="option" required>
                            <option value="" disabled selected>Please choose an option</option>
                            <option value="Say Hello">Say hello</option>
                            <option value="New Project">New project</option>
                            <option value="Feedback">Feedback</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="tt-form-group">
                        <label>Message <span class="required">*</span></label>
                        <textarea class="tt-form-control" rows="6" name="Message" placeholder="" required></textarea>
                    </div>
                    <small class="tt-form-text"><em>Fields marked with an asterisk (*) are
                            required!</em></small>
                    <div class="tt-btn tt-btn-light-outline margin-top-40">
                        <button type="submit" data-hover="Send Message">Send Message</button>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
