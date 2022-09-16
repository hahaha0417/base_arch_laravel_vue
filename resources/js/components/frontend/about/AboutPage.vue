<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useAboutStore } from '../../../stores/about.js'


// const {
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     aboutPage,
//     // searchBlock,
// } = useAboutStore();
// 這樣才work
const store = useAboutStore();
const {
    // recentPostsBlock,
    // mostPopularPostsBlock,
    aboutPage,
    // searchBlock,
    show,
} = storeToRefs(store);
</script>

<template>
    <div class="about-page" v-html="aboutPage" v-show="show">

    </div>
</template>

<style scoped></style>
