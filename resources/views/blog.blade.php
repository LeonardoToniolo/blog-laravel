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
                @auth
                    <!-- reply form -->
                    <h3 class="title">Create a post</h3>
                    <form method="POST" action="/posts" enctype="multipart/form-data" class="form-group">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="inputFile">Example file input</label>
                            <input type="file" class="form-control-file" id="inputFile" name="post_image" required>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Email address</label>
                            <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Post Title" required>
                        </div>
                        <div class="form-group">
                            <label for="inputBody">Example textarea</label>
                            <textarea class="form-control" id="inputBody" rows="3" name="body" placeholder="Post body" required></textarea>
                        </div>
                        <button type="submit" class="main-btn">Submit</button>
                    </form>
                    @include('components.errors')
                    <!-- /reply form -->
                @endauth
                @foreach ($posts as $post)
                    <div class="blog">
                        @component('components.large_post')
                        @slot('post_id')
                            {{ $post->id }}
                        @endslot
                        @slot('post_image')
                            {{ $post->img_name }}
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
                    </div>
                @endforeach

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

                    {{-- @component('components.small_post')
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
                    @endcomponent --}}

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
