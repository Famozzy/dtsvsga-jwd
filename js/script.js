function cekIPK() {
  const IPK = Math.random() * (4.0 - 2.0) + 2.0
  document.getElementById("ipk").value = IPK.toFixed(2)

  const pilihanBeasiswa = document.getElementById("pilihanBeasiswa")
  const formFile = document.getElementById("formFile")
  const submitButton = document.getElementById("submitButton")

  if (IPK >= 3) {
    pilihanBeasiswa.disabled = false
    pilihanBeasiswa.focus()
    formFile.disabled = false
    submitButton.disabled = false
  } else {
    pilihanBeasiswa.disabled = true
    formFile.disabled = true
    submitButton.disabled = true
  }
}

document.getElementById("ipkButton")?.addEventListener("click", cekIPK)
