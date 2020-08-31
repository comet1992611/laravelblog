@extends("layouts.app",['title'=>$title])
@section("content")
    <div class="banner-wrap">
        <div class="wsite-elements wsite-not-footer wsite-header-elements">
            <div class="wsite-section-wrap">
                <div class="wsite-section wsite-header-section wsite-section-bg-color"
                     style="height: auto;background-color: #181818;">
                    <div class="wsite-section-content">

                        <div class="container">
                            <div class="banner">
                                <div class="wsite-section-elements">
                                    <h2 class="wsite-content-title">BLOG</h2>

                                    <div style="text-align:inherit;">
                                        <div style="height: 10px; overflow: hidden;"></div>
                                        <a class="wsite-button wsite-button-small wsite-button-normal"
                                           href="http://freeroom.us/">
                                            <span class="wsite-button-inner">Create A rooom</span>
                                        </a>
                                        <div style="height: 10px; overflow: hidden;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 blogetc_container">
            @can(\WebDevEtc\BlogEtc\Gates\GateTypes::MANAGE_BLOG_ADMIN)
                <div class="alert alert-success text-center col-sm-6" style="margin: auto; margin-top: 10px">
                    <p class="mb-1">
                        You are logged in as a blog admin user.
                        <br>
                        <a href="{{route("blogetc.admin.index")}}"
                           class="btn border btn-outline-primary btn-sm">
                            <i class="fa fa-cogs" aria-hidden="true"></i>
                            Go To Blog Admin Panel
                        </a>
                    </p>
                </div>
            @endcan

            @if(isset($blogetc_category) && $blogetc_category)
                <h2 class="text-center">
                    Viewing Category: {{$blogetc_category->category_name}}
                </h2>
                @if($blogetc_category->category_description)
                    <p class="text-center">{{$blogetc_category->category_description}}</p>
                @endif
            @endif

            @forelse($posts as $post)
                @include("blogetc::partials.index_loop")
            @empty
                <div class="col-sm-12">
                    <div class="alert alert-danger col-sm-6 text-center" style="margin: auto; padding: 50px">There is no
                        Posts!
                    </div>
                </div>

            @endforelse

            <div class="text-center col-sm-4 mx-auto">
                {{$posts->appends( [] )->links()}}
            </div>
            @include("blogetc::sitewide.search_form")
        </div>
    </div>
@endsection
