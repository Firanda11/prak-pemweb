function HitungHasil() {
    let InputNumber = parseInt(
      document.getElementById("InputNumber").value
    );
    let ganjil = 0;
    let genap = 0;

    if (InputNumber > 0) {
      for (let i = 1; i <= InputNumber; i++) {
        if (i % 2 == 0) {
          genap++;
        } else {
          ganjil++;
        }
      }
      document.getElementById("jumlahgenap").textContent = genap;
      document.getElementById("jumlahganjil").textContent = ganjil;
    }
  }