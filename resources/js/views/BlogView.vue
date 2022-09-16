<!-- <script setup>語法糖 -->
<script setup>
    import AllPostsBlock from '../components/frontend/blog/AllPostsBlock.vue'
    import PostsBlock from '../components/frontend/blog/PostsBlock.vue'
    import RecentPostsBlock from '../components/frontend/blog/RecentPostsBlock.vue'
    import SearchBlock from '../components/frontend/blog/SearchBlock.vue'
    import MostPopularBlock from '../components/frontend/blog/MostPopularBlock.vue'


</script>

<template>
    <main>
        <div class="container">
            <div class="row mainmargin">
                <div class="blog col-md-8">
                    <AllPostsBlock />
                    <PostsBlock />

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
