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
                        <div class="about-page">
                            <h2 class="underscore">Hi there, let's introduce you to the team...</h2>
                            <p class="sup-header">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum sunt
                                optio consequuntur ducimus odit. Deleniti optio saepe unde omnis. Sapiente aliquam
                                repellendus error id veniam totam dolores recusandae non dolorum?</p>
                            <div class="line"></div>
                            <img src="/img/meeting-2284501_1920.jpg" class="d-block w-100 mb-5" alt="..." />
                            <h4>Lorem ipsum dolor sit amet.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo nemo enim culpa odit at in quia
                                facere, hic est assumenda vel praesentium ipsam harum cupiditate necessitatibus iure quis
                                provident sequi. Nemo nobis officiis magnam tenetur. Modi incidunt libero quod iste
                                veritatis dolor id provident numquam ex, eum voluptas, quidem voluptates. Tempora in quae
                                voluptas voluptatibus vero ad qui quisquam dolore obcaecati enim tenetur corporis temporibus
                                facilis voluptate, incidunt iure eius. Laborum optio officiis consectetur sequi enim
                                laboriosam quae quisquam facere, amet expedita.
                            </p>
                            <h5>Lorem ipsum dolor sit amet consectetur:</h5>
                            <ul class="list-in-text">
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                                <li>Lorem ipsum dolor sit amet consectetur.</li>
                            </ul>
                            <p>Distinctio nesciunt blanditiis beatae, exercitationem dicta aliquid aliquam soluta sapiente,
                                vero dignissimos quam repellat expedita voluptas magnam repellendus pariatur consequatur
                                deleniti sequi quaerat! Maiores harum nostrum numquam modi, animi quia eum nemo in eaque
                                asperiores incidunt accusamus commodi a at placeat maxime deserunt eligendi quos qui
                                officiis sequi! Necessitatibus voluptate sed, dignissimos esse aliquid repellendus. Quo
                                accusamus sit incidunt magnam quis architecto nobis, eaque maxime, laboriosam molestiae
                                placeat iure sequi mollitia quas consectetur non? Velit, iure ducimus. Illum, et qui
                                temporibus nostrum deserunt voluptas quisquam quidem hic. Exercitationem impedit eveniet
                                quis. Dignissimos temporibus sit pariatur dolor porro sed nesciunt. Tenetur harum
                                necessitatibus explicabo, porro corporis in ex nobis dicta, quo sed consectetur molestiae
                                rem aspernatur, neque perspiciatis accusantium?</p>
                            <div class="features dark text-uppercase d-flex justify-content-around py-5 my-5">
                                <div class="feature-item text-center">
                                    <p class="display-2">300</p>
                                    <p>Satisfied Clients</p>
                                </div>
                                <div class="feature-item text-center">
                                    <p class="display-2">20</p>
                                    <p>Awoards</p>
                                </div>
                                <div class="feature-item text-center">
                                    <p class="display-2">400</p>
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                            <p>Distinctio nesciunt blanditiis beatae, exercitationem dicta aliquid aliquam soluta sapiente,
                                vero dignissimos quam repellat expedita voluptas magnam repellendus pariatur consequatur
                                deleniti sequi quaerat! Maiores harum nostrum numquam modi, animi quia eum nemo in eaque
                                asperiores incidunt accusamus commodi a at placeat maxime deserunt eligendi quos qui
                                officiis sequi! Necessitatibus voluptate sed, dignissimos esse aliquid repellendus. Quo
                                accusamus sit incidunt magnam quis architecto nobis, eaque maxime, laboriosam molestiae
                                placeat iure sequi mollitia quas consectetur non? Velit, iure ducimus. Illum, et qui
                                temporibus nostrum deserunt voluptas quisquam quidem hic. Exercitationem impedit eveniet
                                quis. Dignissimos temporibus sit pariatur dolor porro sed nesciunt. Tenetur harum
                                necessitatibus explicabo, porro corporis in ex nobis dicta, quo sed consectetur molestiae
                                rem aspernatur, neque perspiciatis accusantium?</p>
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
