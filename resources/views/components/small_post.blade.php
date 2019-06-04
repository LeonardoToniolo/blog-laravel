<!-- single post -->
<div class="widget-post">
    <a href="posts/{{ $post_id }}">
        <img src="{{ asset('storage/'.$post_image) }}" alt=""> {{ $post_title }}
    </a>
    <ul class="blog-meta">
        <li>{{ $post_date }}</li>
    </ul>
</div>
<!-- /single post -->
