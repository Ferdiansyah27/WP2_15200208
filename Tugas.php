<html>
    <head>
        <title>Tugas</title>
</head>
<body>
    <b>Input Form Data Siswa</b>
    <form action="" method="POST" name"form1">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td>:</td>
                <td><input type="text" name="nama" size="25"></td>
</tr>
<tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" size="25"></td>
</tr>
<tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" size="25"></td>
</tr>
<tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="tanggal" size="25"></td>
</tr>
<tr>
                <td>Tempat lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat" size="25"></td>
</tr>
<tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" size="25"></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
        <input type="radio" name="jenis kelamin" value="laki-laki" checked="">laki-laki
        <Input type="radio" name="jenis kelamin" value="perempuan" checked="">perempuan
</td>
</tr>
<tr>
    <td>agama</td>
    <td>:</td>
    <td>
        <select name="agama">
            <option value="Agama">Agama</option>
            <option value="islam">islam</option>
            <option value="kristen">kristen</option>
            <option value="katolik">katolik</option>
            <option value="budha">budha</option>
            <option value="hindu">hindu</option>
            <option value="protestan">protestan</option>
            <option value="khonghucu">khonghucu</option>
</select>
</td>
</tr>
<tr>
    <td><input type="submit" name="spn" value="simpan"></td>
</tr>
</table>
</form>
</body>

<?php
if(isset($_POST['spn'])){
    $Nama_Siswa=$_POST['nama'];
    $NIS =$_POST['nis'];
    $Kelas =$_POST['kelas'];
    $Tanggal_Lahir =$_POST['tanggal'];
    $Tempat_Lahir =$_POST['tempat'];
    $Alamat =$_POST['alamat'];
    $Jenis_Kelamin =$_POST['jenis_kelamin'];
    $Agama =$_POST['agama'];
    ?>
    <b>HASIL</b>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>Nama</td>
            <td>Nis</td>
            <td>Kelas</td>
            <td>Tanggal Lahir</td>
            <td>Tempat Lahir</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Agama</td>
</tr>
<tr>
    <td>1</td>
    <td><?php echo $Nama_Siswa; ?></td>
    <td><?php echo $NIS; ?></td>
    <td><?php echo $Kelas; ?></td>
    <td><?php echo $Tanggal_Lahir; ?></td>
    <td><?php echo $Tempat_Lahir; ?></td>
    <td><?php echo $Alamat; ?></td>
    <td><?php echo $Jenis_Kelamin; ?></td>
    <td><?php echo $Agama; ?></td>
</tr>
<?php
}
?>
</table>
</html>