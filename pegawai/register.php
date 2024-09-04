<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Register</h3>
    <form action="proses_register.php" method="post">
        Nama :
        <input type="text" name="nama_pegawai" value="" class="form-control">
        NIK : 
        <input type="text" name="NIK" value="" class="form-control">
        No telepon : 
        <input type="text" name="no_tlp" value="" class="form-control">
        Jenis kelamin : 
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="Alamat" class="form-control" rows="4"></textarea>
        Jabatan :
        <select name="id" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_jabatan=mysqli_query($conn,"select * from jabatan");
            while($data_jabatan=mysqli_fetch_array($qry_jabatan)){
                echo '<option value="'.$data_jabatan['id'].'">'.$data_jabatan['Nama_jabatan'].'</option>';    
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Register" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>