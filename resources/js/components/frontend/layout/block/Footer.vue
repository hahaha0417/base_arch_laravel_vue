<!-- <script setup>語法糖 -->
<script setup>
import { useLayoutStore } from '../../../../stores/base/layout.js'


const {
    // headerBlock,
    footerBlock,
} = useLayoutStore();
</script>

<template>
    <footer class="text-center  text-uppercase py-5">
        <div class="footer-icons ">
            <a :href="footerBlock.facebook.href"><img :src="footerBlock.facebook.image" alt=""></a>
            <a :href="footerBlock.instagram.href"><img :src="footerBlock.instagram.image" alt=""></a>
            <a :href="footerBlock.pinterest.href"><img :src="footerBlock.pinterest.image" alt=""></a>
        </div>
        <div class="copyright pt-4 text-muted text-center">
            <p>{{ footerBlock.copywrite }} <a
                    :href="footerBlock.href"
                    title="Firmbee - Free Invoicing App" target="_blank">{{ footerBlock.domain }}</a> </p>
            <!--
          This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
          You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
          -->
        </div>

    </footer>
    <div class="fb2022-copy">hahaha 2022 修改，面試用</div>

</template>

<style scoped>
</style>
