<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">  

            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Keluhan</h2>
                        <a href="<?php echo base_url('Admin/Keluhan/insert') ?>" class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>Tambah Data</a>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>kode</th>
                                        <th>tanggal</th>
                                        <th>judul</th>
                                        <th>keluhan</th>
                                        <th>solusi</th>
                                        <th>status</th>
                                        <th>mahasiswa</th>
                                        <th>lingkup keluhan</th>
                                        <th>unit kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $value): ?>
                                        <tr>
                                            <td><?php echo $value->id ?></td>
                                            <td><?php echo $value->kode ?></td>
                                            <td><?php echo $value->tanggal ?></td>
                                            <td><?php echo $value->judul ?></td>
                                            <td><?php echo $value->keluhan ?></td>
                                            <td><?php echo $value->solusi ?></td>
                                            <td><?php echo $value->status ?></td>
                                            <td><?php echo $value->fk_mahasiswa ?></td>
                                            <td><?php echo $value->fk_lingkup_keluhan ?></td>
                                            <td><?php echo $value->fk_unit_kerja ?></td>
                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>