const nav = document.querySelector("#navbar");
const navContainer = document.querySelector("#nav_container");
const langChanger = document.querySelector("#lang_changer");
const langChangerList = document.querySelectorAll("#lang_changer span");

const lang = document.querySelector("#lang");
const activeLang = document.querySelector("#active_lang");

// Scroll effect
window.addEventListener("scroll", () => {
  if (window.scrollY > 125) {
    nav.classList.add("floating_nav");
    navContainer.style.padding = "10px 1rem";
  } else {
    nav.classList.remove("floating_nav");
    navContainer.style.padding = "8px 1rem";
  }
});

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

const selectService = document.querySelector("#select_service");
const options = document.querySelector("#options");
const optionsList = document.querySelectorAll("#options span");
// const inputField = selectService.querySelector("input");

// selectService.addEventListener("click", (e) => {
//   e.stopPropagation();
//   options.classList.toggle("hide_lang_changer");
// });

// optionsList.forEach((option) => {
//   option.addEventListener("click", (e) => {
//     e.stopPropagation();
//     inputField.value = option.textContent;
//     options.classList.add("hide_lang_changer");
//   });
// });

// document.addEventListener("click", () => {
//   options.classList.add("hide_lang_changer");
// });

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
    }, 400);
  }
});
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(
  "#navbar .navLink, #footer_navLinks a"
);

navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();

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
