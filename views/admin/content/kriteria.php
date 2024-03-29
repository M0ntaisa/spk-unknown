           <!-- [ navigation menu ] end -->
           <div class="pcoded-content">
               <!-- [ breadcrumb ] start -->
               <div class="page-header">
                   <div class="page-block">
                       <div class="row align-items-center">
                           <div class="col-md-8">
                               <div class="page-header-title">
                                   <h4 class="m-b-10">Kriteria</h4>
                               </div>
                               <ul class="breadcrumb">
                                   <li class="breadcrumb-item">
                                       <a href="index.html">
                                           <i class="feather icon-layers"></i>
                                       </a>
                                   </li>
                                   <li class="breadcrumb-item">
                                       <a href="#!">Data Kriteria</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- [ breadcrumb ] end -->
               <div class="pcoded-inner-content">
                   <!-- Main-body start -->
                   <div class="main-body">
                       <div class="page-wrapper">
                           <!-- Page-body start -->
                           <div class="page-body">
                               <div class="row">
                                   <div class="col-sm-12">
                                       <!-- Zero config.table start -->
                                       <div class="card">
                                           <div class="card-block">
                                               <div class="dt-responsive table-responsive">
                                                   <table id="simpletable"
                                                       class="table table-striped table-bordered nowrap">
                                                       <thead>
                                                           <tr>
                                                               <th>No</th>
                                                               <th>Kriteria</th>
                                                               <th width="30px">Weight</th>
                                                               <th>Aksi</th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                       <form action="post">
                                                            <?php
                                                                $query  = $pdo->getAll('tb_kriteria', 'id_kriteria');
                                                                $jumlah = $query->rowCount();
                                                                $no = 1;
                                                                if ($jumlah > 0) {
                                                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                                                <!-- <form action="aksi/?aksi=kriteria_upd&kd_kriteria=<?= $row->kd_kriteria ?>"> -->
                                                                    <tr>
                                                                        <td width="10"><?= $no++; ?></td>
                                                                        <td><?= $row->nm_kriteria; ?></td>
                                                                        <td><input type="number" min="0" max="" value="<?= $row->weight; ?>"></td>
                                                                        <td width="15">
                                                                            <button type="submit" value="ubah" name="ubah" class="btn btn-warning btn-sm">Ubah</button>
                                                                        </td>
                                                                    </tr>
                                                                
                                                                <?php } ?>
                                                            <?php } ?>
                                                            </form>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- Page-body end -->
                       </div>
                   </div>
                   <!-- Main-body end -->
                   <div id="styleSelector">

                   </div>
               </div>
           </div>
           <!-- [ style Customizer ] start -->
           <div id="styleSelector">
           </div>
           <!-- [ style Customizer ] end -->
           </div>
           </div>
           </div>
           </div>
           <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
               <div class="modal-dialog modal-sm" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">Ubah Nama Kriteria</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <form class="form-material">
                               <div class="form-group form-default form-static-label">
                                   <input type="text" name="footer-email" class="form-control"
                                       placeholder="Masukkan Nama Kriteria" required="">
                                   <span class="form-bar"></span>
                                   <label class="float-label">Kriteria</label>
                               </div>
                           </form>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-default btn-sm waves-effect "
                               data-dismiss="modal">Keluar</button>
                           <button type="button" class="btn btn-primary btn-sm waves-effect waves-light ">Simpan Perubahan</button>
                       </div>
                   </div>
               </div>
           </div>

           <?php
                if (isset($_POST['ubah'])) {

                    echo "<pre>";
                    print_r($_POST);die;

                // untuk fungsi update parameternya (nama_tabel, id untuk where, id untuk nilai, nama_kolom, nama_value/nama_hasil)
                $update = $pdo->Update('tb_data', 'id_data' ,$id_data, ['judul', 'link', 'text'], [$judul, $link, $text]);

                if ($update == TRUE) {
                    echo "Berhasil";
                } else {
                    echo "Gagal";
                }

                }
            ?>