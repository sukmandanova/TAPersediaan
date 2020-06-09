<section class="content-header">
    <h1>Barang
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Barang</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">      

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Data Barang</h3>
            <div class="pull-right">
                <a href="<?=site_url('barang')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <?//=validation_errors() ?>
                    <form action="<?=site_url('barang/proses')?>" method="post">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" name="kode_barang" value="<?=$row->kode_barang?>" class="form-control" required readonly>    
                        </div>
                        <div class="form-group">
                            <label>Nama Barang *</label>
                            <input type="text" name="nama_barang" value="<?=$row->nama_barang?>" class="form-control" required>   
                        </div>
                         <div class="form-group">
                            <label>Cavity</label>
                            <input type="number" min="0" name="cavity" value="<?=$row->cavity?>" class="form-control">   
                        </div>
                        <div class="form-group">
                            <label>Angkatan/Shift</label>
                            <input type="number" min="0" name="angkatan" value="<?=$row->angkatan?>" class="form-control">   
                        </div>
                        <!-- <div class="form-group">
                            <label>Mesin *</label> <small>(Ton)</small>
                            <select name="mesin" class="form-control" required>
                                <?php $mesin = $this->input->post('mesin') ?? $row->mesin?>
                                <option value="">- Pilih -</option>
                                <option value="50" <?=$mesin == 50 ? "selected" : null?> >50</option>
                                <option value="80" <?=$mesin == 80 ? "selected" : null?>>80</option>
                                <option value="200" <?=$mesin == 200 ? "selected" : null?>>200</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label>Mesin *</label>
                        <?php echo form_dropdown('clamping_force', $cfmesin, $selectedcfmesin,
                            ['class' => 'form-control', 'required' => 'required'])?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">Simpan</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>        
                </div>
            </div>
        </div>

    </div>
</section>