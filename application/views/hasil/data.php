<?php $this->load->view('template/header'); ?>

<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Hasil Penilaian Pemilihan Smartphone 2025 Terbaik Menggunakan Metode Weighted Product</h3>
        <div class="box-tools">
            <a href="<?php echo site_url('penilaian/pdf'); ?>" class="btn btn-primary" target="_blank"><img src="<?php echo base_url('assets/images/pdf.png'); ?>">&nbsp; Export ke PDF</a>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTables1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Alternatif Smartphone</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasil as $row) { ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row->nama_alternatif; ?></td>
                        <td><?php echo floatval($row->nilai); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>