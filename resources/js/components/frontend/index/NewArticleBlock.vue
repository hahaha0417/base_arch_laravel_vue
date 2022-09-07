<!-- <script setup>語法糖 -->
<script setup>
const img_facebook_footer = "/img/facebook-footer.svg";
const img_instagramm_footer = "/img/instagramm-footer.svg";
const img_pinterest_footer = "/img/pinterest-footer.svg";

const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
</script>

<template>
    <section class="new-articles">
        <div class="card-group">
            <div class="card bg-dark text-white">
                <img :src="img_architecture_1857175_1920" class="card-img" alt="...">
                <div class="card-img-overlay p-3">
                    <div class="text-overlay">
                        <p class="card-text text-uppercase">最熱門</p>
                        <h5 class="card-title text-uppercase">熱門熱門熱門熱門熱門熱門熱門熱門熱門熱門 </h5>
                        <div class="line"></div>
                        <div class="card-text autor-data d-flex pb-3">
                            <p class="post-autor text-uppercase">Posted by hahaha&nbsp;</p>
                            <p class="post-data text-uppercase">| 30 07 2023</p>
                        </div>
                        <a href="" class="card-button">閱讀文章</a>
                    </div>
                </div>
            </div>
            <div class="card bg-dark text-white">
                <img :src="img_castle_1998435_1920" class="card-img" alt="...">
                <div class="card-img-overlay p-3">
                    <div class="text-overlay">
                        <p class="card-text text-uppercase">最熱門</p>
                        <h5 class="card-title text-uppercase">熱門熱門熱門熱門熱門熱門熱門熱門熱門熱門 </h5>
                        <div class="line"></div>
                        <div class="card-text autor-data d-flex pb-3">
                            <p class="post-autor text-uppercase">Posted by hahaha&nbsp;</p>
                            <p class="post-data text-uppercase">| 30 07 2023</p>
                        </div>
                        <a href="" class="card-button">閱讀文章</a>
                    </div>
                </div>
            </div>
            <div class="card bg-dark text-white">
                <img :src="img_staircase_274614_1920" class="card-img" alt="...">
                <div class="card-img-overlay p-3">
                    <div class="text-overlay">
                        <p class="card-text text-uppercase">最熱門</p>
                        <h5 class="card-title text-uppercase">熱門熱門熱門熱門熱門熱門熱門熱門熱門熱門 </h5>
                        <div class="line"></div>
                        <div class="card-text autor-data d-flex pb-3">
                            <p class="post-autor text-uppercase">Posted by hahaha&nbsp;</p>
                            <p class="post-data text-uppercase">| 30 07 2023</p>
                        </div>
                        <a href="" class="card-button">閱讀文章</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
</style>
