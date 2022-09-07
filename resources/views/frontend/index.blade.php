<!-- resources/views/resources\views\backend\account\index.blade.php -->
@php
use hahaha\function_base as hahaha_function_base;
@endphp

<x-frontend.layout>
    {{-- ------------------------------------------- --}}
    {{-- 插入slot --}}
    {{-- ------------------------------------------- --}}
    {{-- @php
    // $tasks = [1,2,3];
    @endphp --}}
    {{-- @foreach ($tasks as $task)
        {{ $task }}
    @endforeach --}}
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}
    @section('view_begin')
        @php

        @endphp
        {{-- 不能放layout --}}
        @vite('resources/css/app.css')
    @endsection
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}
    @section('view_design')
        <script>
            $(document).ready(function() {

            });
        </script>
    @endsection
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}
    @section('content')
        @php

        @endphp
        <div id="app"></div>
        <!-- --------------------------------- -->
        {{-- <header id="home">
            <nav id="#navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3">
                <div class="container">
                    <a class="navbar-brand" href="index.html"><img src="/img/logo-blog.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto">
                            <a class="nav-link" href="/">home</a>
                            <a class="nav-link active" href="/about">about</a>
                            <a class="nav-link" href="/contact">contact</a>
                            <a class="nav-link" href="/blog">Blog</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <section class="main-slider">
                <div class="hero-img">
                    <div class="hero-bg"></div>
                    <div class="container">
                        <div class="hero-text">
                            <div class="welcome-text"><span class="big-text">WELCOME</span><span class="small-text">TO OUR
                                    BLOG</span></div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <a href="#about"><i class="fas fa-chevron-down"></i></a>
                </div>
            </section>
            <section id="about" class="aboutus">
                <div class="container">
                    <div class="row">
                        <div class="right col-md-6">
                            <div class="text-right">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam
                                </p>
                            </div>
                        </div>
                        <div class="left col-md-6">
                            <div class="text-left">
                                <h2 class="underscore">about us</h2>
                                <p class="sup-header">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                    perspiciatis ex ipsam similique blanditiis. Culpa hic quia, repellendus corrupti </p>
                                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                    perspiciatis ex ipsam similique blanditiis. Culpa hic quia, repellendus corrupti
                                    perspiciatis praesentium necessitatibus alias illo quidem. Repudiandae expedita illum
                                    aspernatur magni?
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex ipsam
                                    similique blanditiis. Culpa hic quia, repellendus corrupti perspiciatis praesentium
                                    necessitatibus alias illo quidem. Repudiandae expedita illum aspernatur magni?</p>
                            </div>
                            <a href="contact.html" class="main-button">Let’s work together</a>
                        </div>
                    </div>
                </div>
                <div class="black-div"></div>
            </section>
            <section id="contact" class="social-media">
                <div class="container">
                    <h2>WANT TO KNOW MORE ABOUT US?</h2>
                    <a href=""><img src="/img/facebook_icon.svg" alt=""></a>
                    <a href=""><img src="/img/instagram logo_icon.svg" alt=""></a>
                    <a href=""><img src="/img/pinterest_icon.svg" alt=""></a>
                </div>
            </section>
            <section class="new-articles">
                <div class="card-group">
                    <div class="card bg-dark text-white">
                        <img src="/img/architecture-1857175_1920.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay p-3">
                            <div class="text-overlay">
                                <p class="card-text text-uppercase">Most Popular</p>
                                <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur </h5>
                                <div class="line"></div>
                                <div class="card-text autor-data d-flex pb-3">
                                    <p class="post-autor text-uppercase">Posted by someone&nbsp;</p>
                                    <p class="post-data text-uppercase">| 30 07 2021</p>
                                </div>
                                <a href="" class="card-button">Read article</a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white">
                        <img src="/img/castle-1998435_1920.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay p-3">
                            <div class="text-overlay">
                                <p class="card-text text-uppercase">Most Popular</p>
                                <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur </h5>
                                <div class="line"></div>
                                <div class="card-text autor-data d-flex pb-3">
                                    <p class="post-autor text-uppercase">Posted by someone&nbsp;</p>
                                    <p class="post-data text-uppercase">| 30 07 2021</p>
                                </div>
                                <a href="" class="card-button">Read article</a>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-dark text-white">
                        <img src="/img/staircase-274614_1920.jpg" class="card-img" alt="...">
                        <div class="card-img-overlay p-3">
                            <div class="text-overlay">
                                <p class="card-text text-uppercase">Most Popular</p>
                                <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur </h5>
                                <div class="line"></div>
                                <div class="card-text autor-data d-flex pb-3">
                                    <p class="post-autor text-uppercase">Posted by someone&nbsp;</p>
                                    <p class="post-data text-uppercase">| 30 07 2021</p>
                                </div>
                                <a href="" class="card-button">Read article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="posts" class="recent-posts">
                <div class="container">
                    <h2 class="underscore">RECENT POSTS</h2>
                    <p class="sup-header">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex
                        ipsam similique blanditiis. Culpa hic quia, repellendus corrupti </p>
                    <div class="posts-wrapper">
                        <div class="post-item">
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by someone</span><span><i
                                        class="far fa-calendar"></i> 30 07 2021</span>
                            </div>
                            <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</a>
                            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                perspiciatis ex ipsam similique blanditiis. Culpa hic quia, repellendus corrupti
                                perspiciatis praesentium necessitatibus alias illo quidem. Repudiandae expedita illum
                                aspernatur magni?</p>
                            <div class="post-meta">
                                <span><i class="far fa-comment-alt"></i> 20 comments</span>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by someone</span><span><i
                                        class="far fa-calendar"></i> 30 07 2021</span>
                            </div>
                            <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</a>
                            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                perspiciatis ex ipsam similique blanditiis. Culpa hic quia, repellendus corrupti
                                perspiciatis praesentium necessitatibus alias illo quidem. Repudiandae expedita illum
                                aspernatur magni?</p>
                            <div class="post-meta">
                                <span><i class="far fa-comment-alt"></i> 20 comments</span>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by someone</span><span><i
                                        class="far fa-calendar"></i> 30 07 2021</span>
                            </div>
                            <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.</a>
                            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                perspiciatis ex ipsam similique blanditiis. Culpa hic quia, repellendus corrupti
                                perspiciatis praesentium necessitatibus alias illo quidem. Repudiandae expedita illum
                                aspernatur magni?</p>
                            <div class="post-meta">
                                <span><i class="far fa-comment-alt"></i> 20 comments</span>
                            </div>
                        </div>
                        <a href="blog.html" class="main-button">View all posts</a>
                    </div>
                </div>
            </section>
            <section id="subscribe" class="subscribe">
                <div class="container">
                    <h2>Subscribe & Don’t Miss Out</h2>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt perspiciatis ex
                        ipsam similique blanditiis. Culpa hic quia, repellendus corrupti perspiciatis praesentium
                    </p>
                    <form>
                        <input type="email" class="email text-uppercase"
                            id="exampleInputEmail1 aria-describedby="emailHelp" placeholder="Enter your email"><button
                            type="submit" class="button-subscribe text-uppercase">subscribe</button>
                    </form>
                </div>
            </section>
        </main> --}}
    @endsection
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}
    @section('view_end')
        @php
            $hahaha_function_base = hahaha_function_base::instance();
        @endphp
        @php echo $hahaha_function_base->Js($hahaha_function_base->Url_Asset('js/script.js')); @endphp

        {{-- 不能放layout --}}
	    @vite('resources/js/app.js')
        @endsection
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}


</x-frontend.layout>
