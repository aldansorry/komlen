<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">  

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1"></h2>
                        <a href="<?php echo base_url('Admin/Keluhan') ?>" class="au-btn au-btn-icon btn-secondary">
                            Kembali
                        </a>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah</strong> Data
                        </div>
                        <div class="card-body card-block">
                            <?php echo validation_errors(); ?>
                            <form action="" method="post" class="form-horizontal" id="form-input">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-kode" class=" form-control-label">Kode</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-kode" name="kode" placeholder="Masukan Kode" class="form-control" value="<?php echo $keluhan->kode ?>">
                                        <small class="form-text text-muted">Hanya diisi huruf dan space</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-tanggal" class=" form-control-label">Tanggal</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="datetime" id="input-tanggal" name="tanggal" placeholder="Masukan Tanggal" class="form-control" value="<?php echo $keluhan->tanggal ?>">
                                        <small class="form-text text-muted">Hanya diisi angka</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-judul" class=" form-control-label">Judul</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-judul" name="judul" placeholder="Masukan Judul" class="form-control" value="<?php echo $keluhan->judul ?>">
                                        <small class="form-text text-muted">Hanya diisi huruf dan space</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-keluhan" class=" form-control-label">Keluhan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="keluhan" id="input-keluhan" rows="4" placeholder="Masukan Keluhan" class="form-control"><?php echo $keluhan->keluhan ?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-solusi" class=" form-control-label">Solusi</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="solusi" id="input-solusi" rows="4" placeholder="Masukan Solusi" class="form-control"><?php echo $keluhan->solusi ?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-status" class=" form-control-label">Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="status" id="input-status" rows="4" placeholder="Masukan status" class="form-control"><?php echo $keluhan->status ?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-fk_mahasiswa" class=" form-control-label">Mahasiswa</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-fk_mahasiswa" name="fk_mahasiswa" placeholder="Masukan Mahasiswa" class="form-control" value="<?php echo $keluhan->fk_mahasiswa ?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-lingkup_keluhan" class=" form-control-label">Lingkup Keluhan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="lingkup_keluhan" id="input-lingkup_keluhan" name="fk_lingkup_keluhan" placeholder="Masukan Lingkup Keluhan" class="form-control" value="<?php echo $keluhan->fk_lingkup_keluhan ?>">
                                        <small class="help-block form-text">Hanya diisi angka</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-unit_kerja" class=" form-control-label">Unit Kerja</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-unit_kerja" name="fk_unit_kerja" placeholder="Masukan Unit Kerja" class="form-control" value="<?php echo $keluhan->fk_unit_kerja ?>">
                                        <small class="form-text text-muted">Hanya diisi angka</small>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm" form="form-input">
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

