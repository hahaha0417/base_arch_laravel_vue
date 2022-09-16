<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useContactStore } from '../../../stores/contact.js'


// const {
//     contactBlock,
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     // searchBlock,
// } = useContactStore();
// 這樣才work
const store = useContactStore();
const {
    // contactBlock,
    recentPostsBlock,
    // mostPopularPostsBlock,
    // searchBlock,
    show,
} = storeToRefs(store);
</script>

<template>
    <h4 class="mb-3" v-show="show">{{ recentPostsBlock.recentPost }}</h4>
    <div class="post-item" v-for="(value, index) in recentPostsBlock.list" v-show="show">
        <a href="/single_post" class="post-title">{{ value.postTitle.title }}</a>
        <div class="post-meta">
            <span><i class="far fa-user"></i> Posted by {{ value.user }}</span
            ><span><i class="far fa-calendar"></i> {{value.calendar}}</span
            ><span><i class="far fa-comment-alt"></i> {{ value.postMeta }} 評論</span>
        </div>
        <p class="post-content" v-html="value.postContent">
        </p>
    </div>

    <a class="main-button" v-show="show">{{ recentPostsBlock.showAllButton }}</a>

</template>

<style scoped></style>
