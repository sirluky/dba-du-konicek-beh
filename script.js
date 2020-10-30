const loc = window.location.pathname;
document
  .querySelectorAll("nav a")
  .forEach(
    (prvek) =>
      ("/" + prvek.getAttribute("href") === loc ||
        prvek.getAttribute("href") === (loc === "/" ? "index.html" : "")) &&
      prvek.classList.add("aktivni")
  );

document.querySelectorAll(".galerie img").forEach((prvek) => {
  const text = prvek.getAttribute("alt");
  const popisekDOM = document.createElement("p");
  popisekDOM.innerText = text;
  prvek.after(popisekDOM);
  // prvek.appendChild(popisekDOM);
});
