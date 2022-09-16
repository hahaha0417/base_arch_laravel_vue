<!-- <script setup>語法糖 -->
<script setup>
import { storeToRefs } from 'pinia'
import { useContactStore } from '../../../stores/contact.js'


// const {
//     contactBlock,
//     // recentPostsBlock,
//     // mostPopularPostsBlock,
//     // searchBlock,
// } = useContactStore();
// 這樣才work
const store = useContactStore();
const {
    contactBlock,
    // recentPostsBlock,
    // mostPopularPostsBlock,
    // searchBlock,
    show,
} = storeToRefs(store);
</script>

<template>
    <div class="contact-page" v-show="show">
        <h2 class="underscore mb-5">{{ contactBlock.title }}</h2>
        <div class="line"></div>
        <p v-html="contactBlock.content"></p>
        <div class="line"></div>
        <form id="contactForm">
            <!-- Name input -->
            <div class="mb-3">
                <input class="form-control" id="name" type="text" :placeholder="contactBlock.namePlaceholder" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Name 是必須</div>
            </div>
            <!-- Email address input -->
            <div class="mb-3">
                <input class="form-control" id="emailAddress" type="email*" :placeholder="contactBlock.emailPlaceholder"
                    data-sb-validations="required, email" />
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address 是必須</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email
                    不是必須</div>
            </div>
            <!-- Form submissions success message -->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">表單送出成功!</div>
            </div>
            <!-- Form submissions error message -->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">錯誤送出消息</div>
            </div>
            <!-- Message input -->
            <div class="mb-3">
                <textarea class="form-control" id="contact" type="text" :placeholder="contactBlock.messagePlaceholder"
                    style="height: 10rem;" data-sb-validations="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message 是必須
                </div>
            </div>
            <!-- Form submit button -->
            <div class="d-grid">
                <button class="main-button mt-0 disabled" id="submitButton" type="submit">{{ contactBlock.button }}</button>
            </div>
        </form>
    </div>
</template>

<style scoped>
</style>
