export function initHeaderThemeSettings() {
  const STORAGE = {
    bsTheme: "ui.bsTheme",
    skin: "ui.skin",
    font: "ui.font",
    breadcrumbs: "ui.breadcrumbs",
    monochrome: "ui.monochrome",
    radius0: "ui.radius0",
    boxShadow: "ui.boxShadow",
  };

  const root = document.documentElement;

  function setAttrSafe(el, attr, value) {
    if (!el) return;
    if (value === null || value === undefined) el.removeAttribute(attr);
    else el.setAttribute(attr, value);
  }

  function setThemeIcon(value) {
    const icon = document.querySelector(".theme-icon-active use");
    if (!icon) return;
    if (value === "dark") icon.setAttribute("href", "#moon-stars-fill");
    else if (value === "auto") icon.setAttribute("href", "#circle-half");
    else icon.setAttribute("href", "#sun-fill");
  }

  function applyBootstrapTheme(value) {
    const v = value || "light";
    setAttrSafe(root, "data-bs-theme", v);
    setThemeIcon(v);
    localStorage.setItem(STORAGE.bsTheme, v);

    document.querySelectorAll("[data-bs-theme-value]").forEach((a) => {
      a.classList.toggle("active", a.getAttribute("data-bs-theme-value") === v);
    });
  }

  function applySkin(skin) {
    const v = skin || "blue";
    setAttrSafe(root, "data-theme", v);
    localStorage.setItem(STORAGE.skin, v);

    document.querySelectorAll(".choose-skin li").forEach((li) => {
      li.classList.toggle("active", li.getAttribute("data-theme") === v);
    });
  }

  function applyFont(fontClass) {
    root.className = root.className
      .split(" ")
      .filter((c) => !c.startsWith("font-"))
      .join(" ")
      .trim();

    if (fontClass) root.classList.add(fontClass);
    localStorage.setItem(STORAGE.font, fontClass || "");

    const input = document.querySelector(`input[name="font"][value="${fontClass}"]`);
    if (input) input.checked = true;
  }

  function bindToggle(id, storageKey, className) {
    const el = document.getElementById(id);
    if (!el) return;

    const saved = localStorage.getItem(storageKey);
    const on = saved === "1";

    el.checked = on;
    if (className) root.classList.toggle(className, on);

    el.addEventListener("change", function () {
      const enabled = !!this.checked;
      localStorage.setItem(storageKey, enabled ? "1" : "0");
      if (className) root.classList.toggle(className, enabled);
    });
  }

  // Theme dropdown clicks
  document.addEventListener("click", function (e) {
    const a = e.target.closest("[data-bs-theme-value]");
    if (!a) return;
    e.preventDefault();
    applyBootstrapTheme(a.getAttribute("data-bs-theme-value"));
  });

  // Skin
  document.querySelectorAll(".choose-skin li").forEach((li) => {
    li.addEventListener("click", function () {
      applySkin(this.getAttribute("data-theme"));
    });
  });

  // Fonts
  document.querySelectorAll('input[name="font"]').forEach((radio) => {
    radio.addEventListener("change", function () {
      if (this.checked) applyFont(this.value);
    });
  });

  // Toggles
  bindToggle("breadcrumbs-switch", STORAGE.breadcrumbs, "breadcrumbs-primary");
  bindToggle("monochrome", STORAGE.monochrome, "monochrome-mode");
  bindToggle("radius0", STORAGE.radius0, "radius-none");
  bindToggle("BoxShadow", STORAGE.boxShadow, "card-shadow-active");

  // Init
  applyBootstrapTheme(localStorage.getItem(STORAGE.bsTheme) || "light");
  applySkin(localStorage.getItem(STORAGE.skin) || "blue");
  applyFont(localStorage.getItem(STORAGE.font) || "font-raleway");
}

export const initThemeSettings = initHeaderThemeSettings;
