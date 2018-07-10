<?php
include '../dbConnection.php';

// Kerangka awal table yang akan ditampilkan. Kita buat header terlabih dahulu
$data = '
<table class="table mt-2" id="records">
  <thead>
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jurusan</th>
      <th>Angkatan</th>
      <th></th>
    </tr>
  </thead>
';

$query = "SELECT * FROM " .DB_TABLE_DATA;
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        // Isian table berisi data dari database. Kita masukkan langsung kedalam baris <tr> dan kolom <td>
        $data .= '<tbody><tr>
        <td>'. $row["nim_mhs"] . '</td>
        <td>' . $row["nama_mhs"] . '</td>
        <td>' . $row["jurusan_mhs"] . '</td>
        <td>' . $row["angkatan_mhs"] . '</td>
        <td>
            <button class="btn btn-warning mr-2" onclick=updateMhsForm('.$row["id_mhs"].')>Update</button>
            <button class="btn btn-danger" onclick=deleteMhs('.$row["id_mhs"].')>Hapus</button>
        </td>
        </tr></tbody>';
    }
} else {
    $data .= '<tbody><tr><td colspan="9">Tidak Ada Data Mahasiswa</td></tr></tbody>';
}
  
$data .= '</table>';
echo $data;
mysqli_close($con);
?>