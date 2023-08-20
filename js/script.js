document.getElementById("ipkButton").addEventListener("click", cekIPK)

function cekIPK() {
  const IPK = Math.random() * (4.0 - 2.0) + 2.0
  document.getElementById("ipk").value = IPK.toFixed(2)

  if (IPK >= 3) {
    document.getElementById("formFile").disabled = false
    document.getElementById("pilihanBeasiswa").disabled = false
    document.getElementById("submitButton").disabled = false
  } else {
    document.getElementById("formFile").disabled = true
    document.getElementById("pilihanBeasiswa").disabled = true
    document.getElementById("submitButton").disabled = true
  }
}
