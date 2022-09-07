<!-- <script setup>語法糖 -->
<script setup>
    const img_facebook_footer = "/img/facebook-footer.svg";
    const img_instagramm_footer = "/img/instagramm-footer.svg";
    const img_pinterest_footer = "/img/pinterest-footer.svg";
</script>

<template>
    <footer class="text-center  text-uppercase py-5">
        <div class="footer-icons ">
            <a href=""><img :src="img_facebook_footer" alt=""></a>
            <a href=""><img :src="img_instagramm_footer" alt=""></a>
            <a href=""><img :src="img_pinterest_footer" alt=""></a>
        </div>
        <div class="copyright pt-4 text-muted text-center">
            <p>&copy; 2022 你的網域 | 建立由 <a
                    href="https://firmbee.com/solutions/free-invoicing-app-billing-software/"
                    title="Firmbee - Free Invoicing App" target="_blank">hahaha.com</a> </p>
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
