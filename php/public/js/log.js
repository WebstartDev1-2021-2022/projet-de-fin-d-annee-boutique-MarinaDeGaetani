const blocModal = document.querySelector(".hidden");
const closeModal = document.querySelector(".close-panier");
const modal = document.querySelector(".log-img");

function toggleLog() {
  blocModal.classList.toggle("active");
}
modal.addEventListener("click", toggleLog);

closeModal.addEventListener("click", toggleLog);
