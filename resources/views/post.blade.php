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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum nunc libero, vitae rutrum nunc porta id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam arcu augue, semper at elementum</p>
                            <p>nec, cursus nec ante. Vestibulum sed velit scelerisque elit posuere vulputate vel viverra quam. Curabitur laoreet aliquam diam, non mattis arcu feugiat sed. Sed eget pellentesque lacus. Pellentesque in diam vel mauris pretium commodo a ac magna. Suspendisse scelerisque tellus convallis tortor posuere, ut commodo diam blandit. Morbi vel nulla non turpis luctus tempor eu eu urna. Aliquam in lorem a augue mollis volutpat. Nunc iaculis rutrum enim nec viverra. Morbi eleifend metus id tellus luctus, ac porta orci imperdiet.</p>
                            <p>Morbi efficitur ligula a efficitur mollis. Suspendisse vitae sapien vitae urna eleifend dapibus ut non tortor. In nec metus ac mi ultrices commodo interdum et lacus. Suspendisse potenti. Suspendisse interdum semper dolor nec posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut orci non tortor pretium hendrerit at vel massa. Nunc ut fermentum felis.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="single-post-thumb">
                            <img src="{{asset('images/blog-img/24.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="single-post-text">
                            <p>Suspendisse scelerisque tellus convallis tortor posuere, ut commodo diam blandit. Morbi vel nulla non turpis luctus tempor eu eu urna. Aliquam in lorem a augue mollis volutpat. Nunc iaculis rutrum enim nec viverra. Morbi eleifend metus id tellus luctus, ac porta orci imperdiet.</p>
                            <p>Morbi efficitur ligula a efficitur mollis. Suspendisse vitae sapien vitae urna eleifend dapibus ut non tortor. In nec metus ac mi ultrices commodo interdum et lacus. Suspendisse potenti. Suspendisse interdum semper dolor nec posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut orci non tortor pretium hendrerit at vel massa. Nunc ut fermentum felis. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="single-post-blockquote">
                            <blockquote>
                                <h6 class="font-pt mb-0">“Vestibulum nulla diam, sodales sit amet erat vel, mollis iaculis lectus. Suspendisse in rhoncus est. Sed aliquet mauris in efficitur tempor. Proin enim felis, laoreet id viverra at”</h6>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="single-post-text">
                            <p>Suspendisse vitae sapien vitae urna eleifend dapibus ut non tortor. In nec metus ac mi ultrices commodo interdum et lacus. Suspendisse potenti. Suspendisse interdum semper dolor nec posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut orci non tortor pretium hendrerit at vel massa. Nunc ut fermentum felis.</p>
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
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="contact-name" placeholder="Enter Your Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn leave-comment-btn">SUBMIT <i class="fa fa-angle-right ml-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
