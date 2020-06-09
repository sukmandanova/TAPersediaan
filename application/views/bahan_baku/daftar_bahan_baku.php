<section class="content-header">
    <h1>Data Bahan Baku
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Data Bahan Baku</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Bahan Baku</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_bahan_baku/tambah')?>" class="btn btn-primary btn-flat">
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
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Stok Barang</th>
                        <th>Harga Perunit</th>
                        <th>Jumlah Barang</th>
                        <th>Total Harga</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->kode_barang?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->tanggal?></td>
                        <td><?=$data->stok_barang?></td>
                        <td><?=$data->harga_perunit?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->total_harga?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_bahan_baku/delete/'.$data->kode_barang)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                             <a href="<?=site_url('C_bahan_baku/ubah/'.$data->kode_barang)?>" class="btn btn-primary btn-xs">
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