<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php   
    include_once "header.php";
    include_once "koneksi.php";
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $strSQL ="SELECT * FROM about WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0 ){
            while($row = mysqli_fetch_assoc($runStrSQL)){
                $deskripsi=$row["deskripsi"];
                $nama= $row["nama"];
                $ttl= $row["ttl"];
                $alamat = $row["alamat"];
                $email = $row["email"];
                $telepon = $row["telepon"];
                $foto = $row["foto"];
            }
        }
    } 
    else {
        header("location:Aabout.php");
    }  
    $disableForm = isset($_GET['id'])?"enabled": "disabled";        
    ?>
    <div class="container">
        <h2>Edit About</h2>   
    <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pengeditan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Id</b></div>
                                <div class="col-6"><span id="id_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Deskripsi</b></div>
                                <div class="col-6"><span id="deskripsi_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Name</b></div>
                                <div class="col-6"><span id="nama_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Date of Birth</b></div>
                                <div class="col-6"><span id="ttl_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Address</b></div>
                                <div class="col-6"><span id="alamat_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Email</b></div>
                                <div class="col-6"><span id="email_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Phone</b></div>
                                <div class="col-6"><span id="telepon_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Photo</b></div>
                                <div class="col-6"><span id="foto_"></span></div>
                            </div>
                        </div>
                    </div>

                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- ini end modal -->
        
        <form id="myform" method="post" action="update_about.php">
            <div class="form-group">
                <label>Id</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly <?php echo $disableForm ?>  >
            </div>
            <div class="form-group">
                <label>Description</label>
                <input id="deskripsi" class="form-control" type="text" name="deskripsi" value="<?php echo $deskripsi ?>" <?php echo $disableForm ?> >
            </div>
            <div class="form-group">
                <label>Name</label>
                <input id="nama" class="form-control" type="text" name="nama" value="<?php echo $nama ?>" <?php echo $disableForm ?> >
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input id="ttl" class="form-control" type="text" name="ttl" value="<?php echo $ttl ?>" <?php echo $disableForm ?> >
            </div>           
            <div class="form-group">
                <label>Address</label>
                <input id="alamat" class="form-control" type="text" name="alamat" value="<?php echo $alamat ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>Email</label>
                <input id="email" class="form-control" type="text" name="email" value="<?php echo $email ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>Phone</label>
                <input id="telepon" class="form-control" type="text" name="telepon" value="<?php echo $telepon ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>Photo</label>
                <input id="foto" class="form-control" type="text" name="foto" value="<?php echo $foto ?>" <?php echo $disableForm ?> >
            </div>   
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan">   
        </form>
        
    </div>
    <?php include_once "footer.php"; ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const id = $('#id').val();
            const deskripsi = $('#deskripsi').val();
            const nama = $('#nama').val();
            const ttl = $('#ttl').val();
            const alamat = $('#alamat').val();
            const email = $('#email').val();
            const telepon = $('#telepon').val();
            const foto = $('#foto').val();

            $('#id_').text(id);
            $('#deskripsi_').text(deskripsi);
            $('#nama_').text(nama);
            $('#ttl_').text(ttl);
            $('#alamat_').text(alamat);
            $('#email_').text(email);
            $('#telepon_').text(telepon);
            $('#foto_').text(foto);

            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>