<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data GGWP2
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data GGWP2</li>
    </ol>
  </section>
  <section class="content">
    <table class="table">
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Alamat</th>
      </tr>
      <?php foreach ($kelompok as $klp) : ?>

        <tr>
          <td> <?php echo $klp['no']; ?> </td>
          <td> <?php echo $klp['nim']; ?> </td>
          <td> <?php echo $klp['nama']; ?> </td>
          <td> <?php echo $klp['kelas']; ?> </td>
          <td> <?php echo $klp['alamat']; ?> </td>
        </tr>
      <?php endforeach; ?>

    </table>
  </section>
</div>