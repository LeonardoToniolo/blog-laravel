@extends('layouts.master')

@section ('content')
    <!-- Header -->
    <header id="home">
        <!-- Background Image -->
        <div class="bg-img" style="background-image: url('{{ asset('img/background1.jpg') }}');">
            <div class="overlay"></div>
        </div>
        <!-- /Background Image -->

        @include('layouts.nav')

        <!-- home wrapper -->
        <div class="home-wrapper">
            <div class="container">
                <div class="row">

                    <!-- home content -->
                    <div class="col-md-10 col-md-offset-1">
                        <div class="home-content">
                            <h1 class="white-text">We Are Creative Agency</h1>
                            <button class="white-btn">Get Started!</button>
                            <button class="main-btn">Learn more</button>
                        </div>
                    </div>
                    <!-- /home content -->

                </div>
            </div>
        </div>
        <!-- /home wrapper -->

    </header>
    <!-- /Header -->

    <!-- Team -->
    <div id="team" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Our Team</h2>
                </div>
                <!-- /Section header -->

                @component('components.team_member')
                    @slot('photo')
                        {{ asset('img/team1.jpg') }}
                    @endslot
                    @slot('social_facebook')
                        #
                    @endslot
                    @slot('social_twitter')
                        #
                    @endslot
                    @slot('member_name')
                        Leonardo Toniolo
                    @endslot
                    @slot('member_office')
                        Web Developer
                    @endslot
                @endcomponent

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Team -->

    <!-- Blog -->
    <div id="blog" class="section md-padding bg-grey">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section header -->
                <div class="section-header text-center">
                    <h2 class="title">Recents news</h2>
                </div>
                <!-- /Section header -->

                @foreach ($posts as $post)
                    <div class="col-md-4">
                        @component('components.medium_post')
                            @slot('post_image')
                                {{ $post->img_name }}
                            @endslot
                            @slot('post_user')
                                John Doe
                            @endslot
                            @slot('post_date')
                                {{ $post->created_at->toFormattedDateString() }}
                            @endslot
                            @slot('num_comments')
                                {{ $post->num_comments }}
                            @endslot
                            @slot('post_title')
                                {{ $post->title }}
                            @endslot
                            @slot('post_text')
                                {{ $post->body }}
                            @endslot
                            @slot('post_id')
                                {{ $post->id }}
                            @endslot
                        @endcomponent
                    </div>
                @endforeach

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Blog -->

    <!-- Contact -->
    <div id="contact" class="section md-padding">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <!-- Section-header -->
                <div class="section-header text-center">
                    <h2 class="title">Get in touch</h2>
                </div>
                <!-- /Section-header -->

                <!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p><a href="tel:+55-11-98892-0727">+55 (11) 98892-0727</a></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p><a href="mailto:contato@leonardotoniolo.com" target="_top">contato@leonardotoniolo.com</a></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p><a href="http://maps.google.com/?q=1739 Bubby Drive">1739 Bubby Drive</a></p>
					</div>
				</div>
				<!-- /contact -->

                <!-- contact form -->
                <div class="col-md-8 col-md-offset-2">
                    <form class="contact-form">
                        <input type="text" class="input" placeholder="Name">
                        <input type="email" class="input" placeholder="Email">
                        <input type="text" class="input" placeholder="Subject">
                        <textarea class="input" placeholder="Message"></textarea>
                        <button class="main-btn">Send message</button>
                    </form>
                </div>
                <!-- /contact form -->

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Contact -->

    @include('layouts.footer')

@endsection
