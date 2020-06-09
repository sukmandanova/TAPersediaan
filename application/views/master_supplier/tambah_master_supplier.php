<section class="content-header">
    <h1>Data Master Supplier
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
                <a href="<?=site_url('C_mastersupplier')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali 
                </a>
            </div>
        </div>
        <div class="box-body">
            <form action="<?=site_url('C_mastersupplier/proses')?>" method="post">
                <div class="form-row">
                     <div class="form-group">
                        <label>Kode Supplier</label>
                        <input type="text" name="kode_supplier" value="<?=$row->kode_supplier?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" name="nama_supplier" value="<?=$row->nama_supplier?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?=$row->alamat?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?=$row->email?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" name="tlp" value="<?=$row->tlp?>" class="form-control" required>
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