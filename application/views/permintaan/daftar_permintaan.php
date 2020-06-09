<section class="content-header">
    <h1>Permintaan Bahan Baku
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Permintaan Bahan Baku</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Permintaan Barang Baku</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_permintaan/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Permintaan</th>
                        <th>kode_barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Transaksi</th>
                        <th>Tanggal Tersedia</th> 
                        <th>jumlah Barang (satuan per ton)</th>
                        <th>Keterangan</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->kode_permintaan?></td>
                        <td><?=$data->kode_barang?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->tanggal_transaksi?></td>
                        <td><?=$data->tanggal_terbeli?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->status
                        ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_permintaan/delete/'.$data->kode_permintaan)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                             <a href="<?=site_url('C_permintaan/ubah/'.$data->kode_permintaan)?>" class="btn btn-primary btn-xs">
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