<section class="content-header">
    <h1>Data Permintaan Bahan Baku
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">      

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_permintaan')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali 
                </a>
            </div>
        </div>
        <div class="box-body">
            <form action="<?=site_url('C_permintaan/proses')?>" method="post">
                <div class="form-row">
                     <div class="form-group">
                        <label>Kode Permintaan</label>
                        <input type="text" name="kode_permintaan" value="<?=$row->kode_permintaan?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <td> <label>Nama Barang</label>
                            <select name="kode_barang" id="kode_barang" class="form-control">
                                <?php
                                foreach ($bahan_baku as $k){
                                    echo "<option value='$k->kode_barang'>$k->nama_barang </option>";
                                }
                                ?>
                        </select>
                        </td>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang (Satuan Per Ton)</label>
                        <input type="text" name="jumlah_barang" value="<?=$row->jumlah_barang?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Transaksi</label>
                        <input type="date" name="tanggal_transaksi" value="<?=$row->tanggal_transaksi?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Harus Terbeli</label>
                        <input type="date" name="tanggal_terbeli" value="<?=$row->tanggal_terbeli?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="status" value="<?=$row->status?>" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">Simpan</button>
                    <button type="reset" class="btn btn-flat">Reset</button>
                </div>
            </form>        
        </div>

    </div>
</section>