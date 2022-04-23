<html>
<head>
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Quiz/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">Form Input Data Mahasiswa</th>
                </tr>
                <tr><td colspan="3"
                <hr>
             </td>
            </tr>
             <tr>
                    <th>Nim</th>
                    <th>:</th>
        <td>

        <input type="text" name="Nim" id="Nim">
        <small><span class="text-danger"><?php echo form_error('Nim');?></span></small>
        </td>
        <tr>
        <th>Nama</th>
    <td>:</td>
    <td>
    <input type="text" name="Nama" id="Nama">
    <small><span class="text-danger"><?php echo form_error('Nama');?></span></small>
    </td>
        </tr>
        <tr>
        <th>Kelas</th>
    <td>:</td>
    <td>
    <input type="text" name="Kelas" id="Kelas">
    <small><span class="text-danger"><?php echo form_error('Kelas');?></span></small>
    </td>
        </tr>
        <tr>
                    <th>Tempat Lahir</th>
                    <th>:</th>
        <td>
        <input type="text" name="Tlahir" id="Tlahir">
        <small><span class="text-danger"><?php echo form_error('Tlahir');?></span></small>
        </td>
        <tr>
        <th>Tanggal Lahir</th>
    <td>:</td>
    <td>
    <input type="text" name="TgLahir" id="TgLahir">
    <small><span class="text-danger"><?php echo form_error('TgLahir');?></span></small>
    </td>
        </tr>
        <th>Alamat</th>
    <td>:</td>
    <td>
    <input type="text" name="Alamat" id="Alamat">
    <small><span class="text-danger"><?php echo form_error('Alamat');?></span></small>
    </td>
    <tr>
        <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
    <input type="radio" name="jenis_kelamin" value="Laki-laki"/>Laki-laki
   <input type="radio" name="jenis_kelamin" value="Perempuan"/>Perempuan
   <br />
    <small><span class="text-danger"><?php echo form_error('jenis_kelamin');?></span></small>
    </td>

        <tr>
        <th>Agama</th>
        <td>:</td>
        
 <td>
 <select name="Agama" id="Agama">
 <option value="">Pilih Agama</option>
 <option value="Islam">Islam</option>
 <option value="Kristen">Kristen</option>
 <option value="Katolik">Katolik</option>
 <option value="Budha">Budha</option>
 <option value="Hindu">Hindu</option>
 <option value="Khonghucu">Khonghucu</option>
 </select>
 </td>
 </tr>
 <tr>
        <td colspan="3" align="center">
            <input type="submit" value="Submit">
 </td>
 </tr>
 </table>
 </form>
 </center>
</body>
</html