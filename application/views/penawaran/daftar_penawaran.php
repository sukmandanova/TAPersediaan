<section class="content-header">
    <h1>Penawaran
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Penawaran</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Penawaran</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_Penawaran/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Penawaran</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Nama Barang</th>
                        <th>Tanggal</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Perunit</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->kode_penawaran?></td>
                        <td><?=$data->kode_supplier?></td>
                        <td><?=$data->nama_supplier?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->tanggal?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->harga_perunit?></td>
                        <td><?=$data->status?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_Penawaran/delete/'.$data->kode_penawaran)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                             <a href="<?=site_url('C_Penawaran/ubah/'.$data->kode_penawaran)?>" class="btn btn-primary btn-xs">
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