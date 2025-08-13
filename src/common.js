$(window)
  .on("resize", function () {
    if ($(this).width() > 1200) {
      if (window.device == "mobile") {
        location.reload();
      }
      window.device = "desktop";
    } else {
      if (window.device == "desktop") {
        location.reload();
      }
      window.device = "mobile";
    }

    if ($(this).width() > 1100 && $(this).width() < 1400 && isIpad()) {
      $("#landscape-lock").removeClass("hidden");
    } else {
      $("#landscape-lock").addClass("hidden");
    }
  })
  .trigger("resize");

// 檢查裝置是否為 iPad
function isIpad() {
  return (
    /iPad|Macintosh/i.test(navigator.userAgent) && "ontouchend" in document
  );
}

if (navigator.appVersion.indexOf("Mac") != -1) {
  $("body").get(0).style.setProperty("--lock", "15px");
} else {
  $("body").get(0).style.setProperty("--lock", "17px");
}

// 左邊補0
function padLeft(str, len) {
  str = "" + str;
  return str.length >= len
    ? str
    : new Array(len - str.length + 1).join("0") + str;
}

function lerp(start, end, amt) {
  return (1 - amt) * start + amt * end;
}

class RyderMarquee {
  constructor(el, setting) {
    this.hero = $(el).parent().get(0);
    this.wrapper = el;
    this.delta = 0;
    this.transform = 0;
    this.step = 0.5;
    this.direct = 0;
    this.hover = false;
    this.isHover = false;
    this.isAcc = false;
    this.acc = 0.5;

    Object.assign(this, setting);

    if (device == "mobile") {
      this.step /= 2;
      this.acc /= 2;
    }

    if (this.direct == 1) {
      this.wrapper.style.transform = `translate3d(-${
        this.wrapper.getBoundingClientRect().width / 2
      }px, 0, 0)`;
      this.transform = -this.wrapper.getBoundingClientRect().width / 2;
    }

    if (this.hover) {
      $(el).hover(
        () => {
          this.isHover = true;
        },
        () => {
          this.isHover = false;
        }
      );
    }
  }

  animate() {
    this.delay = 50;

    if (this.velo != null) {
      this.delta = lerp(this.delta, this.scrollY - this.velo, 0.1);
    }

    if (this.delta < 0) {
      this.delta = 0;
    }

    this.velo = this.scrollY;

    clearTimeout(this.timer);

    this.timer = setTimeout(this.clear, this.delay);

    if (!this.isHover) {
      this.transform += this.step;
    }

    if (this.direct == 1) {
      if (this.transform > 0) {
        this.transform = -this.wrapper.getBoundingClientRect().width / 2;
      }
      if (this.isAcc) {
        this.transform += 0.5 + this.delta * this.acc;
      }
      this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
    } else {
      if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
        this.transform = 0;
      }
      if (this.isAcc) {
        this.transform += 0.5 + this.delta * this.acc;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    }
  }

  render() {
    this.scrollY = $(window).scrollTop();

    const bounding = this.hero.getBoundingClientRect();
    const distance =
      window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
    const percentage =
      distance / ((window.innerHeight + bounding.height) / 100);

    this.animate();
  }

  clear() {
    this.delta = 0;
    this.velo = null;
  }

  create() {
    gsap.ticker.add(this.render.bind(this));
  }
}

function marqueeHandler(el, options = {}) {
  const {
    direct = 0, //0是往左 1是往右
    step = null, //移動速度
    isAcc = false, //是否滾動時加速
    acc = 0.5, //滾動時的加速度
  } = options;

  let $copy = $(el).contents().clone();
  $(el).append($copy);

  let ryderOptions = {
    direct,
    isAcc,
    acc,
  };

  if (step !== null) {
    ryderOptions.step = step;
  }

  let ryderMarquee = new RyderMarquee(el, ryderOptions).create();
}

$("#preload").delay(500).fadeOut(500);

$("#scrolldown").on("click", function () {
  gsap.to(window, {
    duration: 1.2,
    scrollTo: $(window).height(),
    ease: "power2.inOut",
  });
});

function goto(to) {
  console.log("to: ", to);
  gsap.to(window, {
    duration: 1.2,
    scrollTo: to,
    ease: "power2.inOut",
  });
}

$("[data-enter]").each((i, el) => {
  let customOffset = $(el).data("enter") || 0.3;

  let ob_offset = $(window).height() * -customOffset;

  let observer = new IntersectionObserver(
    function (entries, observer) {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-enter");
        } else {
          if (!$(entry.target).hasClass("enter-once")) {
            entry.target.classList.remove("is-enter");
          }
        }
      });
    },
    {
      root: null,
      rootMargin: `0px 0px ${ob_offset}px 0px`,
      threshold: 0,
    }
  );

  observer.observe(el);
});

$("nav .hamburger").on("click", function () {
  $("nav .hamburger").toggleClass("is-open");
  $(".topmenuList-mobile").toggleClass("is-open");
});
$(window).on("scroll", function () {
  let currentScroll = $(this).scrollTop();

  if (currentScroll >= 100) {
    // 👇 往下滑，加上 class
    $(".topmenu .logo").addClass("opacity-0");
  } else {
    // 👆 往上滑，移除 class
    $(".topmenu .logo")
      .removeClass("opacity-0");
  }
});

let lastScrollTop = 0;

$(window).on("scroll", function () {
  let currentScroll = $(this).scrollTop();

  if (currentScroll > lastScrollTop) {
    // 👇 往下滑，加上 class
    $(".hamburger").addClass("opacity-0").addClass("pointer-events-none");
    $(".member").addClass("opacity-0").addClass("pointer-events-none");
  } else {
    // 👆 往上滑，移除 class
    $(".hamburger").removeClass("opacity-0").removeClass("pointer-events-none");
     $(".member").removeClass("opacity-0").removeClass("pointer-events-none");
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // 防止負值
});

$(".topmenu .member").on("click", function () {
  $(".member-fancy").addClass("is-show");
  $("html").addClass('is-lock')
  $("body").addClass('is-lock')
});

$(".member-fancy .m-close").on("click", function () {
  $(".member-fancy").removeClass("is-show");
  $("html").removeClass('is-lock')
  $("body").removeClass('is-lock')
});
