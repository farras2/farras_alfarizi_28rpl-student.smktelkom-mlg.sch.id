<!DOCTYPE html>
<html>
<head>

    <title>www.alfariztour.com</title>
</head>
<center><body background="abu2.jpg"><body>
    <h1>ISI FORMULIR DIBAWAH INI</h2>
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "gagal,pesanan anda belum terdaftar!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";

        }
    }
    ?>
    <p>KAMI MENYAJIKAN WISATA TERPOPULER SAAT INI</p>
    <p>LOKASI :JL SIGURA GURA NO 2 KOTA MALANG</p>
    <p>MAU BOOKING/PESAN TRAVEL?? BISA HUB:FARRAS,081334518548</p>
    <p>KET:TRAVEL KAMI TIDAK HANYA MENYAJIKAN TOUR DALAM PULAU..</p>
    <p>DIBAWAH INI ADALAH DESTINASI WISATA POPULER SAAT INI</p>
    <br/>
    <br/>
    <form method="post" action="cek_login.php">
        <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>

        </tr>
        <tr>
            <td>telepon</td>
            <td>:</td>
            <td><input type="varchar" name="telepon"></td>

        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><input type="varchar" name="alamat"></td>

        </tr>
        <tr>
            <td>destinasi</td>
            <td>:</td>
            <td><input type="text" name="destinasi"></td>

        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="LOGIN"></td>

        </tr>
        </table>
        </form>
        
        <p>
    </p>
    <img src="jakarta.jpg" alt="jakarta" style="float:left;width:200px;height:150px;">
    <br>
    <h4 align="left" hspace="50" vspace="50">JAKARTA</h4>
    <br>
    
        <p>
    </p>
    <img src="Suroboyo-Monument.jpg" alt="surabaya" style="float:right;width:200px;height:150px;">
    <br>
    <h4 align="right" hspace="50" vspace="50">SURABAYA</h4>
    <br>

        <p>
    </p>
    <img src="lombok.jpg" alt="lombok" style="float:left;width:200px;height:150px;">
    <br>
    <h4 align="left" hspace="50" vspace="50">LOMBOK</h4>
    <br>

        <p>
    </p>
    <img src="Makassar.jpg" alt="makassar" style="float:right;width:200px;height:150px;">
    <br>
    <h4 align="right" hspace="50" vspace="50">MAKASSAR</h4>
    <br>

        <p>
    </p>
    <img src="raja ampat.jpg" alt="raja ampat" style="float:left;width:200px;height:150px;">
    <br>
    <h4 align="left" hspace="50" vspace="50">RAJA AMPAT</h4>
    <br>
</body>
</html>

