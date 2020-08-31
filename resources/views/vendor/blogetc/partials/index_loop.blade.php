@php
    /** @var \WebDevEtc\BlogEtc\Models\Post $post */
@endphp

<div class="col-sm-6" style="margin: auto">

    <div class="d-flex align-items-stretch col-xs-12 col-sm-4 col-md-6 col-lg-12 p-2">
        <!-- Card -->
        <div class="card" style="padding: 40px">
            <div class="row">
                @if ($post->hasImage('thumbnail') != '')
                    <div class="col-md-3 text-center" style="margin: auto">
                        {!! $post->imageTag('thumbnail', true, '') !!}
                    </div>

                    <div class="col-md-9 pl-0 py-2">
                        <div class="card-block">
                            <div class="card-title text-center">
                                <h3><a href="{{$post->url()}}">{{$post->title}}</a></h3>
                                <h5>{{$post->subtitle}}</h5>
                            </div>

                            <div class="card-text">
                                @if(config('blogetc.show_full_post_on_index'))
                                    {!! $post->renderBody() !!}
                                @else
                                    <p>{!! $post->generateIntroduction(400) !!}</p>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="{{ $post->url() }}" class="btn btn-primary col-sm-12">View Post</a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 pl-0 py-2">
                        <div class="card-block">
                            <div class="card-title text-center">
                                <h3><a href="{{$post->url()}}">{{$post->title}}</a></h3>
                                <h5>{{$post->subtitle}}</h5>
                            </div>

                            <div class="card-text">
                                @if(config('blogetc.show_full_post_on_index'))
                                    {!! $post->renderBody() !!}
                                @else
                                    <p>{!! $post->generateIntroduction(400) !!}</p>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-center">
                                <a href="{{ $post->url() }}" class="btn btn-primary col-sm-12">View Post</a>
                            </div>
                        </div>
                    </div>
                @endif


            </div><!-- end .row -->
        </div>
    </div>
</div>


