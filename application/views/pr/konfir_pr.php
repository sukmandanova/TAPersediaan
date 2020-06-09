<section class="content-header">
    <h1>Konfirmasi Purchase Requisition
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Konfirmasi Purchase Requisition</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Konfirmasi Purchase Requisition</h3>
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
                        <th>Kode Purchase Requisition</th>
                        <th>Kode Barang</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
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
                        <td><?=$data->kode_pr?></td>
                        <td><?=$data->kode_barang?></td>
                        <td><?=$data->tanggal?></td>
                        <td><?=$data->nama_barang?></td>
                        <td><?=$data->jumlah_barang?></td>
                        <td><?=$data->harga_perunit?></td>
                        <td><?=$data->total_harga?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_pr/tolak/'.$data->kode_pr)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Tolak
                            </a>
                             <a href="<?=site_url('C_pr/terima/'.$data->kode_pr)?>" class="btn btn-primary btn-xs">
                                <i class="fa fa-pencil"></i> ACC
                            </a>
                        </td>
                    </tr>
                    <?php 
                } 
                ?>
                </tbody>
            </table>
        </div>

    </div>
</section>