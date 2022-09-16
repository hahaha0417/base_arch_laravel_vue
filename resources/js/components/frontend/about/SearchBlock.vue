<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useAboutStore } from '../../../stores/about.js'


// const {
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     // aboutPage,
//     searchBlock,
// } = useAboutStore();
// 這樣才work
const store = useAboutStore();
const {
    // recentPostsBlock,
    // mostPopularPostsBlock,
    // aboutPage,
    searchBlock,
    show,
} = storeToRefs(store);
</script>

<template>
    <div class="input-group" v-show="show">
        <div class="form-outline">
            <input id="search-input" type="search" class="form-control" :placeholder="searchBlock.placeholder" />
        </div>
        <button id="search-button" type="button" class="btn dark">
            <i class="fas fa-search"></i>
        </button>
    </div>
</template>

<style scoped>

</style>
