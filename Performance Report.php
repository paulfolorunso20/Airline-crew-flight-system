<?php
include("header.html");
include("sidebar.html");
?>

<style>
    body {
        background: rgba(43, 38, 38, 0.25);
        font-family: 'Segoe UI', sans-serif;
    }

    h5.form-title {
        font-size: 17px;
        font-weight: 700;
        text-align: left;
        margin-bottom: 20px;
    }

    .section {
        background-color: white;
        padding: 30px;
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    
select.form-control {
    padding: 8px 40px 8px 12px; /* Top, Right (space for arrow), Bottom, Left */
    appearance: none; 
    /* background-image: url('data:image/svg+xml;utf8,<svg fill="%23212121" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>'); */
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px;
}

select.form-control {
    color: #999; /* Light grey text */
    font-weight: 400;
    background-color: white;
}


.form-label {
    font-weight: 500;
    color: #444; /* Neutral dark color */
    font-size: 14px;
}


    .btn-warning {
        background-color: #f97316;
        border: none;
        color: white;
        border-radius: 8px;
        padding: 10px 30px;
        font-weight: bold;
        box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
        transition: none;
    }

    .btn-warning:hover,
    .btn-warning:focus,
    .btn-warning:active {
        background-color: #f97316 !important;
        color: white;
        outline: none;
        box-shadow: 0 2px 10px rgb(238, 236, 234);
    }
</style>

<main id="main" class="main">
    <div class="row">
        <section class="section mx-auto" style="max-width:900px;">
            <div class="container">
                <h5 class="form-title">STANDARD ON-TIME PERFORMANCE REPORT</h5>
                <form id="performanceform">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label">Flight Number</label>
                            <select class="form-control" name="Number">
                                <option selected disabled>Select </option>
                                <option value="N2-381">N2-381</option>
                                <option value="N2-232">N2-232</option>
                                <option value="N2-121">N2-121</option>
                                <option value="N2-145">N2-145</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Aircraft Type</label>
                            <select class="form-control" name="AircraftType">
                                <option selected disabled>Select </option>
                                <option value="Boeing 737">Boeing 737</option>
                                <option value="Airbus A320">Airbus A320</option>
                                <option value="Dash 8">Dash 8</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Flight Type</label>
                            <select class="form-control" name="FlightType">
                                <option selected disabled>Select</option>
                                <option value="Domestic">Domestic</option>
                                <option value="International">International</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Scheduled Pilot</label>
                            <select class="form-control" name="Pilot">
                                <option selected disabled>Select</option>
                                <option value="CAPT SAR">CAPT SAR</option>
                                <option value="CAPT DEM">CAPT DEM</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Scheduled Co-Pilot</label>
                            <select class="form-control" name="CoPilot">
                                <option selected disabled>Select</option>
                                <option value="AUM">AUM</option>
                                <option value="SAR">SAR</option>
                                <option value="BKR">BKR</option>
                                <option value="DEM">DEM</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Scheduled Co-Pilot 2</label>
                            <select class="form-control" name="CoPilot2">
                                <option selected disabled>Select</option>
                                <option value="AUM">AUM</option>
                                <option value="SAR">SAR</option>
                                <option value="BKR">BKR</option>
                                <option value="DEM">DEM</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-warning px-5" id="addLicenseBtn">Add</button>
                    </div>
                </form>
                
            </div>
        </section>
    </div>
</main>

<?php include("footer.html"); ?>

<link rel="stylesheet" href="style.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="Report.js"></script>
