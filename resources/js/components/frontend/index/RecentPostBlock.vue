<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useIndexStore } from '../../../stores/index.js'


// const {
//     // aboutBlock,
//     // contactBlock,
//     // mainSlider,
//     // newArticleBlock,
//     recentPostsBlock,
//     // subscribeBlock,
// } = useIndexStore();
const store = useIndexStore();
const {
    aboutBlock,
    // contactBlock,
    // mainSlider,
    // newArticleBlock,
    recentPostsBlock,
    // subscribeBlock,
    show,
} = storeToRefs(store);
function read_article(index) 
{
    // alert("4444");
    location.href = "/single_post/" + (parseInt(index) + 1);
}
</script>

<template>
    <section id="posts" class="recent-posts" v-show="show">
        <div class="container">
            <h2 class="underscore">{{ recentPostsBlock.recentPost }}</h2>
            <p class="sup-header">{{ recentPostsBlock.subHeader }}</p>
            <div class="posts-wrapper">
                <div class="post-item" v-for="(value,index) in recentPostsBlock.list" :index="index">
                    <div class="post-meta">
                        <span><i class="far fa-user"></i> {{ value.user }}</span><span><i class="far fa-calendar"></i>
                            {{ value.calendar }}</span>
                    </div>
                    <a :href="value.postTitle.href" class="post-title">{{ value.postTitle.title }}</a>
                    <p class="post-content" v-html="value.postContent"></p>
                    <div class="post-meta">
                        <span><i class="far fa-comment-alt"></i> {{ value.postMeta }}</span>
                    </div>
                </div>

                <a href="/blog" class="main-button">{{ recentPostsBlock.showAllButton }}</a>
            </div>
        </div>
    </section>
</template>

<style scoped>
</style>
