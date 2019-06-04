@extends('layouts.master')

@section ('content')

    	<!-- Header -->
    	<header>

            @include('layouts.nav')

    	</header>
    	<!-- /Header -->

    	<!-- Blog -->
    	<div id="blog" class="section md-padding">

    		<!-- Container -->
    		<div class="container">

    			<!-- Row -->
    			<div class="row">

    				<!-- Main -->
    				<main id="main" class="col-md-9">

                        <div class="blog">
                            @component('components.large_post')
                                @slot('post_id')
                                    {{ $post->id }}
                                @endslot
                                @slot('post_image')
                                    {{ asset($post->img_name) }}
                                @endslot
                                @slot('post_user')
                                    {{ $post->user->name }}
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
                            @endcomponent

                            <!-- blog comments -->
                            <div class="blog-comments">
                                <h3 class="title">({{ $post->num_comments }}) Comments</h3>
                                @foreach($post->comments as $comment)
                                    @component('components.reply_post')
                                        @slot('reply_user')
                                            {{ $comment->user->name }}
                                        @endslot
                                        @slot('reply_at')
                                            {{ $comment->created_at->diffForHumans() }}
                                        @endslot
                                        @slot('reply_body')
                                            {{ $comment->body }}
                                        @endslot
                                    @endcomponent
                                @endforeach
                            </div>
                            <!-- /blog comments -->

                            <!-- reply form -->
                            <div class="reply-form">
                                <h3 class="title">Leave a reply</h3>
                                <form action="/posts/{{ $post->id }}/comments" method="POST">
                                    {{ csrf_field() }}
                                    <textarea name="body" placeholder="Add Your Commment" required></textarea>
                                    <button type="submit" class="main-btn">Submit</button>
                                </form>
                                @include('components.errors')

                            </div>
                            <!-- /reply form -->
                        </div>

    				</main>
    				<!-- /Main -->


    				<!-- Aside -->
    				<aside id="aside" class="col-md-3">

    					<!-- Search -->
    					<div class="widget">
    						<div class="widget-search">
    							<input class="search-input" type="text" placeholder="search">
    							<button class="search-btn" type="button"><i class="fa fa-search"></i></button>
    						</div>
    					</div>
    					<!-- /Search -->

    					<!-- Category -->
    					<div class="widget">
    						<h3 class="title">Category</h3>
    						<div class="widget-category">
    							<a href="#">Web Design<span>(7)</span></a>
    							<a href="#">Marketing<span>(142)</span></a>
    							<a href="#">Web Development<span>(74)</span></a>
    							<a href="#">Branding<span>(60)</span></a>
    							<a href="#">Photography<span>(5)</span></a>
    						</div>
    					</div>
    					<!-- /Category -->

    					<!-- Posts sidebar -->
    					<div class="widget">
    						<h3 class="title">Populare Posts</h3>

                            @component('components.small_post')
                                @slot('post_id')
                                    1
                                @endslot
                                @slot('post_img')
                                    #
                                @endslot
                                @slot('post_title')
                                    um nome qualquer
                                @endslot
                                @slot('post_date')
                                    19, ago
                                @endslot
                            @endcomponent

    					</div>
    					<!-- /Posts sidebar -->

    					<!-- Tags -->
    					<div class="widget">
    						<h3 class="title">Tags</h3>
    						<div class="widget-tags">
    							<a href="#">Web</a>
    							<a href="#">Design</a>
    							<a href="#">Graphic</a>
    							<a href="#">Marketing</a>
    							<a href="#">Development</a>
    							<a href="#">Branding</a>
    							<a href="#">Photography</a>
    						</div>
    					</div>
    					<!-- /Tags -->

    				</aside>
    				<!-- /Aside -->

    			</div>
    			<!-- /Row -->

    		</div>
    		<!-- /Container -->

    	</div>
    	<!-- /Blog -->

        @include('layouts.footer')
@endsection
