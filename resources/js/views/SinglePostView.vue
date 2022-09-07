<!-- <script setup>語法糖 -->
<script setup>
    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";
    const img_building_1727807_1920 = "/img/building-1727807_1920.jpg";
</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="single-post col-md-8">
                    <h2 class="underscore">標題</h2>
                    <div class="post-meta">
                        <span><i class="far fa-user"></i> Posted by hahaha</span><span><i class="far fa-calendar"></i>
                            30 07 2023</span><span><i class="far fa-comment-alt"></i> 0 評論</span>
                    </div>
                    <img :src="img_castle_1998435_1920" alt="">
                    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
                    <figure class="quote text-end">
                        <blockquote class="blockquote">
                            <p>一個著名的引用，包含在一個 blockquote 元素中</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            某出名 in <cite title="Source Title">來源標題</cite>
                        </figcaption>
                    </figure>
                    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
                    <h4>內容內容內容內容內容內容內容內容內容內容內容內容</h4>
                    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
                    <h5>內容內容內容內容內容內容內容內容內容內容內容內容</h5>
                    <ul class="list-in-text">
                        <li>內容內容內容內容內容內容 </li>
                        <li>內容內容內容內容內容內容 </li>
                        <li>內容內容內容內容內容內容 </li>
                        <li>內容內容內容內容內容內容 </li>
                        <li>內容內容內容內容內容內容 </li>
                    </ul>
                    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
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
                            <label class="form-label" for="comment">留下評論</label>
                            <textarea class="form-control" id="comment" type="text" placeholder=""
                                style="height: 10rem;" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Comment 是必須</div>
                        </div>
                        <!-- Name input -->
                        <div class="mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Name 是必須</div>
                        </div>
                        <!-- Email address input -->
                        <div class="mb-3">
                            <input class="form-control" id="emailAddress" type="email*" placeholder="Email Address *"
                                data-sb-validations="required, email" />
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address 是必須</div>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email 不是必須</div>
                        </div>
                        <!-- Form submissions success message -->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">表單送出成功</div>
                        </div>
                        <!-- Form submissions error message -->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">錯誤送出訊息</div>
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
                            <input id="search-input" type="search" class="form-control"
                                placeholder="搜尋" />
                        </div>
                        <button id="search-button" type="button" class="btn dark">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="recent-posts pt-5">
                        <h4 class="mb-3">最近貼文</h4>
                        <div class="post-item">
                            <a href="single-post.html" class="post-title">標題</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容內容...</p>
                        </div>
                        <div class="post-item">
                            <a href="single-post.html" class="post-title">標題</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容內容...</p>
                        </div>
                        <div class="post-item">
                            <a href="single-post.html" class="post-title">標題</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容內容...</p>
                        </div>
                        <a class="main-button">顯示所有貼文</a>
                        <div class="popular pt-5">
                            <h4 class="mb-3">閱讀最流行文章</h4>
                            <div class="card bg-dark text-white">
                                <img :src="img_architecture_1857175_1920" class="card-img" alt="...">
                                <div class="card-img-overlay p-3">
                                    <div class="text-overlay">
                                        <h5 class="card-title text-uppercase">標題
                                        </h5>
                                        <div class="line"></div>
                                        <div class="card-text article-meta">
                                            <span><i class="far fa-user"></i> Posted by hahaha </span><span><i
                                                    class="far fa-calendar"></i> 30 07 2023</span><span><i
                                                    class="far fa-comment-alt"></i> 300 評論</span>
                                        </div>
                                        <button class="card-button">讀取文章</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-dark text-white">
                                <img :src="img_castle_1998435_1920" class="card-img" alt="...">
                                <div class="card-img-overlay p-3">
                                    <div class="text-overlay">
                                        <h5 class="card-title text-uppercase">標題
                                        </h5>
                                        <div class="line"></div>
                                        <div class="card-text article-meta">
                                            <span><i class="far fa-user"></i> Posted by hahaha </span><span><i
                                                    class="far fa-calendar"></i> 30 07 2023</span><span><i
                                                    class="far fa-comment-alt"></i> 300 評論</span>
                                        </div>
                                        <button class="card-button">讀取文章</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-dark text-white">
                                <img :src="img_staircase_274614_1920" class="card-img" alt="...">
                                <div class="card-img-overlay p-3">
                                    <div class="text-overlay">
                                        <h5 class="card-title text-uppercase">標題
                                        </h5>
                                        <div class="line"></div>
                                        <div class="card-text article-meta">
                                            <span><i class="far fa-user"></i> Posted by hahaha </span><span><i
                                                    class="far fa-calendar"></i> 30 07 2023</span><span><i
                                                    class="far fa-comment-alt"></i> 300 評論</span>
                                        </div>
                                        <button class="card-button">讀取文章</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
</style>
