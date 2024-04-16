<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>

<form>
    <label for="dropdown">Select Data:</label>
    <select id="dropdown" onchange="updateTable()">
        <option value="data1">Data 1</option>
        <option value="data2">Data 2</option>
    </select>
</form>

<table id="dataTable">
    <thead>
        <tr id="headerRow">
            <!-- Columns will be populated dynamically -->
        </tr>
    </thead>
    <tbody id="tableBody">
        <!-- Table body will be populated dynamically -->
    </tbody>
</table>

<script>
var data1 = [
    ["1", "a", "b", "c"],
    ["2", "d", "e", "f"],
    ["3", "g", "h", "i"]
];

var data2 = [
    ["4", "b", "c"],
    ["5", "f", "g"],
    ["6", "j", "k"]
];

var columnHeaders = ["Row Number", "Column 1", "Column 2", "Column 3"];

function updateTable() {
    var dropdown = document.getElementById("dropdown");
    var selectedData = dropdown.value;

    var table = document.getElementById("dataTable");
    var tableBody = document.getElementById("tableBody");
    tableBody.innerHTML = ""; // Clear existing rows

    var headerRow = document.getElementById("headerRow");
    headerRow.innerHTML = ""; // Clear existing headers

    // Find the maximum number of columns
    var maxColumns = Math.max(...((selectedData === "data1") ? data1 : data2).map(row => row.length));

    // Populate table header dynamically
    for (var i = 0; i < maxColumns; i++) {
        if (columnHeaders[i]) {
            var th = document.createElement("th");
            th.textContent = columnHeaders[i];
            headerRow.appendChild(th);
        } else {
            // If there's no column header defined, create an empty header
            var th = document.createElement("th");
            th.textContent = "Column " + (i + 1);
            headerRow.appendChild(th);
        }
    }

    var data = (selectedData === "data1") ? data1 : data2;

    // Populate table dynamically
    for (var i = 0; i < data.length; i++) {
        var rowData = data[i];
        var row = document.createElement("tr");
        for (var j = 0; j < maxColumns; j++) {
            var cell = document.createElement("td");
            cell.textContent = rowData[j] || ""; // Fill empty cells with empty string
            row.appendChild(cell);
        }
        tableBody.appendChild(row);
    }
}
</script>