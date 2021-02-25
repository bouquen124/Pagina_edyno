@extends('ux.root')

@section('content')

         <!-- CONTENT START
            ============================================= -->
            <div id="content" class="single-wrapper">

                <!-- BLOG START
                ============================================= -->
                <div class="blog-single">
                    <div class="container">
                        <div class="row">

                            <!-- SINGLE POST START
                            ============================================= -->

                            
                            <div class="single-post col-md-8 wow fadeIn">
                                @foreach ($posts as $post)

                                
                                <article class="post-item">
                                    <div class="post-image">
                                        <a href="{{ route('blog.show', $post->id) }}">
                                            @if ($post->FotoPost)
                                                <img src="{{ $post->FotoPost->url }}" width="370px" alt="" />
                                                
                                            @else
                                                <img src="{{asset('img/post.jpg')}}" width="370px" alt="">
                                            
                                            @endif
                                        </a>
                                    </div>

                                    <div class="post-content">
                                        <div class="heading-block">
                                            <a href="{{ route('blog.show', $post->id) }}"><h3>{{$post->titulo}}</h3></a>
                                            <div class="post-meta">
                                                <span class="date">{{$post->created_at}}</span>/<span class="author">{{$post->Autor->name}}</span>/<span class="comments">3 Comments</span>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <p>
                                                {{substr($post->contenido,0,220)}}
                                            </p>
                                        </div>

                                        
                                        <div class="caption wow fadeInUp">
                                            <div class="button-normal green">
                                                <a href="{{ route('blog.show', $post->id) }}">Seguir Leyendo</a>
                                            </div>
                                        </div>
                                        
                                    </div>

                                    
                                </article>
                                
                                @endforeach
                                
                                {{ $posts->render() }}
                            </div>
                                


                            <!-- SINGLE POST END -->

                            <!-- SIDEBAR START
                            ============================================= -->
                            <div class="sidebar col-md-4 wow fadeIn">
                                <!-- Recent Post Start -->
                                <div class="sidebar-widget recent-post">
                                    <div class="heading-block">
                                        <h4>Recent Post</h4>
                                    </div>
                                    @foreach ($post_derecha as $post_simple)
                                        
                                    <div class="post-item">
                                        <a href="{{ route('blog.show', $post_simple->id) }}">
                                            <div class="post-thumb">

                                                @if ($post_simple->FotoPost)
                                                    <img src="{{ $post_simple->FotoPost->url }}" width="75px" alt="" />
                                            
                                                @else
                                                    <img src="{{asset('img/post.jpg')}}" width="75px" alt="">
                                        
                                                @endif
                                                
                                                <div class="overlay dark">
                                                    <span><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="post-content">
                                            <a href="{{ route('blog.show', $post_simple->id) }}">
                                                <h4>{{$post_simple->titulo}}</h4>
                                            </a>
                                            <p>>{{substr($post_simple->contenido,0,120)}}</p>
                                            <div class="meta">
                                                <span class="date">>{{$post_simple->created_at}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   
                                </div>
                                <!-- Recent Post End -->

                                <!-- Tags Start -->
                                <div class="sidebar-widget tags">
                                    <div class="heading-block">
                                        <h4>Archives</h4>
                                    </div>

                                    <div class="tag-items">
                                        <a href="#">Painting</a><a href="#">Drawing</a><a href="#">Sports</a><a href="#">Music</a><a href="#">Games</a><a href="#">Math</a><a href="#">Dance</a><a href="#">Kids</a><a href="#">Books</a>
                                    </div>
                                </div>
                                <!-- Tags End -->
                            </div>
                            <!-- SIDEBAR END -->

                        </div>
                    </div>
                </div>
                <!-- BLOG END -->

            </div>
            <!-- CONTENT END -->

@endsection

