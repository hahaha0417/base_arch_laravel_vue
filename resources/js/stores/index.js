import { defineStore } from "pinia";
import { onMounted, onUnmounted, computed, ref } from "vue";;

import axios from "axios";

// -----------------------------------------------------
// 採要才抓，各頁有相同的，由server判斷傳那些
// 這裡最後會變成 const aboutBlock = null;
// 由api撈出資料
// -----------------------------------------------------
// 先土法煉鋼，全部模擬，後面由server置換
// -----------------------------------------------------

// global全域變數 - index
export const useIndexStore = defineStore("index", () => {
    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_logo_blog = "/img/logo-blog.png";

    const show = ref(false);

    // const aboutBlock = {
    //     title: `這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試`,
    //     about: `關於我們`,
    //     subHeader: `這是測試`,
    //     content: `這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試<br>
    //     這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試<br>
    //     這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試<br>`,
    //     button: `一起工作`,
    // };
    // const contactBlock = {
    //     title: `想知道更多，關於我們?`,
    //     facebook: {
    //         image: `/img/facebook-footer.svg`,
    //         href: `https://www.facebook.com/`,
    //     },
    //     instagram: {
    //         image: `/img/instagramm-footer.svg`,
    //         href: `https://www.instagram.com/`,
    //     },
    //     pinterest: {
    //         image: `/img/pinterest-footer.svg`,
    //         href: `https://www.pinterest.com/`,
    //     },
    // };
    // const mainSlider = {
    //     welcome: `WELCOME`,
    //     sub: `TO OUR BLOG`,
    //     content: `Vue3 套版測試 - 如有侵權請告知 hahaha0417@hotmail.com`,
    // };
    // const newArticleBlock = [
    //     {
    //         image: img_architecture_1857175_1920,
    //         cardText: `最流行`,
    //         cardTitle: `流行流行流行流行流行流行流行流行流行流行`,
    //         postAutor: `Posted by hahaha&nbsp;`,
    //         postData: `| 30 07 2023`,
    //         button: `閱讀文章`,
    //     },
    //     {
    //         image: img_castle_1998435_1920,
    //         cardText: `最流行`,
    //         cardTitle: `流行流行流行流行流行流行流行流行流行流行`,
    //         postAutor: `Posted by hahaha&nbsp;`,
    //         postData: `| 30 07 2023`,
    //         button: `閱讀文章`,
    //     },
    //     {
    //         image: img_staircase_274614_1920,
    //         cardText: `最流行`,
    //         cardTitle: `流行流行流行流行流行流行流行流行流行流行`,
    //         postAutor: `Posted by hahaha&nbsp;`,
    //         postData: `| 30 07 2023`,
    //         button: `閱讀文章`,
    //     },
    // ];
    // const recentPostsBlock = {
    //     recentPost: `最近貼文`,
    //     subHeader: `最近貼文最近貼文最近貼文最近貼文最近貼文`,
    //     list: [
    //         {
    //             user: `Posted by hahaha`,
    //             calendar: `30 07 2021`,
    //             postTitle: {
    //                 title: `標題標題標題標題標題標題`,
    //                 href: `/single-post`,
    //             },
    //             postContent: `內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>`,
    //             postMeta: `20 評論`,
    //         },
    //         {
    //             user: `Posted by hahaha`,
    //             calendar: `30 07 2022`,
    //             postTitle: {
    //                 title: `標題標題標題標題標題標題`,
    //                 href: `/single-post`,
    //             },
    //             postContent: `內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>`,
    //             postMeta: `20 評論`,
    //         },
    //         {
    //             user: `Posted by hahaha`,
    //             calendar: `30 07 2023`,
    //             postTitle: {
    //                 title: `標題標題標題標題標題標題`,
    //                 href: `/single-post`,
    //             },
    //             postContent: `內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>
    //                 內容內容內容內容內容內容內容內容內容<br>`,
    //             postMeta: `20 評論`,
    //         },
    //     ],
    //     showAllButton: `顯示所有貼文`,
    // };
    // const subscribeBlock = {
    //     title: `訂閱 & 不要遺失`,
    //     content: `訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
    //     訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
    //     訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
    //     訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
    //     訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>`,
    //     subscribe: `訂閱`,
    // };
    const aboutBlock = ref({});
    const contactBlock = ref({
        title: `想知道更多，關於我們?`,
        facebook: {
            image: `#`,
            href: `#`,
        },
        instagram: {
            image: `#`,
            href: `#`,
        },
        pinterest: {
            image: `#`,
            href: `#`,
        },
    });
    const mainSlider = ref({});
    const newArticleBlock = ref([]);
    const recentPostsBlock = ref({});
    const subscribeBlock = ref({});

    const errorMessage = ref("");


    const fetchApiData = async () => {
        try {
            const res = await axios.post(
                "/api/get", {
                    page: `index`
                }
            ).then((res) => {
                // console.log(res);
                var data = res.data;

                aboutBlock.value = data.aboutBlock;
                contactBlock.value = data.contactBlock;
                mainSlider.value = data.mainSlider;
                newArticleBlock.value = data.newArticleBlock;
                recentPostsBlock.value = data.recentPostsBlock;
                subscribeBlock.value = data.subscribeBlock;
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
        aboutBlock,
        contactBlock,
        mainSlider,
        newArticleBlock,
        recentPostsBlock,
        subscribeBlock,
        show,
    };
});
