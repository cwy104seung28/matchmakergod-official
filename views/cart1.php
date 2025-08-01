<!DOCTYPE html>
<html>

<head>
    <title>確認項目 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400 font-jp">
    <?php include 'topmenu.php'; ?>
    <div class="c-fancy fixed py-20 z-30 lg:px-4">
        <div class="inner py-60 px-24 lg:py-6 lg:px-4">
            <div class="title mb-24 lg:mb-8"><img src="./images/cart-command.svg" alt=""></div>
            <div class="flex mb-24 lg:mb-8 lg:flex-col">
                <div class="pic mr-16 lg:mr-0 lg:mb-4"><img src="./images/cart-command-pic.jpg" alt=""></div>
                <div class="article-area">
                    <div class="title text-3xl lg:text-xl text-white-400 tracking-wide font-semibold pb-4 mb-6 lg:mb-2">紅線結緣</div>
                    <div class="content text-sm lg:text-xs text-white-400 leading-1.8 tracking-normal mb-16 lg:mb-4">
                        透過紅線祈緣儀式，誠心祈求月老牽引正緣降臨。將祝願繫上紅線，獻上姓名與心願，讓這份緣由神明庇佑，自此緩緩靠近。</div>
                    <div class="flex justify-between items-end">
                        <div class="add-container w-[fit-content]">
                            <div class="title text-xl lg:text-sm text-white-400 tracking-wide font-semibold mb-4 lg:mb-2">加選</div>
                            <div class="number amount flex">
                                <div class="minus">－</div>
                                <div class="inner">02</div>
                                <div class="add">＋</div>
                            </div>
                        </div>
                        <div class="total-container flex">
                            <div class="title text-xl lg:text-base text-white-400 bg-blue-1000 tracking-wide font-semibold mr-8 lg:mr-4">結緣金</div>
                            <div class="total-price">
                                <span class="unit">$</span>
                                <span class="price">200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="button flex justify-center lg:justify-between lg:px-12">
                <li class="mr-40 lg:mr-0 lg:zoom-60"><img src="./images/c-no.svg" alt=""></li>
                <li class="lg:zoom-60"><img src="./images/c-add.svg" alt=""></li>
            </ul>
        </div>

    </div>
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
        <div class="detail-container mx-60 mt-12 mb-24 relative z-[1] lg:mx-4 lg:mt-4">
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
                        <div class="minus">－</div>
                        <div class="inner">02</div>
                        <div class="add">＋</div>
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
                        <div class="minus">－</div>
                        <div class="inner">01</div>
                        <div class="add">＋</div>
                    </div>
                    <!-- <div class="delete"><img src="./images/c-close.svg"></div> -->
                </li>
            </ul>
            <!-- <div class="merchandise">法會(<span class="total">1</span>)</div> -->
            <!-- <ul class="detail-area">
                <li class="flex-container align-middle">
                    <div class="pic"><img src="./images/c-pic-3.jpg"></div>
                    <div class="name">下元節－解冤釋結<br>(112年)
                        <div class="price hide-for-large"><span class="unit">$</span><span class="num">2,500</span>
                        </div>
                    </div>
                    <div class="price lg:hidden"><span class="unit">$</span><span class="num">2,500</span></div>
                    <div class="number">
                        <div class="inner">01</div>
                    </div>
                    <div class="delete"><img src="./images/c-close.svg"></div>
                </li>
            </ul> -->
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
            確認送出
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

    }

    $('.submit').on('click', function() {
        $('.c-fancy').addClass('is-show');
        $('body').addClass('is-lock')
    })

    $('.c-fancy .button li:nth-child(1)').on('click', function() {
        $('.c-fancy').removeClass('is-show');
        $('body').removeClass('is-lock')
        window.location.href = "./cart-2"
    })

    $('.c-fancy .button li:nth-child(2)').on('click', function() {
        $('.c-fancy').removeClass('is-show');
        $('body').removeClass('is-lock')
    })

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