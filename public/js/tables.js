function updateTable() {
    var viewDropdown = document.getElementById("view");
    var selectedView = viewDropdown.value;

    var table = document.getElementById("reservationTable");
    var headerRow = document.getElementById("headerRow");
    var tableBody = document.getElementById("tableBody");


    headerRow.innerHTML = "";
    tableBody.innerHTML = "";

    if (selectedView === "day") {

        headerRow.insertAdjacentHTML("beforeend", "<th>Jam</th>");
        for (var room = 1; room <= 5; room++) {
            headerRow.insertAdjacentHTML("beforeend", "<th>Room " + room + "</th>");
        }

        for (var hour = 8; hour < 18; hour++) {
            var hourFormatted = (hour < 10 ? '0' : '') + hour; 
            var row = "<tr><td>" + hourFormatted + ":00</td>";
            for (var room = 1; room <= 5; room++) {
                row += "<td></td>"; 
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        
            row = "<tr><td>" + hourFormatted + ":30</td>";
            for (var room = 1; room <= 5; room++) {
                row += "<td></td>"; 
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        }
        var lastRow = "<tr><td>18:00</td>";
        for (var room = 1; room <= 5; room++) {
            lastRow += "<td></td>"; 
        }
        lastRow += "</tr>";
        tableBody.insertAdjacentHTML("beforeend", lastRow);
        
    


    } else if (selectedView === "week") {
        var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        headerRow.insertAdjacentHTML("beforeend", "<th>Day</th>");
        for (var i = 0; i < daysOfWeek.length; i++) {
            headerRow.insertAdjacentHTML("beforeend", "<th>" + daysOfWeek[i] + "</th>");
        }

        for (var room = 1; room <= 5; room++) {
            var row = "<tr><td>Room " + room + "</td>";
            for (var i = 0; i < daysOfWeek.length; i++) {
                row += "<td></td>"; 
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        }
    } else if (selectedView === "month") {
        var daysInMonth = 31;
        headerRow.insertAdjacentHTML("beforeend", "<th>Day</th>");
        for (var day = 1; day <= daysInMonth; day++) {
            headerRow.insertAdjacentHTML("beforeend", "<th>" + day + "</th>");
        }

        for (var room = 1; room <= 5; room++) {
            var row = "<tr><td>Room " + room + "</td>";
            for (var day = 1; day <= daysInMonth; day++) {
                row += "<td></td>";
            }
            row += "</tr>";
            tableBody.insertAdjacentHTML("beforeend", row);
        }
    }
}