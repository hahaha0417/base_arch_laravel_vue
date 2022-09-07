<!-- <script setup>語法糖 -->
<script setup>
import Header from './components/frontend/layout/block/Header.vue'
import Footer from './components/frontend/layout/block/Footer.vue'
import Content from './components/Content.vue'

import {useIndexStore} from './stores/index.js'
</script>



<template>
<Header />
<Content />
<Footer />
</template>

<style>

</style>
