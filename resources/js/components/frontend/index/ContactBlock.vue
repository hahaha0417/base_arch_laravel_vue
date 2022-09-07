<!-- <script setup>語法糖 -->
<script setup>
const img_facebook_footer = "/img/facebook-footer.svg";
const img_instagramm_footer = "/img/instagramm-footer.svg";
const img_pinterest_footer = "/img/pinterest-footer.svg";

const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
</script>

<template>
    <section id="contact" class="social-media">
        <div class="container">
            <h2>想知道更多，關於我們?</h2>
            <a href=""><img :src="img_facebook_footer" alt=""></a>
            <a href=""><img :src="img_instagramm_footer" alt=""></a>
            <a href=""><img :src="img_pinterest_footer" alt=""></a>
        </div>
    </section>
</template>

<style scoped>
</style>
