// Flight.js
document.addEventListener("DOMContentLoaded", () => {
  // element references
  const addScheduleBtn = document.getElementById("addScheduleBtn");
  const doneBtn = document.getElementById("doneBtn");
  const scheduleSection = document.getElementById("scheduleSection");
  const formSection = document.getElementById("formSection");
  const scheduleTableBody = document.querySelector("#scheduleTable tbody");

  // helper formatters
  function formatDateToDDMMYYYY(value) {
    if (!value) return "";
    const d = new Date(value);
    if (isNaN(d)) return value; // fallback
    const dd = String(d.getDate()).padStart(2, "0");
    const mm = String(d.getMonth() + 1).padStart(2, "0");
    const yyyy = d.getFullYear();
    return `${dd}-${mm}-${yyyy}`;
  }

  function formatTimeTo12hNoAmPm(value) {
    if (!value) return "";
    const [hhStr, mm] = value.split(":");
    let hh = parseInt(hhStr, 10);
    if (isNaN(hh)) return value;
    hh = hh % 12 || 12;
    return `${String(hh).padStart(2, "0")}:${mm}`;
  }

  // show empty form for creating schedule
  if (addScheduleBtn) {
    addScheduleBtn.addEventListener("click", () => {
      console.log("Create Schedule clicked");
      scheduleSection.classList.add("hidden");
      formSection.classList.remove("hidden");
      addScheduleBtn.textContent = "Create Schedule"; // reset text
    });
  }

  // main save button
  if (doneBtn) {
    doneBtn.addEventListener("click", (e) => {
      e.preventDefault();

      // collect values
      const dateVal = document.getElementById("date").value;
      const dayVal = document.querySelector("[name='dayoftheweek']").value;
      const flightVal = document.querySelector("[name='FlightNumber']").value;
      const aircraftVal = document.querySelector("[name='AircraftRegistration']").value;
      const stdVal = document.getElementById("std").value;
      const staVal = document.getElementById("sta").value;
      const blockVal = document.getElementById("blockTime").value;
      const turnaroundVal = document.getElementById("turnAroundTime").value;

      if (!dateVal || !flightVal || !aircraftVal || !stdVal || !staVal) {
        alert("Please fill Date, Flight Number, Aircraft Registration, STD and STA before clicking Done.");
        return; 
      }

      // format display values
      const datePretty = formatDateToDDMMYYYY(dateVal);
      const stdPretty = formatTimeTo12hNoAmPm(stdVal);
      const staPretty = formatTimeTo12hNoAmPm(staVal);

      const rowCount = scheduleTableBody.rows.length + 1;
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${rowCount}</td>
        <td>${datePretty}</td>
        <td>${aircraftVal}</td>
        <td>${flightVal}</td>
        <td>${stdPretty}</td>
        <td>${staPretty}</td>
        <td>${dayVal}</td>
      <td><i class="fa-solid fa-eye view-btn" style="cursor:pointer; color:#f97316;"></i></td>
      `;

      scheduleTableBody.appendChild(tr);

      // attach click handler to the new eye icon
      const eyeIcon = tr.querySelector(".view-btn");
      if (eyeIcon) {
        eyeIcon.addEventListener("click", () => {
          console.log("Viewing schedule:", flightVal);

          // fill form with this row’s data 
          document.getElementById("date").value = dateVal;
          document.querySelector("[name='dayoftheweek']").value = dayVal;
          document.querySelector("[name='FlightNumber']").value = flightVal;
          document.querySelector("[name='AircraftRegistration']").value = aircraftVal;
          document.getElementById("std").value = stdVal; 
          document.getElementById("sta").value = staVal;
          document.getElementById("blockTime").value = blockVal;
          document.getElementById("turnAroundTime").value = turnaroundVal;

          // switch UI
          scheduleSection.classList.add("hidden");
          formSection.classList.remove("hidden");

          // change button text to Edit
          addScheduleBtn.textContent = "Edit Schedule";
        });
      }\

      // show tabs once at least one schedule is added
      const tabsEl = document.querySelector(".tabs");
      if (tabsEl) tabsEl.style.display = "block";

      // clear form
      document.querySelectorAll("#formSection input, #formSection select").forEach(el => {
        if (el.tagName.toLowerCase() === "select") {
          el.selectedIndex = 0;
          el.style.color = "#999";
        } else {
          el.value = "";
        }
      });

      formSection.classList.add("hidden"); 
      scheduleSection.classList.remove("hidden");
    });
  }
});
