import { defineStore } from "pinia";
import { computed, ref } from "vue";
import axios from "axios";

// -----------------------------------------------------
// 採要才抓，各頁有相同的，由server判斷傳那些
// 這裡最後會變成 const aboutBlock = null;
// 由api撈出資料
// -----------------------------------------------------
// 先土法煉鋼，全部模擬，後面由server置換
// -----------------------------------------------------

// global全域變數 - layout
export const useLayoutStore = defineStore("layout", () => {

    const img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
    const img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
    const img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
    const img_logo_blog = "/img/logo-blog.png";



    const headerBlock = {

        title: {
            logo: img_logo_blog,
            title: `Vue Router`,
        },
        links: {
            home:{
                title: `首頁`,
                url: `/`,
            },
            about:{
                title: `關於`,
                url: `/about`,
            },
            contact:{
                title: `聯絡方式`,
                url: `/contact`,
            },
            blog:{
                title: `部落格`,
                url: `/blog`,
            },
        }
    };

    const footerBlock = {
        copywrite: `@ 2022 你的網域 | 建立由`,
        domain: `hahaha`,
        href: `https://hahaha0417.ddns.net/backend`,
        facebook: {
            image: `/img/facebook-footer.svg`,
            href: `https://www.facebook.com/`,
        },
        instagram: {
            image: `/img/instagramm-footer.svg`,
            href: `https://www.instagram.com/`,
        },
        pinterest: {
            image: `/img/pinterest-footer.svg`,
            href: `https://www.pinterest.com/`,
        }
    };


    return {
        headerBlock,
        footerBlock,
    }
});
