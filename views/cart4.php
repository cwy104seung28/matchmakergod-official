<!DOCTYPE html>
<html>

<head>
    <title>完成訂單 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400 font-jp">
    <?php include 'topmenu.php'; ?>
    <div class="cartWrap bg-green-400 pt-32 pb-80 relative lg:pt-28 lg:pb-20">
        <div class="deco absolute top-[815px] left-0 z-0"><img src="./images/cart-deco-1.svg" alt=""></div>
        <div class="deco absolute top-[1200px] right-0 z-0"><img src="./images/cart-deco-2.svg" alt=""></div>


        <div class="title-area relative text-blue-1000 mx-60 lg:mx-4">
            <div class="en text-[70px] leading-1.1 font-bold lg:text-3.5xl">
                MY<br>FATECART
            </div>
            <div class="ch absolute text-[26px] left-[113px] top-[36px] lg:text-2xl lg:top-[9px] lg:left-[90px]">我的良緣庫</div>
        </div>
        <div class="step-container relative mt-20 mb-32 z-[1] lg:mt-10 lg:mb-16">
            <div class="bg absolute top-[15%] lg:top-[37%]"><img src="./images/cart-line.svg" alt=""></div>
            <ul class="stepList" v-scope="{
                posts: [
                    {
                        num:`01`,
                        ch: `確認項目`,
                        en: `CHECKLIST`,
                    },{
                        num:`02`,
                        ch: `結帳`,
                        en: `CHECKOUT`,
                    },
                    {
                        num:`03`,
                        ch: `填寫資料`,
                        en: `FILL OUT FORM`,
                    },
                    {
                        num:`04`,
                        ch: `完成訂單`,
                        en: `CONFIRM ORDER`,
                    },
                ]
            }" v-on:vue:mounted="projectHandler($el)">
                <li v-for="p,i in posts" class="mr-16 relative pt-12 pb-8">
                    <div class="num absolute top-[10px] left-[-30px] lg:top-[25px] lg:left-[-5px]">{{p.num}}</div>
                    <div class="main">
                        <div class="ch text-[44px] lg:text-lg lg:-mb-1 text-blue-1000 text-center">{{p.ch}}</div>
                        <div class="en text-[17px] lg:text-xs text-blue-1000 text-center">{{p.en}}</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="note text-xl lg:text-base tracking-wide text-center leading-2 text-blue-1000 my-60 lg:my-20">
            *** 您好<br>
            感謝您的訂購<br>
            我們會儘快將您選購的商品寄出！<br>
            祝您有美好的一天 ：）
        </div>
        <div class="detail-container mx-60 mt-12 mb-48 relative z-[1] lg:mx-4 lg:mt-8 lg:mb-16">
            <div class="big-title text-3.5xl lg:text-2xl tracking-wide text-center font-bold text-blue-1000 mb-32 lg:mb-20">結帳明細</div>
            <ul class="title-area flex-container">
                <li class="title"></li>
                <li class="title lg:hidden">品項</li>
                <li class="title lg:hidden">單價</li>
                <li class="title lg:hidden">數量</li>
                <!-- <li class="title lg:hidden"></li> -->
            </ul>
            <!-- <div class="merchandise">結緣品(<span class="total">2</span>)</div> -->
            <ul class="detail-area">
                <li class="flex-container align-middle">
                    <div class="pic"><img src="./images/c-pic-1.jpg"></div>
                    <div class="name">農曆新年-貧富籍冊<br>－法會功德金
                        <div class="price hide-for-large"><span class="unit">$</span><span class="num">200</span></div>
                    </div>
                    <div class="price lg:hidden"><span class="unit">$</span><span class="num">200</span></div>
                    <div class="number amount">
                        <!-- <div class="minus">－</div> -->
                        <div class="inner">02</div>
                        <!-- <div class="add">＋</div> -->
                    </div>
                    <!-- <div class="delete"><img src="./images/c-close.svg"></div> -->
                </li>
                <li class="flex-container align-middle">
                    <div class="pic"><img src="./images/c-pic-2.jpg"></div>
                    <div class="name">財神一把罩
                        <div class="price hide-for-large"><span class="unit">$</span><span class="num">1,288</span>
                        </div>
                    </div>
                    <div class="price lg:hidden"><span class="unit">$</span><span class="num">1,288</span></div>
                    <div class="number amount">
                        <!-- <div class="minus">－</div> -->
                        <div class="inner">01</div>
                        <!-- <div class="add">＋</div> -->
                    </div>
                    <!-- <div class="delete"><img src="./images/c-close.svg"></div> -->
                </li>
            </ul>
            <ul class="totalList">
                <li>免費結緣－賜緣錦囊 (x1)</li>
            </ul>
            <ul class="total-priceList">
                <li class="flex">
                    <div class="title">總計</div>
                    <div class="total-price">
                        <span class="unit">$</span>
                        <span class="price">600</span>
                    </div>
                </li>
                <!-- <li class="flex-container align-middle">
                    <div class="title">運費</div>
                    <div class="total-price">
                        <span class="unit">$</span>
                        <span class="price">150</span>
                    </div>
                </li> -->
            </ul>
        </div>
        <div class="submit relative">
            返回法會
            <div class="arrow absolute tf-y right-[30px]"><img src="./images/submit-arrow.svg"></div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
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
            "draggable": false,
            "cellAlign": "center",
            "imagesLoaded": true,
            "pauseAutoPlayOnHover": false,
            "arrowShape": ""
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

        const flktyInstance = $carousel.data('flickity');
        flktyInstance.select(3);
    }


    $('.submit').on('click', function() {
        window.location.href = "./ceremony"
    })

    // $('.c-fancy .button li').on('click', function() {
    //     $('.c-fancy').removeClass('is-show');
    //     $('body').removeClass('is-lock')
    // })

    $(document).on('click', '.number.amount .minus', function() {
        var $el = $(this).closest('.number.amount');
        var $numEl = $el.find('.inner');
        var count = parseInt($numEl.text());

        count = Math.max(0, count - 1);

        $numEl.text(count < 10 ? '0' + count : count);
    });

    // 增加
    $(document).on('click', '.number.amount .add', function() {
        var $el = $(this).closest('.number.amount');
        var $numEl = $el.find('.inner');
        var count = parseInt($numEl.text());

        count++;

        $numEl.text(count < 10 ? '0' + count : count);
    });
</script>