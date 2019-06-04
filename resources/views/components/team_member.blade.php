<!-- team -->
<div class="col-sm-4">
    <div class="team">
        <div class="team-img">
            <img class="img-responsive" src="{{ $photo }}" alt="">
            <div class="overlay">
                <div class="team-social">
                    <a href="{{ $social_facebook }}"><i class="fa fa-facebook"></i></a>
                    <a href="{{ $social_twitter }}"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="team-content">
            <h3>{{ $member_name }}</h3>
            <span>{{ $member_office }}</span>
        </div>
    </div>
</div>
<!-- /team -->
