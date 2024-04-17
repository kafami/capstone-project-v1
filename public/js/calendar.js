document.addEventListener("DOMContentLoaded", function () {
    var calendar = document.getElementById("calendar");

    function loadCalendar(year, month) {
        var date = new Date(year, month - 1, 1);
        var firstDay = date.getDay();
        var daysInMonth = new Date(year, month, 0).getDate();
        var calendarHTML = "<table><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr><tr>";

        for (var i = 0; i < firstDay; i++) {
            calendarHTML += "<td></td>";
        }

        for (var day = 1; day <= daysInMonth; day++) {
            calendarHTML += "<td onclick='selectDate(" + day + ")'>" + day + "</td>";
            if ((day + firstDay) % 7 === 0) {
                calendarHTML += "</tr><tr>";
            }
        }

        calendarHTML += "</tr></table>";
        calendar.innerHTML = calendarHTML;
    }

    loadCalendar(new Date().getFullYear(), new Date().getMonth() + 1);
});

function selectDate(day) {
    var tds = document.querySelectorAll("#calendar td");
    tds.forEach(function (td) {
        td.classList.remove("selected");
    });
    event.target.classList.add("selected");
}
