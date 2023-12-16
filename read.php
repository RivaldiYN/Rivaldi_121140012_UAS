<!-- Merupakan salah satu fitur dari CRUD yang mana berfungsi untuk membaca data (read) -->
<?php
$id = $_GET['id'];
$akreditasi = mysqli_query($dbconn," SELECT * FROM akreditasi WHERE id = '$id'");
$data = mysqli_fetch_array($akreditasi);
if (isset($_POST['program_studi'])) {
    echo $_POST['program_studi'];
    $fakultas= $_POST['fakultas'];
    $program_studi= $_POST['program_studi'];
    $jenjang_studi= $_POST['jenjang_studi'];
    $akreditasi= $_POST['akreditasi'];

    $tambah = mysqli_query($dbconn," UPDATE akreditasi set fakultas='$fakultas', program_studi='$program_studi', jenjang_studi='$jenjang_studi', akreditasi='$akreditasi'");
    echo"<script>alert('tambah data berhasil'); document.location = '?page=tabel';</script>";
}
?>
<div class="form">
            <h1>Edit Akreditasi Program Studi</h1>
            <form method="post" enctype="multipart/form-data">
                <table class="pendaftaran">
                    
                    <tr>
                        <td class="label">
                            <label for="fakultas">Fakultas</label>
                        </td>
                        <td class="in">
                            <input type="text" name="fakultas" id="fakultas" required placeholder="Masukkan Fakultas" class="input" value="<?php echo $data['fakultas'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="program_studi">Program Studi</label>
                        </td>
                        <td>
                            <input type="text" name="program_studi" id="program_studi" required placeholder="Masukkan Program Studi" class="input" value="<?php echo $data['program_studi'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jenjang_studi">Jenjang Studi</label>
                        </td>
                        <td>
                            <input type="text" name="jenjang_studi" id="jenjang_studi" required placeholder="Masukkan Program Studi" class="input" value="<?php echo $data['jenjang_studi'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="akreditasi">Akreditasi</label>
                        </td>
                        <td>
                            <select name="akreditasi" id="akreditasi" required  class="input select" disabled>
                                <option value="" selected>Pilih</option>
                                <option value="A" <?php if ($data['akreditasi'] == 'A') echo "selected" ?>>A</option disabled>
                                <option value="B" <?php if ($data['akreditasi'] == 'B') echo "selected" ?>>B</option disabled>
                                <option value="C" <?php if ($data['akreditasi'] == 'C') echo "selected" ?>>C</option disabled>
                                <option value="D" <?php if ($data['akreditasi'] == 'D') echo "selected" ?>>D</option disabled>
                            </select>
                        </td>
                    </tr>
                    </tr>
                </table>
            </form>
        </div>