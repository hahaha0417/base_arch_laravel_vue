<!-- <script setup>語法糖 -->
<script setup>
    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";
    const img_building_1727807_1920 = "/img/building-1727807_1920.jpg";
</script>

<template>
    <div class="recent-posts pt-5">
        <h4 class="mb-3">最近貼文</h4>
        <div class="post-item">
            <a href="single-post.html" class="post-title">標題</a>
            <div class="post-meta">
                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i class="far fa-calendar"></i> 30 07
                    2023</span><span><i class="far fa-comment-alt"></i> 0 評論</span>
            </div>
            <p class="post-content">內容內容內容內容內容內容內容內容內容內容...</p>
        </div>
        <div class="post-item">
            <a href="single-post.html" class="post-title">標題</a>
            <div class="post-meta">
                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i class="far fa-calendar"></i> 30 07
                    2023</span><span><i class="far fa-comment-alt"></i> 0 評論</span>
            </div>
            <p class="post-content">內容內容內容內容內容內容內容內容內容內容...</p>
        </div>
        <div class="post-item">
            <a href="single-post.html" class="post-title">標題</a>
            <div class="post-meta">
                <span><i class="far fa-user"></i> Posted by hahaha</span><span><i class="far fa-calendar"></i> 30 07
                    2023</span><span><i class="far fa-comment-alt"></i> 0 評論</span>
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
</template>

<style scoped>
</style>
