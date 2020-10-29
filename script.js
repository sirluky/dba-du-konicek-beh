const loc = window.location.pathname;
document
  .querySelectorAll("nav a")
  .forEach(
    (prvek) =>
      ("/" + prvek.getAttribute("href") === loc ||
        prvek.getAttribute("href") === (loc === "/" ? "index.html" : "")) &&
      prvek.classList.add("aktivni")
  );
