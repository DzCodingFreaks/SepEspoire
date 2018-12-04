@extends('blog_single')
@section('content')
            <article class="post">
                <div class="post-content with-background">
                    <h2 class="post-title center">{{$announcement->title}}</h2>
                    <div class="post-info center">
                        <span class="post-date" id="article_date">{{date('d-m-Y',strtotime($announcement->posted_at))}}</span>, dans <span class="post-category"><a>{{$announcement->category->name}}</a></span>
                    </div>
                    <div class="post-media thumbnail">
                        <img src="{{asset('storage/' . $announcement->img)}}" alt="" style="transition-duration: 400ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);">
                    </div>
                    <p>{!! html_entity_decode($announcement->content) !!}</p>
                    <div class="post-author">
                        <div class="row">
                            <div class="column width-12">
                                <div class="author-bio">
                                    <div class="author-avatar clear-float">
                                        <img src="{{asset('storage/'. $announcement->author->avatar)}}" alt="Avatar">
                                    </div>
                                    <div class="author-content">
                                        <div class="row">
                                            <div class="column width-12">
                                                <div class="name">Par <a>{{$announcement->author->name}}</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="article_slug" style="display:none">{{$announcement->slug}}</p>
            </article>
@endsection