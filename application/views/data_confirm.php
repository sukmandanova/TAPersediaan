<section class="content-header">
    <h1>Purchase Requisition
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Purchase Requisition</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Purchase Requisition</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_pr/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Barang</th>
                        <th>Nomor Purchase Requisition</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Perunit</th>
                        <th>Total_Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->kode_barang?></td>
                        <td><?=$data->no_pr?></td>
                        <td><?=$data->tanggal?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->harga_perunit?></td>
                        <td><?=$data->jumlah_barang*$data->harga_perunit?></td>
                        <td><?=$data->status?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</section>