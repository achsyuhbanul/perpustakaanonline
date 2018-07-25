<?php include'template/overall/header.php'; ?>

<div class="content-title">.:: Guestbook ::.</div>
<div class="content-body">
	
    <?php
	if($_POST['submit']){
		$date	= date("Y-m-d");
		$nama	= mysqli_real_escape_string($_POST['nama']);
		$email	= mysqli_real_escape_string($_POST['email']);
		$web	= mysqli_real_escape_string($_POST['web']);
		$pesan	= mysqli_real_escape_string($_POST['komentar']);
		
				$in = mysqli_query($koneksi, "INSERT INTO tw_guestbook VALUES(NULL, '$date', '$nama', '$email', '$web', '$pesan')");
				if($in){
					echo '<script language="javascript">alert("Pesan/Komentar Anda berhasil disimpan."); document.location="guestbook.php";</script>';
				}else{
					echo '<div class="error">ERROR: Gagal menyimpan data.</div>';
				}
	}
	?>
    
	<form action="" method="post">
    	<table align="center">
        	<tr>
            	<td>Nama Lengkap*</td>
                <td>:</td>
                <td><input type="text" name="nama" required="" /></td>
            </tr>
            <tr>
            	<td>Email*</td>
                <td>:</td>
                <td><input type="email" name="email" required="" /></td>
            </tr>
            <tr>
            	<td>Website</td>
                <td>:</td>
                <td><input type="text" name="web" required="" /></td>
            </tr>
            <tr>
            	<td>Komentar*</td>
                <td>:</td>
                <td><textarea name="komentar" rows="4" cols="30" required=""></textarea></td>
            </tr>
            <tr>
            	<td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Kirim" /></td>
            </tr>
        </table>
    </form>
</div>

<?php include'template/overall/footer.php'; ?>