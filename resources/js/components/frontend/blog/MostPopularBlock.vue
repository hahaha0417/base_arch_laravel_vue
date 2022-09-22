<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useBlogStore } from '../../../stores/blog.js'


// const {
//     // recentPostsBlock,
//     mostPopularPostsBlock,
//     // allPostsBlock,
//     // postsBlock,
//     // searchBlock,
// } = useBlogStore();
// 這樣才work
const store = useBlogStore();
const {
    // recentPostsBlock,
    mostPopularPostsBlock,
    // allPostsBlock,
    // postsBlock,
    // searchBlock,
    show,
} = storeToRefs(store);

function read_article(index) 
{
    // alert("4444");
    location.href = "/single_post/" + (parseInt(index) + 1);
}
</script>

<template>
    <div class="popular pt-5" v-show="show">
        <h4 class="mb-3">{{ mostPopularPostsBlock.mostPopularPost }}</h4>
        <div class="card bg-dark text-white" v-for="(value, index) in mostPopularPostsBlock.list" :index="index">
            <img
                :src="value.image"
                class="card-img"
                alt="..."
            />
            <div class="card-img-overlay p-3">
                <div class="text-overlay">
                    <h5 class="card-title text-uppercase">{{ value.title }}</h5>
                    <div class="line"></div>
                    <div class="card-text article-meta">
                        <span
                            ><i class="far fa-user"></i> Posted by {{ value.user }} </span
                        ><span
                            ><i class="far fa-calendar"></i> {{ value.calendar }}</span
                        ><span
                            ><i class="far fa-comment-alt"></i> {{ value.comment }}
                            評論</span
                        >
                    </div>
                    <button class="card-button" @click="read_article(index)">{{ value.button }}</button>
                </div>
            </div>
        </div>

    </div>
</template>

<style scoped></style>
