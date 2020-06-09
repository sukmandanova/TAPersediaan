<div>
<?php
  echo form_open_multipart('C_bb/tambah');
  echo form_upload('file');
  echo '<br/>';
  echo form_submit('upload', 'Upload');
  echo form_close();

  ?>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>po</th>
        <th>tanggal</th>
        <th>bulan</th>
        <th>item</th>
        <th>qty</th>
        <th>price</th>
      </tr>
    
  <?php
    foreach ($row->result() as $key => $data) {
      echo "<tr><td>".$data->kode_bb."</td><td>".$data->po."</td><td>".$data->tanggal."</td><td>".$data->bulan."</td><td>".$data->item."</td><td>".$data->qty."</td><td>".$data->price."</td></tr>";
    }
    echo "</table>";
  ?>
</div>  