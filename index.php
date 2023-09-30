<?php
require_once "database.php";
require_once "sql.php";

$obj = new crud;

if($_SERVER['REQUEST_METHOD']=='POST'){
    $pasien = $_POST['pasien'];
    $bpjs = $_POST['bpjs'];
    if($obj->insertData($pasien,$bpjs)){
        echo "
        <script>
            alert('Pasien Berhasil Di Tambahkan!');
            document.location.href='index.php';
        </script>";
    }else{
        echo "
        <script>
            alert('Pasien Gagal Di Tambahkan!');
            document.location.href='index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Klinik Berkah</title>
</head>
<body>
    <style>
        .hospital{
            display: flex;
            align-items: center;
            padding: 0 20px;
            font-size: 40px;
        }

        .hospital p{
            display: flex;
            align-items: center;
            padding: 10px 20px;
            padding-top: 25px;
            font-weight: bold;
            font-size: 15px;
            
        }

        .logo{
            border-bottom: 1px solid #ccc;
        }

        .sidebar{
            width: 260px;
            height: 100%;
            background-color: #f4f4f4;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 10px;
            margin: 0;
        }

        .dropdown i{
            font-size: 20px;
        }

        .sub-menu i{
            display: flex;
        }

        .content{
            margin-left: 250px;
            padding: 20px;
        }

        .left{
            padding: 10px 5px;
            border: none;
            float: right;
        }

        .font{
            font-size: 20px;
        }
        .paragraf{
            font-size: 20px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
        }
        
        .form {
            flex: 1;
            margin-right: 10px;
        }

        .ukuran {
            font-size: 15px;
            height: 30px;
            width: 150px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }
    </style>

    <div class="sidebar">
        <div class="hospital">
        <i class=" text-info fa-regular fa-hospital"></i>
        <p>Klinik Berkah Bermanfaat</p>
        </div>
        
        <div class="logo">
            <i class="text-info fa-solid fa-border-all"></i>
            <span class="ms-3">Dashboard</span>
        </div>
        <ul class="menu">
            <li class="dropdown">
                <a href="#"><i class=" text-info material-icons">work</i> <span class="ms-3">Rawat Jalan</span></a>
                <ul class="submenu">
                    <li><a href="#">Semua Status</a></li>
                    <li><a href="#">Reservasi</a></li>
                    <li><a href="#">Registrasi</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="text-info fa-solid fa-notes-medical"></i> <span class="ms-3">Rekam Medis</span></a>
                <ul class="submenu">
                    <li><a href="#">Projek 1</a></li>
                    <li><a href="#">Projek 2</a></li>
                    <li><a href="#">Projek 3</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="text-info material-icons">input</i><span class="ms-3">Pembayaran</span></a></li>
            <li class="dropdown">
                <a href="#"><i class="text-info fa-regular fa-calendar-minus"></i><span class="ms-3">Master Data</span></a>
                <ul class="submenu">
                    <li><a href="#">Projek 1</a></li>
                    <li><a href="#">Projek 2</a></li>
                    <li><a href="#">Projek 3</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="text-info fa-solid fa-calendar-days"></i><span class="ms-3">Jadwal Dokter</span></a>
                <ul class="submenu">
                    <li><a href="#">Projek 1</a></li>
                    <li><a href="#">Projek 2</a></li>
                    <li><a href="#">Projek 3</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="text-info fa-solid fa-hospital-user"></i> <span class="ms-3">Pasien</span></a></li>
            <li><a href="#"><i class="text-info fa-solid fa-warehouse"></i><span class="ms-3">Inventori</span></a></li>
            <li class="dropdown">
                <a href="#"><i class="text-info fa-solid fa-list"></i> <span class="ms-3">Closing & Laporan</span></a>
                <ul class="submenu">
                    <li><a href="#">Projek 1</a></li>
                    <li><a href="#">Projek 2</a></li>
                    <li><a href="#">Projek 3</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#"><i class="text-info fa-regular fa-calendar-minus"></i><span class="ms-3">Integrasi</span></a>
                <ul class="submenu">
                    <li><a href="#">Projek 1</a></li>
                    <li><a href="#">Projek 2</a></li>
                    <li><a href="#">Projek 3</a></li>
                </ul>
            </li>
        </ul>
    </div>
<div class="content " >
    <!-- Example single danger button -->

    <div class="mt-3 font btn-group">
        <p><a class="text-info link-offset-2 link-underline link-underline-opacity-0" href="#">Rawat Jalan</a></p>
    </div>
    <i class=" fa-solid fa-chevron-up fa-rotate-90 btn-group"></i>
    <p class="btn-group paragraf mt-3 ms-2">Semua Status</p>

    <div class="btn-group left ">
        <button type="button" class="btn btn-outline-info">
            <a href=""><i class="text-info fa-solid fa-circle-exclamation"></i></a>
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="">Lihat Panduan</a>
        </button>
    </div>

    <div >
        <div class="btn-group mt-4">
            <button type="button" class=" btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="text-info fa-solid fa-network-wired"></i>
            <strong>Tipe Pembayaran</strong>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">e-Money</a></li>
                <li><a class="dropdown-item" href="#">Bank Transfer</a></li>
                <li><a class="dropdown-item" href="#">Cash</a></li>
            </ul>
        </div>

        <div class="btn-group ms-3 mt-4">
            <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Poliklinik</strong>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Poli Gigi</a></li>
                <li><a class="dropdown-item" href="#">Poli Umum</a></li>
            </ul>
        </div>
        
        <div class="btn-group ms-3 mt-4">
            <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <strong>Dokter</strong>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Dr. Vania Utami</a></li>
                <li><a class="dropdown-item" href="#">Dr. Pitoyo</a></li>
            </ul>
        </div>


            <div class="btn-group left mt-3">
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#myModal"><i class="fa-solid fa-plus"></i><span class="ms-2">Reservasi</span></button>
            </div>
        </div>
        <!-- Pop-up -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Header pop-up -->
            <div class="modal-header">
                <h4 class="modal-title">Reservasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Isi pop-up -->
            <div class="modal-body">
                <!-- Form inputan -->
                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                        <label for="pasien">Masukan Nama Pasien:</label>
                        <input type="text" class="form-control" id="pasien" name="pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="bpjs">Masukan Nomor BPJS Pasien:</label>
                        <input type="text" class="form-control" id="bpjs" name="bpjs" required>
                    </div>
                    <!-- Footer pop-up -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-outline-info" name="submit" onclick="simpanData()">Simpan</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Fungsi JavaScript untuk menyimpan data -->
<script>
    function simpanData() {
        // Ambil nilai dari inputan
        var pasienValue = document.getElementById("pasien").value;
        var bpjsValue = document.getElementById("bpjs").value;

        // Lakukan sesuatu dengan nilai inputan (contoh: tampilkan di konsol)
        console.log("pasien: " + pasienValue);
        console.log("bpjs: " + bpjsValue);

        // Buat objek FormData untuk mengirim data ke server
        var formData = new FormData();
        formData.append("pasien", pasienValue);
        formData.append("bpjs", bpjsValue);

        // Kirim data ke server menggunakan AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("POST","sql.php" true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Respon dari server (jika ada)
                console.log(xhr.responseText);
            }
        };
        // Tutup pop-up
        $('#myModal').modal('hide');
    }
</script>

        <div class="mt-4 font btn-group">
            <p><a class="text-info link-offset-2 link-underline link-underline-opacity-0" href="#">Semua Rawat Jalan</a></p>
            <p class="btn-group paragraf ms-3">Tindak Lanjut</p>
        </div>

        <div class="row">
            <div class="col">
                <input type="text" class="form-control " placeholder="Semua Hari ">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Cari MRN, pasien, dokter, kode poli" >
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Cari No, rujukan, no voucher" >
            </div>
        </div>  

        <table class="table table-bordered mt-3 ">
            <thead >
            <tr class="text-center">
                <th scope="col" >No</th>
                <th scope="col">WAKTU KONSUL</th>
                <th scope="col">ANTRIAN(SLOT)</th>
                <th scope="col">PASIEN</th>
                <th scope="col">POLI</th>
                <th scope="col">DOKTER</th>
                <th scope="col">STATUS</th>
                <td></td>
            </tr>
            </thead>
            <tbody >
            <?php
            $no = 1;
            date_default_timezone_set('Asia/Jakarta');
            $konsul = date("d-F-Y");
            $jam = date('H:i:s');
            $data = $obj->TampilData();
            if($data->rowCount()>0){
                while($row=$data->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td class="text-center"><?= $no; ?></td>
                    <td><?= $konsul; ?>
                        <br>
                        <?= $jam;?>
                    </td>
                    <td class="text-center"><?= $no ?></td>
                    <td>
                        <strong><?= $row['pasien']; ?></strong>
                        <br>
                        BPJS kesehatan - <?=$row['bpjs']; ?>
                    </td>
                    <td>Poli gigi</td>
                    <td>drg.Larisa Safira</td>  
                    <td class="text-center">
                        <select class="ukuran form-select form-select-sm text-center" aria-label="Small select example">
                            <option selected></option>
                            <option value="1">Registrasi</option>
                            <option value="2">Proses</option>
                            <option value="3">Selesai</option>
                        </select>
                        
                        <?= $konsul;?>
                    </td>
                    <td></td>
                </tr>
                <?php $no++;
                    }
                }else {
                    echo '<tr><td colspan="4"> Nama Pasien Belum Ada</td></tr>';
                }
                    ?>
            </tbody>
        </table>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>