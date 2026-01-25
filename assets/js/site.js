// =========================
// site.js (FULL) - corrected
// - Sets current year (#yearNow)
// - Mobile menu toggle (#menuToggle + #mainNav)
// - Mobile submenus (li.has-submenu -> .open)
// - Hide header on scroll (#siteHeader)
// =========================

// ===== Year
document.addEventListener("DOMContentLoaded", () => {
  const year = document.getElementById("yearNow");
  if (year) year.textContent = new Date().getFullYear();
});

// ===== Mobile menu + submenus (no jQuery)
document.addEventListener("DOMContentLoaded", () => {
  const toggle = document.getElementById("menuToggle");
  const nav = document.getElementById("mainNav");
  if (!toggle || !nav) return;

  const mq = window.matchMedia("(max-width: 768px)");

  // Open/close main menu
  toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    const isOpen = nav.classList.toggle("is-open");
    toggle.setAttribute("aria-expanded", String(isOpen));
  });

  // Submenu toggles on mobile
  nav.querySelectorAll(".has-submenu").forEach((li) => {
    const link = li.querySelector(":scope > a");
    const submenu = li.querySelector(":scope > .submenu");
    if (!link || !submenu) return;

    link.setAttribute("aria-haspopup", "true");
    link.setAttribute("aria-expanded", "false");

    link.addEventListener("click", (e) => {
      if (!mq.matches) return; // desktop: hover + normal link
      e.preventDefault();
      e.stopPropagation();

      // close siblings (accordion style)
      const siblings = Array.from(li.parentElement.children).filter((x) => x !== li);
      siblings.forEach((sib) => {
        sib.classList.remove("open");
        const sibLink = sib.querySelector(":scope > a");
        if (sibLink) sibLink.setAttribute("aria-expanded", "false");
      });

      // toggle current
      li.classList.toggle("open");
      link.setAttribute("aria-expanded", li.classList.contains("open") ? "true" : "false");
    });
  });

  // Close menu when clicking a "real" link (not a submenu parent)
  nav.addEventListener("click", (e) => {
    if (!mq.matches) return;

    const a = e.target.closest("a");
    if (!a) return;

    const parentLi = a.closest(".has-submenu");
    const isParentLink = parentLi && a === parentLi.querySelector(":scope > a");

    // Parent links are used to open submenus on mobile, so don't close
    if (isParentLink) return;

    // Otherwise close menu
    nav.classList.remove("is-open");
    toggle.setAttribute("aria-expanded", "false");

    // Close any open submenus
    nav.querySelectorAll(".has-submenu.open").forEach((li) => {
      li.classList.remove("open");
      const link = li.querySelector(":scope > a");
      if (link) link.setAttribute("aria-expanded", "false");
    });
  });

  // Close when clicking outside (mobile)
  document.addEventListener("click", (e) => {
    if (!mq.matches) return;

    const inside = nav.contains(e.target) || toggle.contains(e.target);
    if (inside) return;

    nav.classList.remove("is-open");
    toggle.setAttribute("aria-expanded", "false");

    nav.querySelectorAll(".has-submenu.open").forEach((li) => {
      li.classList.remove("open");
      const link = li.querySelector(":scope > a");
      if (link) link.setAttribute("aria-expanded", "false");
    });
  });
});

// ===== Hide header on scroll down, show on scroll up
document.addEventListener("DOMContentLoaded", () => {
  const header = document.getElementById("siteHeader");
  if (!header) return;

  let lastY = window.scrollY;
  const threshold = 10;

  window.addEventListener(
    "scroll",
    () => {
      const y = window.scrollY;

      // at top => always show
      if (y < 20) {
        header.classList.remove("is-hidden");
        lastY = y;
        return;
      }

      // scroll down => hide
      if (y > lastY + threshold) {
        header.classList.add("is-hidden");
        lastY = y;
        return;
      }

      // scroll up => show
      if (y < lastY - threshold) {
        header.classList.remove("is-hidden");
        lastY = y;
      }
    },
    { passive: true }
  );
});

