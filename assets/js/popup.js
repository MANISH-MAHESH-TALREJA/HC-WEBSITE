function openPopup() {
  document.getElementById('popupOverlay').style.display = 'flex';
  document.getElementById('popupBox').classList.add('show');
}
function closePopup() {
  document.getElementById('popupOverlay').style.display = 'none';
}
window.addEventListener('load', () => {
  setTimeout(() => {
    openPopup();
  }, 3500); // Show after 4 seconds
});

// document.querySelectorAll('.carousel-item').forEach(item => {
//   item.addEventListener('click', () => {
//     openPopup();
//   });
// });

function redirectToForm() {
  // 🔗 Replace this link with your actual Google Form link
  window.location.href = "https://forms.gle/GczVxgFa1FKf5nsGA";
}