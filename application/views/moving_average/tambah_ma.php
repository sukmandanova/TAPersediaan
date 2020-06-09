<section class="content-header">
    <h1>Perhitungan Moving Average
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Moving Average</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">      

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Moving Average</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <?//=validation_errors() ?>
                    <form action="<?=site_url('C_bb/rumus')?>" method="post">
                            <div class="form-group">
                                <label>
                                    Pilih Bulan
                                </label>
                                <select name="bulan" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <option value="1"  >- Januari -</option>
                                    <option value="2" >- Februari -</option>
                                    <option value="3" >- Maret -</option>
                                    <option value="4" >- April -</option>
                                    <option value="5" >- Mei -</option>
                                    <option value="6" >- Juni -</option>
                                    <option value="7" >- Juli -</option>
                                    <option value="8" >- Agustus -</option>
                                    <option value="9"  >- September -</option>
                                    <option value="10" >- Oktober -</option>
                                    <option value="11" >- November -</option>
                                    <option value="12" >- Desember -</option>
                                </select>
                            </div>
                        <div class="form-group">
                            <button type="submit" name="<?=$page?>" class="btn btn-success btn-flat">Proses</button>
                            <button type="reset" class="btn btn-flat">Reset</button>
                        </div>
                    </form>        
                </div>
            </div>
        </div>

    </div>
</section>