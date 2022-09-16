<!-- <script setup>語法糖 -->
<script setup>
import { defineStore } from "pinia";
import { onMounted, onUnmounted, computed, ref } from "vue";
import axios from "axios";

import Header from './components/frontend/layout/block/Header.vue'
import Footer from './components/frontend/layout/block/Footer.vue'
import Content from './components/Content.vue'

import { useIndexStore } from './stores/index.js'
import { useAboutStore } from './stores/about.js'
import { useBlogStore } from './stores/blog.js'
import { useContactStore } from './stores/contact.js'
import { useSinglePostStore } from './stores/single_post.js'
import { useError404Store } from './stores/base/error_404.js'


// var url = window.location.pathname;
// // alert(url);



// const {
//     aboutBlock,
//     contactBlock,
//     mainSlider,
//     newArticleBlock,
//     recentPostsBlock,
//     subscribeBlock
// } = useIndexStore();
// console.log(aboutBlock);
</script>



<template>
<Header />
<Content />
<Footer />
</template>

<style>

</style>
