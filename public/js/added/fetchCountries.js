const countryEl = document.getElementById("country");
const stateEl = document.getElementById("state");

fetch("https://countriesnow.space/api/v0.1/countries/positions")
  .then((res) => res.json())
  .then((data) => {
    for (let i = 0; i <= data.data.length; i++) {
      let opt = document.createElement("option");
      opt.value = data.data[i]?.name;
      opt.innerHTML = data.data[i]?.name;
      countryEl.appendChild(opt);
    }
  })
  .catch((e) => {
    console.log(e);
  });

countryEl.addEventListener("change", () => {
  while (stateEl.hasChildNodes()) {
    stateEl.removeChild(stateEl.firstChild);
  }
  fetch("https://countriesnow.space/api/v0.1/countries/states", {
    method: "POST",
    body: JSON.stringify({
      country: countryEl.value,
    }),
    headers: {
      "Content-type": "application/json",
    },
  })
    .then((res) => res.json())
    .then((data) => {
      if (data?.data?.states?.length) {
        // if (stateEl.hasChildNodes()) {

        // } else {
        for (let i = 0; i <= data.data.states.length; i++) {
          let opt = document.createElement("option");
          opt.value = data.data.states[i]?.name;
          opt.innerHTML = data.data.states[i]?.name;
          stateEl.appendChild(opt);
        }
        // }
      }
    })
    .catch((e) => {
      console.log(e);
    });
});
