<?php
include("header.html");
include("sidebar.html");
?>



<style>
    body {
        background: #f2f2f2;
        font-family: 'Segoe UI', sans-serif;
    }

    .frame {
        background: #c4c4c4;
        padding: 30px;
        margin: 20px auto;
        width: 95%;
    }

    .section {
        background-color: white;
        padding: 20px;
        width: 100%;
        border-radius: 0;
        box-shadow: none;
        min-height: 80vh;
    }

    select.form-control {
        appearance: none;
        background: #f9f9f9 url("data:image/svg+xml;utf8,<svg fill='%23999' height='20' width='20' viewBox='0 0 24 24'><path d='M7 10l5 5 5-5z'/></svg>") no-repeat right 12px center;
        background-size: 16px;
        padding-right: 40px;
        cursor: pointer;
        color: #555;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
    }

    select.form-control:hover {
        border-color: #f97316;
    }

    select.form-control:focus {
        outline: none;
        border-color: #f97316;
        box-shadow: 0 0 3px rgba(249, 115, 22, 0.25);
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    .card-header h5 {
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        color: #ea7638ff;
    }

    .btn-warning {
        background-color: #f97316;
        border: none;
        color: white;
        border-radius: 6px;
        padding: 8px 16px;
        font-weight: bold;
        cursor: pointer;
    }

    .btn-warning:hover {
        background-color: #ea580c !important;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #f97316;
        color: white;
        font-weight: 600;
        font-size: 14px;
    }

    td {
        border-bottom: 1px solid #e0e0e0;
        font-size: 13px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-label {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        background-color: #f9f9f9;
        color: #938989ff;
        appearance: none;
        cursor: text;
    }

    .hidden {
        display: none;
    }

    /* Custom select wrapper with arrow */
    .select-wrapper {
        position: relative;
        width: 100%;
    }

    .select-wrapper::after {
        content: "";
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: 6px solid #999;
        pointer-events: none;
    }

    .select-wrapper select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
        color: #190a0aff;
        padding: 8px 40px 8px 12px;
        cursor: pointer;
    }

    .select-wrapper select.form-control:hover {
        border-color: #f97316;
    }

    .select-wrapper select.form-control:focus {
        outline: none;
        border-color: #f97316;
        box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.25);
    }

    .form-control:focus {
        outline: none;
        border-color: #f97316;
        box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.25);
    }

/* Remove fake placeholder completely */
.time-wrapper::before,
.date-wrapper::before {
    content: none !important;
}

/* Style empty inputs to look like placeholder */
input[type="time"]:invalid,
input[type="date"]:invalid {
    color: #999;  /* gray text */
}

/* When user selects value */
input[type="time"]:valid,
input[type="date"]:valid {
    color: #333;  /* normal dark text */
}


#doneBtn {
    background-color: #f97316;
    border: none;
    color: white;
    border-radius: 6px;
    padding: 12px o;  
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    display: block;
    margin: 30px auto;   /* center horizontally */
    width: 150px;
    text-align: center;
}

.btn-done:hover {
    background-color: #ea580c !important;
}



.tabs {
    margin-bottom: 15px;
    display: none; /* hidden by default */
}

.tab {
    background: #f3f3f3;
    border: none;
    padding: 8px 16px;
    margin-right: 8px;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    font-weight: 500;
}

.tab.active {
    background-color: #f97316;
    color: white;
}

</style>

<main id="main" class="main">
    <div class="row">
        <div class="frame">

            <!-- Section 1: Flight Schedule -->
            <section id="scheduleSection" class="section">
                <div class="container">
          <div class="card-header">
    <h5>FLIGHT SCHEDULE</h5>
    <button id="addScheduleBtn" class="btn-warning">Create Schedule</button>
</div>

<!-- Tabs -->
<div class="tabs">
    <button class="tab active" id="ongoingTab">Ongoing Report</button>
    <button class="tab" id="completedTab">Completed Report</button>
</div>

<table id="scheduleTable">
    <thead>
        <tr>
            <th>S/N</th>
            <th>DATE</th>
            <th>AIRCRAFT REG</th>
            <th>FLIGHT NO</th>
            <th>STD</th>
            <th>STA</th>
            <th>DOW</th>
            <th>VIEW</th>
        </tr>
    </thead>
    <tbody>
        <!-- Rows will be added dynamically via Flight.js -->
    </tbody>
</table>

                </div>
            </section>

            <!-- Section 2: Flight Scheduled Form -->
            <section id="formSection" class="section hidden">
                <div class="container">
                    <div class="card-header">
                        <h5>FLIGHT SCHEDULED</h5>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Date</label>
                            <div class="date-wrapper">
                                <input type="date" id="date" class="form-control" required>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label fw-bold">Day of the Week</label>
                            <div class="select-wrapper">
                                <select class="form-control" name="dayoftheweek">
                                    <option selected disabled>Select </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Flight Number</label>
                            <div class="select-wrapper">
                                <select class="form-control" name="FlightNumber">
                                    <option selected disabled>Select </option>
                                    <option value="N2-381">N2-381</option>
                                    <option value="N2-391">N2-392</option>
                                    <option value="N2-121">N2-121</option>
                                    <option value="N2-145">N2-145</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Aircraft Registration</label>
                            <div class="select-wrapper">
                                <select class="form-control" name="AircraftRegistration">
                                    <option selected disabled>Select </option>
                                    <option value="BLG">BLG</option>
                                    <option value="BKR">BKR</option>
                                    <option value="BYQ">BKQ</option>
                                    <option value="BRJ">BRJ</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Scheduled Time of Departure</label>
                            <div class="time-wrapper">
                            <input type="time" id="std" class="form-control" required>
                        </div>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Scheduled Time of Arrival</label>
                            <div class="time-wrapper">
                            <input type="time" id="sta" class="form-control">
                        </div>
                    </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Block Time</label>
                            <div class="time-wrapper">
                            <input type="time" id="blockTime" class="form-control" required>
                        </div>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Turn Around Time</label>
                            <div class="time-wrapper">
                            <input type="time" id="turnAroundTime" class="form-control" required>
                        </div>
                    </div>
                    </div>

                    <div class="text-center">
                        <button id="doneBtn" class="btn-warning">Done</button>
                    </div>
                </div>
            </section>


        </div>
    </div>
</main>

<?php include("footer.html"); ?>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="style.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="Flight.js"></script>