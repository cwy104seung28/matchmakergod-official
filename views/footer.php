<footer class="relative lg:px-8 lg:pt-14 xl:zoom-80 lg:pb-8">
	<!-- desktop doll -->
	<div class="absolute top-[-138px] lg:-top-20 right-[350px] lg:right-20 lg:rotate-12 group" data-enter="">
		<img src="images/footer-doll-1.svg"
			class="transition-all duration-500 opacity-0 translate-y-1/3 group-[.is-enter]:opacity-100 group-[.is-enter]:translate-y-0 lg:hidden">
		<img src="images/footer-doll-1-mobile.svg"
			class="transition-all duration-500 opacity-0 translate-y-1/3 group-[.is-enter]:opacity-100 group-[.is-enter]:translate-y-0 hidden lg:block">
	</div>

	<div class="absolute top-[-60px] lg:-top-16 right-[175px] lg:right-2 lg:rotate-12 group" data-enter="">
		<img src="images/footer-doll-2.svg"
			class="transition-all duration-500 opacity-0 translate-y-1/3 group-[.is-enter]:opacity-100 group-[.is-enter]:translate-y-0 lg:hidden">
		<img src="images/footer-doll-2-mobile.svg"
			class="transition-all duration-500 delay-100 opacity-0 translate-y-1/3 group-[.is-enter]:opacity-100 group-[.is-enter]:translate-y-0 hidden lg:block">
	</div>

	<!-- mobile doll -->
	<!-- <div class="hidden lg:flex justify-center gap-5 mt-5 -mb-8" data-enter="0.05">
		<div class="absolute top-[-138px] right-[350px] group">
			<img src="images/footer-doll-1-mobile.svg"
				class="transition-all duration-500 opacity-0 translate-y-1/3 group-[.is-enter]:opacity-100 group-[.is-enter]:translate-y-0">
		</div>

		<div class="absolute top-[-60px] right-[175px] group">
			<img src="images/footer-doll-2-mobile.svg"
				class="transition-all duration-500 delay-100 opacity-0 translate-y-1/3 group-[.is-enter]:opacity-100 group-[.is-enter]:translate-y-0">
		</div>
	</div> -->

	<!-- desktop bg box -->
	<div class="relative pr-3 overflow-hidden lg:hidden">
		<img src="images/footer-box-blue.svg" class="relative z-10">

		<img src="images/footer-box-white.svg" class="absolute -top-2 left-5">
	</div>

	<!-- mobile bg box -->
	<div class="hidden lg:flex flex-col absolute inset-0 z-[1]">
		<div class="-mx-2">
			<img src="images/footer-box-top-mobile.svg">
		</div>

		<div class="flex-1 bg-blue-1000"></div>
	</div>

	<div class="absolute top-[36%] bottom-0 inset-x-[270px] z-20 lg:relative lg:top-0 lg:inset-x-0">
		<div class="flex items-start justify-between lg:flex-col lg:items-center">
			<img src="images/footer-logo.svg" class="lg:h-[74px] lg:mb-8">

			<div class="flex items-end gap-14 lg:block lg:w-full">
				<ul class="grid grid-rows-4 grid-flow-col place-content-start gap-x-16 gap-y-4 lg:grid-cols-4 lg:grid-rows-2 lg:gap-x-4 lg:gap-y-2 lg:mb-12"
					v-scope="{
					posts: [
						{
							anchor: ``,
							link: `javascript:;`,
							title: `歷史沿革`,
						},
						{
							anchor: `#locateAnchor`,
							link: `javascript:;`,
							title: `地點介紹`,
						},
						{
							anchor: ``,
							link: `./ceremony`,
							title: `法會活動`,
						},{
							anchor: `#scheduleAnchor`,
							link: `javascript:;`,
							title: `計畫日程`,
						},{
							anchor: `#fundAnchor`,
							link: `javascript:;`,
							title: `募資計畫`,
						},{
							anchor: `#relationshipAnchor`,
							link: `javascript:;`,
							title: `五大姻緣`,
						},{
							anchor: ``,
							link: `javascript:;`,
							title: `聯絡我們`,
						},
					]
				}">
					<li v-for="p,i in posts" class="cursor-pointer" v-on:click="goto(p.anchor)">
						<div class="text-[26px] tracking-wide text-white-400 basic-hover lg:text-sm lg:tracking-normal">
							<a :href="p.link">
								{{p.title}}
							</a>
						</div>
					</li>
				</ul>

				<!-- desktop social -->
				<nav class="flex gap-5 justify-end mb-2 lg:hidden">
					<a href="javascript:;" class="basic-hover">
						<img src="images/fb.svg">
					</a>

					<a href="javascript:;" class="basic-hover">
						<img src="images/ig.svg">
					</a>
				</nav>
			</div>
		</div>

		<div
			class="relative flex items-center justify-center gap-14 absolute tf-x bottom-[-74px] lg:relative lg:tf-x-0 lg:bottom-0 lg:block lg:space-y-4 lg:mt-6">
			<div class="flex">
				<!-- <img src="images/tel-1.svg" class="lg:zoom-80">

				<img src="images/tel-2.svg" class="lg:zoom-80"> -->
				<div class="title text-white-400 text-lg lg:text-sm font-bold lg:font-semibold tracking-wide lg:tracking-normal font-en mr-4 lg:mr-5">Tel.</div>
				<div class="phone text-white-400 text-lg lg:text-sm font-bold lg:font-semibold tracking-wide lg:tracking-normal font-en mr-4"><a href="tel:+886-4-22434146" target="_blank">04-22434146</a></div>
				<div class="phone text-white-400 text-lg lg:text-sm font-bold lg:font-semibold tracking-wide lg:tracking-normal font-en"><a href="tel:0800-221-988" target="_blank">0800-221-988</a></div>
			</div>

			<!-- <img src="images/fax.svg" class="lg:zoom-80"> -->
			<div class="flex">
				<div class="title text-white-400 text-lg lg:text-sm font-bold lg:font-semibold tracking-wide lg:tracking-normal font-en mr-4">Fax.</div>
				<div class="phone text-white-400 text-lg lg:text-sm font-bold lg:font-semibold tracking-wide lg:tracking-normal font-en"><a href="tel:+886-4-22476921" target="_blank">04-22476921</a></div>
			</div>
			<!-- <img src="images/address.svg" class="lg:zoom-75 lg:ml-[10px]"> -->
			 <div class="text-white-400 text-lg font-semibold lg:text-sm tracking-wide lg:tracking-normaltracking-wide">
				<a href="https://maps.app.goo.gl/9gLzyWtrRFa2pxC19" target="_blank">南投縣魚池鄉中正路253號</a>
			 </div>

			<!-- mobile social -->
			<nav class="hidden lg:flex gap-4 justify-end zoom-70 absolute right-0 bottom-0 lg:mt-2">
				<a href="javascript:;" class="basic-hover">
					<img src="images/fb.svg">
				</a>

				<a href="javascript:;" class="basic-hover">
					<img src="images/ig.svg">
				</a>
			</nav>
		</div>

		<a href="https://www.goods-design.com.tw/" target="_blank"
			class="block absolute -right-40 bottom-7 lg:static text-white-400 text-[10px] lg:text-[8px] font-normal tracking-normal">
			SITE BY 很好設計 GOODS DESIGN
		</a>


	</div>
</footer>