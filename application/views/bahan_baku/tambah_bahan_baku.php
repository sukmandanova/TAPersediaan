<section class="content-header">
    <h1>Data Bahan Baku
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
                <a href="<?=site_url('C_bahan_baku')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali 
                </a>
            </div>
        </div>
        <div class="box-body">
            <form action="<?=site_url('C_bahan_baku/proses')?>" method="post">
                <div class="form-row">
                     <div class="form-group">
                        <label>Kode Barang</label>
                        <input type="text" name="kode_barang" value="<?=$row->kode_barang?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" value="<?=$row->nama_barang?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" value="<?=$row->tanggal?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sstok Barang</label>
                        <input type="text" name="stok_barang" value="<?=$row->stok_barang?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Harga Perunit</label>
                        <input type="text" name="harga_perunit" value="<?=$row->harga_perunit?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Barang</label>
                        <input type="text" name="jumlah_barang" value="<?=$row->jumlah_barang?>" class="form-control" required>
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