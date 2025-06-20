<?php $this->load->view('template/header'); ?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Data Alternatif</h3>
        <div class="box-tools">
            <a href="<?php echo site_url('alternatif/tambah'); ?>" class="btn btn-primary">Tambah Alternatif</a>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Alternatif</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($query as $row) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->nama_alternatif; ?></td>
                        <td>
                            <a href="<?php echo site_url('alternatif/lihat/' . $row->id_alternatif); ?>" class="btn btn-info btn-xs" title="Lihat">Lihat</a> &nbsp;
                            <a href="<?php echo site_url('alternatif/ubah/' . $row->id_alternatif); ?>" class="btn btn-success btn-xs" title="Ubah">Ubah</a> &nbsp;
                            <a href="<?php echo site_url('alternatif/hapus/' . $row->id_alternatif); ?>" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus alternatif ini?');" 
                            class="btn btn-danger btn-xs" 
                            title="Hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>