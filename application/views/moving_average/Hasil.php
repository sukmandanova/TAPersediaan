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
            <div class="pull-right">
                <a href="<?=site_url('C_bb/cma')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i> Kembali 
                </a>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                            <label>Moving average</label>
                            <input type="text" name="hasil" value="<?=$row?>" class="form-control" required readonly>    
                        </div>
                    </form>        
                </div>
            </div>
        </div>

    </div>
</section>