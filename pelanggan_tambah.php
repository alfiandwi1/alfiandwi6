<?php
    if(isset($_POST['nama_pelanggan'])) {
        $nama = $_POST['nama_pelanggan'];
        $alamat = $_POST['alamat'];
        $no_telp = $_POST['no_telp'];

            $query = mysqli_query($koneksi, "INSERT INTO pelanggan(nama_pelanggan,alamat,no_telp) values ('$nama', '$alamat', '$no_telp')");
            if($query){
                echo '<script>alert("tambah data berhasil") </script>';
            }else{
                echo '<script>alert("tambah data gagal")</script>';
            }
    }




?>








<div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
    <a href="?page=pelanggan" class="btn btn-danger">Kembali</a>
    <hr>
    
        <form method="post">
            <table>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" name="nama_pelanggan"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" rows="5" class="form-control"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>No.Telp</td>
                    <td>:</td>
                    <td><input class="form-control" type="number" step="0" name="no_telp"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary" >Simpan</button>
                        <button type="reset" class="btn btn-danger" >Reset</button>
                    </td>
                </tr>
            </table>
        </form>


</div>