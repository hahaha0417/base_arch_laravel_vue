<!-- <script setup>語法糖 -->
<script setup>
    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";
</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="col-md-8">
                    <div class="about-page">
                        <h2 class="underscore">標題...</h2>
                        <p class="sup-header">標題標題標題標題標題標題標題標題標題標題?</p>
                        <div class="line"></div>
                        <img :src="img_meeting_2284501_1920" class="d-block w-100 mb-5" alt="..." />
                        <h4>內容</h4>
                        <p>內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                        </p>
                        <h5>內容</h5>
                        <ul class="list-in-text">
                            <li>內容內容內容內容內容內容內容內容內容內容</li>
                            <li>內容內容內容內容內容內容內容內容內容內容</li>
                            <li>內容內容內容內容內容內容內容內容內容內容</li>
                        </ul>
                        <p>內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br></p>
                        <div class="features dark text-uppercase d-flex justify-content-around py-5 my-5">
                            <div class="feature-item text-center">
                                <p class="display-2">300</p>
                                <p>滿意客戶端</p>
                            </div>
                            <div class="feature-item text-center">
                                <p class="display-2">20</p>
                                <p>獎項</p>
                            </div>
                            <div class="feature-item text-center">
                                <p class="display-2">400</p>
                                <p>完成專案</p>
                            </div>
                        </div>
                        <p>內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br>
                            內容內容內容內容內容內容內容內容內容內容<br></p>
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
                        <h4 class="mb-3">最近 貼文</h4>
                        <div class="post-item">
                            <a href="single-post.html" class="post-title">標題...</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>...</p>
                        </div>
                        <div class="post-item">
                            <a href="single-post.html" class="post-title">標題...</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>...</p>
                        </div>
                        <div class="post-item">
                            <a href="single-post.html" class="post-title">標題...</a>
                            <div class="post-meta">
                                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i
                                        class="far fa-calendar"></i> 30 07 2023</span><span><i
                                        class="far fa-comment-alt"></i> 0 評論</span>
                            </div>
                            <p class="post-content">內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>
                                內容內容內容內容內容內容內容內容內容內容內容內容<br>...</p>
                        </div>
                        <a class="main-button">顯示所有貼文</a>
                        <div class="popular pt-5">
                            <h4 class="mb-3">閱讀最熱門貼文</h4>
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
                                            <span><i class="far fa-user"></i> Posted by hahaha </span><span><i
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
