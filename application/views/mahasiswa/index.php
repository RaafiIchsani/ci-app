
<div class="container">

<?php if ($this->session->flashdata()); ?>

<div class="row mt-3">
<div class="col-md-6">
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data Mahasiswa<strong>berhasil</strong> <?= $this->session->flashdata ('flash'); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

</div>


</div>
<?php endif ?>





<div class="row mt-3">
  <div class="col-md-6">
    <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
  </div>
</div>


    <div class="row mt-3">
      <div class="col-md-6">
      
      <form action="" method="post">


      <div class="input-group ">
  <input type="text" class="form-control" placeholder="Cari Data Mahasiswa.." name="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit">Cari</button>
  </div>
</div>


      
      </form>
      
      </div>
    </div>


<div class="row mt-3">
<div class="col-md-6">
  <h3>Daftar Mahasiswa</h3>
  <?php if (empty($mahasiswa)) : ?>
  <div class="alert alert-danger" role="alert">
  data mahasiswa tidak ditemukan.
  </div>
<?php endif; ?>
  <ul class="list-group">
  <?php foreach ($mahasiswa as $mhs): ?>
  <li class+"list-group-item">
  <?= $mhs['nama']; ?>
    <a href="<?= base_url();?>mahasiswa/hapus/<?=$mhs ['id'];?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>

    <a href="<?= base_url();?>mahasiswa/ubah/<?=$mhs ['id'];?>" class="badge badge-success float-right">ubah</a>
    <a href="<?= base_url();?>mahasiswa/detail/<?=$mhs ['id'];?>" class="badge badge-primary float-right">detail</a>
  </li>
  <?php endforeach ; ?>
  </ul>
</div>
</div>
</div>


<!-- 



    <!-- <div class="container">
        <div class="row">
            <div class="col-10">
                <h3>Daftar Mahasiswa</h3>
                




                <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <th scope="row">2</th>
      <td><?= $mhs ['nama']; ?></td>
      <td><?= $mhs ['nrp']; ?></td>
      <td><? = $mhs ['email']; ?></td>
      <td><? = $mhs ['jurusan']; ?></td>
    </tr>

<?php endforeach; ?>
   
   
  </tbody>
</table>







            </div>
        </div>
    </div> -->

    -->