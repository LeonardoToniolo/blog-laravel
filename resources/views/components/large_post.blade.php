{{-- Post --}}
<div id="{{ $post_id }}" class="blog-img">
    <img class="img-responsive" src="{{ asset('storage/'.$post_image) }}" alt="">
</div>
<div class="blog-content">
    <ul class="blog-meta">
        <li><i class="fa fa-user"></i>{{ $post_user }}</li>
        <li><i class="fa fa-clock"></i>{{ $post_date }}</li>
        <li><i class="fa fa-comments"></i>{{ $num_comments }}</li>
    </ul>
    <a href="posts/{{ $post_id }}"><h3>{{ $post_title }}</h3></a>
    <p>{{ $post_text }}</p>
</div>
{{-- End Post --}}
