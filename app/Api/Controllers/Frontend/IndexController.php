<?php

namespace App\Api\Controllers\Frontend;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Api\Controllers\Backend\Table\Controller as BaseController;

use Illuminate\Http\Request;


class IndexController extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get(Request $request)
    {
        // --------------------------------------------------------------------------
        // hahaha 初始化
        // --------------------------------------------------------------------------
        // \hahaha\application::instance()
        // ->initial()
        // ->initial_web();
        // --------------------------------------------------------------------------
        //
        // --------------------------------------------------------------------------
        $input = $request->post();

        $page = $input['page'];
        $result = [];
        if($page == "index")
        {
            $this->aboutBlock($result);
            $this->contactBlock($result);
            $this->mainSlider($result);
            $this->newArticleBlock($result);
            $this->recentPostsBlock($result);
            $this->subscribeBlock($result);
        }
        else if($page == "about")
        {
            $this->recentPostsBlock($result);
            $this->mostPopularPostsBlock($result);
            $this->aboutPage($result);
            $this->searchBlock($result);
        }
        else if($page == "contact")
        {
            $this->recentPostsBlock($result);
            $this->mostPopularPostsBlock($result);
            $this->contactBlock2($result);
            $this->searchBlock($result);
        }
        else if($page == "blog")
        {
            $this->recentPostsBlock($result);
            $this->mostPopularPostsBlock($result);
            $this->allPostsBlock($result);
            $this->searchBlock($result);
        }
        else if($page == "single_post")
        {
            $this->recentPostsBlock($result);
            $this->mostPopularPostsBlock($result);
            $this->postBlock($result);
            $this->commentBlock($result);
            $this->searchBlock($result);
        }

        return $result;
    }

    // -------------------------------------------
    // 模擬資料
    // -------------------------------------------

    // ----------------------------------------------------------------
    // index
    // ----------------------------------------------------------------
    public function aboutBlock(&$result)
    {
        $result["aboutBlock"] = [
            "title" => "這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試",
            "about" => "關於我們",
            "subHeader" => "這是測試",
            "content" => "這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試<br>
            這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試<br>
            這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試這是測試<br>",
            "button" => "一起工作",
        ];
    }

    public function contactBlock(&$result)
    {
        $result["contactBlock"] = [
            "title" => "想知道更多，關於我們?",
            "facebook" => [
                "image" => "/img/facebook-footer.svg",
                "href" => "https://www.facebook.com/",
            ],
            "instagram" => [
                "image" => "/img/instagramm-footer.svg",
                "href" => "https://www.instagram.com/",
            ],
            "pinterest" => [
                "image" => "/img/pinterest-footer.svg",
                "href" => "https://www.pinterest.com/",
            ],
        ];
    }

    public function mainSlider(&$result)
    {
        $result["mainSlider"] = [
            "welcome" => "WELCOME",
            "sub" => "TO OUR BLOG",
            "content" => "Vue3 套版測試 - 如有侵權請告知 hahaha0417@hotmail.com",
        ];
    }

    public function newArticleBlock(&$result)
    {
        $img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
        $img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
        $img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
        $img_logo_blog = "/img/logo-blog.png";

        $result["newArticleBlock"] = [
            [
                "image" => $img_architecture_1857175_1920,
                "cardText" => "最流行",
                "cardTitle" => "流行流行流行流行流行流行流行流行流行流行",
                "postAutor" => "Posted by hahaha&nbsp;",
                "postData" => "| 30 07 2023",
                "button" => "閱讀文章",
            ],
            [
                "image" => $img_castle_1998435_1920,
                "cardText" => "最流行",
                "cardTitle" => "流行流行流行流行流行流行流行流行流行流行",
                "postAutor" => "Posted by hahaha&nbsp;",
                "postData" => "| 30 07 2023",
                "button" => "閱讀文章",
            ],
            [
                "image" => $img_staircase_274614_1920,
                "cardText" => "最流行",
                "cardTitle" => "流行流行流行流行流行流行流行流行流行流行",
                "postAutor" => "Posted by hahaha&nbsp;",
                "postData" => "| 30 07 2023",
                "button" => "閱讀文章",
            ],
        ];
    }

    public function recentPostsBlock(&$result)
    {
        $result["recentPostsBlock"] = [
            "recentPost" => "最近貼文",
            "subHeader" => "最近貼文最近貼文最近貼文最近貼文最近貼文",
            "list" => [
                [
                    "user" => "Posted by hahaha",
                    "calendar" => "30 07 2021",
                    "postTitle" => [
                        "title" => "標題標題標題標題標題標題",
                        "href" => "/single-post",
                    ],
                    "postContent" => "內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>",
                    "postMeta" => "20 評論",
                ],
                [
                    "user" => "Posted by hahaha",
                    "calendar" => "30 07 2021",
                    "postTitle" => [
                        "title" => "標題標題標題標題標題標題",
                        "href" => "/single-post",
                    ],
                    "postContent" => "內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>",
                    "postMeta" => "20 評論",
                ],
                [
                    "user" => "Posted by hahaha",
                    "calendar" => "30 07 2021",
                    "postTitle" => [
                        "title" => "標題標題標題標題標題標題",
                        "href" => "/single-post",
                    ],
                    "postContent" => "內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>
                        內容內容內容內容內容內容內容內容內容<br>",
                    "postMeta" => "20 評論",
                ],
            ],
            "showAllButton" => "顯示所有貼文",
        ];
    }

    public function subscribeBlock(&$result)
    {
        $result["subscribeBlock"] = [
            "title" => "訂閱 & 不要遺失",
            "content" => "訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
            訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
            訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
            訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>
            訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱訂閱<br>",
            "subscribe" => "訂閱",
        ];
    }

    // ----------------------------------------------------------------
    // about
    // ----------------------------------------------------------------
    public function mostPopularPostsBlock(&$result)
    {
        $img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
        $img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
        $img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
        $img_meeting_2284501_1920 = "/img/meeting-2284501_1920.jpg";

        $result["mostPopularPostsBlock"] = [
            "mostPopularPost" => "閱讀最流行貼文",
            "list" => [
                [
                    "image" => $img_architecture_1857175_1920,
                    "title" => "標題",
                    "user" => "hahaha",
                    "calendar" => "30 07 2023",
                    "comment" => "300",
                    "button" => "閱讀文章",
                ],
                [
                    "image" => $img_castle_1998435_1920,
                    "title" => "標題",
                    "user" => "hahaha",
                    "calendar" => "30 07 2023",
                    "comment" => "300",
                    "button" => "閱讀文章",
                ],
                [
                    "image" => $img_staircase_274614_1920,
                    "title" => "標題",
                    "user" => "hahaha",
                    "calendar" => "30 07 2023",
                    "comment" => "300",
                    "button" => "閱讀文章",
                ],
            ],
        ];
    }

    public function aboutPage(&$result)
    {
        $result["aboutPage"] = <<<EOT
        <h2 class="underscore">標題...</h2>
    <p class="sup-header">標題標題標題標題標題標題標題標題標題標題?</p>
    <div class="line"></div>
    <img
        src="/img/meeting-2284501_1920.jpg"
        class="d-block w-100 mb-5"
        alt="..."
    />
    <h4>內容</h4>
    <p>
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
    </p>
    <h5>內容</h5>
    <ul class="list-in-text">
        <li>內容內容內容內容內容內容內容內容內容內容</li>
        <li>內容內容內容內容內容內容內容內容內容內容</li>
        <li>內容內容內容內容內容內容內容內容內容內容</li>
    </ul>
    <p>
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
    </p>
    <div
        class="features dark text-uppercase d-flex justify-content-around py-5 my-5"
    >
        <div class="feature-item text-center">
            <p class="display-2">300</p>
            <p>滿意客戶端</p>
        </div>
        <div class="feature-item text-center">
            <p class="display-2">20</p>
            <p>獎項</p>
        </div>
        <div class="feature-item text-center">
            <p class="display-2">400</p>
            <p>完成專案</p>
        </div>
    </div>
    <p>
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
        內容內容內容內容內容內容內容內容內容內容<br />
    </p>

EOT;
    }

    public function searchBlock(&$result)
    {
        $result["searchBlock"] = [
            "placeholder" => "搜尋",
        ];
    }

    // ----------------------------------------------------------------
    // contact
    // ----------------------------------------------------------------
    public function contactBlock2(&$result)
    {
        $result["contactBlock"] = [
            "title" => "標題",
            "content" => "內容內容內容內容內容內容內容內容內容內容<br>
            內容內容內容內容內容內容內容內容內容內容<br>
            內容內容內容內容內容內容內容內容內容內容<br>
            內容內容內容內容內容內容內容內容內容內容<br>
            內容內容內容內容內容內容內容內容內容內容<br>",
            "namePlaceholder" => "Name *",
            "emailPlaceholder" => "Email Address *",
            "messagePlaceholder" => "Leave a Message",
            "button" => "送出訊息",
        ];
    }

    // ----------------------------------------------------------------
    // blog
    // ----------------------------------------------------------------
    public function allPostsBlock(&$result)
    {
        $img_architecture_1857175_1920 = "/img/architecture-1857175_1920.jpg";
        $img_castle_1998435_1920 = "/img/castle-1998435_1920.jpg";
        $img_staircase_274614_1920 = "/img/staircase-274614_1920.jpg";
        $img_logo_blog = "/img/logo-blog.png";

        $result["allPostsBlock"] = [
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
            [
                "image" => $img_architecture_1857175_1920,
                "title" => "標題",
                "user" => "hahaha",
                "calendar" => "30 07 2023",
                "comment" => 0,
                "content" => "內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>
                內容內容內容內容內容內容內容內容內容內容<br>...",
                "button" => [
                    "title" => "閱讀更多",
                    "href" => "/single_post",
                ],
            ],
        ];
    }

    // ----------------------------------------------------------------
    // single post
    // ----------------------------------------------------------------
    public function postBlock(&$result)
    {
        $result["postBlock"] = <<<EOT
        <h2 class="underscore">標題</h2>
    <div class="post-meta">
        <span><i class="far fa-user"></i> Posted by hahaha</span><span><i class="far fa-calendar"></i>
            30 07 2023</span><span><i class="far fa-comment-alt"></i> 0 評論</span>
    </div>
    <img :src="img_castle_1998435_1920" alt="">
    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    <figure class="quote text-end">
        <blockquote class="blockquote">
            <p>一個著名的引用，包含在一個 blockquote 元素中</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            某出名 in <cite title="Source Title">來源標題</cite>
        </figcaption>
    </figure>
    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    <h4>內容內容內容內容內容內容內容內容內容內容內容內容</h4>
    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    <h5>內容內容內容內容內容內容內容內容內容內容內容內容</h5>
    <ul class="list-in-text">
        <li>內容內容內容內容內容內容 </li>
        <li>內容內容內容內容內容內容 </li>
        <li>內容內容內容內容內容內容 </li>
        <li>內容內容內容內容內容內容 </li>
        <li>內容內容內容內容內容內容 </li>
    </ul>
    <p>內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br>
        內容內容內容內容內容內容內容內容內容內容內容內容<br></p>
    <div class="share">
        <a class="main-button" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i> FACEBOOK</a>
        <a class="main-button" href="https://www.google.com/"> <i class="fab fa-google-plus-g"></i> GOOGLE+</a>
        <a class="main-button" href="https://twitter.com/"><i class="fab fa-twitter"></i> TWITTER</a>
        <a class="main-button" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i> LINKEDIN</a>
        <a class="main-button" href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i> PINTEREST</a>
    </div>
    <div class="navigation">
        <a class="prew"><i class="fas fa-chevron-left"></i> PREVIOUS</a>
        <a class="next">NEXT <i class="fas fa-chevron-right"></i></a>
    </div>
    <div class="line"></div>
EOT;
    }

    public function commentBlock(&$result)
    {
        $result["commentBlock"] = [
            "title" => "留下評論",
            "commentPlaceholder" => "Comment *",
            "namePlaceholder" => "Name *",
            "emailPlaceholder" => "Email Address *",
            "button" => "Post Comment",
        ];
    }







    // ----------------------------------------------------------------
    // contact
    // ----------------------------------------------------------------
}
