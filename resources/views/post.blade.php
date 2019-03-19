@extends('layouts.blog-post')
@section('content')
    <section class="single-post-area">
        <!-- Single Post Title -->
        <div class="single-post-title bg-img background-overlay" style="background-image: url({{asset('images/bg-img/1.jpg')
    }})">
            <div class="container h-100">
                <div class="row h-100 align-items-end">
                    <div class="col-12">
                        <div class="single-post-title-content">
                            <!-- Post Tag -->
                            <div class="gazette-post-tag">
                                <a href="#">Editorial</a>
                            </div>
                            <h2 class="font-pt">{{$post->title}}</h2>
                            <p>{{$post->created_at->diffForHumans()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-post-contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="single-post-text">
                            <p>{{$post->body}}</p>

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-post-thumb">
                            <img class="mx-auto d-block" src="{{asset($post->photo->file)}}" alt="">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section class="gazette-post-discussion-area section_padding_100 bg-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    @if(Session::has('comment_message'))
                        {{session('comment_message')}}
                        @endif
                    <!-- Comment Area Start -->
                    <div class="comment_area section_padding_50 clearfix">
                        <div class="gazette-heading">
                            <h4 class="font-bold">Discussion</h4>
                        </div>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <div class="comment-wrapper d-md-flex align-items-start">
                                    <!-- Comment Meta -->
                                    <div class="comment-author">
                                        <img src="{{asset('images/blog-img/25.jpg')}}" alt="">
                                    </div>
                                    <!-- Comment Content -->
                                    <div class="comment-content">
                                        <h5>John Doe</h5>
                                        <span class="comment-date font-pt">December 18, 2017</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum nunc libero, vitae rutrum nunc porta id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam arcu augue, semper at elementum nec, cursus nec ante.</p>
                                        <a class="reply-btn" href="#">Reply <i class="fa fa-reply" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <div class="comment-wrapper d-md-flex align-items-start">
                                            <!-- Comment Meta -->
                                            <div class="comment-author">
                                                <img src="{{asset('images/blog-img/25.jpg')}}" alt="">
                                            </div>
                                            <!-- Comment Content -->
                                            <div class="comment-content">
                                                <h5>John Doe</h5>
                                                <span class="comment-date text-muted">December 18, 2017</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum nunc libero, vitae rutrum nunc porta id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam arcu augue, semper at elementum nec, cursus nec ante.</p>
                                                <a class="reply-btn" href="#">Reply <i class="fa fa-reply" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                    <!-- Leave A Comment -->
                    <div class="leave-comment-area clearfix">
                        <div class="comment-form">
                            <div class="gazette-heading">
                                <h4 class="font-bold">leave a comment</h4>
                            </div>
                            <!-- Comment Form -->
                            {!! Form::open(['method'=>'POST', 'action'=>'PostCommentController@store']) !!}
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <div class="form-group">
                                    {!! Form::textarea(
                                    'body',
                                    null,
                                    ['class'=>'form-control','rows'=>'3','placeholder'=>'fill out body' ])
                                     !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit('Submit Comment',['class'=>'btn btn-primary rounded-0']) !!}
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
