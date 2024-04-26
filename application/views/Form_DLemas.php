<html>

<head>
    <title>Input Data Siswa</title>
    <style>
        input[type="text"]:invalid,
        input[type="radio"]:invalid,
        select:invalid {
            border: 1px solid red; 
        }

        input[type="text"]:invalid:focus,
        input[type="radio"]:invalid:focus,
        select:invalid:focus {
            outline: none;
        }

        .error-message {
            color: red;
            font-size: 10px; 
            position: absolute;
            margin-inline: 10px;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('DLemas/cetak'); ?>" method="post">
            <table>
                <br>
                <tr>
                    <h2 colspan="3" >
                        Form Input Data Siswa
                </h2>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                        <span class="error-message"><?= form_error('nama'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                        <span class="error-message"><?= form_error('nis'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                        <span class="error-message"><?= form_error('kelas'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tanggallahir" id="tanggallahir">
                        <span class="error-message"><?= form_error('tanggallahir'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempatlahir" id="tempatlahir">
                        <span class="error-message"><?= form_error('tempatlahir'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                        <span class="error-message"><?= form_error('alamat'); ?></span>
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jeniskelamin" value="Laki-laki"> Laki-laki<br>
                        <input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan<br>
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
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

</html>