<?php
include 'dbConnection.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Load jQuery -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Load Bootstrap -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/customIndex.css">
    <title>Data Member</title>
  </head>
  
  <body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
          <img src="img/jazz.PNG" alt="logoBrand" id="logoBrand">
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item"><a href="#" class="nav-link active">Data Member</a></li>>
              </ul>
          </div>
        </nav>
    </header>
    <main class="container" role="main">
        <div class="starter-template">
            <button class="btn btn-success" data-toggle="modal" data-target="#tambahMhsForm">Tambah</button>
            <div id="dataMhs"></div>
        </div>
    </main>

    <!-- Add Form MHS Modal -->
    <div class="modal fade" id="tambahMhsForm" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Member</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nrp">NIM :</label>
              <input type="text" class="form-control" name="nim" id="nim" />
            </div>
            <div class="form-group">
              <label for="nama_mhs">Nama :</label>
              <input type="text" class="form-control" name="nama_mhs" id="nama_mhs"/>
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan :</label>
              <input type="text" class="form-control" name="jurusan" id="jurusan"/>
            </div>
            <div class="form-group">
              <label for="angkatan">Angkatan :</label>
              <input type="text" class="form-control" name="angkatan" id="angkatan"/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" onclick="tambahMhs()">Tambah</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Form Mhs Modal -->
    <div class="modal fade" id="updateMhsForm" tabindex="-1" role="doialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Data</h4>
          </div>
          <div class="modal-body">
          <!--
            data id_mhs akan kita simpan dalam hidden input 
            karena kita tetap membuhkan data id_mhs untuk query UPDATE
            namun user tidak perlu mengetahui informasi tentang id_mhs
          -->
          <input type="hidden" name="id_mhs" id="edit_id_mhs">
            <div class="form-group">
              <label for="nrp">NIM :</label>
              <input type="text" class="form-control" name="nim" id="edit_nim" />
            </div>
            <div class="form-group">
              <label for="nama_mhs">Nama :</label>
              <input type="text" class="form-control" name="nama_mhs" id="edit_nama_mhs" />
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan :</label>
              <input type="text" class="form-control" name="jurusan" id="edit_jurusan" />
            </div>
            <div class="form-group">
              <label for="angkatan">Angkatan :</label>
              <input type="text" class="form-control" name="angkatan" id="edit_angkatan" />
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success" onclick="updateMhs()">Update</button>
            <input type="hidden" id="user_id" />
          </div>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
