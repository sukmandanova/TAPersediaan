<section class="content-header">
    <h1>Laporan Purchase Oorder
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> Purchase Requisition</h3>
            <div class="pull-right">
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="hasil">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Purchase Requisition</th>
                        <th>Kode Barang</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Perunit</th>
                        <th>Total_Harga</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data->kode_pr?></td>
                        <td><?=$data->kode_barang?></td>
                        <td><?=$data->tanggal?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->harga_perunit?></td>
                        <td><?=$data->total_harga?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=base_url('laporan_pr/cetak/').$data->kode_pr?>"<button class="button"><span class="glyphicon glyphicon-print"></span></button>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
            </table>
        </div>

    </div>
</section>