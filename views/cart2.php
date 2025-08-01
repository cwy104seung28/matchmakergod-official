<!DOCTYPE html>
<html>

<head>
    <title>結帳 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400 font-jp">
    <?php include 'topmenu.php'; ?>
    <div class="cartWrap bg-green-400 pt-32 pb-80 relative lg:pt-20 lg:pb-32">
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
        <div class="buy-container mx-60 mt-12 mb-48 relative z-[1] lg:mx-0 lg:mt-8 lg:mb-20">
            <div class="flex-container align-justify lg:hidden">
                <div class="item is-required flex-container align-middle">
                    <div class="title">付款人</div>
                    <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                </div>
                <div class="item is-required flex-container align-middle">
                    <div class="title">性別</div>
                    <div class="flex-container">
                        <div class="inner-item flex-container align-middle no-border">
                            <input type="radio" id="male" name="gender" value="male" />
                            <label class="flex-container align-middle" for="male"><span
                                    class="checkmark"></span>信士</label>
                        </div>
                        <div class="inner-item flex-container align-middle no-border">
                            <input type="radio" id="female" name="gender" value="female" />
                            <label class="flex-container align-middle" for="female"><span
                                    class="checkmark"></span>信女</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="item is-required flex-container align-middle hidden">
                <div class="title">付款人</div>
                <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
            </div>
            <div class="item is-required flex-container align-middle hidden">
                <div class="title">性別</div>
                <div class="flex-container">
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="male" name="gender" value="male" />
                        <label class="flex-container align-middle" for="male"><span class="checkmark"></span>信士</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="female" name="gender" value="female" />
                        <label class="flex-container align-middle" for="female"><span
                                class="checkmark"></span>信女</label>
                    </div>
                </div>
            </div> -->
            <div class="item is-required flex-container align-middle mobile-base">
                <div class="title">生日</div>
                <div class="flex-container align-middle mobile-wrap">
                    <div>
                        <select name="year-cat" id="year-cat" class="cart-select">
                            <option value="">國曆</option>
                            <option value="">農曆</option>
                        </select>
                    </div>
                    <div>
                        <select name="year" id="year" class="cart-select">
                            <option value="">出生年</option>
                            <option value="">1998</option>
                            <option value="">1999</option>
                            <option value="">2000</option>
                        </select>
                    </div>
                    <div>
                        <select name="month" id="month" class="cart-select">
                            <option value="">出生月</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                        </select>
                    </div>
                    <div>
                        <select name="day" id="day" class="cart-select">
                            <option value="">出生日</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                            <option value="">9</option>
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                            <option value="">13</option>
                            <option value="">14</option>
                            <option value="">15</option>
                            <option value="">16</option>
                            <option value="">17</option>
                            <option value="">18</option>
                            <option value="">19</option>
                            <option value="">20</option>
                            <option value="">21</option>
                            <option value="">22</option>
                            <option value="">23</option>
                            <option value="">24</option>
                            <option value="">25</option>
                            <option value="">26</option>
                            <option value="">27</option>
                            <option value="">28</option>
                            <option value="">29</option>
                            <option value="">30</option>
                            <option value="">31</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="item flex-container align-middle">
                <div class="title">信箱</div>
                <div><input type="text" name="" id="" placeholder="請輸入聯絡人信箱"></div>
            </div>
            <div class="item is-required flex-container align-middle">
                <div class="title">電話</div>
                <div><input type="text" name="" id="" placeholder="請輸入聯絡人電話"></div>
            </div>
            <div class="item is-required flex-container align-middle mobile-base">
                <div class="title">地址</div>
                <div class="flex-container align-middle mobile-wrap">
                    <div>
                        <select name="year-cat" id="year-cat" class="cart-select">
                            <option value="">縣市</option>
                            <option value="">台北市</option>
                            <option value="">新北市</option>
                            <option value="">桃園市</option>
                        </select>
                    </div>
                    <div>
                        <select name="year" id="year" class="cart-select">
                            <option value="">地區</option>
                            <option value="">北區</option>
                            <option value="">南區</option>
                            <option value="">西區</option>
                        </select>
                    </div>
                    <div class="long">
                        <div><input type="text" name="" id="" placeholder="地址"></div>
                    </div>
                </div>
            </div>
            <div class="item flex-container align-middle">
                <div class="title">該地址為</div>
                <div class="flex-container">
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="home" name="address" value="home" />
                        <label class="flex-container align-middle" for="home"><span class="checkmark"></span>住家</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="company" name="address" value="company" />
                        <label class="flex-container align-middle" for="company"><span
                                class="checkmark"></span>公司</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="factory" name="address" value="factory" />
                        <label class="flex-container align-middle" for="factory"><span
                                class="checkmark"></span>工廠</label>
                    </div>
                </div>
            </div>
            <div class="item flex-container align-middle mobile-base">
                <div class="title">疏文</div>
                <div class="flex-container mobile-wrap">
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="s-yes" name="sparse_prose" value="yes" />
                        <label class="flex-container align-middle" for="s-yes"><span
                                class="checkmark"></span>我要自己寫(寄送)</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="s-no" name="sparse_prose" value="no" />
                        <label class="flex-container align-middle" for="s-no"><span
                                class="checkmark"></span>請師姊幫我寫疏文(不寄送)</label>
                    </div>
                </div>
            </div>
            <div class="item flex-container align-middle mobile-base">
                <div class="title">謝函收據</div>
                <div class="flex-container mobile-wrap">
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="r-yes" name="receipt" value="yes" />
                        <label class="flex-container align-middle" for="r-yes"><span
                                class="checkmark"></span>請寄送謝函收據</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="r-no" name="receipt" value="no" />
                        <label class="flex-container align-middle" for="r-no"><span
                                class="checkmark"></span>請師姊幫我謝函收據燒化給財神爺</label>
                    </div>
                </div>
            </div>
            <div class="line"></div>
            <div class="item flex-container">
                <div class="title">寄送方式</div>
                <div>
                    <div style="margin-bottom: 17px;" class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="d-1" name="delivery" value="post_office" />
                        <label class="flex-container align-middle" for="d-1"><span
                                class="checkmark"></span>郵局平信(免運費)</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="d-2" name="delivery" value="black_cat" />
                        <label class="flex-container align-middle" for="d-2"><span class="checkmark"></span>黑貓宅配<span
                                class="red">(免運費)</span></label>
                    </div>
                </div>
            </div>
            <div class="item flex-container align-middle mobile-base">
                <div class="title">特殊需求</div>
                <div class="flex-container mobile-wrap">
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="se-1" name="special" value="se-1" />
                        <label class="flex-container align-middle" for="se-1"><span
                                class="checkmark"></span>保密，須本人簽收</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="se-2" name="special" value="se-2" />
                        <label class="flex-container align-middle" for="se-2"><span class="checkmark"></span>代收</label>
                    </div>
                    <div class="inner-item flex-container align-middle no-border">
                        <input type="radio" id="se-3" name="special" value="se-3" />
                        <label class="flex-container align-middle" for="se-3"><span
                                class="checkmark"></span>到貨前電聯</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-container mx-60 mt-12 mb-48 relative z-[1] lg:mx-0 lg:mt-8 lg:mb-20">
            <div class="big-title text-3.5xl lg:text-[32px] tracking-wide text-center font-bold text-blue-1000 mb-32 lg:mb-8">結帳明細</div>
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
                        <div class="price hidden"><span class="unit">$</span><span class="num">200</span></div>
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
                        <div class="price hidden"><span class="unit">$</span><span class="num">1,288</span>
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
                        <div class="price hidden"><span class="unit">$</span><span class="num">2,500</span>
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
        <div class="credit-container mx-60 mt-12 mb-32 relative z-[1] lg:mx-0 lg:mt-8 lg:mb-20">
            <div class="big-title text-3.5xl lg:text-[32px] tracking-wide text-center font-bold text-blue-1000 mb-8 ">輸入信用卡資料</div>
            <div class="line w-full h-[1px] bg-blue-1000"></div>
            <div class="note">
                如需使用其他付款方式報名，請電洽 <span class="number">04-22434146</span>
            </div>
            <div class="item is-required flex-container align-middle">
                <div class="title">持卡人姓名</div>
                <div><input type="text" name="" id="" placeholder="請輸入持卡人姓名"></div>
            </div>
            <div class="item is-required flex-container align-middle">
                <div class="title">持卡人電話</div>
                <div><input type="text" name="" id="" placeholder="請輸入持卡人電話"></div>
            </div>
            <div class="item is-required flex-container align-middle mobile-base">
                <div class="title">帳單地址</div>
                <div class="flex-container align-middle mobile-wrap">
                    <div>
                        <select name="year-cat" id="year-cat" class="cart-select">
                            <option value="">縣市</option>
                            <option value="">台北市</option>
                            <option value="">新北市</option>
                            <option value="">桃園市</option>
                        </select>
                    </div>
                    <div>
                        <select name="year" id="year" class="cart-select">
                            <option value="">地區</option>
                            <option value="">北區</option>
                            <option value="">南區</option>
                            <option value="">西區</option>
                        </select>
                    </div>
                    <div class="long">
                        <div><input type="text" name="" id="" placeholder="地址"></div>
                    </div>
                </div>
            </div>
            <div class="item is-required flex-container align-middle mobile-base">
                <div class="title">信用卡號</div>
                <div class="flex-container align-middle bill-address mobile-wrap">
                    <div class="short"><input type="text" name="" id="" placeholder="填寫卡號"></div>
                    <div class="short"><input type="text" name="" id="" placeholder="填寫卡號"></div>
                    <div class="short"><input type="text" name="" id="" placeholder="填寫卡號"></div>
                    <div class="short last"><input type="text" name="" id="" placeholder="填寫卡號"></div>
                </div>
            </div>
            <div class="flex-container align-justify">
                <div class="item is-required flex-container align-middle mobile-base">
                    <div class="title">信用卡到期日</div>
                    <div class="flex-container align-middle mobile-wrap">
                        <div>
                            <select name="card-year" id="card-year" class="cart-select">
                                <option value="">年</option>
                                <option value="">2024</option>
                                <option value="">2025</option>
                                <option value="">2026</option>
                            </select>
                        </div>
                        <div>
                            <select name="card-month" id="card-month" class="cart-select">
                                <option value="">月</option>
                                <option value="">01</option>
                                <option value="">02</option>
                                <option value="">03</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="item is-required flex-container align-middle lg:hidden">
                    <div class="title">末三碼</div>
                    <div class="short last">
                        <input type="text" name="" id="" placeholder="填寫卡號">
                    </div>
                </div>
            </div>
            <div class="item is-required flex-container align-middle hidden">
                <div class="title">末三碼</div>
                <div class="short last">
                    <input type="text" name="" id="" placeholder="填寫卡號">
                </div>
            </div>
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
        const flktyInstance = $carousel.data('flickity');
        flktyInstance.select(1);
    }

    $('.submit').on('click', function() {
        window.location.href = "./cart-3"
    })
    // $('.c-fancy .button li').on('click', function () {
    //     $('.c-fancy').removeClass('is-show');
    //     $('body').removeClass('is-lock')
    // })
    $('.cart-select').niceSelect();

    $(document).on('click', function() {
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