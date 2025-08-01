<!DOCTYPE html>
<html>

<head>
    <title>購物車 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400 font-jp">
    <?php include 'topmenu.php'; ?>
    <div id="cart-vue">
        <div class="c-fancy fixed py-20 z-30">
            <div class="inner py-60 px-24">
                <div class="title mb-24"><img src="./images/cart-command.svg" alt=""></div>
                <div class="flex mb-24">
                    <div class="pic mr-16"><img src="./images/cart-command-pic.jpg" alt=""></div>
                    <div class="article-area">
                        <div class="title text-3xl text-white tracking-wide font-semibold pb-4 mb-6">紅線結緣</div>
                        <div class="content text-sm text-white leading-1.8 tracking-normal mb-16">
                            透過紅線祈緣儀式，誠心祈求月老牽引正緣降臨。將祝願繫上紅線，獻上姓名與心願，讓這份緣由神明庇佑，自此緩緩靠近。</div>
                        <div class="flex justify-between items-end">
                            <div class="add-container w-[fit-content]">
                                <div class="title text-xl text-white tracking-wide font-semibold mb-4">加選</div>
                                <div class="number flex amount">
                                    <div class="minus">－</div>
                                    <div class="inner">02</div>
                                    <div class="add">＋</div>
                                </div>
                            </div>
                            <div class="total-container flex">
                                <div class="title text-xl text-white bg-blue-1000 tracking-wide font-semibold mr-8">結緣金
                                </div>
                                <div class="total-price">
                                    <span class="unit">$</span>
                                    <span class="price">200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="button flex justify-center">
                    <li class="mr-40"><img src="./images/c-no.svg" alt=""></li>
                    <li><img src="./images/c-add.svg" alt=""></li>
                </ul>
            </div>

        </div>
        <div class="c-other-fancy fixed py-20 z-30">
            <div class="inner py-40 px-48">
                <div class="title px-16 mb-8 text-2xl text-white-400 font-bold tracking-normal">請選擇參加人</div>
                <ul class="checkList">
                    <li class="flex w-full items-center mb-8">
                        <div class="check">
                            <div class="terms flex align-middle no-border text-base text-gray-400 tracking-normal">
                                <input type="checkbox" id="person-1" name="person-1" value="person-1" />
                                <label class="flex-container align-middle mr-4" for="person-1"><span
                                        class="checkmark"></span></label>
                            </div>
                        </div>
                        <div
                            class="other pb-[5px] border-b-white-400 border-b-2 w-full flex text-lg tracking-normal text-white-400 items-center">
                            <div class="name">林很好</div>
                            <div class="job">信士</div>
                            <div class="lunar">農曆</div>
                            <div class="date">2022/01/01</div>
                            <div class="address">台中市北區崇德路一段579號13樓</div>
                        </div>
                    </li>
                    <li class="flex w-full items-center">
                        <div class="check">
                            <div class="terms flex align-middle no-border text-base text-gray-400 tracking-normal">
                                <input type="checkbox" id="person-2" name="person-2" value="person-2" />
                                <label class="flex-container align-middle mr-4" for="person-2"><span
                                        class="checkmark"></span></label>
                            </div>
                        </div>
                        <div
                            class="other pb-[5px] border-b-white-400 border-b-2 w-full flex text-lg tracking-normal text-white-400 items-center">
                            <div class="name">林真好</div>
                            <div class="job">信士</div>
                            <div class="lunar">國曆</div>
                            <div class="date">2022/01/01</div>
                            <div class="address">台中市北區崇德路一段579號13樓</div>
                        </div>
                    </li>
                </ul>
                <div class="back w-[fit-content] mx-auto mt-40 basic-hover">
                    <img src="./images/c-back.svg">
                </div>
            </div>
        </div>
        <div class="cartWrap bg-green-400 pt-32 pb-80 relative">
            <div class="deco absolute top-[815px] left-0 z-0"><img src="./images/cart-deco-1.svg" alt=""></div>
            <div class="deco absolute top-[1200px] right-0 z-0"><img src="./images/cart-deco-2.svg" alt=""></div>

            <div class="title-area relative text-blue-1000 mx-60">
                <div class="en text-[70px] leading-1.1 font-bold">
                    MY<br>FATECART
                </div>
                <div class="ch absolute text-[26px] left-[113px] top-[36px]">我的良緣庫</div>
            </div>
            <div class="step-container relative mt-20 mb-32 z-[1]">
                <div class="bg absolute top-[15%]"><img src="./images/cart-line.svg" alt=""></div>

                <ul class="stepList">
                    <li class="step mr-16 relative pt-12 pb-8">
                        <div class="num absolute top-[10px] left-[-30px]">01</div>
                        <div class="main">
                            <div class="ch text-[44px] text-blue-1000 text-center">確認項目</div>
                            <div class="en text-[17px] text-blue-1000 text-center">CHECKLIST</div>
                        </div>
                    </li>
                    <li class="step mr-16 relative pt-12 pb-8">
                        <div class="num absolute top-[10px] left-[-30px]">02</div>
                        <div class="main">
                            <div class="ch text-[44px] text-blue-1000 text-center">結帳</div>
                            <div class="en text-[17px] text-blue-1000 text-center">CHECKOUT</div>
                        </div>
                    </li>
                    <li class="step mr-16 relative pt-12 pb-8">
                        <div class="num absolute top-[10px] left-[-30px]">03</div>
                        <div class="main">
                            <div class="ch text-[44px] text-blue-1000 text-center">填寫資料</div>
                            <div class="en text-[17px] text-blue-1000 text-center">FILL OUT FORM</div>
                        </div>
                    </li>
                    <li class="step mr-16 relative pt-12 pb-8">
                        <div class="num absolute top-[10px] left-[-30px]">04</div>
                        <div class="main">
                            <div class="ch text-[44px] text-blue-1000 text-center">完成訂單</div>
                            <div class="en text-[17px] text-blue-1000 text-center">CONFIRM ORDER</div>
                        </div>
                    </li>
                </ul>
                <!-- controll -->
                <div class="flex items-center justify-center gap-10 mt-14 select-none">
                    <div id="prev" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                        <img src="images/arrow-prev.svg">
                    </div>

                    <div class="font-medium text-xl text-blue-1000 flex items-center gap-2">
                        <div id="now" class="font-bold">01</div>

                        <div>/</div>

                        <div id="total">04</div>
                    </div>

                    <div id="next" class="basic-hover relative z-10 after:absolute after:-inset-4 after:-z-10">
                        <img src="images/arrow-next.svg">
                    </div>
                </div>
            </div>
            <transition name="fade" mode="out-in">
                <div class="step-1" v-if="cart == 1" key="cart1">
                    <div class="detail-container mx-60 mt-12 mb-24 relative z-[1]">
                        <ul class="title-area flex-container">
                            <li class="title"></li>
                            <li class="title show-for-large">品項</li>
                            <li class="title show-for-large">單價</li>
                            <li class="title show-for-large">數量</li>
                            <!-- <li class="title show-for-large"></li> -->
                        </ul>
                        <!-- <div class="merchandise">結緣品(<span class="total">2</span>)</div> -->
                        <ul class="detail-area">
                            <li class="flex-container align-middle">
                                <div class="pic"><img src="./images/c-pic-1.jpg"></div>
                                <div class="name">農曆新年-貧富籍冊<br>－法會功德金
                                    <div class="price hide-for-large"><span class="unit">$</span><span
                                            class="num">200</span>
                                    </div>
                                </div>
                                <div class="price show-for-large"><span class="unit">$</span><span
                                        class="num">200</span>
                                </div>
                                <div class="number amount">
                                    <div class="minus">－</div>
                                    <div class="inner">02</div>
                                    <div class="add">＋</div>
                                </div>
                                <!-- <div class="delete"><img src="./images/c-close.svg"></div> -->
                            </li>
                            <li class="flex-container align-middle">
                                <div class="pic"><img src="./images/c-pic-2.jpg"></div>
                                <div class="name">月老結緣金
                                    <div class="price hide-for-large"><span class="unit">$</span><span
                                            class="num">1,288</span>
                                    </div>
                                </div>
                                <div class="price show-for-large"><span class="unit">$</span><span
                                        class="num">1,288</span>
                                </div>
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
                    <div class="price show-for-large"><span class="unit">$</span><span class="num">2,500</span></div>
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
                <div class="step-2" v-if="cart == 2" key="cart2">
                    <div class="buy-container mx-60 mt-12 mb-48 relative z-[1]">
                        <div class="flex-container align-justify show-for-large">
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
                        <!-- <div class="item is-required flex-container align-middle hide-for-large">
                <div class="title">付款人</div>
                <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
            </div>
            <div class="item is-required flex-container align-middle hide-for-large">
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
                                    <label class="flex-container align-middle" for="home"><span
                                            class="checkmark"></span>住家</label>
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
                                <div style="margin-bottom: 17px;"
                                    class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="d-1" name="delivery" value="post_office" />
                                    <label class="flex-container align-middle" for="d-1"><span
                                            class="checkmark"></span>郵局平信(免運費)</label>
                                </div>
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="d-2" name="delivery" value="black_cat" />
                                    <label class="flex-container align-middle" for="d-2"><span
                                            class="checkmark"></span>黑貓宅配<span class="red">(免運費)</span></label>
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
                                    <label class="flex-container align-middle" for="se-2"><span
                                            class="checkmark"></span>代收</label>
                                </div>
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="se-3" name="special" value="se-3" />
                                    <label class="flex-container align-middle" for="se-3"><span
                                            class="checkmark"></span>到貨前電聯</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-container mx-60 mt-12 mb-48 relative z-[1]">
                        <div class="big-title text-3.5xl tracking-wide text-center font-bold text-blue-1000 mb-32">結帳明細
                        </div>
                        <ul class="title-area flex-container">
                            <li class="title"></li>
                            <li class="title show-for-large">品項</li>
                            <li class="title show-for-large">單價</li>
                            <li class="title show-for-large">數量</li>
                            <!-- <li class="title show-for-large"></li> -->
                        </ul>
                        <!-- <div class="merchandise">結緣品(<span class="total">2</span>)</div> -->
                        <ul class="detail-area">
                            <li class="flex-container align-middle">
                                <div class="pic"><img src="./images/c-pic-1.jpg"></div>
                                <div class="name">農曆新年-貧富籍冊<br>－法會功德金
                                    <div class="price hide-for-large"><span class="unit">$</span><span
                                            class="num">200</span>
                                    </div>
                                </div>
                                <div class="price show-for-large"><span class="unit">$</span><span
                                        class="num">200</span>
                                </div>
                                <div class="number amount">
                                    <div class="minus">－</div>
                                    <div class="inner">02</div>
                                    <div class="add">＋</div>
                                </div>
                                <!-- <div class="delete"><img src="./images/c-close.svg"></div> -->
                            </li>
                            <li class="flex-container align-middle">
                                <div class="pic"><img src="./images/c-pic-2.jpg"></div>
                                <div class="name">月老結緣金
                                    <div class="price hide-for-large"><span class="unit">$</span><span
                                            class="num">1,288</span>
                                    </div>
                                </div>
                                <div class="price show-for-large"><span class="unit">$</span><span
                                        class="num">1,288</span>
                                </div>
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
                    <div class="price show-for-large"><span class="unit">$</span><span class="num">2,500</span></div>
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
                    <div class="credit-container mx-60 mt-12 mb-32 relative z-[1]">
                        <div class="big-title text-3.5xl tracking-wide text-center font-bold text-blue-1000 mb-8">輸入信用卡資料
                        </div>
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
                            <div class="item is-required flex-container align-middle show-for-large">
                                <div class="title">末三碼</div>
                                <div class="short last">
                                    <input type="text" name="" id="" placeholder="填寫卡號">
                                </div>
                            </div>
                        </div>
                        <div class="item is-required flex-container align-middle hide-for-large">
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
                <div class="step-3" v-if="cart == 3" key="cart3">
                    <div class="detailList-area relative z-[2] mx-60 mt-12">
                        <div class="detailList-title flex items-center justify-between mb-12">
                            <div class="year py-2 px-4 text-white-400 bg-blue-1000 text-sm font-medium rounded-[11px]">
                                114年
                            </div>
                            <div class="title text-3.5xl font-bold text-blue-1000 tracking-wide">點姻緣燈</div>
                            <div class="title-line w-[900px] h-[2px] bg-blue-1000"></div>
                            <div class="total text-3.5xl font-bold text-blue-1000">共<span class="font-en">2</span>份</div>
                        </div>
                        <ul class="detailList">
                            <li class="flex relative">
                                <div class="title-area text-3xl text-blue-1000 font-bold text-center mr-12">
                                    第
                                    <div class="number">01</div>
                                    份
                                </div>
                                <div class="buy-container pb-36 border-blue-1000 border-b-[1px]">
                                    <div class="flex-container align-justify show-for-large">
                                        <div class="item flex-container align-middle">
                                            <div class="title">姓名</div>
                                            <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                                        </div>
                                        <div class="item flex-container align-middle">
                                            <div class="title">性別</div>
                                            <div class="flex-container">
                                                <div class="inner-item flex-container align-middle no-border">
                                                    <input type="radio" id="male1" name="gender1" value="male1" />
                                                    <label class="flex-container align-middle mr-4" for="male1"><span
                                                            class="checkmark"></span>信士</label>
                                                </div>
                                                <div class="inner-item flex-container align-middle no-border">
                                                    <input type="radio" id="female1" name="gender1" value="female1" />
                                                    <label class="flex-container align-middle" for="female1"><span
                                                            class="checkmark"></span>信女</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item flex-container align-middle mobile-base">
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
                                    <div class="item flex-container align-middle mobile-base">
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
                                </div>
                                <div class="other absolute flex right-64 bottom-28">
                                    <div class="title text-3xl text-blue-1000 font-bold mr-4">小工具</div>
                                    <div
                                        class="button basic-hover px-4 py-2 text-blue-1000 bg-white-400 text-sm font-bold rounded-[11px]">
                                        複製參加資料</div>
                                </div>
                            </li>
                            <li class="flex relative">
                                <div class="title-area text-3xl text-blue-1000 font-bold text-center mr-12">
                                    第
                                    <div class="number">02</div>
                                    份
                                </div>
                                <div class="buy-container pt-20 pb-36">
                                    <div class="flex-container align-justify show-for-large">
                                        <div class="item flex-container align-middle">
                                            <div class="title">姓名</div>
                                            <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                                        </div>
                                        <div class="item flex-container align-middle">
                                            <div class="title">性別</div>
                                            <div class="flex-container">
                                                <div class="inner-item flex-container align-middle no-border">
                                                    <input type="radio" id="male2" name="gender2" value="male2" />
                                                    <label class="flex-container align-middle mr-4" for="male2"><span
                                                            class="checkmark"></span>信士</label>
                                                </div>
                                                <div class="inner-item flex-container align-middle no-border">
                                                    <input type="radio" id="female2" name="gender2" value="female2" />
                                                    <label class="flex-container align-middle" for="female2"><span
                                                            class="checkmark"></span>信女</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item flex-container align-middle mobile-base">
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
                                    <div class="item flex-container align-middle mobile-base">
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
                                </div>
                                <div class="other absolute flex right-64 bottom-28">
                                    <div class="title text-3xl text-blue-1000 font-bold mr-4">小工具</div>
                                    <div
                                        class="button basic-hover px-4 py-2 text-blue-1000 bg-white-400 text-sm font-bold rounded-[11px]">
                                        複製參加資料</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="detailList-area relative z-[2] mx-60 mt-12">
                        <div class="detailList-title flex items-center justify-between mb-12">
                            <div class="year py-2 px-4 text-white-400 bg-blue-1000 text-sm font-medium rounded-[11px]">
                                114年
                            </div>
                            <div class="title text-3.5xl font-bold text-blue-1000 tracking-wide">借貴人錢</div>
                            <div class="title-line w-[900px] h-[2px] bg-blue-1000"></div>
                            <div class="total text-3.5xl font-bold text-blue-1000">共<span class="font-en">1</span>份</div>
                        </div>
                        <ul class="detailList">
                            <li class="flex relative">
                                <div class="title-area text-3xl text-blue-1000 font-bold text-center mr-12">
                                    第
                                    <div class="number">01</div>
                                    份
                                </div>
                                <div class="buy-container pb-36">
                                    <div class="flex-container align-justify show-for-large">
                                        <div class="item flex-container align-middle">
                                            <div class="title">姓名</div>
                                            <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                                        </div>
                                        <div class="item flex-container align-middle">
                                            <div class="title">性別</div>
                                            <div class="flex-container">
                                                <div class="inner-item flex-container align-middle no-border">
                                                    <input type="radio" id="male3" name="gender3" value="male3" />
                                                    <label class="flex-container align-middle mr-4" for="male3"><span
                                                            class="checkmark"></span>信士</label>
                                                </div>
                                                <div class="inner-item flex-container align-middle no-border">
                                                    <input type="radio" id="female3" name="gender3" value="female3" />
                                                    <label class="flex-container align-middle" for="female3"><span
                                                            class="checkmark"></span>信女</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item flex-container align-middle mobile-base">
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
                                    <div class="item flex-container align-middle mobile-base">
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
                                </div>
                                <div class="other absolute flex right-64 bottom-28">
                                    <div class="title text-3xl text-blue-1000 font-bold mr-4">小工具</div>
                                    <div
                                        class="button basic-hover px-4 py-2 text-blue-1000 bg-white-400 text-sm font-bold rounded-[11px]">
                                        複製參加資料</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="terms-area mx-80 mb-32">
                        <div class="title mb-8 text-3xl text-blue-1000 font-bold tracking-normal">服務條款</div>
                        <div class="content mb-20 text-lg leading-1.6 text-gray-400 tracking-normal">
                            1. 請務必確認資料是否正確。<br>
                            <br>
                            2. 法會活動為服務性質項目，報名完成後將立即有執事人員替您準備法會活動之所有程序，包含資料建檔、疏文或牒文寄送，請在確認報名前考慮清楚是否參加此法會活動，如報名成功恕不退款。<br>
                            <br>
                            3. 報名完成後如有透過黑貓宅配寄送法會疏文或牒文給您，請務必手機保持暢通！<br>
                            <br>
                            4. 疏文或牒文請填寫完畢後於法會開始前寄回本宮或送回本宮櫃檯。
                        </div>

                        <div class="terms flex align-middle no-border text-base text-gray-400 tracking-normal">
                            <input type="checkbox" id="terms" name="terms" value="terms" />
                            <label class="flex-container align-middle mr-4" for="terms"><span
                                    class="checkmark"></span>請閱讀並接受服務條款</label>
                        </div>
                    </div>

                    <div class="submit relative">
                        確認送出
                        <div class="arrow absolute tf-y right-[30px]"><img src="./images/submit-arrow.svg"></div>
                    </div>
                </div>
                <div class="step-4" v-if="cart == 4" key="cart4">
                    <div class="note text-xl tracking-wide text-center leading-2 text-blue-1000 my-60">
                        *** 您好<br>
                        感謝您的訂購<br>
                        我們會儘快將您選購的商品寄出！<br>
                        祝您有美好的一天 ：）
                    </div>
                    <div class="detail-container mx-60 mt-12 mb-48 relative z-[1]">
                        <div class="big-title text-3.5xl tracking-wide text-center font-bold text-blue-1000 mb-32">結帳明細
                        </div>
                        <ul class="title-area flex-container">
                            <li class="title"></li>
                            <li class="title show-for-large">品項</li>
                            <li class="title show-for-large">單價</li>
                            <li class="title show-for-large">數量</li>
                            <!-- <li class="title show-for-large"></li> -->
                        </ul>
                        <!-- <div class="merchandise">結緣品(<span class="total">2</span>)</div> -->
                        <ul class="detail-area">
                            <li class="flex-container align-middle">
                                <div class="pic"><img src="./images/c-pic-1.jpg"></div>
                                <div class="name">農曆新年-貧富籍冊<br>－法會功德金
                                    <div class="price hide-for-large"><span class="unit">$</span><span
                                            class="num">200</span>
                                    </div>
                                </div>
                                <div class="price show-for-large"><span class="unit">$</span><span
                                        class="num">200</span>
                                </div>
                                <div class="number">
                                    <div class="inner">02</div>
                                </div>
                                <!-- <div class="delete"><img src="./images/c-close.svg"></div> -->
                            </li>
                            <li class="flex-container align-middle">
                                <div class="pic"><img src="./images/c-pic-2.jpg"></div>
                                <div class="name">月老結緣金
                                    <div class="price hide-for-large"><span class="unit">$</span><span
                                            class="num">1,288</span>
                                    </div>
                                </div>
                                <div class="price show-for-large"><span class="unit">$</span><span
                                        class="num">1,288</span>
                                </div>
                                <div class="number">
                                    <div class="inner">01</div>
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
                        確認送出
                        <div class="arrow absolute tf-y right-[30px]"><img src="./images/submit-arrow.svg"></div>
                    </div>
                </div>
            </transition>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>
<script>
    new Vue({
        el: '#cart-vue',
        data: {
            cart: 1,
        },
        computed: {},
        methods: {
            cartHandler(i) {
                this.cat = i;
            },
        },
        filters: {},

        mounted() {
            $(document).ready(() => {
                const vm = this;
                $('.cart-select').niceSelect();
                //cart1
                let dragging = false;

                const $carousel = $('.stepList').flickity({
                    "prevNextButtons": false,
                    "pageDots": false,
                    "wrapAround": false,
                    "autoPlay": false,
                    "draggable": false,
                    "cellAlign": "center",
                    "imagesLoaded": true,
                    "pauseAutoPlayOnHover": false,
                    "arrowShape": "",
                    "cellSelector": '.step',
                }).on('dragStart.flickity', function (event, pointer) {
                    dragging = true
                }).on('dragEnd.flickity', function (event, pointer) {
                    gsap.delayedCall(0.2, function () {
                        dragging = false
                    });
                }).on('pointerUp.flickity', function (event, pointer) {
                    if (dragging) {
                        return false
                    }

                    // fancyOpen()
                })

                let navLocked = false;

                $("#prev").on("click", function () {
                    if (navLocked) return; // 若鎖定，直接跳出

                    navLocked = true;
                    $carousel.flickity('previous');
                    $carousel.flickity('stopPlayer');

                    setTimeout(() => {
                        navLocked = false;
                    }, 600); // 0.6 秒解除鎖定
                });

                $("#next").on("click", function () {
                    if (navLocked) return;

                    navLocked = true;
                    $carousel.flickity('next');
                    $carousel.flickity('stopPlayer');

                    setTimeout(() => {
                        navLocked = false;
                    }, 600);
                });



                var cellElements = $carousel.flickity('getCellElements');


                $carousel.on('change.flickity', function (event, index) {
                    $("#now").text(padLeft(index + 1, 2));
                    vm.cart = index + 1;
                });


                // 取得 Flickity 實例
                const flkty = $carousel.data('flickity');

                // 綁定 staticClick 事件 → 點 cell 就跳轉
                $carousel.on('staticClick.flickity', function (event, pointer, cellElement, cellIndex) {
                    if (typeof cellIndex === 'number') {
                        flkty.select(cellIndex);
                    }
                });

                // document.querySelectorAll('.stepList li').forEach(function (el, index) {
                //     el.addEventListener('click', function () {
                //         $carousel.select(index);
                //     });
                // });

                $("#total").text(padLeft(cellElements.length, 2));

                $(document).on('click', '.step-1 .submit', function () {
                    $('.c-fancy').addClass('is-show');
                    $('body').addClass('is-lock')
                })

                $(document).on('click', '.c-fancy .button li', function () {
                    $('.c-fancy').removeClass('is-show');
                    $('body').removeClass('is-lock')
                    vm.cart = 2;
                    $carousel.flickity('select', 1);
                })


                //cart3
                $(document).on('click', '.step-3 .detailList .other .button', function () {
                    $('.c-other-fancy').addClass('is-show');
                })

                $(document).on('click', '.c-other-fancy .back', function () {
                    $('.c-other-fancy').removeClass('is-show');
                })



                $(document).on('click', '.step-2 .submit', function () {
                    vm.cart = 3;
                    $carousel.flickity('select', 2);
                });

                $(document).on('click', '.step-3 .submit', function () {
                    vm.cart = 4;
                    $carousel.flickity('select', 3);
                });
                // $('.step-1 .submit').on('click', function () {
                //     vm.cart = 2;
                //     $carousel.flickity('select', 1);
                // })
                // 減少
                $(document).on('click', '.number.amount .minus', function () {
                    var $el = $(this).closest('.number.amount');
                    var $numEl = $el.find('.inner');
                    var count = parseInt($numEl.text());

                    count = Math.max(0, count - 1);

                    $numEl.text(count < 10 ? '0' + count : count);
                });

                // 增加
                $(document).on('click', '.number.amount .add', function () {
                    var $el = $(this).closest('.number.amount');
                    var $numEl = $el.find('.inner');
                    var count = parseInt($numEl.text());

                    count++;

                    $numEl.text(count < 10 ? '0' + count : count);
                });
            });

        },
        updated() {
            // $('.cart-select').niceSelect('destroy'); // 先銷毀舊的實例
            gsap.delayedCall(0.59, function () {
                $('.cart-select').niceSelect(); // 再重新初始化
            });
        }
    })


</script>