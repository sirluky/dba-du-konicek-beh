const loc = window.location.pathname;
document
  .querySelectorAll("nav a")
  .forEach(
    (prvek) =>
      ("/" + prvek.getAttribute("href") === loc ||
        prvek.getAttribute("href") === "index.html") &&
      prvek.classList.add("aktivni")
  );
