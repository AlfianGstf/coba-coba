// Fungsi untuk menampilkan data mahasiswa dari database
function readRecords(){
    $.get("controller/readMhs.php", {}, function (data, status) {
        $("#dataMhs").html(data);
    });
}

// Fungsi untuk menambahkan data mahasiswa ke database
function tambahMhs(){
    // Mendapatkan nilai dari form
    var nim = $("#nim").val();
    var nama_mhs = $("#nama_mhs").val();
    var jurusan = $("#jurusan").val();
    var angkatan = $("#angkatan").val();

    // Lakukan metode POST
    $.post("controller/tambahMhs.php", {
        nim_mhs: nim,
        nama_mhs: nama_mhs,
        jurusan_mhs: jurusan,
        angkatan_mhs: angkatan,
        
    }, function (data, status) {
        if (data == 0) {
            alert("Mahasiswa dengan NIM : "+nim+" sudah ada!");
            readRecords();
        } else {
            // Tutup popup modal
            $("#tambahMhsForm").modal("hide");
            // muat ulang table data mahasiswa
            readRecords();
            // Hapus semua input di dalam popup modal
            $("#nim").val("");
            $("#nama_mhs").val("");
            $("#jurusan").val("");
            $("#angkatan").val("");
        }
    });
}

// Fungsi untuk menghapus mahasiswa
// Parameter id digunakan untuk melakukan filter pada query Delete
function deleteMhs(id){
    // Membuat dialog konfirmasi
    var conf = confirm("Apakah Anda yakin ingin menghapus data mahasiswa ini ?");
    if (conf == true) {
        $.post("controller/deleteMhs.php", {
                id_mhs: id
            },
            function (data, status) {
                // muat ulang table data mahasiswa
                readRecords();
            }
        );
    }
}

// Function digunakan untuk mendapatkan data yang akan diisikan kedalam Form update
function updateMhsForm(id){
    // hidden input
    $("#edit_id_mhs").val(id);
    $.post("controller/updateMhsForm.php", {
            id_mhs: id
        },
        function (data, status) {
            if (data != 1) {
                // Dapatkan data JSON dari updateMhsForm.php
                var mhs = JSON.parse(data);
                // Datakan data sesuai dengan key pada JSON
                $("#edit_nim").val(mhs["nim_mhs"]);
                $("#edit_nama_mhs").val(mhs["nama_mhs"]);
                $("#edit_jurusan").val(mhs["jurusan_mhs"]);
                $("#edit_angkatan").val(mhs["angkatan_mhs"]);

                // tampilkan popup modal update form
                $("#updateMhsForm").modal("show");
            } else {
                // handling jika data tidak ditemukan
                alert("Mahasiswa tidak ditemukan!");
            }
        }
    );
}

// Fungsi untuk melakukan update data di database
function updateMhs(){
    // dapatkan nilai dari form
    var nim = $("#edit_nim").val();
    var nama_mhs = $("#edit_nama_mhs").val();
    var jurusan = $("#edit_jurusan").val();
    var angkatan = $("#edit_angkatan").val();


    // dapatkan nilai hidden value id_mhs
    var id_mhs = $("#edit_id_mhs").val();

    // Update dengan metode post yang akan ditangani oleh file updateMhs.php
    $.post("controller/updateMhs.php", {
            id_mhs: id_mhs,
            nim_mhs: nim,
            nama_mhs: nama_mhs,
            jurusan_mhs: jurusan,
            angkatan_mhs: angkatan
        },
        function (data, status) {
            // Kosongkan inputan pada modal
            $("#edit_nim").val("");
            $("#edit_nama_mhs").val("");
            $("#edit_jurusan").val("");
            $("#edit_angkatan").val("");
            
            // sembunyikan modal pop-up
            $("#updateMhsForm").modal("hide");
            
            // tampilkan ke table data mahasiswa
            readRecords();
        }
    );
}

// Fungsi yang akan dieksekusi otomatis jika halaman web sudah termuat seluruhnya
$(document).ready(function () {
    readRecords(); // calling function
});