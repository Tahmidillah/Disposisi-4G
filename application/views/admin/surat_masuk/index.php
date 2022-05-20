<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('admin/surat_masuk') ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('admin/surat_masuk/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelsurat" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No Surat</th>
                                <th>Perihal</th>
                                <th>Keterangan</th>
                                <th>Taggal Surat</th>
                                <th>Surat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($surat as $suratdata) {
                                echo "<tr>
<td>$no</td>
<td>$suratdata->no_surat</td>
<td>$suratdata->perihal</td>
<td>$suratdata->keterangan</td>
<td>$suratdata->tgl_surat</td>
<td>
<img src=" . base_url('assets/photo/surat_masuk/' . $suratdata->image) . " width ='64'/>
</td>
<td>
<div>
<a href=" . base_url('admin/surat_masuk/getedit/' . $suratdata->id) . " class='btn btn-sm btn-info'><i class='fas fa-edit'></i> Edit</a>
<a href=" . base_url('admin/surat_masuk/delete/' . $suratdata->id) . " class='btn btn-sm btn-danger'onclick='return confirm(\"Ingin mengapus data user ini?\");'><i class='fas fa-trash'></i> Hapus</a>
</div>
</td>
</tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>