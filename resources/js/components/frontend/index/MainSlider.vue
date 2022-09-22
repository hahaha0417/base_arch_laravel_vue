<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useIndexStore } from '../../../stores/index.js'


// const {
//     // aboutBlock,
//     // contactBlock,
//     mainSlider,
//     // newArticleBlock,
//     // recentPostsBlock,
//     // subscribeBlock,
// } = useIndexStore();
const store = useIndexStore();
const {
    // aboutBlock,
    // contactBlock,
    mainSlider,
    // newArticleBlock,
    // recentPostsBlock,
    // subscribeBlock,
    show,
} = storeToRefs(store);

</script>

<template>
<section class="main-slider" v-show="show">
    <div class="hero-img">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-text">
                <div class="welcome-text"><span class="big-text">{{ mainSlider.welcome }}</span><span class="small-text">{{ mainSlider.sub}}</span></div>
                <p>{{ mainSlider.content }}</p>
            </div>
        </div>
        <a href="/about"><i class="fas fa-chevron-down"></i></a>
    </div>
</section>
</template>

<style scoped>

</style>
