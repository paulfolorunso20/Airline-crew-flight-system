<?php
include("header.html");
include("sidebar.html");
?>

<style>
    body {
        background: gray;
        font-family: 'Segoe UI', sans-serif;
    }

    .section {
        background-color: white;
        padding: 30px;
        min-height: 100vh;
        width: 100%;
    }

    .container {
        padding: 30px 20px;
    }

    .header-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
    }

    h5.form-title {
        font-size: 18px;
        font-weight: 700;
        color: #333;
        margin: 0;
    }

    .btn-warning {
        background-color: #f97316;
        border: none;
        color: white;
        border-radius: 8px;
        padding: 8px 20px;
        font-weight: bold;
        box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
        transition: none;
    }

    .btn-warning:hover,
    .btn-warning:focus,
    .btn-warning:active {
        background-color: rgb(255, 138, 37) !important;
        color: white;
        outline: none;
        opacity: 1;
    }

    .table thead th {
        background-color: rgb(255, 128, 37);
        color: white;
        text-align: center;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
        font-size: 14px;
        border: none;
    }

    .table tbody tr:hover {
        background-color: #f9f9f9;
    }

    .overlay {
        display: flex;
        position: fixed;
        top: 0;
        left: 240px;
        /* Adjust this based on your sidebar width */
        width: calc(100% - 240px);
        /* Match the content area */
        height: 100vh;
        background: rgba(43, 38, 38, 0.3);
        backdrop-filter: blur(2px);
        z-index: 999;
        align-items: center;
        justify-content: center;
    }


    .popup-form {
        background: #fff;
        width: 700px;
        /* wider card */
        padding: 30px 50px 30px 25px;
        /* tighter left, more on right */
        border-radius: 10px;
        box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.2);
    }


    

    .popup-form select.form-control option:first-child {
        color: #bbb;
    }

    .popup-form select.form-control:hover,
    .popup-form input.form-control:hover {
        background-color: rgb(244, 205, 169);
    }

.popup-form .form-control:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(249, 115, 22, 0.25);
    border-color: #f97316;
}



    .popup-form .mb-3 {
        display: flex;
        align-items: center;
        margin-bottom: 14px;
    }

    .popup-form .form-label {
        width: 70px;
        /* tight but aligned left */
        margin-right: 8px;
        /* bring input closer */
        font-weight: normal;
        /* not bold */
        font-size: 14px;
        color: #333;
        white-space: nowrap;
        text-align: left;
    }

    .popup-form .mb-3 .form-control {
        width: 100%;
        /* input stays normal */
        max-width: 350px;
        /* don't stretch too far */
        height: 38px;
        border-radius: 6px;
        font-size: 14px;
        padding: 6px 10px;
        margin-bottom: 0;
    }



    .popup-form .form-control {
        flex: 1;
        /* Take up remaining space */
        height: 40px;
        border-radius: 6px;
        font-size: 14px;
        padding: 8px 10px;
    }

    .popup-form button.btn {
        background-color: #f97316;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        padding: 10px 0;
        width: 25%;
        max-width: 300px;
        box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
    }

    .popup-form button.btn:hover {
        background-color: rgb(232, 101, 7);
        opacity: 0.95;
    }

    .popup-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px solid #eee;
    }

    .popup-header .form-title {
        color: #333;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
    }


    .close-icon {
        font-size: 24px;
        cursor: pointer;
        color: #333;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 22px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 3px;
        bottom: 3px;
        background-color: white;
        transition: .4s;
        border-radius: 50%;
    }

    .switch input:checked+.slider {
        background-color: #f97316;
    }

    .switch input:checked+.slider:before {
        transform: translateX(18px);
    }


    .popup-form input[type=number]::-webkit-inner-spin-button,
    .popup-form input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .popup-form input[type=number] {
        -moz-appearance: textfield;
    }


    .form-row {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .form-row label {
        flex: 1;
        font-weight: normal;
        font-size: 14px;
        margin-right: 10px;
        white-space: nowrap;
    }

    .form-row .form-control {
        flex: 3;
        height: 40px;
        border-radius: 6px;
        font-size: 14px;
        padding: 8px;
    }
</style>

<main id="main" class="main">
    <div class="row justify-content-center">
        <section class="section">
            <div class="container">

                <div class="header-bar">
                    <h5 class="form-title">FUEL SET-UP</h5>
                    <button class="btn btn-warning" id="addPriceBtn">Add New Price</button>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Vendor</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody id="fuelTableBody">
                            <!-- Rows added dynamically -->
                        </tbody>
                    </table>
                </div>

            </div>
        </section>
    </div>
</main>

<div id="priceOverlay" class="overlay">
    <div class="popup-form">
        <div class="popup-header">
            <h5 class="form-title">FUEL SETUP</h5>
            <span id="closeOverlay" class="close-icon">&times;</span>
        </div>

        <form id="fuelForm">
            <div class="mb-3">
                <label class="form-label">Vendor</label>
                <select name="vendor" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <option value="NDANO">NDANO</option>
                    <option value="CITA">CITA</option>
                    <option value="KEROJET">KEROJET</option>
                    <option value="TotalEnergies">TotalEnergies</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Location</label>
                <select name="location" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <option value="ABV">ABV</option>
                    <option value="LOS">LOS</option>
                    <option value="PHC">PHC</option>
                    <option value="YOL">YOL</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" name="price" class="form-control" placeholder="Enter here" required>
            </div>

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-warning">Add</button>
            </div>

        </form>
    </div>
</div>

<?php include("footer.html"); ?>

<link rel="stylesheet" href="style.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="Fuel.js"></script>