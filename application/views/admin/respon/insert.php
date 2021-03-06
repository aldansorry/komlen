<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">  

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Respon</h2>
                        <a href="<?php echo base_url('Admin/Respon') ?>" class="au-btn au-btn-icon btn-secondary">
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
                                        <label for="input-balasan" class=" form-control-label">Balasan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="balasan" id="input-balasan" rows="4" placeholder="Masukan Balasan" class="form-control"><?php echo set_value("balasan") ?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-keluhan" class=" form-control-label">Keluhan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="fk_keluhan" id="" class="form-control">
                                            <?php foreach ($this->db->get("keluhan")->result() as $key => $value): ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->judul ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-petugas" class=" form-control-label">Petugas</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-petugas" name="fk_petugas" placeholder="Masukan Petugas" class="form-control" value="<?php echo set_value("fk_petugas") ?>">
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

