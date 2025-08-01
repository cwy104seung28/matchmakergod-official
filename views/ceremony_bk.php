<!DOCTYPE html>
<html>

<head>
    <title>法會活動 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body>
    <?php include 'topmenu.php'; ?>
    <div class="ceremonyList-area pt-20 h-lvh relative" style="background: url('./images/ceremony-bg.jpg') center/cover no-repeat;">
        <ul class="ceremonyList" v-scope="{
                posts: [
                    {
                        pic:`./images/ceremony-pic-1.jpg`,
                        link:`./ceremony-detail`
                    },{
                        pic:`./images/ceremony-pic-2.jpg`,
                        link:`./ceremony-detail`
                    },{
                        pic:`./images/ceremony-pic-3.jpg`,
                         link:`./ceremony-detail`
                    },
                ]
            }" v-on:vue:mounted="projectHandler($el)">
            <li v-for="p,i in posts" class="mr-16 relative w-[897px] h-[616px]">
                <a :href="p.link"><img :src="p.pic"></a>
            </li>
        </ul>
        <div class="flex items-center justify-center gap-10 mt-14 select-none">
            <div id="prev" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                <img src="images/arrow-prev.svg">
            </div>

            <div class="font-medium text-xl text-blue-1000 flex items-center gap-2">
                <div id="now" class="font-bold">01</div>

                <div>/</div>

                <div id="total">18</div>
            </div>

            <div id="next" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                <img src="images/arrow-next.svg">
            </div>
        </div>
        <div class="ceremony-titleList-area absolute right-[30rem] bottom-0">
            <ul class="ceremony-titleList w-[280px]" v-scope="{
                titles: [
                    {
                        ch: `顯緣 大法會`,
                        en: `REVEALED AFFINITY CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },{
                        ch: `顯緣 大法會`,
                        en: `REVEALED AFFINITY CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },
                    {
                        ch: `顯緣 大法會`,
                        en: `REVEALED AFFINITY CEREMONY`,
                        date: `三月二十 至 四月初一`
                        },
                ]
            }" v-on:vue:mounted="titleHandler($el)">
                <li v-for="t,i in titles" class="mr-16 relative flex w-full">
                    <div class="date writing-vertical text-base text-blue-1000 tracking-wide font-normal flex mt-24 mr-2">
                        <div class="text-2xl font-medium mb-4">農曆</div>
                        <div class="h-[125px] leading-1.5 mr-1">{{t.date}}</div>
                    </div>
                    <div class="ch writing-vertical text-5xl text-blue-1000 tracking-wide font-bold h-[285px] leading-1.1">{{t.ch}}</div>
                    <div class="en absolute text-xl text-blue-1000 font-bold w-[100px] bottom-6 right-3 leading-1.2">{{t.en}}</div>
                </li>
            </ul>
        </div>

        <div class="title-area absolute bottom-8 left-48">
            <div class="en text-5xl text-blue-1000 tracking-wide font-bold -mb-4 leading-1">CEREMONY</div>
            <div class="ch text-2xl text-blue-1000 tracking-wide font-bold ml-2">法會活動</div>
        </div>
    </div>
</body>
<?php include 'script.php'; ?>

</html>
<script>
    function projectHandler(el) {
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

    function titleHandler(el) {
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
            "asNavFor": ".ceremonyList",
        })
    }


    $('nav .logo').addClass('is-not-show')
</script>