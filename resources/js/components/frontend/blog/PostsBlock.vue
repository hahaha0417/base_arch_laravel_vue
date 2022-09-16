<!-- <script setup>語法糖 -->

<script setup>
import { storeToRefs } from 'pinia'
import { useBlogStore } from '../../../stores/blog.js'


// const {
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     // allPostsBlock,
//     postsBlock,
//     // searchBlock,
// } = useBlogStore();
// 這樣才work
const store = useBlogStore();
const {
    // recentPostsBlock,
    // mostPopularPostsBlock,
    // allPostsBlock,
    postsBlock,
    // searchBlock,
    show,
} = storeToRefs(store);
</script>

<template>

    <nav aria-label="blog navigation" v-show="show">
        <ul class="pagination">
            <li class="page-item ">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">上一則</span>
                </a>
            </li>
            <li class="page-item" ><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">下一則</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
</style>
