<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">  

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Pengguna</h2>
                        <a href="<?php echo base_url('Admin/Pengguna') ?>" class="au-btn au-btn-icon btn-secondary">
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
                                        <label for="input-nik" class=" form-control-label">Nik</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-nik" name="nik" placeholder="Masukan nik" class="form-control" value="<?php echo set_value("nik") ?>">
                                        <small class="form-text text-muted">Hanya diisi angka</small>
                                        <?php echo form_error('nik')?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-nama" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-nama" name="nama" placeholder="Masukan Nama" class="form-control" value="<?php echo set_value("nama") ?>">
                                        <small class="form-text text-muted">Hanya diisi huruf dan space</small>
                                    </div>
                                    <?php echo form_error('nama')?>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-alamat" class=" form-control-label">Alamat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="alamat" id="input-alamat" rows="4" placeholder="Masukan Alamat" class="form-control"><?php echo set_value("alamat") ?></textarea>
                                    </div>
                                    <?php echo form_error('alamat')?>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-telp" class=" form-control-label">Telepon</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-telp" name="telp" placeholder="Masukan Telepon" class="form-control" value="<?php echo set_value("telp") ?>">
                                    <?php echo form_error('telp')?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="input-email" name="email" placeholder="Masukan Email" class="form-control" value="<?php echo set_value("email") ?>">
                                        <small class="help-block form-text">Masukan email yang valid</small>
                                        <?php echo form_error('email')?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-nama" class=" form-control-label">Username</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="input-username" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo set_value("username") ?>">
                                        <small class="form-text text-muted">Hanya diisi huruf dan angka</small>
                                        <?php echo form_error('username')?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-password" class=" form-control-label">Password</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" id="input-password" name="password" placeholder="Masukan Password" class="form-control">
                                        <small class="help-block form-text">Minimal 6 karakter</small>
                                        <?php echo form_error('password')?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="input-fk_level" class=" form-control-label">fk_level</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="fk_level" id="" class="form-control">
                                            <?php foreach ($this->db->get('level')->result() as $value): ?>
                                                <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
                                            <?php endforeach ?>
                                        </select>
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

