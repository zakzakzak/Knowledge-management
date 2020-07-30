<div class="content-wrapper">





    <section class="content">
    <div class="row">




      <div class="col-xs-12">
      <div class="box">
      <div class="box-body">

                <h2>
                  Judul topik
                  <br>
                  <small>29 Mei 2020</small>
                </h2>
                <br>
                <p style="font-weight: normal; ">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident,
                  sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <p  style="font-weight: normal;" >
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                </p>
                <br>


                <div class="row">
                  <div class="col-md-3">
                    <a type="button" class="btn btn-block btn-danger" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download Modul</a>
                  </div>

                  <div class="col-md-9">
                  </div>



                </div>
                <br>
                <br>
                <h3>
                  <strong>Catatan Pegawai</strong>

                </h3>
                <br>

                <table id="table_permin1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Pegawai</th>
                      <th>Tanggal upload</th>
                      <th>File Word</th>
                      <th>File Excel</th>
                    </tr>
                  </thead>


                  <tbody>

                  <tr>
                    <td style="font-weight: normal;">Abrar Anugrah Harahap</td>
                    <td style="font-weight: normal;">1 Juni 2020</td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-primary" href="#"><i class="fa fa-fw fa-file-word-o"></i> Download</a></td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-success" href="#"><i class="fa fa-fw fa-file-excel-o"></i> Download</a></td>
                  </tr>

                  <tr>
                    <td style="font-weight: normal;">Rizky Nirwan</td>
                    <td style="font-weight: normal;">3 Juni 2020</td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-primary" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-success" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                  </tr>

                  <tr>
                    <td style="font-weight: normal;">Donny Dharmawan</td>
                    <td style="font-weight: normal;">5 Juni 2020</td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-primary" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-success" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                  </tr>

                  <tr>
                    <td style="font-weight: normal;">Jhan Ivander Purba</td>
                    <td style="font-weight: normal;">2 Juni 2020</td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-primary" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-success" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                  </tr>

                  <tr>
                    <td style="font-weight: normal;">Choirul Anwar</td>
                    <td style="font-weight: normal;">6 Juni 2020</td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-primary" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                    <td style="font-weight: normal;"><a type="button" class="btn btn-block btn-success" href="#"><i class="fa fa-fw fa-file-pdf-o"></i> Download</a></td>
                  </tr>

                  </tbody>
                </table>

                <div class="row">
                  <br>
                </div>

                <div class="row">
                  <div class="col-md-8">
                  </div>


                  <div class="col-md-2">
                    <a type="button" class="btn btn-block btn-primary" href="<?= base_url()."main" ?>">Kembali</a>
                  </div>

                  <div class="col-md-2">
                    <a type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default">Upload catatan</a>
                  </div>

                </div>

        </div>
        </div>
        </div>



        <div class="modal fade" id="modal-default">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title">Upload Catatan</h4>
                 </div>
                 <div class="modal-body">

                   <form role="form">
                      <div class="box-body">


                        <div class="form-group">
                          <label for="exampleInputFile">Upload Word File</label>
                          <input type="file" id="exampleInputFile">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputFile">Upload Excel File</label>
                          <input type="file" id="exampleInputFile">
                        </div>

                      </div>
                      <!-- /.box-body -->

                    </form>

                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
               </div>
               <!-- /.modal-content -->
             </div>
             <!-- /.modal-dialog -->
           </div>






        </div>
        </section>










</div>
</body>
</html>
