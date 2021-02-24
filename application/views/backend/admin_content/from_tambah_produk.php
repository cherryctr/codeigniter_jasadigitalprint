 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Validation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Tambah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="<?php echo base_url(); ?>Proses/TambahProduk " method="post" enctype="multipart/form-data">
             
                <div class="card-body">
                  <div class="form-group">
                  <label for="sel1">Kategori :</label>
                   <select class="form-control" id="sel1" name="kategori">
                   <option value=""> ----- Pilih Kategori -----</option>
                    <?php foreach ($kategori as $key) {?>
                      <option value="<?php echo $key['kategori']; ?>"><?php echo $key['kategori']; ?></option>
                    <?php } ?>
                    
                  </select>
                </div>

                <div class="form-group">
                  <label>Title</label>

                  <div class="input-group">
                    <input type="text" name="title" class="form-control"  placeholder="Input Title">
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                    <label>diskon&nbsp;<b>(opsional)</b> :</label>

                    <div class="input-group">
                      <input type="text" name="diskon" class="form-control"/>
                      <div class="input-group-append">
                          <div class="input-group-text">%</div>
                      </div>
                      
                      </div>
                      <p><b>Note : Tulis diskon hanya angka saja ya jangan menggunakan (%)</b></p>
                    <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>harga</label>
                    
                  <div class="input-group">
                    <input type="text" name="harga" class="form-control">
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                   
                        <label>Deskripsi</label>
                         <textarea name="deskripsi" id="textarea" class="textarea" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                          <!--  <textarea name="deskripsi" id="textarea" type="text" value="" rows="5" cols="30" dir="ltr" required></textarea> -->
                    
                </div>

                <div class="form-group">
                  
                    <input name="gambar_old" type="hidden" class="form-control-file" id="exampleFormControlFile1"><br>
                    
                    <label for="exampleFormControlFile1">Klik untuk memilih gambar</label>
                    <input name="gambar" type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
    $(document).ready(function () {
      $("[name='quickForm']").validate({
           rules: {
            deskripsi: {
              required: true,
              deskripsi: true,
            
          },

          messages: {
              deskripsi: {
                required: "Masukan deskripsi terlebih dahulu",
            },
          }
      })
    }

    
  </script>