<section class="content-header">
    <h1>Purchase Order
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Purchase Order</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Purchase Order</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_po/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Purchase Order</th>
                        <th>Kode Barang</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Nama Supplier</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Perunit</th>
                        <th>Total_Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->kode_po?></td>
                        <td><?=$data->kode_barang?></td>
                        <td><?=$data->tanggal?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->nama_supplier?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->harga_perunit?></td>
                        <td><?=$data->jumlah_barang*$data->harga_perunit?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_po/delete/'.$data->kode_po)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                             <a href="<?=site_url('C_po/ubah/'.$data->kode_po)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Ubah
                            </a>
                            <!--<a href="<?=site_url('Laporan_pr')?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> Cetak
                            </a>-->
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</section>