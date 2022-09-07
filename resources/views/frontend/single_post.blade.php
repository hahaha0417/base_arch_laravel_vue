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
                    <div class="single-post col-md-8">
                        <h2 class="underscore">Lorem, ipsum dolor sit amet consectetur elit. Reprehenderit, nostrum.</h2>
                        <div class="post-meta">
                            <span><i class="far fa-user"></i> Posted by someone</span><span><i class="far fa-calendar"></i>
                                30 07 2021</span><span><i class="far fa-comment-alt"></i> 0 comments</span>
                        </div>
                        <img src="/img/castle-1998435_1920.jpg" alt="">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est corrupti obcaecati harum iusto
                            aliquid fugiat fuga, dolore libero, sapiente a cum dicta alias neque! Libero laboriosam
                            voluptatem illum distinctio, aperiam odio? Doloribus corrupti iusto, vel molestias nihil
                            eligendi itaque rem non quisquam dolor vitae quaerat quis quod nesciunt optio ab voluptatibus
                            tempore dolorem deleniti! Natus explicabo placeat soluta beatae maiores ullam eligendi,
                            architecto rerum magnam rem? Quidem, doloremque vitae incidunt praesentium iusto molestias
                            corporis eius fugit doloribus blanditiis provident ipsam! Beatae tempore molestias nobis natus
                            sequi nostrum! Corporis, natus veritatis, consequuntur deleniti sapiente beatae quam
                            perspiciatis repellat nemo cum qui, odio aspernatur! Culpa minima doloribus exercitationem ipsa
                            aut perspiciatis eveniet, fugit natus expedita similique distinctio inventore ut facere aliquid
                            molestias optio saepe numquam assumenda animi consequatur sequi? Eveniet nesciunt iusto
                            praesentium eum ea in aspernatur aliquam!</p>
                        <figure class="quote text-end">
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo delectus nulla optio dolor
                            repellat, at voluptate placeat, eos reprehenderit necessitatibus minus sunt eius officia eum
                            dolorum voluptates totam maiores ex quo alias dicta molestias quis reiciendis fuga. Repellat vel
                            quibusdam beatae, molestiae, recusandae et vitae pariatur molestias totam repellendus iusto?</p>
                        <h4>Lorem ipsum, dolor sit amet consectetur adipisicing.</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat ipsa vitae reiciendis eius
                            asperiores totam doloremque, labore perspiciatis exercitationem maxime temporibus fugiat porro
                            adipisci maiores a sint, dolores tenetur itaque suscipit. Voluptates voluptatum debitis maiores
                            eum reprehenderit architecto commodi provident, dignissimos earum quisquam ea dolore iste
                            perspiciatis odit natus nisi?</p>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit:</h5>
                        <ul class="list-in-text">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing. </li>
                            <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, ratione.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet consectetur.</li>
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolores sapiente quaerat at
                            voluptas. Natus at porro quasi ab, ratione rerum dolores vero dolore consectetur autem sed earum
                            qui aliquid!</p>
                        <div class="share">
                            <a class="main-button" href=""><i class="fab fa-facebook-f"></i> FACEBOOK</a>
                            <a class="main-button" href=""> <i class="fab fa-google-plus-g"></i> GOOGLE+</a>
                            <a class="main-button" href=""><i class="fab fa-twitter"></i> TWITTER</a>
                            <a class="main-button" href=""><i class="fab fa-linkedin-in"></i> LINKEDIN</a>
                            <a class="main-button" href=""><i class="fab fa-pinterest-p"></i> PINTEREST</a>
                        </div>
                        <div class="navigation">
                            <a class="prew"><i class="fas fa-chevron-left"></i> PREVIOUS</a>
                            <a class="next">NEXT <i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="line"></div>
                        <form id="commentForm">
                            <!-- Message input -->
                            <div class="mb-3">
                                <label class="form-label" for="comment">Leave a Comment</label>
                                <textarea class="form-control" id="comment" type="text" placeholder="" style="height: 10rem;"
                                    data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Comment is required.</div>
                            </div>
                            <!-- Name input -->
                            <div class="mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Name *"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                            </div>
                            <!-- Email address input -->
                            <div class="mb-3">
                                <input class="form-control" id="emailAddress" type="email*" placeholder="Email Address *"
                                    data-sb-validations="required, email" />
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is
                                    required.</div>
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is
                                    not valid.</div>
                            </div>
                            <!-- Form submissions success message -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">Form submission successful!</div>
                            </div>
                            <!-- Form submissions error message -->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">Error sending message!</div>
                            </div>
                            <!-- Form submit button -->
                            <div class="d-grid">
                                <button class="main-button" id="submitButton" type="submit">Post Comment</button>
                            </div>
                        </form>
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
                                <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur
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
                                <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur
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
                                <a href="single-post.html" class="post-title">Lorem ipsum dolor sit amet consectetur
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
