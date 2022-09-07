<!-- <script setup>語法糖 -->
<script setup>
    import ContactPage from '../components/frontend/contact/ContactPage.vue'
    import RecentPostsBlock from '../components/frontend/contact/RecentPostsBlock.vue'
    import SearchBlock from '../components/frontend/contact/SearchBlock.vue'

    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";
    const img_building_1727807_1920 = "/img/building-1727807_1920.jpg";
</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="col-md-8">
                    <ContactPage />
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
