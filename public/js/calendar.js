const calendar = document.querySelector('.table');

calendar.addEventListener('click', (event) => {
const row = event.target.parentNode;
const id = row.querySelector('td:first-child').textContent;})
// Handle custom color picker
const customColorPicker = document.querySelector('.custom-color-picker');
const customColorOptions = document.querySelectorAll('.custom-color-option');

customColorPicker.addEventListener('click', () => {
    customColorOptions.forEach((option) => {
        option.style.display = 'block';
    });
});

customColorOptions.forEach((option) => {
    option.addEventListener('click', (event) => {
        const color = event.target.dataset.color;
        customColorPicker.style.backgroundColor = color;
        customColorPicker.dataset.color = color;
        customColorOptions.forEach((option) => {
            option.style.display = 'none';
        });
    });
});
document.querySelectorAll('.table').forEach(table => {
    table.classList.add('table-show');
});

// Update calendar event colors
const calendarEvents = document.querySelectorAll('.calendar-event');

calendarEvents.forEach((event) => {
    const backgroundColor = event.dataset.backgroundColor;
    const borderColor = event.dataset.borderColor;
    const textColor = event.dataset.textColor;

    event.style.backgroundColor = backgroundColor;
    event.style.borderColor = borderColor;
    event.style.color = textColor;
});
function toggleTheme() {
    document.body.classList.toggle('light-theme');
    document.body.classList.toggle('dark-theme');
}
