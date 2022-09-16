<!-- <script setup>語法糖 -->
<script setup>
    import PostBlock from '../components/frontend/single_post/PostBlock.vue'
    import RecentPostsBlock from '../components/frontend/single_post/RecentPostsBlock.vue'
    import SearchBlock from '../components/frontend/single_post/SearchBlock.vue'
    import MostPopularBlock from '../components/frontend/single_post/MostPopularBlock.vue'
    import CommentBlock from '../components/frontend/single_post/CommentBlock.vue'


</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="single-post col-md-8">
                    <PostBlock />
                    <CommentBlock />
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
