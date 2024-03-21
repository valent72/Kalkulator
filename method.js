function hitungLuas() {
    var panjang = document.getElementById("panjang").value;
    var lebar = document.getElementById("lebar").value;
    var luas = panjang * lebar;
    document.getElementById("hasil").innerHTML = "Luas Persegi Panjang: " + luas;
}