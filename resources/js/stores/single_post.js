import { defineStore } from "pinia";
import { onMounted, onUnmounted, computed, ref } from "vue";
import axios from "axios";

// global全域變數 - single_post
export const useSinglePostStore = defineStore("single_post", () => {

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
    // const postBlock = `<h2 class="underscore">標題</h2>
    // <div class="post-meta">
    //     <span><i class="far fa-user"></i> Posted by hahaha</span><span><i class="far fa-calendar"></i>
    //         30 07 2023</span><span><i class="far fa-comment-alt"></i> 0 評論</span>
    // </div>
    // <img :src="img_castle_1998435_1920" alt="">
    // <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    // <figure class="quote text-end">
    //     <blockquote class="blockquote">
    //         <p>一個著名的引用，包含在一個 blockquote 元素中</p>
    //     </blockquote>
    //     <figcaption class="blockquote-footer">
    //         某出名 in <cite title="Source Title">來源標題</cite>
    //     </figcaption>
    // </figure>
    // <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    // <h4>內容內容內容內容內容內容內容內容內容內容內容內容</h4>
    // <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    // <h5>內容內容內容內容內容內容內容內容內容內容內容內容</h5>
    // <ul class="list-in-text">
    //     <li>內容內容內容內容內容內容 </li>
    //     <li>內容內容內容內容內容內容 </li>
    //     <li>內容內容內容內容內容內容 </li>
    //     <li>內容內容內容內容內容內容 </li>
    //     <li>內容內容內容內容內容內容 </li>
    // </ul>
    // <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br>
    //     內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    // <div class="share">
    //     <a class="main-button" href=""><i class="fab fa-facebook-f"></i> FACEBOOK</a>
    //     <a class="main-button" href=""> <i class="fab fa-google-plus-g"></i> GOOGLE+</a>
    //     <a class="main-button" href=""><i class="fab fa-twitter"></i> TWITTER</a>
    //     <a class="main-button" href=""><i class="fab fa-linkedin-in"></i> LINKEDIN</a>
    //     <a class="main-button" href=""><i class="fab fa-pinterest-p"></i> PINTEREST</a>
    // </div>
    // <div class="navigation">
    //     <a class="prew"><i class="fas fa-chevron-left"></i> PREVIOUS</a>
    //     <a class="next">NEXT <i class="fas fa-chevron-right"></i></a>
    // </div>
    // <div class="line"></div>`;
    // const searchBlock = {
    //     placeholder: `搜尋`,
    // };
    // const commentBlock = {
    //     title: `留下評論`,
    //     commentPlaceholder: `Comment *`,
    //     namePlaceholder: `Name *`,
    //     emailPlaceholder: `Email Address *`,
    //     button: `Post Comment`,
    // };

    const recentPostsBlock = ref({});
    const mostPopularPostsBlock = ref({});
    const postBlock = ref("");
    const searchBlock = ref({});
    const commentBlock = ref({});

    const errorMessage = ref("");


    const fetchApiData = async () => {
        try {
            const res = await axios.post(
                "/api/get", {
                    page: `single_post`
                }
            ).then((res) => {
                // console.log(res);
                var data = res.data;

                recentPostsBlock.value = data.recentPostsBlock;
                mostPopularPostsBlock.value = data.mostPopularPostsBlock;
                postBlock.value = data.postBlock;
                searchBlock.value = data.searchBlock;
                commentBlock.value = data.commentBlock;

                const errorMessage = ref("");

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
        postBlock,
        searchBlock,
        commentBlock,
        show,
    };
});
