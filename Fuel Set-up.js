let serialNumber = 1;

document.addEventListener("DOMContentLoaded", function () {
    const addPriceBtn = document.getElementById("addPriceBtn");
    const priceOverlay = document.getElementById("priceOverlay");
    const closeOverlay = document.getElementById("closeOverlay");
    const fuelForm = document.getElementById("fuelForm");
    const fuelTableBody = document.getElementById("fuelTableBody");

    //Ensure popup is hidden on page load
    priceOverlay.style.display = "none";

    addPriceBtn.addEventListener("click", () => {
        priceOverlay.style.display = "flex";
    });

    closeOverlay.addEventListener("click", () => {
        priceOverlay.style.display = "none";
    });

    fuelForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(fuelForm);
        const vendor = formData.get("vendor");
        const location = formData.get("location");
        const route = formData.get("route");
        const startDate = formData.get("start_date");
        const endDate = formData.get("end_date");
        const price = formData.get("price");

        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${serialNumber++}</td>
            <td>${vendor}</td>
            <td>${location}</td>
            <td>${price}</td>
            <td>${route}</td>
            <td>${startDate}</td>
            <td>${endDate}</td>
            <td>Active</td>
            <td><i class="bi bi-pencil-square" style="cursor:pointer;"></i></td>
        `;

        fuelTableBody.appendChild(newRow);

        fuelForm.reset();
        priceOverlay.style.display = "none";
    });
});
