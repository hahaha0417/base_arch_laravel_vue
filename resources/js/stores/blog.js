import { defineStore } from "pinia";
import { onMounted, onUnmounted, computed, ref } from "vue";
import axios from "axios";

// global全域變數 - blog
export const useBlogStore = defineStore("blog", () => {
    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";
    const img_building_1727807_1920 = "/img/building-1727807_1920.jpg";

    const show = ref(false);

    // const recentPostsBlock = {
    //     recentPost: `最近貼文`,
    //     list: [
    //         {
    //             user: `hahaha`,
    //             calendar: `30 07 2021`,
    //             postTitle: {
    //                 title: `標題...`,
    //                 href: `/single-post`,
    //             },
    //             postContent: `內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>`,
    //             postMeta: `20`,
    //         },
    //         {
    //             user: `hahaha`,
    //             calendar: `30 07 2021`,
    //             postTitle: {
    //                 title: `標題...`,
    //                 href: `/single-post`,
    //             },
    //             postContent: `內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>`,
    //             postMeta: `20`,
    //         },
    //         {
    //             user: `hahaha`,
    //             calendar: `30 07 2021`,
    //             postTitle: {
    //                 title: `標題...`,
    //                 href: `/single-post`,
    //             },
    //             postContent: `內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>`,
    //             postMeta: `20`,
    //         },
    //     ],
    //     showAllButton: `顯示所有貼文`,
    // };
    // const mostPopularPostsBlock = {
    //     mostPopularPost: `閱讀最流行貼文`,
    //     list: [
    //         {
    //             image: img_architecture_1857175_1920,
    //             title: `標題`,
    //             user: `hahaha`,
    //             calendar: `30 07 2023`,
    //             comment: `300`,
    //             button: `閱讀文章`,
    //         },
    //         {
    //             image: img_castle_1998435_1920,
    //             title: `標題`,
    //             user: `hahaha`,
    //             calendar: `30 07 2023`,
    //             comment: `300`,
    //             button: `閱讀文章`,
    //         },
    //         {
    //             image: img_staircase_274614_1920,
    //             title: `標題`,
    //             user: `hahaha`,
    //             calendar: `30 07 2023`,
    //             comment: `300`,
    //             button: `閱讀文章`,
    //         },
    //     ],
    // };
    // const allPostsBlock = [
    //     {
    //         image: img_architecture_1857175_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_building_1727807_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_castle_1998435_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_architecture_1857175_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_building_1727807_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_castle_1998435_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_architecture_1857175_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_building_1727807_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    //     {
    //         image: img_castle_1998435_1920,
    //         title: `標題`,
    //         user: `hahaha`,
    //         calendar: `30 07 2023`,
    //         comment: 0,
    //         content: `內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>
    //         內容內容內容內容內容內容內容內容內容內容<br>...`,
    //         button: {
    //             title: `閱讀更多`,
    //             href: `.//single_post`,
    //         },
    //     },
    // ];
    const postsBlock = {
        page: 1,
        count: 10
    }
    // const searchBlock = {
    //     placeholder: `搜尋`,
    // };

    const recentPostsBlock = ref({});
    const mostPopularPostsBlock = ref({});
    const allPostsBlock = ref([]);
    // const postsBlock = ref({});
    const searchBlock = ref({});





    const errorMessage = ref("");


    const fetchApiData = async () => {
        try {
            const res = await axios.post(
                "/api/get", {
                    page: `blog`
                }
            ).then((res) => {
                // console.log(res);
                var data = res.data;

                recentPostsBlock.value = data.recentPostsBlock;
                mostPopularPostsBlock.value = data.mostPopularPostsBlock;
                allPostsBlock.value = data.allPostsBlock;
                // postsBlock.value = data.postsBlock;
                searchBlock.value = data.searchBlock;
                // console.log(contactBlock);
                show.value = true;
            });


        } catch (error) {
            errorMessage.value = "API 發生錯誤";
        }
    };


    onMounted(() => {
        fetchApiData();

    });

    return {
        recentPostsBlock,
        mostPopularPostsBlock,
        allPostsBlock,
        postsBlock,
        searchBlock,
        show,
    };
});
