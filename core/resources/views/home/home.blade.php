@extends('layouts.home')

@section('title', 'Index Page')

@section('content')

    <!--Banner Wrap Start-->
	<div class="container">
    <div class="gt_banner default_width">
        <div class="swiper-container" id="swiper-container">

              <ul class="swiper-wrapper">

                @foreach($sliders as $slider)
				<video class="hero-video" playsinline="" autoplay="" loop="">
					  <source src="../extra-images/hero-desktop-en.mp4" type="video/mp4">
					  <source src="../extra-images/hero-desktop-en.webm" type="video/webm">
						</video>

                    <div class="gt_banner_text gt_slide_1">
                        <div class="col-md-6 col-md-offset-1">
						<h1 class="heavy-title">INFLUENCE YOUR WORLD</h1>
						<h2 class="subtitle serif">Your voice + our voice = the voice of change</h2>
						<a href="#/sign-up" class="btn btn-lg btn-default">Get Started</a>
						</div>
                    </div>

                @endforeach

            </ul>
        </div>
    </div>
	</div>
    <!--Banner Wrap End-->
<div col-md-10 col-sm-6 col-xs-4 >
    <div class="gt_main_content_wrap">
        <!--Banner Services Wrap Start-->
        {{-- <div class="gt_servicer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                </div>
            </div>
        </div> --}}


        <!--Banner Services Wrap End-->

        <!--Offer Wrap start-->
        <!--<section class="gt_wht_offer_bg">-->
        <!--    <div class="container">-->
        <!--        <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">-->
        <!--            <h3>{{ $offer->title }}</h3>-->
        <!--            <hr>-->
        <!--            {{-- <span><img src="{{ asset('images/hdg-01.png') }}" alt=""></span> --}}-->
        <!--        </div>-->
                <!--What We Offer 2 Wrap Start-->
        <!--        <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">-->
        <!--            <div class="gt_wht_offer_wrap1">-->
        <!--                <div class="gt_wht_offer_des1">-->
        <!--                    <p class="lead" style="font-size: 18px">{!! $offer->description  !!} </p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
                <!--What We Offer 2 Wrap End-->
        <!--    </div>-->
        <!--</section>-->


        <!--Banner Services Wrap End-->
        <section class="gt_wht_offer_bg">
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                    <h2 style="font-family: open sans; text-align:center; font-weight:700;">{{ $offer->title }}</h2>
                    <hr style="margin-bottom:30px;">
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                    <div class="col-sm-4 col-xl-4 p-b-30 m-lr-auto">
                    	<p style="margin-bottom:20px; text-align: center; color:#333333"><i class="fas fa-leaf fa-3x"></i></p>
                    	<h3 style="font-family: open sans;">INSPIRE</h3>
                    	<p style="text-align: center; font-family: open sans;">Your genuine belief can turn into the motivation that others require.
                            Consider the possibility that you had the ability to get your loved ones the items and administrations they merit. You can and you will with us!</p>
                    </div>
                    <div class="col-sm-4 col-xl-4 p-b-30 m-lr-auto">
                    	<p style="margin-bottom:20px; text-align: center; color:#333333"><i class="fas fa-rocket fa-3x"></i></p>
                    	<h3 style="font-family: open sans;">SHARE</h3>
                    	<p style="text-align: center; font-family: open sans;">Give us a chance to enable you to get your thoughts into the correct ears. You're not happy with your versatile information plan or perhaps your day by day espresso is in every case just half full? Don't simply vent to your companions; tell the organizations, tell different customers, tell everybody.
                        </p>
                    </div>
                    <div class="col-sm-4 col-xl-4 p-b-30 m-lr-auto">
                    	<p style="margin-bottom:20px; text-align: center; color:#333333"><i class="fas fa-cog fa-3x"></i></p>
                    	<h3 style="font-family: open sans;">GAIN</h3>
                    	<p style="text-align: center; font-family: open sans;">With extraordinary input comes incredible prizes.
                            Answer overviews, take part in the network, and take an interest in every day lotteries. Procure focuses that can be reclaimed for remunerations of your decision (installments, gift vouchers and that's just the beginning). The more you take an interest, the more you gain.</p>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <!--offer Wrap End-->

        <!--Facts and Figure Wrap End-->
        <section class="fact_figure_bg">
            <div class="container">
                <div class="gt_hdg_1 white_hdg col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                    <h3>Our Company History</h3>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-xl-4 p-b-30 m-lr-auto">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">{{ $subcategory }}</h2>
                            <span>Total Survey Category</span>
                        </div>
                        <span class="facts_border bg_1"></span>
                    </div>
                    <div class="col-sm-4 col-xl-4 p-b-30 m-lr-auto">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">{{ $question }}</h2>
                            <span>Total Survey Question</span>
                        </div>
                        <span class="facts_border bg_2"></span>
                    </div>
                    <div class="col-sm-4 col-xl-4 p-b-30 m-lr-auto">
                        <div class="gt_facts_wrap">
                            <h2 class="counter">{{ $exam }}</h2>
                            <span>Total Survey</span>
                        </div>
                        <span class="facts_border bg_3"></span>
                    </div>

                </div>
            </div>
        </section>
        <!--Facts and Figure Wrap End-->






        <!--Popular Courses Wrap Start-->
        <section>
            <div class="container">
                <div class="gt_hdg_1">
                    <h3>Popular Survey</h3>
                    <hr>
                </div>

                <!--Popular Courses List Wrap Start-->
                <div id="filterable-item-holder-1">

					<!-- Block1 -->
                      <div class="col-sm-4 col-md-4 col-xl-4 p-b-30 m-lr-auto">
                            <div class="block1 wrap-pic-w">
                                <img src="../extra-images/1547754878.jpg" alt="IMG-BANNER">

								         <span class="block1-name ltext-102 trans-04 p-b-8">
                                           <h3>INSPIRE</h3>
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            <p>Your genuine belief can turn into the motivation that others require.</p>
                                        </span>

                                <div class="block1-txt block-text-1 ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 respon3">
                                    <div class="block1-txt-child1">
                                    </div>
                                    <div class="block1-txt-child2 p-b-4">
                                        <div class="block1-link stext-101">
											<span class="font-weight-bold">Your genuine belief can turn into the motivation that others require.  </span></br>
											<p>Consider the possibility that you had the ability to get your loved ones the items and administrations they merit. You can and you will with us!</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


						<!-- Block-2 -->
                         <div class="col-sm-4 col-md-4 col-xl-4 p-b-30 m-lr-auto">
                            <div class="block1 wrap-pic-w">
                                <img src="../extra-images/1547754899.jpg" alt="IMG-BANNER">

								         <span class="block1-name ltext-102 trans-04 p-b-8">
                                           <h3>SHARE</h3>
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            <p>Give us a chance to enable you to get your thoughts into the correct ears.</p>
                                        </span>

                                <div class="block1-txt block-text-2 ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 respon3">
                                    <div class="block1-txt-child1">
                                    </div>
                                    <div class="block1-txt-child2 p-b-4">
                                        <div class="block1-link stext-101">
											<span class="font-weight-bold">Give us a chance to enable you to get your thoughts into the correct ears. </span></br>
											<p>You're not happy with your versatile information plan or perhaps your day by day espresso is in every case just half full? Don't simply vent to your companions; tell the organizations, tell different customers, tell everybody.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


						<!-- Block-3 -->
                     <div class="col-sm-4 col-md-4 col-xl-4 p-b-30 m-lr-auto">
                            <div class="block1 wrap-pic-w">
                                <img src="../extra-images/1547754916.jpg" alt="IMG-BANNER">

								         <span class="block1-name ltext-102 trans-04 p-b-8">
                                           <h3>GAIN</h3>
                                        </span>

                                        <span class="block1-info stext-102 trans-04">
                                            <p>With extraordinary input comes incredible prizes.</p>
                                        </span>

                                <div class="block1-txt block-text-3 ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 respon3">
                                    <div class="block1-txt-child1">
                                    </div>
                                    <div class="block1-txt-child2 p-b-4">
                                        <div class="block1-link stext-101">
											<span class="font-weight-bold">With extraordinary input comes incredible prizes.</span></br>
											<p>Answer overviews, take part in the network, and take an interest in every day lotteries. Procure focuses that can be reclaimed for remunerations of your decision (installments, gift vouchers and that's just the beginning). The more you take an interest, the more you gain.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                </div>

                <!--Popular Courses List Wrap End-->
            </div>
        </section>
        <!--Popular Courses Wrap End-->







        <!-- Section End -->
        <section>
            <div class=" main-service">
                <div class="col-sm-12 col-xl-4 p-b-30 m-lr-auto">
                    <div class="row service">
                        <h3>So, are you ready to begin<br> Survey your world?</h3>
                        <p>Click below to get started.</p><br>
                        <div class="button" align="center">
                            <a href="#">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>

            <div id="team" class="section wb">
                <div class="container">
                    <div class="section-title text-center">
                        <h3 style="font-family: Qwigley; font-size: 80px; text-transform: initial; ">Testimonials</h3>
                    </div>
                    <hr>

					<div class="testimonials-wrapper">
							<div class="testimonials-bg-wrapper">
								<div class="testimonial">
								  <p class="content">Because of Raaye, I made more friends, increased my knowledge on current affairs and I have earned some pocket money for myself.</p>
    <p class="author"></p>
								</div>

								<div class="testimonial">
								  <p class="content">Raaye lets me voice my opinion, which is something I love to do. My friends can vouch for that.</p>
    <p class="author"></p>
								</div>

								<div class="testimonial">
								  <p class="content">I love that there are so many nice supportive people on here. I enjoy reading what my Raaye friends are thinking about and Raaye is a great stress reliever for me.</p>
    <p class="author"></p>
								</div>

								<div class="testimonial">
								  <p class="content">Raaye is one of the top websites to find, test and leave your personal opinion on new, up-and-coming products that are on the market.</p>
    <p class="author"></p>
								</div>

							</div>
					</div>


                </div>
            </div>
        </section>




        <!--Our Client Wrap End-->
    </div>
</div>

@endsection