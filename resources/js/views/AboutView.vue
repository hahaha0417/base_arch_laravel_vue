<!-- <script setup>語法糖 -->
<script setup>
    import AboutPage from '../components/frontend/about/AboutPage.vue'
    import RecentPostsBlock from '../components/frontend/about/RecentPostsBlock.vue'
    import SearchBlock from '../components/frontend/about/SearchBlock.vue'
    import MostPopularBlock from '../components/frontend/about/MostPopularBlock.vue'


</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="col-md-8">
                    <AboutPage />
                </div>
                <div class="sidebar col-md-4">
                    <SearchBlock />
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
