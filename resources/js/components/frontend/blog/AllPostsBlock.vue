<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useBlogStore } from '../../../stores/blog.js'


// const {
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     allPostsBlock,
//     // postsBlock,
//     // searchBlock,
// } = useBlogStore();
// 這樣才work
const store = useBlogStore();
const {
    // recentPostsBlock,
    // mostPopularPostsBlock,
    allPostsBlock,
    // postsBlock,
    // searchBlock,
    show,
} = storeToRefs(store);

function read_article(index) 
{
    // alert("4444");
    location.href = "/single_post/" + (parseInt(index) + 1);
}
</script>

<template>
    <div class="all-posts" v-for="(value, index) in allPostsBlock" v-show="show" :index="index">
        <div class="post-item">
            <div class="post-img"><img :src="value.image" alt=""></div>
            <div class="post-main-info">
                <p class="post-title">{{ value.title }}</p>
                <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by {{ value.user }}</span><span><i class="far fa-calendar"></i> {{ value.calendar }}</span><span><i class="far fa-comment-alt"></i> {{ value.comment }} 評論</span>
                </div>
                <p v-html="value.content"></p>
                <a @click="read_article(index)" role="button" class="main-button">{{ value.title }}</a>
            </div>
        </div>






    </div>

</template>

<style scoped>
</style>
