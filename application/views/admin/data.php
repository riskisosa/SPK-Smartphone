<?php $this->load->view('template/header'); ?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Data Admin</h3>
        <div class="box-tools">
            <?php 
            /*<a href="<?php echo site_url('admin/tambah'); ?>" class="btn btn-primary">Tambah Admin</a>
            */ ?>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $row) : ?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row->username; ?></td>
                        <td>
                           <?php
                           /*
                            <a href="<?php echo site_url('admin/ubah/' . $row->id_admin); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
                            <a href="<?php echo site_url('admin/hapus/' . $row->id_admin); ?>" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus alternatif ini?');" 
                            class="btn btn-danger btn-xs" 
                            title="Hapus">Hapus</a>
                            */ ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>