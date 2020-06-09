<section class="content-header">
    <h1>Peramalan Moving Average
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active"></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Moving Average</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_ma/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Periode 1</th>
                        <th>Periode 2</th>
                        <th>Periode 3</th>
                        <th>Moving Average</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
               <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->periode_1?></td>
                        <td><?=$data->periode_2?></td>
                        <td><?=$data->periode_3?></td>
                        <td><?=$data->ma?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_ma/delete/'.$data->periode_1)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                             <a href="<?=site_url('C_ma/ubah/'.$data->periode_1)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Ubah
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</section>