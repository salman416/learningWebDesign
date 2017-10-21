var nama = prompt("Masukan Nama Anda ?");
var sekolah = prompt("Masukan Sekolah Anda ?");
var alamat = prompt("Masukan Alamat Anda ?");
var umur = prompt("Masukan Umur Anda ?");

var panjang = 15;
var lebar = 5;
var luas = panjang*lebar;

if (umur > 17 || (alamat == "bandung" && nama == "budi")) {
    alert("Selamat Datang");
    alert("Nama Anda Adalah "+nama+ "\n Sekolah Anda Di "+sekolah + " \n Alamat Anda Di "+alamat);
    alert (+luas);
} else {
    alert("Maaf Umur Anda Masih Kurang");
}



