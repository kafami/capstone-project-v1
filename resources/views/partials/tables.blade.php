<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
</head>
<body onload="updateTable()">
<div class="select">
    <form>
        <label for="view"><p>Select View: </p></label>
        <select class="form-select" id="view" onchange="updateTable()">
            <option value="day" selected>Day</option>
            <option value="week">Week</option>
            <option value="month">Month</option>
        </select>
    </form>
</div>

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