import { defineStore } from "pinia";
import { onMounted, onUnmounted, computed, ref } from "vue";
import axios from "axios";

// global全域變數 - index
export const useAboutStore = defineStore("about", () => {

    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";

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
    // const aboutPage = `<h2 class="underscore">標題...</h2>
    // <p class="sup-header">標題標題標題標題標題標題標題標題標題標題?</p>
    // <div class="line"></div>
    // <img
    //     src="/img/meeting-2284501_1920.jpg"
    //     class="d-block w-100 mb-5"
    //     alt="..."
    // />
    // <h4>內容</h4>
    // <p>
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    // </p>
    // <h5>內容</h5>
    // <ul class="list-in-text">
    //     <li>內容內容內容內容內容內容內容內容內容內容</li>
    //     <li>內容內容內容內容內容內容內容內容內容內容</li>
    //     <li>內容內容內容內容內容內容內容內容內容內容</li>
    // </ul>
    // <p>
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    // </p>
    // <div
    //     class="features dark text-uppercase d-flex justify-content-around py-5 my-5"
    // >
    //     <div class="feature-item text-center">
    //         <p class="display-2">300</p>
    //         <p>滿意客戶端</p>
    //     </div>
    //     <div class="feature-item text-center">
    //         <p class="display-2">20</p>
    //         <p>獎項</p>
    //     </div>
    //     <div class="feature-item text-center">
    //         <p class="display-2">400</p>
    //         <p>完成專案</p>
    //     </div>
    // </div>
    // <p>
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    //     內容內容內容內容內容內容內容內容內容內容<br />
    // </p>`;
    // const searchBlock = {
    //     placeholder: `搜尋`,
    // };


    const recentPostsBlock = ref({});
    const mostPopularPostsBlock = ref({});
    const aboutPage = ref("");
    const searchBlock = ref({});

    const errorMessage = ref("");


    const fetchApiData = async () => {
        try {
            const res = await axios.post(
                "/api/get", {
                    page: `about`
                }
            ).then((res) => {
                console.log(res);
                var data = res.data;

                recentPostsBlock.value = data.recentPostsBlock;
                mostPopularPostsBlock.value = data.mostPopularPostsBlock;
                aboutPage.value = data.aboutPage;
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
        aboutPage,
        searchBlock,
        show
    };
});
