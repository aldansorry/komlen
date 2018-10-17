<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">  

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Lingkup Keluhan</h2>
                        <a href="<?php echo base_url('Admin/LingkupKeluhan') ?>" class="au-btn au-btn-icon btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit</strong> Data
                        </div>
                        <div class="card-body card-block">
                            <?php echo validation_errors(); ?>
                            <form action="" method="post" class="form-horizontal" id="form-input">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-kode" class=" form-control-label">Kode</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-kode" name="kode" placeholder="Masukan Kode" class="form-control" value="<?php echo $lingkup_keluhan->kode ?>" readonly>
                                        <small class="form-text text-muted">Hanya diisi huruf dan space</small>
                                        <?php echo form_error('kode') ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-nama" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-nama" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo $lingkup_keluhan->nama ?>">
                                        <small class="form-text text-muted">Hanya diisi huruf dan space</small>
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>
                            
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm" form="form-input">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm" form="form-input">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

