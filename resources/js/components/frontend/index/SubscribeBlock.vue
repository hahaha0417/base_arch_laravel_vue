<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useIndexStore } from '../../../stores/index.js'


// const {
//     // aboutBlock,
//     // contactBlock,
//     // mainSlider,
//     // newArticleBlock,
//     // recentPostsBlock,
//     subscribeBlock,
// } = useIndexStore();
const store = useIndexStore();
const {
    aboutBlock,
    // contactBlock,
    // mainSlider,
    // newArticleBlock,
    // recentPostsBlock,
    subscribeBlock,
    show,
} = storeToRefs(store);

</script>

<template>
    <section id="subscribe" class="subscribe" v-show="show">
        <div class="container">
            <h2>{{ subscribeBlock.title }}</h2>
            <p class="" v-html="subscribeBlock.content">
            </p>
            <form>
                <input type="email" class="email text-uppercase" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="輸入你的信箱"><button type="submit"
                    class="button-subscribe text-uppercase">{{ subscribeBlock.subscribe }}</button>
            </form>
        </div>
    </section>
</template>

<style scoped>
</style>
