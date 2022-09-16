<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useIndexStore } from '../../../stores/index.js'


const {
    // aboutBlock,
    // contactBlock,
    // mainSlider,
    // newArticleBlock,
    // recentPostsBlock,
    // subscribeBlock,
} = useIndexStore();
const store = useIndexStore();
const {
    // aboutBlock,
    contactBlock,
    // mainSlider,
    // newArticleBlock,
    // recentPostsBlock,
    // subscribeBlock,
    show,
} = storeToRefs(store);
// console.log(contactBlock.title);
</script>

<template>
    <section id="contact" class="social-media" v-show="show">
        <div class="container">
            <h2>{{ contactBlock.title }}</h2>
            <a :href="contactBlock.facebook.href"><img :src="contactBlock.facebook.image" alt=""></a>
            <a :href="contactBlock.instagram.href"><img :src="contactBlock.instagram.image" alt=""></a>
            <a :href="contactBlock.pinterest.href"><img :src="contactBlock.pinterest.image" alt=""></a>
        </div>
    </section>
</template>

<style scoped>
</style>
