<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useIndexStore } from '../../../stores/index.js'


// const {
//     // aboutBlock,
//     // contactBlock,
//     // mainSlider,
//     newArticleBlock,
//     // recentPostsBlock,
//     // subscribeBlock,
// } = useIndexStore();
const store = useIndexStore();
const {
    // aboutBlock,
    // contactBlock,
    // mainSlider,
    newArticleBlock,
    // recentPostsBlock,
    // subscribeBlock,
    show,
} = storeToRefs(store);
</script>

<template>
    <section class="new-articles" v-show="show">
        <div class="card-group">
            <div class="card bg-dark text-white" v-for="(value, index) in newArticleBlock">
                <img :src="value.image" class="card-img" alt="...">
                <div class="card-img-overlay p-3">
                    <div class="text-overlay">
                        <p class="card-text text-uppercase">{{ value.cardText }}</p>
                        <h5 class="card-title text-uppercase">{{ value.cardTitle }}</h5>
                        <div class="line"></div>
                        <div class="card-text autor-data d-flex pb-3">
                            <p class="post-autor text-uppercase" v-html="value.postAutor"></p>
                            <p class="post-data text-uppercase" v-html="value.postData"></p>
                        </div>
                        <a class="card-button">{{ value.button }}</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</template>

<style scoped>
</style>
