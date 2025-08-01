<!DOCTYPE html>
<html>

<head>
    <title>填寫資料 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400 font-jp">
    <?php include 'topmenu.php'; ?>
    <div class="c-other-fancy fixed py-20 z-30 lg:px-4">
        <div class="inner py-40 px-48 lg:py-6 lg:px-4">
            <div class="title px-16 lg:px-4 mb-8 text-2xl lg:text-lg text-white-400 font-bold tracking-normal">請選擇參加人</div>
            <ul class="checkList">
                <li class="flex w-full items-center mb-8">
                    <div class="check">
                        <div class="terms flex align-middle no-border text-base text-gray-400 tracking-normal">
                            <input type="checkbox" id="person-1" name="person-1" value="person-1" />
                            <label class="flex-container align-middle mr-4" for="person-1"><span
                                    class="checkmark"></span></label>
                        </div>
                    </div>
                    <div class="other pb-[5px] border-b-white-400 border-b-2 w-full flex lg:flex-col text-lg lg:text-sm tracking-normal text-white-400 items-center lg:items-baseline">
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
                    <div class="other pb-[5px] border-b-white-400 border-b-2 w-full flex lg:flex-col text-lg lg:text-sm tracking-normal text-white-400 items-center lg:items-baseline">
                        <div class="name">林很好</div>
                        <div class="job">信士</div>
                        <div class="lunar">農曆</div>
                        <div class="date">2022/01/01</div>
                        <div class="address">台中市北區崇德路一段579號13樓</div>
                    </div>
                </li>
            </ul>
            <div class="back w-[fit-content] mx-auto mt-40 basic-hover lg:zoom-80">
                <img src="./images/c-back.svg">
            </div>
        </div>
    </div>

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
        <div class="detailList-area relative z-[2] mx-60 mt-12 lg:mx-4">
            <div class="detailList-title flex items-center justify-between mb-12">
                <div class="year py-2 px-4 text-white-400 bg-blue-1000 text-sm font-medium rounded-[11px] lg:text-xs">114年</div>
                <div class="title text-3.5xl font-bold text-blue-1000 tracking-wide lg:text-xl">點姻緣燈</div>
                <div class="title-line w-[900px] h-[2px] bg-blue-1000 lg:w-[27%]"></div>
                <div class="total text-3.5xl font-bold text-blue-1000 tracking-wide lg:text-xl">共<span class="font-en">2</span>份</div>
            </div>
            <ul class="detailList">
                <li class="flex relative">
                    <div class="title-area text-3xl text-blue-1000 font-bold text-center mr-12 lg:text-2xl lg:-mr-8">
                        第
                        <div class="number">01</div>
                        份
                    </div>
                    <div class="buy-container pb-36 lg:pb-24 border-blue-1000 border-b-[1px]">
                        <div class="flex-container align-justify lg:hidden">
                            <div class="item flex-container align-middle">
                                <div class="title">姓名</div>
                                <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                            </div>
                            <div class="item flex-container align-middle">
                                <div class="title">性別</div>
                                <div class="flex-container">
                                    <div class="inner-item flex-container align-middle no-border">
                                        <input type="radio" id="male" name="gender" value="male" />
                                        <label class="flex-container align-middle mr-4" for="male"><span
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
                        <div class="item hidden lg:flex flex-container align-middle">
                            <div class="title">姓名</div>
                            <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                        </div>
                        <div class="item hidden lg:flex flex-container align-middle">
                            <div class="title">性別</div>
                            <div class="flex-container">
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="male" name="gender" value="male" />
                                    <label class="flex-container align-middle mr-4" for="male"><span
                                            class="checkmark"></span>信士</label>
                                </div>
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="female" name="gender" value="female" />
                                    <label class="flex-container align-middle" for="female"><span
                                            class="checkmark"></span>信女</label>
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
                    <div class="other absolute flex right-64 bottom-28 lg:right-4 lg:bottom-24">
                        <div class="title text-3xl text-blue-1000 font-bold mr-4 lg:text-xl">小工具</div>
                        <div class="button basic-hover px-4 py-2 text-blue-1000 bg-white-400 text-sm lg:text-xs font-bold rounded-[11px]">複製參加資料</div>
                    </div>
                </li>
                <li class="flex relative">
                    <div class="title-area text-3xl text-blue-1000 font-bold text-center mr-12 lg:-mr-8">
                        第
                        <div class="number">02</div>
                        份
                    </div>
                    <div class="buy-container pt-20 pb-36 lg:pb-24 lg:pt-12">
                        <div class="flex-container align-justify lg:hidden">
                            <div class="item flex-container align-middle">
                                <div class="title">姓名</div>
                                <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                            </div>
                            <div class="item flex-container align-middle">
                                <div class="title">性別</div>
                                <div class="flex-container">
                                    <div class="inner-item flex-container align-middle no-border">
                                        <input type="radio" id="male" name="gender" value="male" />
                                        <label class="flex-container align-middle mr-4" for="male"><span
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
                        <div class="item hidden lg:flex flex-container align-middle">
                            <div class="title">姓名</div>
                            <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                        </div>
                        <div class="item hidden lg:flex flex-container align-middle">
                            <div class="title">性別</div>
                            <div class="flex-container">
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="male" name="gender" value="male" />
                                    <label class="flex-container align-middle mr-4" for="male"><span
                                            class="checkmark"></span>信士</label>
                                </div>
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="female" name="gender" value="female" />
                                    <label class="flex-container align-middle" for="female"><span
                                            class="checkmark"></span>信女</label>
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
                    <div class="other absolute flex right-64 bottom-28 lg:right-4 lg:bottom-24">
                        <div class="title text-3xl text-blue-1000 font-bold mr-4 lg:text-xl">小工具</div>
                        <div class="button basic-hover px-4 py-2 text-blue-1000 bg-white-400 text-sm lg:text-xs font-bold rounded-[11px]">複製參加資料</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="detailList-area relative z-[2] mx-60 mt-12 lg:mx-4">

            <div class="detailList-title flex items-center justify-between mb-12">
                <div class="year py-2 px-4 text-white-400 bg-blue-1000 text-sm font-medium rounded-[11px] lg:text-xs">114年</div>
                <div class="title text-3.5xl font-bold text-blue-1000 tracking-wide lg:text-xl">借貴人錢</div>
                <div class="title-line w-[900px] h-[2px] bg-blue-1000 lg:w-[27%]"></div>
                <div class="total text-3.5xl font-bold text-blue-1000 tracking-wide lg:text-xl">共<span class="font-en">1</span>份</div>
            </div>
            <ul class="detailList">
                <li class="flex relative">
                    <div class="title-area text-3xl text-blue-1000 font-bold text-center mr-12 lg:text-2xl lg:-mr-8">
                        第
                        <div class="number">01</div>
                        份
                    </div>
                    <div class="buy-container pb-36 lg:pb-24 border-blue-1000 border-b-[1px]">
                        <div class="flex-container align-justify lg:hidden">
                            <div class="item flex-container align-middle">
                                <div class="title">姓名</div>
                                <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                            </div>
                            <div class="item flex-container align-middle">
                                <div class="title">性別</div>
                                <div class="flex-container">
                                    <div class="inner-item flex-container align-middle no-border">
                                        <input type="radio" id="male" name="gender" value="male" />
                                        <label class="flex-container align-middle mr-4" for="male"><span
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
                        <div class="item hidden lg:flex flex-container align-middle">
                            <div class="title">姓名</div>
                            <div><input type="text" name="" id="" placeholder="請輸入付款人姓名"></div>
                        </div>
                        <div class="item hidden lg:flex flex-container align-middle">
                            <div class="title">性別</div>
                            <div class="flex-container">
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="male" name="gender" value="male" />
                                    <label class="flex-container align-middle mr-4" for="male"><span
                                            class="checkmark"></span>信士</label>
                                </div>
                                <div class="inner-item flex-container align-middle no-border">
                                    <input type="radio" id="female" name="gender" value="female" />
                                    <label class="flex-container align-middle" for="female"><span
                                            class="checkmark"></span>信女</label>
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
                    <div class="other absolute flex right-64 bottom-28 lg:right-4 lg:bottom-24">
                        <div class="title text-3xl text-blue-1000 font-bold mr-4 lg:text-xl">小工具</div>
                        <div class="button basic-hover px-4 py-2 text-blue-1000 bg-white-400 text-sm lg:text-xs font-bold rounded-[11px]">複製參加資料</div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="terms-area mx-80 mb-32 lg:mx-12 lg:mb-12">
            <div class="title mb-8 text-3xl lg:text-2xl lg:mb-4 text-blue-1000 font-bold tracking-normal">服務條款</div>
            <div class="content mb-20 lg:mb-12 text-lg lg:text-sm leading-1.6 text-gray-400 tracking-normal">
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
        flktyInstance.select(2);
    }

    $('.submit').on('click', function() {
        window.location.href = "./cart-4"
    })
    // $('.c-fancy .button li').on('click', function () {
    //     $('.c-fancy').removeClass('is-show');
    //     $('body').removeClass('is-lock')
    // })
    $('.cart-select').niceSelect();

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

    $('.detailList .other .button').on('click', function() {
        $('.c-other-fancy').addClass('is-show');
    })

    $('.c-other-fancy .back').on('click', function() {
        $('.c-other-fancy').removeClass('is-show');
    })
</script>