@extends('blog')


@section('content')
<div class="row">
    <!-- Content Inner -->
    <div class="column width-10 offset-1 content-inner blog-regular">
        @foreach ($announcements as $announcement)
        <article class="post">
            <div class="post-content with-background">
                <h2 class="post-title center"><a href="{{route('blog-single',['slug' => $announcement->slug])}}">{{$announcement->title}}</a></h2>
                <div class="post-info center">
                    <span class="post-date">{{date('d-m-Y',strtotime($announcement->posted_at))}}</span>, dans <span class="post-category"><a>{{$announcement->category->name}}</a></span>
                </div>
                <div class="post-media">
                    <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.9">
                        <a class="overlay-link" href="{{route('blog-single',['slug' => $announcement->slug])}}">
                            <img src="{{asset('storage/' . $announcement->img)}}" alt="" style="transition-duration: 700ms;">
                            <span class="overlay-info" style="transition-duration: 700ms; background-color: rgba(255, 255, 255, 0.9);">
                                <span>
                                    <span>
                                        Lire En Détails
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <div style="padding: 10px 50px;">
                    <p>{!! str_limit(html_entity_decode($announcement->content), 400) !!}</p>
                    <a href="{{route('blog-single',['slug' => $announcement->slug])}}" class="read-more">Lire Plus →</a>
                </div>
                <div class="post-author center">
                    <div class="row">
                        <div class="column width-12">
                            <div class="author-bio">
                                <div class="author-avatar clear-float">
                                    <img src="{{asset('storage/'. $announcement->author->avatar)}}" alt="Avatar">
                                </div>
                                <div class="author-content">
                                    <div class="row">
                                        <div class="column width-12">
                                            <div class="name">par <a>{{$announcement->author->name}}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
        {{$announcements->links()}}
    </div>
    <!-- Content Inner End -->
</div>
@endsection