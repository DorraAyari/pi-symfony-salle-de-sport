const calendar = document.querySelector('.table');

calendar.addEventListener('click', (event) => {
const row = event.target.parentNode;
const id = row.querySelector('td:first-child').textContent;})