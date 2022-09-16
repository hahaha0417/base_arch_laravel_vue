<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useSinglePostStore } from '../../../stores/single_post.js'


// const {
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     // postBlock,
//     // searchBlock,
//     commentBlock,
// } = useSinglePostStore();
// 這樣才work
const store = useSinglePostStore();
const {
    // recentPostsBlock,
    // mostPopularPostsBlock,
    // postBlock,
    // searchBlock,
    commentBlock,
    show,
} = storeToRefs(store);

</script>

<template>

    <form id="commentForm" v-show="show">
        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="comment">{{ commentBlock.title }}</label>
            <textarea class="form-control" id="comment" type="text" :placeholder="commentBlock.commentPlaceholder" style="height: 10rem;"
                data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Comment 是必須</div>
        </div>
        <!-- Name input -->
        <div class="mb-3">
            <input class="form-control" id="name" type="text" :placeholder="commentBlock.namePlaceholder" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="name:required">Name 是必須</div>
        </div>
        <!-- Email address input -->
        <div class="mb-3">
            <input class="form-control" id="emailAddress" type="email*" :placeholder="commentBlock.emailPlaceholder"
                data-sb-validations="required, email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address 是必須</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email 不是必須</div>
        </div>
        <!-- Form submissions success message -->
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">表單送出成功</div>
        </div>
        <!-- Form submissions error message -->
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">錯誤送出訊息</div>
        </div>
        <!-- Form submit button -->
        <div class="d-grid">
            <button class="main-button" id="submitButton" type="submit">{{ commentBlock.button }}</button>
        </div>
    </form>
</template>

<style scoped>
</style>
