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

    /* Embedded form styles */
   #priceOverlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
  z-index: 9999;
  justify-content: center;
  align-items: center;
}


  .popup-form {
  background: #fff;
  width: 100%;
  max-width: 700px;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
  animation: fadeIn 0.3s ease;
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

    .popup-form .mb-3 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 12px;
    }

    .popup-form .form-label {
        width: 120px;
        font-weight: 500;
        font-size: 13px;
        text-transform: uppercase;
        color: #333;
        margin: 0;
    }

    .popup-form .form-control {
        flex: 1;
        height: 38px;
        border-radius: 6px;
        font-size: 13px;
        padding: 6px 10px;
        margin-left: 10px;
    }

    .popup-form button.btn {
        background-color: #f97316;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        padding: 10px 0;
        width: 100%;
        max-width: 200px;
        box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
    }

    .popup-form button.btn:hover {
        background-color: rgb(232, 101, 7);
        opacity: 0.95;
    }

    .grid-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  column-gap: 20px;
  row-gap: 15px;
}

.grid-form .form-group {
  display: flex;
  flex-direction: column;
}

.grid-form .full-width {
  grid-column: span 2;
}

.form-submit {
  grid-column: span 2;
  display: flex;
  justify-content: center;
  margin-top: 15px;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: scale(0.96);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}


</style>

<main id="main" class="main">
    <div class="row justify-content-center">
        <section class="section">
            <div class="container">

                <div class="header-bar">
                    <h5 class="form-title">FUEL SET-UP</h5>
                    <button class="btn btn-warning" id="addPriceBtn">Create Vendor</button>
                </div>

                <!-- Embedded Popup Form -->
            <div id="priceOverlay">
  <div class="popup-form">
    <div class="popup-header">
      <h5 class="form-title">FUEL SET-UP</h5>
      <span id="closeOverlay" class="close-icon">&times;</span>
    </div>

    <form id="fuelForm" class="grid-form">
      <div class="form-group">
        <label class="form-label">Vendor</label>
        <select name="vendor" class="form-control" required>
          <option value="" selected disabled>Select</option>
          <option value="NDANO">NDANO</option>
          <option value="CITA">CITA</option>
          <option value="KEROJET">KEROJET</option>
          <option value="TotalEnergies">TotalEnergies</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Location</label>
        <select name="location" class="form-control" required>
          <option value="" selected disabled>Select</option>
          <option value="ABV">ABV</option>
          <option value="LOS">LOS</option>
          <option value="PHC">PHC</option>
          <option value="YOL">YOL</option>
        </select>
      </div>

      <div class="form-group">
        <label class="form-label">Route</label>
        <select name="route" class="form-control" required>
          <option value="" selected disabled>Select</option>
          <option value="ABV - PHC">ABV - PHC</option>
          <option value="PHC - ABV">PHC - ABV</option>
          <option value="LOS - ABV">LOS - ABV</option>
          <option value="YOL - ABV">YOL - ABV</option>
        </select> 
      </div>

      <div class="form-group">
        <label class="form-label">Start Date</label>
        <input type="date" name="start_date" class="form-control" required />
      </div>

      <div class="form-group full-width">
        <label class="form-label">End Date</label>
        <input type="date" name="end_date" class="form-control" required />
      </div>

      <div class="form-group full-width">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control" placeholder="Enter here" required />
      </div>

      <div class="form-submit">
        <button type="submit" class="btn btn-warning">Add</button>
      </div>
    </form>
  </div>
</div>

                <div class="table-responsive mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Vendor</th>
                                <th>Location</th>
                                <th>Price</th>
                                <th>Route</th>
                                <th>Start Date</th>
                                <th>End Date</th>
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

<?php include("footer.html"); ?>

<link rel="stylesheet" href="style.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="Fuel Set-up.js"></script>
