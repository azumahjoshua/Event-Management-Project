document.addEventListener('DOMContentLoaded', function () { 
const toggleButton = document.querySelector('.nav-toggle');
const menu = document.querySelector('.nav-menu');

toggleButton.addEventListener('click', () => {
  toggleButton.classList.toggle('active');
  menu.classList.toggle('active');
});

document.addEventListener('click', (event) => {
  if (!event.target.closest('.nav-menu') && !event.target.closest('.nav-toggle')) {
    toggleButton.classList.remove('active');
    menu.classList.remove('active');
  }
});

menu.addEventListener('click', (event) => {
  if (event.target.closest('a')) {
    toggleButton.classList.remove('active');
    menu.classList.remove('active');
  }
});
})
