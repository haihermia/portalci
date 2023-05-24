<a href="<?php echo site_url('Home') ?>">Beranda</a> |
   <a href="<?php echo site_url('Admin') ?>">Data Admin</a> |
   <a href="<?php echo site_url('Kategori') ?>">Data Kategori</a> |
   <a href="<?php echo site_url('Berita') ?>">Data Berita</a> |
   <a href="<?php echo site_url('Auth/logout') ?>">Keluar</a>
   <hr>
<h3>Halaman Kategori</h3>
<!--untuk memanggil halaman tambah atau file create.php-->
<a href="<?php echo site_url('Kategori/create') ?>"><button type="button" 
    name="button" title="untuk menambah data">Tambah</button></a>
    <table border="1" width="70%">
     <tr>
         <th>No</th>
         <th>Id</th>
         <th>Nama</th>
         <th>Aksi</th>
     </tr>
     <?php
     $no=1;
 //$read yang diambil dari control function index
     foreach ($read->result_array() as $row) {
         ?>
         <tr>
             <td><?php echo $no ?></td>
             <td><?php echo $row['id_kategori'] ?></td>
             <td><?php echo $row['nama_kategori'] ?></td>
             <td>
                 <!--memanggil halaman edit atau edit.php-->
                 <a href="<?php echo site_url('Kategori/edit/'.$row['id_kategori'])?>" 
                    title="tombol utk merubah data">Ubah</a> |
                    <!--memanggil aksi delete-->
                    <a href="<?php echo site_url('Kategori/delete/'.$row['id_kategori'])?>" 
                        onclick="javascript: return confirm('Yakin Mau dihapus <?php echo 
                        $row['nama_kategori'];?>')">Hapus</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            ?> 
        </table>