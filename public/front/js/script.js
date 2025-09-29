const preloadImages = (srcs) => {
  srcs.forEach((src) => {
    const img = new Image();
    img.src = src;
  });
};

preloadImages(["../media/coloredLogo.png", "../media/coloredLogoWhite.png"]);

const nav = document.querySelector("#navbar");
const navContainer = document.querySelector("#nav_container");
const langChanger = document.querySelector("#lang_changer");
const langChangerList = document.querySelectorAll("#lang_changer span");
const navLogo = document.querySelector("#navbar .logo");
const lang = document.querySelector("#lang");
const activeLang = document.querySelector("#active_lang");

// Scroll effect

// window.addEventListener("scroll", () => {
//   if (window.scrollY > 125) {
//     navLogo.src = "../media/coloredLogo.png";
//     setTimeout(() => {
//       nav.classList.add("floating_nav");
//       navContainer.style.padding = "10px 1rem";
//     }, 200);
//   } else {
//     nav.classList.remove("floating_nav");
//     navContainer.style.padding = "8px 1rem";
//     navLogo.src = "../media/coloredLogoWhite.png";
//   }
// });

lang.addEventListener("click", (e) => {
  e.stopPropagation();
  langChanger.classList.toggle("hide_lang_changer");
});

langChangerList.forEach((option) => {
  option.addEventListener("click", (e) => {
    e.stopPropagation();
    activeLang.textContent = option.textContent;
    langChanger.classList.add("hide_lang_changer");
  });
});

document.addEventListener("click", () => {
  langChanger.classList.add("hide_lang_changer");
});
function animateCounter(el, target) {
  let duration = 1500; // total time (ms)
  let start = 0;
  let startTime = null;

  function step(timestamp) {
    if (!startTime) startTime = timestamp;
    const progress = Math.min((timestamp - startTime) / duration, 1);

    // interpolate value
    const value = Math.floor(progress * target);
    el.textContent = value;

    if (progress < 1) {
      requestAnimationFrame(step);
    } else {
      el.textContent = target; // ensure exact
    }
  }

  requestAnimationFrame(step);
}

const counters = document.querySelectorAll("h2");
const observer = new IntersectionObserver(
  (entries, obs) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.getAttribute("data-target"), 10);
        animateCounter(el, target);
        obs.unobserve(el);
      }
    });
  },
  { threshold: 0.5 }
);

counters.forEach((el) => observer.observe(el));
counters.forEach((counter) => observer.observe(counter));

const menu = document.querySelector("#menu");
const dropdown = document.querySelector("#navigation_dropdown");

menu.addEventListener("click", () => {
  if (dropdown.classList.contains("show_dropdown")) {
    dropdown.style.overflow = "hidden";
    setTimeout(() => {
      dropdown.classList.remove("show_dropdown");
    }, 100);
  } else {
    dropdown.classList.add("show_dropdown");
    setTimeout(() => {
      dropdown.style.overflow = "visible";
    }, 300);
  }
});
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(
  "#navbar .navLink, #footer_navLinks a"
);

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    dropdown.style.overflow = "hidden";
    setTimeout(() => {
      dropdown.classList.remove("show_dropdown");
    }, 100);
    const targetId = link.getAttribute("href").replace("#", "");
    const targetEl = document.getElementById(targetId);

    if (targetEl) {
      lenis.scrollTo(targetEl);
    }

    // تحديث الـ active
    navLinks.forEach((i) => i.classList.remove("active"));
    link.classList.add("active");

    if (typeof dropdown !== "undefined" && dropdown) {
      dropdown.classList.remove("show_dropdown");
    }
  });
});

// Scroll spy logic
window.addEventListener("scroll", () => {
  let current = "";
  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;

    if (window.scrollY >= sectionTop - sectionHeight / 3) {
      current = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href") === `#${current}`) {
      link.classList.add("active");
    }
  });
});

const questions = document.querySelectorAll(".question_tag");
questions.forEach((question) => {
  question.addEventListener("click", () => {
    if (question.classList.contains("opened")) {
      question.classList.remove("opened");
    } else {
      questions.forEach((question) => question.classList.remove("opened"));
      question.classList.add("opened");
    }
  });
});

const marqueeSlides = document.querySelectorAll(".marquee article");
const marquee = document.querySelector(".marquee");
marquee.style.setProperty(
  "--marquee_timer",
  `${Math.min(marqueeSlides.length * 10, 130)}s`
);
marqueeSlides.forEach((slide, index) => {
  slide.style.animationDelay = `calc(var(--marquee_timer) / ${marqueeSlides.length} * -${index})`;
  slide.style.transform = `translateX(max(calc(400px * ${marqueeSlides.length}), 100%))`;
});

const heroHeader = document.querySelector(".hero_intro h1");
const text = heroHeader.textContent.trim();
heroHeader.textContent = ""; // clear
const words = text.split(" ");
let globalIndex = 0; // keep track of characters across all words

words.forEach((word, wIndex) => {
  const wordSpan = document.createElement("span");
  if (wIndex === word.length - 1) {
    wordSpan.className = "word LLC";
  } else {
    wordSpan.className = "word";
  }

  wordSpan.style.whiteSpace = "nowrap";

  Array.from(word).forEach((char) => {
    const span = document.createElement("span");
    span.className = "letter";
    span.textContent = char;

    // use global index for delay
    span.style.animationDelay = `${globalIndex * 0.08}s`;
    globalIndex++;

    wordSpan.appendChild(span);
  });

  heroHeader.appendChild(wordSpan);

  if (wIndex < words.length - 1) {
    heroHeader.appendChild(document.createTextNode(" "));
  }
});
