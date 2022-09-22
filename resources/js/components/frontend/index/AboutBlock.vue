<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useIndexStore } from '../../../stores/index.js'


// const {
//     aboutBlock,
//     contactBlock,
//     mainSlider,
//     newArticleBlock,
//     recentPostsBlock,
//     subscribeBlock,
// } = useIndexStore();
// 這樣才work
const store = useIndexStore();
const {
    aboutBlock,
    // contactBlock,
    // mainSlider,
    // newArticleBlock,
    // recentPostsBlock,
    // subscribeBlock,
    show,
} = storeToRefs(store);

</script>

<template>
    <section id="about" class="aboutus" v-show="show">
        <div class="container">
            <div class="row">
                <div class="right col-md-6">
                    <div class="text-right">
                        <p>{{ aboutBlock.title }}
                        </p>
                    </div>
                </div>
                <div class="left col-md-6">
                    <div class="text-left">
                        <h2 class="underscore">{{ aboutBlock.about }}</h2>
                        <p class="sup-header">{{ aboutBlock.subHeader }}</p>
                        <p class="">{{ aboutBlock.content }}</p>
                    </div>
                    <a href="/contact" class="main-button">{{ aboutBlock.button }}</a>
                </div>
            </div>
        </div>
        <div class="black-div"></div>
    </section>
</template>

<style scoped>
</style>
