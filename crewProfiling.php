<?php
include("header.html");
include("sidebar.html");
?>

<style>
    body {
        background: #f9f9f9;
        font-family: 'Segoe UI', sans-serif;
    }

    .section {
        background-color: #2827274f;
        padding: 30px 0;
        width: 100%;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .form-wrapper {
        background-color: white;
        border: 1px solid #ddd;
        padding: 40px;
        border-radius: 10px;
        max-width: 900px;
        margin: 0 auto;
    }

    .form-wrapper h5,
    .form-wrapper h6 {
        padding-top: 8px;
        margin-top: 30px;
        margin-bottom: 20px;
        font-weight: bold;
        text-transform: uppercase;
        color: #333;
        font-size: 15px;
        border-top: none;
        /* ✅ Prevent bold orange line */
    }


    .form-check-label {
        font-weight: 400;
        color: #555;
    }

    .text-muted {
        font-size: 13px;
    }


    .form-control {
        background-color: #f1f1f1 !important;
        color: #333 !important;
        border: 1px solid #ccc;
    }

    .form-control:hover {
        border-color: orange;
        box-shadow: 0 0 5px rgb(255, 145, 0, 0.4);
        transition: all 0.3s ease-in-out;
    }

    select.form-control {
        appearance: none;
        background-color: #f1f1f1;
        color: black;
        padding: 0.5rem;
        border: 1px solid #ffffffff;
        border-radius: 4px;
        background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23444' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M1.5 5.5l6 6 6-6H1.5z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 0.75rem center;
        background-size: 12px 12px;
        padding-right: 2rem;
    }

    select.form-control:hover,
    select.form-control:focus {
        border-color: orange !important;
        box-shadow: 0 0 5px #f97316 !important;
        outline: none;
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
        box-shadow: 0 2px 10px rgba(249, 115, 22, 0.2);
    }

    .topbar {
        background: #fff;
        height: 60px;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 0 20px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
    }

    .profile-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .profile-info img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
    }


    /* .d-none {
        display: none !important;
    } */

    .custom-file-upload label {
        display: inline-block;
        background-color: #f1f1f1;
        color: #333;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 8px 15px;
        cursor: pointer;
        font-weight: 500;
        font-size: 14px;
    }

    .custom-file-upload label:hover {
        border-color: orange;
        box-shadow: 0 0 5px rgba(255, 145, 0, 0.4);
    }

    .custom-file-upload label:active {
        background-color: #eee;
    }

    .no-border-top {
        border-top: none !important;
        padding-top: 0 !important;
        margin-top: 30px !important;
        /* Adjust this for more/less space */
    }

    .faint-orange-line {
        border: none;
        border-top: 2px solid #ffd3a3;
        /* Light/faint orange */
        margin-top: 10px;
        margin-bottom: 30px;
    }

    /* Lighten all helper/instructional text */
    .text-muted,
    .form-check-label,
    .form-check-label.text-muted,
    label.text-muted,
    select.form-control option[disabled],
    option[disabled],
    input::placeholder,
    textarea::placeholder {
        color: #999 !important;
        font-size: 13px !important;
        font-weight: 400 !important;
    }

    /* Specifically target select placeholders */
    select.form-control option[disabled] {
        color: #999 !important;
    }

    /* Placeholder text in inputs */
    ::placeholder {
        color: #999 !important;
        opacity: 1 !
    }

    .tab-btn {
        border: none;
        background-color: #f5f5f5;
        border-radius: 5px 5px 0 0;
        color: #555;
        padding: 10px 25px;
        font-weight: 600;
        margin-right: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tabs {
        margin-bottom: 20px;
        display: flex;
        gap: 5px;
    }

    .active-tab {
        background-color: #ffD580 !important;
        color: white !important;
        cursor: pointer;
    }

    .inactive-tab {
        background-color: gray !important;
        cursor: pointer;
        border-radius: 5px 5px 0 0;
        padding: 10px 15px;
    }

    
    .form-control, .form-select {
    background-color: #f1f1f1 !important;
    border: 1px solid #ccc !important;
    border-radius: 5px;
    padding: 8px;
    color: #333;
}

.form-control:focus, .form-select:focus {
    border-color: #f97316 !important;
    box-shadow: 0 0 5px rgba(249, 115, 22, 0.4) !important;
}

.date-row {
    display: flex;
    gap: 10px;
}

.date-row .form-control {
    flex: 1;
}

</style>

<div class="topbar">
    <div class="profile-info">
        <img src="https://via.placeholder.com/36" alt="Profile" />
        <span>Femi Jacobs</span>
        <span style="font-size:12px;">&#9662;</span>
    </div>
</div>

<main id="main" class="main">
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="form-wrapper">
                        <h6 class="text-uppercase fw-bold">CREW PROFILING SET-UP</h6>
                        <hr class="faint-orange-line">
                        <form id="crewProfilingForm">
                            <!-- Occupation Dropdown -->
                            <!-- Occupation -->
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Occupation</label>
                                <div class="col-sm-9">
                                    <select name="occupation" id="occupationSelect" class="form-control">
                                        <option selected disabled value="">Select</option>
                                        <option value="Pilot">Pilot</option>
                                        <option value="Cabin Crew">Cabin Crew</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Position -->
                            <div class="row mb-3 d-none" id="positionGroup">
                                <label class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <select name="position" id="positionSelect" class="form-control">
                                        <option selected disabled value="">Select Position</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">

                                <label class="col-sm-3 col-form-label">Surname</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Input here" name="crewName">
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Input here" name="crewName">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Middle Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Input here" name="crewName">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Call Sign</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Input here" name="callSign">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <select name="gender" class="form-control">
                                        <option selected disabled>Select</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="dob">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Nationality</label>
                                <div class="col-sm-9">
                                    <select name="nationality" id="nationalitySelect" class="form-control">
                                        <option selected disabled value="">Select</option>
                                        <option value="Nigeria">South Africa</option>
                                        <option value="Ghana">Kenya</option>
                                        <option value="Kenya">Nigeria</option>
                                        </option>
                                        <!-- Add more nationalities as needed -->
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Input here" name="email">
                                </div>
                            </div>

                            <hr class="faint-orange-line">
                            <h6 class="text-uppercase fw-bold">DOCUMENT UPLOAD</h6>

                            <!-- License Upload -->
                            <div class="mb-3">
                                <h6 class="text-uppercase fw-bold mt-4">LICENSE UPLOAD</h6>
                                <p class="text-muted">Kindly upload license softcopy in any of the following
                                    format.jpeg, png, pdf.</p>
                                <div class="custom-file-upload">
                                    <input type="file" id="licenseUpload" name="licenseUpload" hidden>
                                    <label for="licenseUpload" class="btn btn-outline-secondary">
                                        <i class="fa fa-download me-2"></i> Upload license doc.
                                    </label>
                                </div>
                            </div>


                            <!-- Tab buttons -->
                            <div class="tabs">
                                <button id="medicalTab" type="button" class="tab-btn">MEDICAL CERTIFICATIONS</button>
                                <button id="drillTab" type="button" class="tab-btn">EMERGENCY DRILLS</button>

                            </div>


                            <!-- MEDICAL CERTIFICATION SECTION -->
                            <div id="medicalSection" class="tab-content">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="Yes"
                                        id="medicalConditionCheck" name="medicalCondition" />
                                    <label class="form-check-label" for="medicalConditionCheck">
                                        Are there any medical conditions? (Kindly ignore if none)
                                    </label>
                                </div>

                                <div class="mb-3 d-none" id="medicalConditionField">
                                    <input type="text" name="fieldname" class="form-control"
                                        placeholder="Kindly state medical condition">
                                </div>

                                <div class="row g-3 mt-2">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Date Of Issue</label>
                                        <input type="date" class="form-control" name="dateOfIssue">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold">Expiry Date</label>
                                        <input type="date" class="form-control" name="expiryDate">
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-uppercase fw-bold no-border-top">RATINGS</h6>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label  fw-bold">Category Rating</label>
                                    <select class="form-control" name="categoryRating">
                                        <option selected disabled>Select </option>
                                        <option value="Category A">Aeroplane</option>
                                        <option value="Category B">Helicopter</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label  fw-bold">Aircraft Type</label>
                                    <select class="form-control" name="aircraftType">
                                        <option selected disabled>Select </option>
                                        <option value="Boeing 737">B737-300/500</option>
                                        <option value="MD 80">MD-80/83</option>
                                        <option value="DO 328">D0-328-100</option>
                                    </select>
                                </div>
                            </div>  

                            <div class="text-center">
                                <button type="button" class="btn btn-warning px-5">Next</button>
                            </div>

                            <!-- Emergency Drills Content -->
                            <div id="drillSection" class="tab-content" style="display:none;">
                                <h7 class="fw-bold">EMERGENCY DRILLS CERTIFICATION</h7>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Emergency Drills</label>
                                            <select class="form-control" aria-label="Emergency Drills select">
                                                <option selected>Select</option>
                                                <option value="fire_fighting">Fire Drill</option>
                                                <option value="water_survival">Evaluation</option>
                                                <option value="first_aid">Ditching</option>
                                                <option value="evacuation">First Aid</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Aircraft Type</label>
                                            <select class="form-select" aria-label="Aircraft Type select">
                                                <option selected>Select</option>
                                                <option value="b737">B737-300/500</option>
                                                <option value="md80">MD-80/83</option>
                                                <option value="do328">DO-328-100</option>
                                                <option value="a320">A320</option>
                                            </select>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <label class="form-label">Date of issue</label>
                                                <input type="date" class="form-control" name="emergencyDateOfIssue"
                                                    id="emergencyDateOfIssue" />
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-label">Expiry Date</label>
                                                <input type="date" class="form-control" name="emergencyExpiryDate"
                                                    id="emergencyExpiryDate" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="button" class="btn btn-warning px-5">Add<button>
                                    </div>


                                </form>
                            </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php include("footer.html"); ?>
<link rel="stylesheet" href="css/style.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="crew.js"></script>
</body>