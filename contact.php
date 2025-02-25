<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .form{
            font-size : 20px;
            color:white;
        }
    </style>
</head>
<body style="background-color:#336699">
    <?php   
    include_once "header.php";
    $status = 2;  
    if (isset($_POST['nama'])) {
        include_once "koneksi.php"; 
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $subjek = $_POST['subjek'];
        $isi = $_POST['isi']; 

         //buat koneksi
         $strsql = "INSERT INTO contact (email, nama, subjek, isi) 
         VALUES ('$email','$nama','$subjek','$isi')";
         
         $runSQL = mysqli_query($conn,$strsql);        
         if ($runSQL) {
             $status = 1; //sukses
         }  
         else {
             $status = 0; //tidak sukses;
         }       
    }            
    ?>
    <div class="container">
        <h2 class="h2 py-5" style="color:white;">CONTACT ME</h2>   
    <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Pengisian</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>Your Name</b></div>
                                <div class="col-6"><span id="nama_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Your Email</b></div>
                                <div class="col-6"><span id="email_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Subject</b></div>
                                <div class="col-6"><span id="subjek_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Your Messages</b></div>
                                <div class="col-6"><span id="isi_"></span></div>
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
        <?php 
            if ($status == 1) {
        ?>    
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data berhasil diinput. Terima kasih sudah menghubungi kami!
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput.
            </div>
        <?php 
            }
        
        ?>
        <form class="form" id="myform" method="post" action="contact.php">
            <div class="form-group">
                <label>Name</label>
                <input id="nama" class="form-control" type="text" name="nama">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input id="email" class="form-control" type="text" name="email">
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input id="subjek" class="form-control" type="text" name="subjek">
            </div>
            <div class="form-group">
                <label>Messages</label>
                <textarea id="isi" class="form-control" type="text" name="isi"></textarea>
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
            const nama = $('#nama').val();
            const email = $('#email').val();
            const subjek = $('#subjek').val();
            const isi = $('#isi').val();

            $('#nama_').text(nama);
            $('#email_').text(email);
            $('#subjek_').text(subjek);
            $('#isi_').text(isi);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>