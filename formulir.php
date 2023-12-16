<?php
if (isset($_POST['submit'])) {
    $fakultas= $_POST['fakultas'];
    $program_studi= $_POST['program_studi'];
    $jenjang_studi= $_POST['jenjang_studi'];
    $akreditasi= $_POST['akreditasi'];
    if($fakultas == "" || $program_studi == "" || $jenjang_studi == "" || $akreditasi == "") {
        echo"<script>alert('Harap lengkapi semua kolom yang ada silahkan isi ulang inputan');</script>";
    }else{
        mysqli_query($konek," INSERT INTO akreditasi (fakultas, program_studi, jenjang_studi, akreditasi) VALUES ('$fakultas', '$program_studi', '$jenjang_studi', '$akreditasi')");
        echo"<script>alert('tambah data berhasil'); document.location = '?page=tabel';</script>";
    }
}
?>
<!-- Isi dari file formulir ini merupakan fitur tambah data yang mana field atau kolom yang diinputkan user sudah terhubung dengan kolom yang ada di database -->

<div class="form">
            <h1>Formulir Akreditasi Program Studi</h1>
            <form method="post" enctype="multipart/form-data">
                <table class="pendaftaran">
                    <tr>
                        <td class="label">
                            <label for="fakultas">Fakultas</label>
                        </td>
                        <td class="in">
                            <input type="text" name="fakultas" id="fakultas"  placeholder="Masukkan Fakultas" class="input"  value="<?php echo isset($_POST['fakultas']) ? $_POST['fakultas'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="program_studi">Program Studi</label>
                        </td>
                        <td>
                            <input type="text" name="program_studi" id="program_studi"  placeholder="Masukkan Program Studi" class="input"  value="<?php echo isset($_POST['program_studi']) ? $_POST['program_studi'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jenjang_studi">Jenjang Studi</label>
                        </td>
                        <td>
                            <input type="text" name="jenjang_studi" id="jenjang_studi"  placeholder="Masukkan Jenjang Studi" class="input"  value="<?php echo isset($_POST['jenjang_studi']) ? $_POST['jenjang_studi'] : ''; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="akreditasi">Akreditasi</label>
                        </td>
                        <td>
                            <select name="akreditasi" id="akreditasi"   class="input select">
                                <option value="" selected>Pilih</option>
                                <option value="A" <?php echo isset($_POST['akreditasi']) && $_POST['akreditasi'] == 'A' ? "selected" : ''; ?>>A</option>
                                <option value="B" <?php echo isset($_POST['akreditasi']) && $_POST['akreditasi'] == 'B' ? "selected" : ''; ?>>B</option>
                                <option value="C" <?php echo isset($_POST['akreditasi']) && $_POST['akreditasi'] == 'C' ? "selected" : ''; ?>>C</option>
                                <option value="D" <?php echo isset($_POST['akreditasi']) && $_POST['akreditasi'] == 'D' ? "selected" : ''; ?>>D</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="submit">
                                <input class="btn" type="submit" value="kirim" name="submit">
                            </div>
                        </th>
                    </tr>
                </table>
            </form>
        </div>