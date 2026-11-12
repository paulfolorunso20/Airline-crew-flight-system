document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM loaded");

    /* ======== OCCUPATION -> POSITION DROPDOWN ======== */
    const occupationSelect = document.getElementById("occupationSelect");
    const positionGroup = document.getElementById("positionGroup");
    const positionSelect = document.getElementById("positionSelect");

    if (occupationSelect && positionGroup && positionSelect) {
        occupationSelect.addEventListener("change", function () {
            const selected = occupationSelect.value;

            if (selected === "Pilot") {
                positionGroup.classList.remove("d-none");
                positionSelect.innerHTML = `
                    <option selected disabled value="">Select Position</option>
                    <option value="Captain (CP)">Captain (CP)</option>
                    <option value="First Officer (FO)">First Officer (FO)</option>
                `;
            } else if (selected === "Cabin Crew") {
                positionGroup.classList.remove("d-none");
                positionSelect.innerHTML = `
                    <option selected disabled value="">Select Position</option>
                    <option value="Purser">Purser</option>
                    <option value="Flight Attendant">Flight Attendant</option>
                `;
            } else {
                positionGroup.classList.add("d-none");
                positionSelect.innerHTML = `<option selected disabled value="">Select Position</option>`;
            }
        });
    }

    /* ======== MEDICAL CONDITION CHECKBOX ======== */
    const medicalConditionCheckbox = document.getElementById("medicalConditionCheck");
    const medicalConditionField = document.getElementById("medicalConditionField");

    if (medicalConditionCheckbox && medicalConditionField) {
        medicalConditionCheckbox.addEventListener("change", function () {
            medicalConditionField.classList.toggle("d-none", !this.checked);
        });
    }

    const medicalTab = document.getElementById("medicalTab");
    const drillTab = document.getElementById("drillTab");
    const medicalSection = document.getElementById("medicalSection");
    const drillSection = document.getElementById("drillSection");

    function activateTab(tab) {
        if (tab === "medical") {
            medicalTab.classList.add("active-tab");
            drillTab.classList.remove("active-tab");
            medicalSection.style.display = "block";
            drillSection.style.display = "none";
        } else {
            drillTab.classList.add("active-tab");
            medicalTab.classList.remove("active-tab");
            drillSection.style.display = "block";
            medicalSection.style.display = "none";
        }
    }

    medicalTab.addEventListener("click", () => activateTab("medical"));
    drillTab.addEventListener("click", () => activateTab("drill"));

    // Default to medical tab active on page load
    activateTab("medical");
});