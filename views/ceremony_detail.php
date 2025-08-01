<!DOCTYPE html>
<html>

<head>
    <title>法會活動 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400">
    <?php include 'topmenu.php'; ?>
    <div class="ceremony-banner flex pt-80 lg:pt-0 lg:relative">
        <div class="pic-area mr-8 lg:w-full lg:aspect-[4/3] lg:mr-0">
            <img class="lg:w-full lg:h-full lg:object-cover" src="./images/ceremony-banner.jpg">
        </div>
        <div class="article-area lg:absolute lg:left-6 lg:bottom-6">
            <div class="date hidden lg:block lg:text-xs font-bold lg:text-white-400 lg:mb-2">農曆 八月十五</div>
            <div class="ch mb-72 lg:mb-2 writing-vertical lg:writing-unset text-[146px] lg:text-3xl text-blue-1000 lg:text-white-400 tracking-wide font-bold leading-1.1">賜緣<br class="hidden">大法會</div>
            <div class="en text-[40px] lg:text-xs text-blue-1000 font-bold bottom-6 lg:text-white-400 right-3 leading-1.2 lg:leading-1.4">REVEALED AFFINITY <br>CEREMONY</div>
        </div>
    </div>
    <div class="ceremony-middle pt-72 pb-80 lg:px-8 lg:py-20">
        <div class="title text-center text-3.5xl lg:text-xl mb-20 lg:mb-8 text-blue-1000 tracking-wider lg:tracking-wide font-bold">“ 明月映緣 月老賜福 ”</div>
        <div class="content text-justify w-[900px] lg:w-full mx-auto text-base lg:text-sm text-blue-1000 font-semibold tracking-wide lg:tracking-normal leading-1.8">
            日月潭明月宮，坐落於碧波環繞的湖光美景之中，是信眾敬拜月老的重要聖地。今年，我們誠摯邀請有情人參與「顯緣大法會」，在月老的庇佑下，祈求良緣顯現，締結美滿姻緣。法會將透過傳統儀式，如上表奏疏、點燈祈願及紅線加持，為參與者開啟幸福契機。無論是尋覓真愛，或是期盼關係更加穩固，皆可在此誠心祈禱，迎接月老賜予的美好姻緣。
        </div>
    </div>
    <div class="ceremonyList-area flex lg:block bg-blue-1000 pt-72 pb-[570px] relative lg:pt-20 lg:pb-48 lg:px-8">
        <div class="deco absolute left-6 top-20 z-10 lg:top-8"><img class="lg:w-[60px]" src="./images/cd-hulu-deco.svg" alt=""></div>
        <ul class="ceremony-picList w-[1207px] h-[829px] lg:w-full lg:h-auto lg:aspect-[4/3] lg:mb-8" v-scope="{
                posts: [
                    {
                        pic:`./images/cd-pic-1.jpg`,
                    },{
                       pic:`./images/cd-pic-1.jpg`,
                    },{
                       pic:`./images/cd-pic-1.jpg`,
                    },{
                        pic:`./images/cd-pic-1.jpg`,
                    },{
                       pic:`./images/cd-pic-1.jpg`,
                    },
                ]
            }" v-on:vue:mounted="ceremonyPicHandler($el)">
            <li v-for="p,i in posts" class="w-[1207px] h-[829px] mr-12 lg:w-full lg:h-auto lg:aspect-[4/3] lg:mr-0">
                <img :src="p.pic">
            </li>
        </ul>
        <div class="article-area py-28 px-20 lg:py-0 lg:px-0">
            <ul class="ceremony-articleList w-[580px] lg:w-full" v-scope="{
                titles: [
                    {
                        title: `“ 緣起明月，福佑良人 ”`,
                        content: `結合文化資源，開發特色旅遊路線，提升廟宇及周邊景點的吸引力，推動在地觀光經濟。積極參與國際文化交流活動，吸引更多國際遊客，讓日月潭的美麗與月老廟的文化廣為人知。<br><br>這些計畫目標旨在讓日月潭明月宮月老廟成為文化傳承的重要據點，促進社區發展，並將其獨特的文化魅力帶給更廣大的群體。`,
                        },{
                        title: `“ 緣起明月，福佑良人 ”`,
                        content: `結合文化資源，開發特色旅遊路線，提升廟宇及周邊景點的吸引力，推動在地觀光經濟。積極參與國際文化交流活動，吸引更多國際遊客，讓日月潭的美麗與月老廟的文化廣為人知。<br><br>這些計畫目標旨在讓日月潭明月宮月老廟成為文化傳承的重要據點，促進社區發展，並將其獨特的文化魅力帶給更廣大的群體。`,
                        },{
                        title: `“ 緣起明月，福佑良人 ”`,
                        content: `結合文化資源，開發特色旅遊路線，提升廟宇及周邊景點的吸引力，推動在地觀光經濟。積極參與國際文化交流活動，吸引更多國際遊客，讓日月潭的美麗與月老廟的文化廣為人知。<br><br>這些計畫目標旨在讓日月潭明月宮月老廟成為文化傳承的重要據點，促進社區發展，並將其獨特的文化魅力帶給更廣大的群體。`,
                        },{
                        title: `“ 緣起明月，福佑良人 ”`,
                        content: `結合文化資源，開發特色旅遊路線，提升廟宇及周邊景點的吸引力，推動在地觀光經濟。積極參與國際文化交流活動，吸引更多國際遊客，讓日月潭的美麗與月老廟的文化廣為人知。<br><br>這些計畫目標旨在讓日月潭明月宮月老廟成為文化傳承的重要據點，促進社區發展，並將其獨特的文化魅力帶給更廣大的群體。`,
                        },{
                        title: `“ 緣起明月，福佑良人 ”`,
                        content: `結合文化資源，開發特色旅遊路線，提升廟宇及周邊景點的吸引力，推動在地觀光經濟。積極參與國際文化交流活動，吸引更多國際遊客，讓日月潭的美麗與月老廟的文化廣為人知。<br><br>這些計畫目標旨在讓日月潭明月宮月老廟成為文化傳承的重要據點，促進社區發展，並將其獨特的文化魅力帶給更廣大的群體。`,
                        },
                ]
            }" v-on:vue:mounted="ceremonyArticleHandler($el)">
                <li v-for="t,i in titles" class="mr-16 relative w-full">
                    <div class="title text-center text-[40px] mb-36 lg:mb-8 lg:text-xl text-white-400 tracking-wider font-bold">“ 明月映緣 月老賜福 ”</div>
                    <div v-html="t.content" class="content text-justify text-base lg:text-sm text-white-400 font-normal tracking-wide leading-1.8">
                    </div>
                </li>
            </ul>
            <div class="flex items-center justify-center gap-10 mt-32 lg:mt-16 select-none">
                <div id="prev" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                    <img src="images/arrow-prev-white.svg">
                </div>

                <div class="font-medium text-xl lg:text-base text-white-400 flex items-center gap-2">
                    <div id="now" class="font-bold">01</div>

                    <div>/</div>

                    <div id="total">18</div>
                </div>

                <div id="next" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                    <img src="images/arrow-next-white.svg">
                </div>
            </div>
        </div>
        <div class="lg:hidden deco absolute -left-4 -right-2 bottom-44"><img src="./images/cd-hulu-draw.svg" alt=""></div>
        <div class="hidden lg:block deco absolute left-0 right-0 -bottom-16"><img class="w-full" src="./images/cd-hulu-draw-mobile.svg" alt=""></div>
    </div>
    <div class="ceremony-realtionship pt-32 pb-60 lg:pt-12 lg:pb-20">
        <div class="title lg:px-8"><img class="mx-auto" src="./images/cd-relationship-title.svg" alt=""></div>
        <div class="hulu mb-20 lg:mb-12 lg:px-8"><img class="mx-auto" src="./images/cd-hulus.svg" alt=""></div>
        <div class="content mb-48 lg:mb-20 text-center w-[680px] lg:w-full mx-auto text-base lg:text-sm text-blue-1000 font-semibold tracking-wide leading-2 lg:px-8">
            月下老人身為執掌天下「姻緣」之神，本宮月下老人領玉旨掌管《五大姻緣簿》，<br>
            分別為「金姻緣、木姻緣、水姻緣、火姻緣、土姻緣」，<br>
            故本宮月老並非只掌管男女姻緣，而是掌管所有的「姻緣」。
        </div>

        <div class="article-area">
            <ul class="huluList w-full" v-scope="{
                hulus: [
                    {
                       hulu:`./images/fire.png`
                    },
                    {
                       hulu:`./images/mud.png`
                    },
                    {
                       hulu:`./images/gold.png`
                    },
                    {
                       hulu:`./images/tree.png`
                    },
                    {
                       hulu:`./images/water.png`
                    },
                ]
            }" v-on:vue:mounted="huluHandler($el)">
                <li v-for="h,i in hulus" class="-mr-36 relative w-[607px] h-[942px] lg:w-full lg:h-auto lg:aspect-[607/942]">
                    <img :src="h.hulu" alt="">
                </li>
            </ul>
            <div class="flex items-center justify-center gap-10 mt-24 select-none">
                <div id="prev-h" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                    <img src="images/arrow-prev.svg">
                </div>

                <div class="font-medium text-xl lg:text-base text-blue-1000 flex items-center gap-2">
                    <div id="now-h" class="font-bold">01</div>

                    <div>/</div>

                    <div id="total-h">18</div>
                </div>

                <div id="next-h" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                    <img src="images/arrow-next.svg">
                </div>
            </div>
        </div>
    </div>
    <div class="ceremony-activity mb-40 pl-20 pb-32 lg:pl-8 lg:mb-12 lg:pb-12">
        <div class="flex lg:block">
            <div class="title-area mr-60 lg:mr-0 lg:mb-4">
                <div class="ch mb-8 lg:mb-2 writing-vertical lg:writing-unset text-5xl lg:text-3xl text-blue-1000 tracking-normal font-bold lg:leading-1.1">法會活動</div>
                <div class="en text-xl lg:text-xs text-blue-1000 font-bold leading-1.2 lg:leading-1.4 ml-6 lg:ml-0">CEREMONY <br>OVERVIEW</div>
            </div>
            <ul class="activityList w-full" v-scope="{
                activities: [
                    {
                        pic:`./images/c-activity-pic-1.jpg`,
                        link:`./ceremony-signup`,
                        title:`月老顯緣金箱－金姻緣`,
                        content:`祈求月老護祐：天長地久，百年好合，情比金堅，如同真金不怕火煉。永結同心，白頭偕老，婚姻美滿，家庭和樂。`
                    },{
                       pic:`./images/c-activity-pic-2.jpg`,
                       link:`./ceremony-signup`,
                       title:`月老顯緣金箱－木姻緣`,
                       content:`祈求月老護祐：貴人不斷往下扎根，拓展人脈；也如同樹木向上開枝散葉，藉由貴人的輔助，不斷成長。`
                    },{
                       pic:`./images/c-activity-pic-3.jpg`,
                       link:`./ceremony-signup`,
                       title:`月老顯緣金箱－水姻緣`,
                       content:`祈求月老護祐：未婚男女之感情，有如海上浮木漂流不定，祈求有情人終成眷屬，早日促成美滿良緣。`
                    }, {
                        pic:`./images/c-activity-pic-1.jpg`,
                        link:`./ceremony-signup`,
                        title:`月老顯緣金箱－金姻緣`,
                        content:`祈求月老護祐：天長地久，百年好合，情比金堅，如同真金不怕火煉。永結同心，白頭偕老，婚姻美滿，家庭和樂。`
                    },{
                       pic:`./images/c-activity-pic-2.jpg`,
                       link:`./ceremony-signup`,
                       title:`月老顯緣金箱－木姻緣`,
                       content:`祈求月老護祐：貴人不斷往下扎根，拓展人脈；也如同樹木向上開枝散葉，藉由貴人的輔助，不斷成長。`
                    }
                ]
            }" v-on:vue:mounted="activityHandler($el)">
                <li v-for="a, i in activities" class="w-[460px] lg:w-[240px] pr-12 mr-16 lg:mr-8 border-r-2 border-r-blue-1000">
                    <div class="pic mb-4 w-[400px] h-[493px] lg:w-[210px] lg:h-[260px]"><img :src="a.pic" alt=""></div>
                    <div class="article-area">
                        <div class="title mb-8 font-xl lg:font-lg lg:mb-4 text-blue-1000 font-semibold tracking-wide">{{a.title}}</div>
                        <div class="content w-[400px] lg:w-full text-justify mb-8 text-base lg:text-sm lg:mb-4 text-blue-1000 tracking-wide leading-1.8">{{a.content}}</div>
                        <div class="btn"><a :href="a.link"><img src="./images/c-activity-btn.svg"></a></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex items-center justify-center gap-10 mt-32 select-none">
            <div id="prev-a" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                <img src="images/arrow-prev.svg">
            </div>

            <div class="font-medium text-xl lg:text-base text-blue-1000 flex items-center gap-2">
                <div id="now-a" class="font-bold">01</div>

                <div>/</div>

                <div id="total-a">04</div>
            </div>

            <div id="next-a" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                <img src="images/arrow-next.svg">
            </div>
        </div>
    </div>
    <div class="other-ceremony flex pl-40 pr-36 pb-80 lg:px-0 lg:pb-40 lg:block relative">
        <div class="title-area mr-80 lg:mr-0 lg:mb-8 lg:px-8">
            <div class="lg:hidden en text-[75px] text-blue-1000 tracking-normal font-bold -mb-4 leading-1">CEREMONY</div>
            <div class="lg:hidden ch text-2xl text-blue-1000 tracking-normal font-bold ml-2">法會活動</div>
            <div class="hidden lg:block ch mb-2 text-3xl text-blue-1000 tracking-normal font-bold leading-1.1">法會活動</div>
            <div class="hidden lg:block en text-xs text-blue-1000 font-bold leading-1.4 ml-6 lg:ml-0">CEREMONY OVERVIEW</div>

        </div>
        <div class="pic-area flex lg:block relative">
            <ul class="otherPicList w-[641px] h-[440px] mr-12 lg:w-full lg:h-auto lg:aspect-[4/3]" v-scope="{
                posts: [
                    {
                        pic:`./images/cd-other-pic-1.jpg`,
                    },{
                       pic:`./images/cd-other-pic-1.jpg`,
                    },{
                       pic:`./images/cd-other-pic-1.jpg`,
                    },{
                        pic:`./images/cd-other-pic-1.jpg`,
                    },{
                       pic:`./images/cd-other-pic-1.jpg`,
                    },
                ]
            }" v-on:vue:mounted="otherPicHandler($el)">
                <li v-for="p,i in posts" class="w-full">
                    <img :src="p.pic" class="w-full h-full object-cover">
                </li>
            </ul>
            <div class="lg:absolute lg:left-6 lg:bottom-10 lg:h-[76px]">
                <ul class="otherArticleList w-[280px] mt-auto -mb-12 " v-scope="{
                titles: [
                    {
                        ch: `祈願法會`,
                        en: `PRAYER CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },{
                        ch: `祈願法會`,
                        en: `PRAYER CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },
                    {
                        ch: `祈願法會`,
                        en: `PRAYER CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },{
                        ch: `祈願法會`,
                        en: `PRAYER CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },
                    {
                        ch: `祈願法會`,
                        en: `PRAYER CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },
                ]
            }" v-on:vue:mounted="otherArticleHandler($el)">
                    <li v-for="t,i in titles" class="mr-16 relative flex w-full lg:block">
                        <div class="date lg:hidden writing-vertical lg:writing-unset text-base text-blue-1000 tracking-wide font-normal flex mt-48 mr-2">
                            <div class="text-2xl font-medium mb-4">農曆</div>
                            <div class="h-[125px] leading-1.5 mr-1">{{t.date}}</div>
                        </div>
                        <div class="date hidden lg:block lg:text-xs font-bold lg:text-white-400 lg:mb-2">農曆 {{t.date}}</div>
                        <div class="ch writing-vertical lg:writing-unset lg:mb-2 text-5xl lg:text-3xl lg:text-white-400 text-blue-1000 tracking-wide font-bold leading-1.1">{{t.ch}}</div>
                        <div class="en text-xl lg:text-xs text-blue-1000 lg:text-white-400 font-bold w-[100px] lg:w-auto bottom-8 right-3 leading-1.2">{{t.en}}</div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="absolute flex items-center justify-center gap-10 top-40 left-0 select-none lg:static lg:mt-4">
            <div id="prev-o" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                <img src="images/arrow-prev.svg">
            </div>

            <div class="font-medium text-xl lg:text-base text-blue-1000 flex items-center gap-2">
                <div id="now-o" class="font-bold">01</div>

                <div>/</div>

                <div id="total-o">18</div>
            </div>

            <div id="next-o" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                <img src="images/arrow-next.svg">
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>
<script>
    $(".topmenu .logo").addClass("is-white");
    ScrollTrigger.create({
        toggleActions: "play pause resume reverse", //重覆觸發
        trigger: '.ceremony-banner',
        start: "top 10%",
        end: "bottom 10%",
        // markers: true,
        onEnter() {
            $(".topmenu .logo").addClass("is-white");
        },
        onLeave() {
            $('.topmenu .logo').removeClass('is-white');
        },
        onEnterBack() {
            $(".topmenu .logo").addClass("is-white");
        },
        onLeaveBack() {
            $(".topmenu .logo").removeClass("is-white");
        },
    });

    function ceremonyArticleHandler(el) {
        let dragging = false;

        const $carousel = $(el).flickity({
            "prevNextButtons": false,
            "pageDots": false,
            "wrapAround": false,
            "autoPlay": false,
            "draggable": true,
            "cellAlign": "center",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": "",

        }).on('dragStart.flickity', function(event, pointer) {
            dragging = true
        }).on('dragEnd.flickity', function(event, pointer) {
            gsap.delayedCall(0.2, function() {
                dragging = false
            });
        }).on('pointerUp.flickity', function(event, pointer) {
            if (dragging) {
                return false
            }

            fancyOpen()
        })


        $("#prev").on("click", function() {
            $carousel.flickity('previous');
            $carousel.flickity('stopPlayer');
        })

        $("#next").on("click", function() {
            $carousel.flickity('next');
            $carousel.flickity('stopPlayer');
        })


        var cellElements = $carousel.flickity('getCellElements');


        $carousel.on('change.flickity', function(event, index) {
            $("#now").text(padLeft(index + 1, 2));
        });


        $("#total").text(padLeft(cellElements.length, 2));
    }

    function ceremonyPicHandler(el) {
        let dragging = false;

        const $carousel = $(el).flickity({
            "prevNextButtons": false,
            "pageDots": false,
            "wrapAround": false,
            "autoPlay": false,
            "draggable": false,
            "cellAlign": "center",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": "",
            "asNavFor": ".ceremony-articleList",
        })
    }

    function huluHandler(el) {
        let dragging = false;

        const $carousel = $(el).flickity({
            "prevNextButtons": false,
            "pageDots": false,
            "wrapAround": false,
            "autoPlay": false,
            "draggable": true,
            "cellAlign": "center",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": "",

        }).on('dragStart.flickity', function(event, pointer) {
            dragging = true
        }).on('dragEnd.flickity', function(event, pointer) {
            gsap.delayedCall(0.2, function() {
                dragging = false
            });
        }).on('pointerUp.flickity', function(event, pointer) {
            if (dragging) {
                return false
            }

            fancyOpen()
        })


        $("#prev-h").on("click", function() {
            $carousel.flickity('previous');
            $carousel.flickity('stopPlayer');
        })

        $("#next-h").on("click", function() {
            $carousel.flickity('next');
            $carousel.flickity('stopPlayer');
        })


        var cellElements = $carousel.flickity('getCellElements');


        $carousel.on('change.flickity', function(event, index) {
            $("#now-h").text(padLeft(index + 1, 2));
        });


        $("#total-h").text(padLeft(cellElements.length, 2));
    }

    function activityHandler(el) {
        let dragging = false;

        const $carousel = $(el).flickity({
            "prevNextButtons": false,
            "pageDots": false,
            "wrapAround": true,
            "autoPlay": false,
            "draggable": true,
            "cellAlign": "left",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": "",
        })
        $("#prev-a").on("click", function() {
            $carousel.flickity('previous');
            $carousel.flickity('stopPlayer');
        })

        $("#next-a").on("click", function() {
            $carousel.flickity('next');
            $carousel.flickity('stopPlayer');
        })


        var cellElements = $carousel.flickity('getCellElements');


        $carousel.on('change.flickity', function(event, index) {
            $("#now-a").text(padLeft(index + 1, 2));
        });


        $("#total-a").text(padLeft(cellElements.length, 2));
    }

    function otherPicHandler(el) {
        let dragging = false;

        const $carousel = $(el).flickity({
            "prevNextButtons": false,
            "pageDots": false,
            "wrapAround": false,
            "autoPlay": false,
            "draggable": true,
            "cellAlign": "center",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": "",

        }).on('dragStart.flickity', function(event, pointer) {
            dragging = true
        }).on('dragEnd.flickity', function(event, pointer) {
            gsap.delayedCall(0.2, function() {
                dragging = false
            });
        }).on('pointerUp.flickity', function(event, pointer) {
            if (dragging) {
                return false
            }

            fancyOpen()
        })


        $("#prev-o").on("click", function() {
            $carousel.flickity('previous');
            $carousel.flickity('stopPlayer');
        })

        $("#next-o").on("click", function() {
            $carousel.flickity('next');
            $carousel.flickity('stopPlayer');
        })


        var cellElements = $carousel.flickity('getCellElements');


        $carousel.on('change.flickity', function(event, index) {
            $("#now-o").text(padLeft(index + 1, 2));
        });


        $("#total-o").text(padLeft(cellElements.length, 2));
    }

    function otherArticleHandler(el) {
        let dragging = false;

        const $carousel = $(el).flickity({
            "prevNextButtons": false,
            "pageDots": false,
            "wrapAround": false,
            "autoPlay": false,
            "draggable": false,
            "cellAlign": "center",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": "",
            "asNavFor": ".otherPicList",
        })
    }
</script>