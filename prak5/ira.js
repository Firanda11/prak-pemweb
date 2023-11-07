
//Fungsi ini menambahkan nilai yang diklik oleh pengguna ke layar kalkulator
function appendToDisplay(value) {
    document.getElementById("display").value += value;
}
//Fungsi ini menghapus isi layar kalkulator
function clearDisplay() {
    document.getElementById("display").value = "";
}
//Fungsi ini menghitung hasil matematika yang ada di layar kalkulator. Hasilnya akan ditampilkan di layar
function calculateResult() {
    try {
        document.getElementById("display").value = eval(document.getElementById("display").value);
    } catch (error) {
        document.getElementById("display").value = "Error";
    }
}
function bintik() {
    var x = Math.floor(Math.random() * canvas.width);
    var y = Math.floor(Math.random() * canvas.height);
    ctx.fillStyle = "black";
    ctx.fillRect(x, y, 1, 1);
}