<!DOCTYPE html>
<html>

<head>
    <title>法會活動 | 日月潭月老廟明月宮</title>
    <?php include 'html_head.php'; ?>
</head>

<body class="bg-green-400">
    <?php include 'topmenu.php'; ?>
    <div class="ceremonyList-area relative py-80 px-40 lg:px-8 lg:py-24">
        <div class="title-area mb-20 lg:mb-12">
            <div class="en text-[48px] lg:text-lg text-blue-1000 tracking-normal font-bold font-en lg:-mb-1">CEREMONY</div>
            <div class="ch text-[72px] lg:text-3xl text-blue-1000 tracking-wider font-bold">法會活動</div>
        </div>
        <ul class="ceremonyList grid grid-cols-3 lg:grid-cols-1 gap-x-32 lg:gap-x-0 gap-y-28 lg:gap-y-12"
            v-scope="{
                posts: [
                    {
                        ch:`賜緣大法會`,
                        en:`REVEALED AFFINITY CEREMONY`,
                        pic:`./images/ceremony-pic-1.jpg`,
                        content:`月老聖誕顯助姻緣大法會`,
                        link:`./ceremony-detail`
                    }, {
                        ch:`祈願法會`,
                        en:`PRAYER CEREMONY`,
                        pic:`./images/ceremony-pic-2.jpg`,
                        content:`月老聖誕顯助姻緣大法會`,
                        link:`./ceremony-detail`
                    },
                     {
                        ch:`賜緣大法會`,
                        en:`REVEALED AFFINITY CEREMONY`,
                        pic:`./images/ceremony-pic-3.jpg`,
                        content:`月老聖誕顯助姻緣大法會`,
                        link:`./ceremony-detail`
                    },
                    {
                        ch:`賜緣大法會`,
                        en:`REVEALED AFFINITY CEREMONY`,
                        pic:`./images/ceremony-pic-1.jpg`,
                        content:`月老聖誕顯助姻緣大法會`,
                        link:`./ceremony-detail`
                    }, {
                        ch:`祈願法會`,
                        en:`PRAYER CEREMONY`,
                        pic:`./images/ceremony-pic-2.jpg`,
                        content:`月老聖誕顯助姻緣大法會`,
                        link:`./ceremony-detail`
                    },
                     {
                        ch:`賜緣大法會`,
                        en:`REVEALED AFFINITY CEREMONY`,
                        pic:`./images/ceremony-pic-3.jpg`,
                        content:`月老聖誕顯助姻緣大法會`,
                        link:`./ceremony-detail`
                    },
                ]
            }">
            <li class="group" v-for="p, i in posts">
                <a :href="p.link">
                    <div class="ch mb-2 text-3.5xl lg:text-2xl text-blue-1000 font-bold tracking-wide lg:tracking-normal">{{p.ch}}</div>
                    <div class="en mb-4 text-xl lg:text-lg lg:min-h-[27px] text-blue-1000 font-bold font-en">{{p.en}}</div>
                    <div class="pic pb-4 border-b-2 border-b-blue-1000 mb-4 relative">
                        <img class="relative z-[1]" :src="p.pic" alt="">
                        <div class="hover group-hover:-top-28 lg:group-hover:-top-24 absolute right-0 top-0 transition-all duration-500"><img class="lg:w-[80px]" src="./images/ceremony-hover.svg" alt=""></div>
                    </div>
                    <div class="content text-lg lg:text-base mb-8 text-blue-1000 font-semibold tracking-wider lg:tracking-normal">{{p.content}}</div>
                    <div class="more lg:zoom-60"><img class="lg:mx-auto" src="./images/c-more.svg" alt=""></div>
                </a>
            </li>
        </ul>
    </div>
    <?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>

</html>
<script>

</script>