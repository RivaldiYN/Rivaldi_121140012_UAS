<!-- Berisi dari data yang ditampilkan ketika user berhasil tambah data -->
<h1 class="sub_judul">Daftar Akreditasi Program Studi</h1>
<button class=""><a class="tambah" href="?page=formulir" style="color: #000; text-decoration: none;"><p>+ Akreditasi Program Studi</p></a></button>

        <div class="form akre">
            <table class="daftar_akre" style="overflow-x:scroll" id="tabel">
                <tr>
                    <th>Fakultas</th>
                    <th>Program Studi</th>
                    <th>Jenjang Studi</th>
                    <th>Akreditasi</th>
                    <th>Action</th>
                </tr>
                <?php
                $daftar_tanggapan = mysqli_query($konek,"SELECT * FROM akreditasi ORDER BY id ASC");
                while ($data = mysqli_fetch_array($daftar_tanggapan)) {         
                ?>
                <tr>
                    <td><?php echo $data['fakultas']; ?></td>
                    <td><?php echo $data['program_studi']; ?></td>
                    <td><?php echo $data['jenjang_studi']; ?></td>
                    <td><?php echo $data['akreditasi']; ?></td>
                    <td width="22%">
                        <a class="btn" href="?page=edit&&id=<?php echo $data['id']?>">Update</a>
                        <a class="btn_tbh" href="?page=read&&id=<?php echo $data['id']?>">Read</a>
                        <a class="btn_del" href="?page=delete&&id=<?php echo $data['id']?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>