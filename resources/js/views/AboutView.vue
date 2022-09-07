<!-- <script setup>語法糖 -->
<script setup>
    import AboutPage from '../components/frontend/about/AboutPage.vue'
    import RecentPostsBlock from '../components/frontend/about/RecentPostsBlock.vue'
    import SearchBlock from '../components/frontend/about/SearchBlock.vue'

    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";
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
                    <RecentPostsBlock />
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
</style>
