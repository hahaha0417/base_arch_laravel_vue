<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useSinglePostStore } from '../../../stores/single_post.js'


// const {
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     postBlock,
//     // searchBlock,
//     // commentBlock,
// } = useSinglePostStore();
// 這樣才work
const store = useSinglePostStore();
const {
    // recentPostsBlock,
    // mostPopularPostsBlock,
    postBlock,
    // searchBlock,
    // commentBlock,
    show,
} = storeToRefs(store);

</script>

<template>
    <div v-html="postBlock" v-show="show">

    </div>

</template>

<style scoped>
</style>
