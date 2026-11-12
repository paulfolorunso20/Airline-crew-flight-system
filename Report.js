document.addEventListener("DOMContentLoaded", function () {
    let serialNumber = 1;

    document.getElementById("addLicenseBtn").addEventListener("click", function () {
        const form = document.getElementById("performanceform");
        const formData = new FormData(form);

        const flightNo = formData.get("Number");
        const aircraftType = formData.get("AircraftType");
        const flightType = formData.get("FlightType");
        const pilot = formData.get("Pilot");
        const coPilot = formData.get("CoPilot");
        const coPilot2 = formData.get("CoPilot2");

        // Basic Validation
        if (!flightNo || !aircraftType || !flightType || !pilot || !coPilot) {
            alert("Please complete all fields before adding.");
            return;
        }

        const crew = `${pilot} - ${coPilot}`;
        const route = "LOS - ABJ"; // Placeholder for now, adjust if needed
        const scheduledTime = "5:45 - 7:00"; // Placeholder for now

        const today = new Date();
        const formattedDate = today.toLocaleDateString('en-GB'); // dd/mm/yyyy

        // Ensure the table exists in your HTML
        const tableBody = document.getElementById("reportTableBody");

        if (!tableBody) {
            alert("Table structure missing. Please ensure your table has <tbody id='reportTableBody'>.");
            return;
        }

        // Create a new row
        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${serialNumber++}</td>
            <td>${formattedDate}</td>
            <td>${flightNo}</td>
            <td>${crew}</td>
            <td>${route}</td>
            <td>${scheduledTime}</td>
            <td><i class="bi bi-pencil-square" style="cursor:pointer;"></i></td>
        `;

        tableBody.appendChild(newRow);

        // Reset form after adding
        form.reset();
    });
});
