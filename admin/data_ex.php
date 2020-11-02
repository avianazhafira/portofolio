<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Experience</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php   
    include_once "header.php";
    $status = 2;  
    if (isset($_POST['id'])) {
        include_once "koneksi.php"; 
        $id = $_POST['id'];
        $ex1= $_POST['ex1'];
        $des1 = $_POST['des1'];
        $gambar1 = $_POST['gambar1'];
        $ex2 = $_POST['ex2']; 
        $des2 = $_POST['des2']; 
        $gambar2 = $_POST['gambar2']; 
        $ex3 = $_POST['ex3']; 
        $des3 = $_POST['des3'];
        $gambar3 = $_POST['gambar3']; 
        $ex4 = $_POST['ex4']; 
        $des4 = $_POST['des4']; 
        $gambar4 = $_POST['gambar4'];

         //buat koneksi
         $strsql = "INSERT INTO experience (id, ex1, des1, gambar1, ex2, des2, gambar2, ex3, des3, gambar3, ex4, des4, gambar4) 
         VALUES ('$id','$ex1','$des1','$gambar1','$ex2','$des2','$gambar2','$ex3','$des3','$gambar3','$ex4','$des4','$gambar4')";
         
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
        <h2>Pengisian Experience</h2>   
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
                                <div class="col-6"><b>Id</b></div>
                                <div class="col-6"><span id="id_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Experience 1</b></div>
                                <div class="col-6"><span id="ex1_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Description 1</b></div>
                                <div class="col-6"><span id="des1_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Photo 1</b></div>
                                <div class="col-6"><span id="gambar1_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Experience 2</b></div>
                                <div class="col-6"><span id="ex2_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Description 2</b></div>
                                <div class="col-6"><span id="des2_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Photo 2</b></div>
                                <div class="col-6"><span id="gambar2_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Experience 3</b></div>
                                <div class="col-6"><span id="ex3_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Description 3</b></div>
                                <div class="col-6"><span id="des3_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Photo 3</b></div>
                                <div class="col-6"><span id="gambar3_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Experience 4</b></div>
                                <div class="col-6"><span id="ex4_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Description 4</b></div>
                                <div class="col-6"><span id="des4_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Photo 4</b></div>
                                <div class="col-6"><span id="gambar4_"></span></div>
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
                Data berhasil diinput ke dalam database.
            </div>
        <?php 
            }
            else if ($status == 0){
        ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                Data tidak berhasil diinput ke dalam database.
            </div>
        <?php 
            }
        
        ?>
        <form id="myform" method="post" action="data_ex.php">
            <div class="form-group">
                <label>Id</label>
                <input id="id" class="form-control" type="text" name="id">
            </div>
            <div class="form-group">
                <label>Experience 1</label>
                <input id="ex1" class="form-control" type="text" name="ex1">
            </div>
            <div class="form-group">
                <label>Description 1</label>
                <input id="des1" class="form-control" type="text" name="des1">
            </div>
            <div class="form-group">
                <label>Photo 1</label>
                <input id="gambar1" class="form-control" type="text" name="gambar1">
            </div>
            <div class="form-group">
                <label>Experience 2</label>
                <input id="ex2" class="form-control" type="text" name="ex2">
            </div>      
            <div class="form-group">
                <label>Description 2</label>
                <input id="des2" class="form-control" type="text" name="des2">
            </div>   
            <div class="form-group">
                <label>Photo 2</label>
                <input id="gambar2" class="form-control" type="text" name="gambar2">
            </div>   
            <div class="form-group">
                <label>Experience 3</label>
                <input id="ex3" class="form-control" type="text" name="ex3">
            </div>     
            <div class="form-group">
                <label>Description 3</label>
                <input id="des3" class="form-control" type="text" name="des3">
            </div>      
            <div class="form-group">
                <label>Photo 3</label>
                <input id="gambar3" class="form-control" type="text" name="gambar3">
            </div>   
            <div class="form-group">
                <label>Experience 4</label>
                <input id="ex4" class="form-control" type="text" name="ex4">
            </div>   
            <div class="form-group">
                <label>Description 4</label>
                <input id="des4" class="form-control" type="text" name="des4">
            </div>   
            <div class="form-group">
                <label>Photo 4</label>
                <input id="gambar4" class="form-control" type="text" name="gambar4">
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
            const ex1 = $('#ex1').val();
            const des1 = $('#des1').val();
            const gambar1 = $('#gambar1').val();
            const ex2 = $('#ex2').val();
            const des2 = $('#des2').val();
            const gambar2 = $('#gambar2').val();
            const ex3 = $('#ex3').val();
            const des3 = $('#des3').val();
            const gambar3 = $('#gambar3').val();
            const ex4 = $('#ex4').val();
            const des4 = $('#des4').val();
            const gambar4 = $('#gambar4').val();

            $('#id_').text(id);
            $('#ex1_').text(ex1);
            $('#des1_').text(des1);
            $('#gambar1_').text(gambar1);
            $('#ex2_').text(ex2);
            $('#des2_').text(des2);
            $('#gambar2_').text(gambar2);
            $('#ex3_').text(ex3);
            $('#des3_').text(des3);
            $('#gambar3_').text(gambar3);
            $('#ex4_').text(ex4);
            $('#des4_').text(des4);
            $('#gambar4_').text(gambar4);

         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>