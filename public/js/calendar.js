document.addEventListener('DOMContentLoaded', function () {
    const currentDate = new Date();
    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    renderCalendar(currentDate);

    document.querySelector('.prev-month').addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() - 1);
        renderCalendar(currentDate);
    });

    document.querySelector('.next-month').addEventListener('click', function () {
        currentDate.setMonth(currentDate.getMonth() + 1);
        renderCalendar(currentDate);
    });

    function renderCalendar(date) {
        const currentMonth = date.getMonth();
        const currentYear = date.getFullYear();
        const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
        const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
        const daysInMonth = lastDayOfMonth.getDate();
        const startingDay = firstDayOfMonth.getDay();

        document.querySelector('.current-month').textContent = `${monthNames[currentMonth]} ${currentYear}`;

        const calendarContainer = document.querySelector('.calendar');
        calendarContainer.innerHTML = '';

        for (let i = 0; i < startingDay; i++) {
            const dayElement = document.createElement('div');
            dayElement.classList.add('calendar-day', 'empty');
            calendarContainer.appendChild(dayElement);
        }

        for (let i = 1; i <= daysInMonth; i++) {
            const dayElement = document.createElement('div');
            dayElement.classList.add('calendar-day');
            dayElement.textContent = i;
            calendarContainer.appendChild(dayElement);
        }
    }
});
