<!-- blog -->
<div class="blog">
    <div class="blog-img">
        <img class="img-responsive" src="{{ asset('storage/'.$post_image) }}}">
        <div class="blog-content">
            <ul class="blog-meta">
                <li><i class="fa fa-user"></i>{{ $post_user }}</li>
                <li><i class="fa fa-clock"></i>{{ $post_date }}</li>
                <li><i class="fa fa-comments"></i>{{ $num_comments }}</li>
            </ul>
            <h3>{{ $post_title }}</h3>
            <p>{{ $post_text }}</p>
            <a href="posts/{{ $post_id }}">Read more</a>
        </div>
    </div>
</div>
<!-- /blog -->
