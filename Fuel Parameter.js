let serialNumber = 1;

document.addEventListener("DOMContentLoaded", function () {
    const addPriceBtn = document.getElementById("addPriceBtn");
    const priceOverlay = document.getElementById("priceOverlay");
    const closeOverlay = document.getElementById("closeOverlay");
    const fuelForm = document.getElementById("fuelForm");
    const fuelTableBody = document.getElementById("fuelTableBody");

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
        const price = formData.get("price");

        const newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td>${serialNumber++}</td>
            <td>${vendor}</td>
            <td>${location}</td>
            <td>${price}</td>
            <td>Active</td>
            <td><i class="bi bi-pencil-square" style="cursor:pointer;"></i></td>
        `;

        fuelTableBody.appendChild(newRow);

        fuelForm.reset();
        priceOverlay.style.display = "none";
    });
});
