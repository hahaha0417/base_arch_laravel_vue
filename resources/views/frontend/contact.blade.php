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
        <!-- --------------------------------- -->

        <main>
            <div class="container">
                <div class="row mainmargin">
                    <div class="col-md-8">
                        <div class="contact-page">
                            <h2 class="underscore mb-5">Please let us know if you have any questions</h2>
                            <div class="line"></div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt optio consequuntur
                                ducimus odit. Deleniti optio saepe unde omnis. Sapiente aliquam repellendus error id veniam
                                totam dolores recusandae non dolorum?</p>
                            <div class="line"></div>
                            <form id="contactForm">
                                <!-- Name input -->
                                <div class="mb-3">
                                    <input class="form-control" id="name" type="text" placeholder="Name *"
                                        data-sb-validations="required" />
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                                </div>
                                <!-- Email address input -->
                                <div class="mb-3">
                                    <input class="form-control" id="emailAddress" type="email*"
                                        placeholder="Email Address *" data-sb-validations="required, email" />
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is
                                        required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email
                                        is not valid.</div>
                                </div>
                                <!-- Form submissions success message -->
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">Form submission successful!</div>
                                </div>
                                <!-- Form submissions error message -->
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <!-- Message input -->
                                <div class="mb-3">
                                    <textarea class="form-control" id="contact" type="text" placeholder="Leave a Message" style="height: 10rem;"
                                        data-sb-validations="required"></textarea>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.
                                    </div>
                                </div>
                                <!-- Form submit button -->
                                <div class="d-grid">
                                    <button class="main-button mt-0 disabled" id="submitButton" type="submit">Send
                                        message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar col-md-4">
                        <div class="input-group">
                            <div class="form-outline">
                                <input id="search-input" type="search" id="form1" class="form-control"
                                    placeholder="search" />
                            </div>
                            <button id="search-button" type="button" class="btn dark">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                        <div class="recent-posts pt-5">
                            <h4 class="mb-3">RECENT POSTS</h4>
                            <div class="post-item">
                                <a href="/single_post" class="post-title">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.</a>
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> Posted by someone</span><span><i
                                            class="far fa-calendar"></i> 30 07 2021</span><span><i
                                            class="far fa-comment-alt"></i> 0 comments</span>
                                </div>
                                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                    perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                            </div>
                            <div class="post-item">
                                <a href="/single_post" class="post-title">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.</a>
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> Posted by someone</span><span><i
                                            class="far fa-calendar"></i> 30 07 2021</span><span><i
                                            class="far fa-comment-alt"></i> 0 comments</span>
                                </div>
                                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                    perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                            </div>
                            <div class="post-item">
                                <a href="/single_post" class="post-title">Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.</a>
                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> Posted by someone</span><span><i
                                            class="far fa-calendar"></i> 30 07 2021</span><span><i
                                            class="far fa-comment-alt"></i> 0 comments</span>
                                </div>
                                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt
                                    perspiciatis ex ipsam similique blanditiis. Culpa hic quia...</p>
                            </div>
                            <a class="main-button">View all posts</a>
                            <div class="popular pt-5">
                                <h4 class="mb-3">READ MOST POPULAR ARTICLES</h4>
                                <div class="card bg-dark text-white">
                                    <img src="/img/architecture-1857175_1920.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay p-3">
                                        <div class="text-overlay">
                                            <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur
                                            </h5>
                                            <div class="line"></div>
                                            <div class="card-text article-meta">
                                                <span><i class="far fa-user"></i> Posted by someone </span><span><i
                                                        class="far fa-calendar"></i> 30 07 2021</span><span><i
                                                        class="far fa-comment-alt"></i> 300 comments</span>
                                            </div>
                                            <button class="card-button">Read article</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-dark text-white">
                                    <img src="/img/castle-1998435_1920.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay p-3">
                                        <div class="text-overlay">
                                            <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur
                                            </h5>
                                            <div class="line"></div>
                                            <div class="card-text article-meta">
                                                <span><i class="far fa-user"></i> Posted by someone </span><span><i
                                                        class="far fa-calendar"></i> 30 07 2021</span><span><i
                                                        class="far fa-comment-alt"></i> 300 comments</span>
                                            </div>
                                            <button class="card-button">Read article</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-dark text-white">
                                    <img src="/img/staircase-274614_1920.jpg" class="card-img" alt="...">
                                    <div class="card-img-overlay p-3">
                                        <div class="text-overlay">
                                            <h5 class="card-title text-uppercase">Lorem, ipsum dolor sit amet consectetur
                                            </h5>
                                            <div class="line"></div>
                                            <div class="card-text article-meta">
                                                <span><i class="far fa-user"></i> Posted by someone </span><span><i
                                                        class="far fa-calendar"></i> 30 07 2021</span><span><i
                                                        class="far fa-comment-alt"></i> 300 comments</span>
                                            </div>
                                            <button class="card-button">Read article</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}
    @section('view_end')
        @php
            $hahaha_function_base = hahaha_function_base::instance();
        @endphp
        @php echo $hahaha_function_base->Js($hahaha_function_base->Url_Asset('js/script.js')); @endphp
    @endsection
    {{-- ------------------------------------------- --}}
    {{-- ------------------------------------------- --}}


</x-frontend.layout>
