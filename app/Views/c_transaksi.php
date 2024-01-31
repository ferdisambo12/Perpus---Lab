<div align="center">

<!-- <img align="center" src="data:image/jpg;base64,<?= $foto?>" width="82%" height="18%" >
 --><div>
  <br>
  <br>
</div>

 <table id="datatable-buttons" align="center" border="1" align="center" width="100%" class="table table-striped table-bordered">
  <thead>
    <tr>
     <th>No</th>
    <th>No Meja</th>
    <th>Pembayaran</th> 
    <th>Total Harga</th>
    <th>Dibayar</th>
    <th>Tanggal</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $no=1;
    foreach ($ferdi as $gas){
      ?>
      <th><?php echo $no++ ?></th>
                        <td><?php echo $gas->no_meja?></td>
                        <td><?php echo $gas->pembayaran?></td>
                        <td><?php echo $gas->total_harga?></td>
                        <td><?php echo $gas->dibayar?></td>
                        <td><?php echo $gas->tanggal_transaksi?></td>
                        <td>
    <?php }?>
  </tbody>
</table>
</div>
<script>
  window.print();
</script>