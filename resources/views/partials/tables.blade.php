<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>
<body>

<form>
    <label for="view">Select View:</label>
    <select id="view" onchange="updateTable()">
        <option value="day">Day</option>
        <option value="week">Week</option>
        <option value="month">Month</option>
    </select>
</form>

<table id="reservationTable">
    <thead>
        <tr id="headerRow">
            <!-- Headers will be populated dynamically -->
        </tr>
    </thead>
    <tbody id="tableBody">
        <!-- Table body will be populated dynamically -->
    </tbody>
</table>

<script src="{{ asset('js/tables.js') }}"></script>