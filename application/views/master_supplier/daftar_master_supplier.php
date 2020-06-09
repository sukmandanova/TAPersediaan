<section class="content-header">
    <h1>Master Data Supplier
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Master Data Supplier</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">    

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Master Data Supplier</h3>
            <div class="pull-right">
                <a href="<?=site_url('C_mastersupplier/tambah')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah 
                </a>
            </div>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped" id="mytable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                    foreach($row->result() as $key => $data ) { ?>                    
                    <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data->kode_supplier?></td>
                        <td><?=$data->nama_supplier?></td>
                        <td><?=$data->alamat?></td>
                        <td><?=$data->email?></td>
                        <td><?=$data->tlp?></td>
                        <td class="text-center" width="160px">
                            <a href="<?=site_url('C_mastersupplier/delete/'.$data->kode_supplier)?>" onclick="return confirm('Apakah anda yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i> Hapus
                            </a>
                             <a href="<?=site_url('C_mastersupplier/ubah/'.$data->kode_supplier)?>" class="btn btn-primary btn-xs">
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