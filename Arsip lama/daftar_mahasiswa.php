<?php  
    include 'class_mahasiswa.php';

    $daftar_mahasiswa = [
        new mahasiswa("012345", "Dian", 2014, $prodi, 2.22),
        new mahasiswa("012345", "Rio", 2014, $prodi, 3.65),
        new mahasiswa("012345", "Lena", 2014, $prodi, 2.55),
        new mahasiswa("012345", "Bimo", 2014, $prodi, 3.45),
    ];

    if (isset($_POST['nim'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $prodi = $_POST['prodi'];
        $thn_angkatan = $_POST['thn_angkatan'];
        $ipk = $_POST['ipk'];   
        
        array_push($daftar_mahasiswa, new mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk));

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<table>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tahun Angkatan</th>
                    <th>Program Studi</th>
                    <th>IPK</th>
                    <th>Predikat IPK</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($daftar_mahasiswa as $mhs) {
                
                ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs->nim; ?></td>
                    <td><?= $mhs->nama; ?></td>
                    <td><?= $mhs->thn_angkatan; ?></td>
                    <td><?= $mhs->prodi; ?></td>
                    <td><?= $mhs->ipk; ?></td>
                    <td><?= $mhs->predikat_ipk(); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</table>
</body>

</html>