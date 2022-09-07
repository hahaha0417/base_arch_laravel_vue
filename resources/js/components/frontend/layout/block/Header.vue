<!-- <script setup>語法糖 -->
<script setup>
import { RouterLink, RouterView, useRouter, useRoute } from 'vue-router';

// const router = useRouter();
// const route = useRoute();
// console.log(route);
// console.log(window.location);


const img_logo_blog = "/img/logo-blog.png";

</script>



<template>
    <header id="home">
        <nav id="#navbar" class="navbar dark dark navbar-expand-lg position-fixed top-0 w-100 py-2">
            <div class="container">
                <RouterLink class="navbar-brand" to="/">
                    <img :src="img_logo_blog" alt="">
                </RouterLink>
                Vue Router
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <RouterLink class="nav-link" data-name="/" to="/">首頁</RouterLink>
                        <RouterLink class="nav-link" data-name="/about" to="/about">關於</RouterLink>
                        <RouterLink class="nav-link" data-name="/contact" to="/contact">聯絡方式</RouterLink>
                        <RouterLink class="nav-link" data-name="/blog" to="/blog">部落格</RouterLink>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- <RouterView /> -->
</template>

<script>
    $( document ).ready(function() {
        // vue會更新導致出錯
        // https://ithelp.ithome.com.tw/articles/10226139?sc=pt
        // 似乎是不同頁，一定會更新
        $(".navbar-nav .nav-link").click(function() {

            $(".navbar-nav .nav-link").removeClass("active");

            $(this).addClass("active");


        });

        $(".navbar-nav .nav-link").each(function(val, index){
            var url = window.location.pathname;
            var item_url = $(this).data("name");
            if(url == $(this).data("name")) {
                $(this).addClass("active");
            }
        });


    });

</script>

<style scoped>
nav a, nav .navbar-nav .nav-link {
    color: white;
    position: relative;
    padding: 10px 0px !important;
}

</style>
