<!-- <script setup>語法糖 -->
<script setup>
    import ContactBlock from '../components/frontend/contact/ContactBlock.vue'
    import RecentPostsBlock from '../components/frontend/contact/RecentPostsBlock.vue'
    import SearchBlock from '../components/frontend/contact/SearchBlock.vue'
    import MostPopularBlock from '../components/frontend/contact/MostPopularBlock.vue'


</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="col-md-8">
                    <ContactBlock />
                </div>
                <div class="sidebar col-md-4">
                    <!-- <SearchBlock /> -->
                    <div class="recent-posts pt-5">
                        <RecentPostsBlock />
                        <MostPopularBlock />
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
</style>
