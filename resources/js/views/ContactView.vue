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
                <div class="col-md-8">
                    <div class="contact-page">
                        <h2 class="underscore mb-5">標題</h2>
                        <div class="line"></div>
                        <p>內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br></p>
                        <div class="line"></div>
                        <form id="contactForm">
                            <!-- Name input -->
                            <div class="mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Name *"
                                    data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name 是必須</div>
                            </div>
                            <!-- Email address input -->
                            <div class="mb-3">
                                <input class="form-control" id="emailAddress" type="email*"
                                    placeholder="Email Address *" data-sb-validations="required, email" />
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address 是必須</div>
                                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email
                                    不是必須</div>
                            </div>
                            <!-- Form submissions success message -->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">表單送出成功!</div>
                            </div>
                            <!-- Form submissions error message -->
                            <div class="d-none" id="submitErrorMessage">
                                <div class="text-center text-danger mb-3">錯誤送出消息</div>
                            </div>
                            <!-- Message input -->
                            <div class="mb-3">
                                <textarea class="form-control" id="contact" type="text" placeholder="Leave a Message"
                                    style="height: 10rem;" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Message 是必須
                                </div>
                            </div>
                            <!-- Form submit button -->
                            <div class="d-grid">
                                <button class="main-button mt-0 disabled" id="submitButton" type="submit">送出訊息</button>
                            </div>
                        </form>
                    </div>
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
                            <a href="/single_post" class="post-title">標題</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容...</p>
                        </div>
                        <div class="post-item">
                            <a href="/single_post" class="post-title">標題
                                adipisicing elit.</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容...</p>
                        </div>
                        <div class="post-item">
                            <a href="/single_post" class="post-title">標題</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容...</p>
                        </div>
                        <a class="main-button">顯示所有貼文</a>
                        <div class="popular pt-5">
                            <h4 class="mb-3">閱讀最熱門文章</h4>
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
                                        <button class="card-button">閱讀文章</button>
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
                                        <button class="card-button">閱讀文章</button>
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
                                            <span><i class="far fa-user"></i> Posted by someone </span><span><i
                                                    class="far fa-calendar"></i> 30 07 2023</span><span><i
                                                    class="far fa-comment-alt"></i> 300 評論</span>
                                        </div>
                                        <button class="card-button">閱讀文章</button>
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
