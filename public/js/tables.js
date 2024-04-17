function updateTable() {
    var viewDropdown = document.getElementById("view");
    var selectedView = viewDropdown.value;

    var table = document.getElementById("reservationTable");
    var headerRow = document.getElementById("headerRow");
    var tableBody = document.getElementById("tableBody");

    // Clear existing table content
    headerRow.innerHTML = "";
    tableBody.innerHTML = "";

    // Populate table headers and body based on selected view
    if (selectedView === "day") {
        // Populate for day view (rooms as row headers and hours as column headers)
        headerRow.insertAdjacentHTML("beforeend", "<th>Hour</th>");
        for (var hour = 1; hour <= 24; hour++) {
            headerRow.insertAdjacentHTML("beforeend", "<th>" + hour + "</th>");
        }

        for (var room = 1; room <= 5; room++) {
            var row = "<tr><td>Room " + room + "</td>";
            for (var hour = 1; hour <= 24; hour++) {
                row += "<td></td>"; // Empty cells for availability
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        }
    } else if (selectedView === "week") {
        // Populate for week view (5 rooms as column headers and days of the week as row headers)
        var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        headerRow.insertAdjacentHTML("beforeend", "<th>Day</th>");
        for (var i = 0; i < daysOfWeek.length; i++) {
            headerRow.insertAdjacentHTML("beforeend", "<th>" + daysOfWeek[i] + "</th>");
        }

        for (var room = 1; room <= 5; room++) {
            var row = "<tr><td>Room " + room + "</td>";
            for (var i = 0; i < daysOfWeek.length; i++) {
                row += "<td></td>"; // Empty cells for availability
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        }
    } else if (selectedView === "month") {
        // Populate for month view (5 rooms as column headers and days of the month as row headers)
        var daysInMonth = 31; // Assuming a month with 31 days
        headerRow.insertAdjacentHTML("beforeend", "<th>Day</th>");
        for (var day = 1; day <= daysInMonth; day++) {
            headerRow.insertAdjacentHTML("beforeend", "<th>" + day + "</th>");
        }

        for (var room = 1; room <= 5; room++) {
            var row = "<tr><td>Room " + room + "</td>";
            for (var day = 1; day <= daysInMonth; day++) {
                row += "<td></td>"; // Empty cells for availability
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        }
    }
}