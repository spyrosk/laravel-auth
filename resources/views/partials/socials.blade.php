<div class="row">
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'google']), 'fa fa-google-plus', 'Google +', array('class' => 'btn btn-block btn-social btn-google')) !!}
    </div>
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'twitter']), 'fa fa-twitter', 'Twitter', array('class' => 'btn btn-block btn-social btn-twitter')) !!}
    </div>
    <div class="col-sm-6 mb-2">
        {!! HTML::icon_link(route('social.redirect',['provider' => 'github']), 'fa fa-github', 'GitHub', array('class' => 'btn btn-block btn-social btn-github')) !!}
    </div>
</div>
