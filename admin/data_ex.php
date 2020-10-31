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
        $sma = $_POST['sma']; 
        $gambar2 = $_POST['gambar2']; 
        $ex3 = $_POST['ex3']; 
        $des3 = $_POST['des3'];
        $gambar3 = $_POST['gambar3']; 
        $ex4 = $_POST['ex4']; 
        $des4 = $_POST['des4']; 
        $gambar4 = $_POST['gambar4'];

         //buat koneksi
         $strsql = "INSERT INTO education (id, kampus, tahun_kampus, des_kampus, major_kampus, sma, tahun_sma, des_sma, major_sma, smp, tahun_smp, des_smp, major_smp) 
         VALUES ('$id','$kampus','$tahun_kampus','$des_kampus','$major_kampus','$sma','$tahun_sma','$des_sma','$major_sma','$smp','$tahun_smp','$des_smp','$major_smp')";
         
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
        <h2>Pengisian About</h2>   
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
                                <div class="col-6"><b>Campus</b></div>
                                <div class="col-6"><span id="kampus_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Year</b></div>
                                <div class="col-6"><span id="tahun_kampus_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Desc Campus</b></div>
                                <div class="col-6"><span id="des_kampus_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Major</b></div>
                                <div class="col-6"><span id="major_kampus_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>SHS</b></div>
                                <div class="col-6"><span id="sma_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Year</b></div>
                                <div class="col-6"><span id="tahun_sma_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Desc SHS</b></div>
                                <div class="col-6"><span id="des_sma_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Major</b></div>
                                <div class="col-6"><span id="major_sma_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>JHS</b></div>
                                <div class="col-6"><span id="smp_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Year</b></div>
                                <div class="col-6"><span id="tahun_smp_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Desc JHS</b></div>
                                <div class="col-6"><span id="des_smp_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Major</b></div>
                                <div class="col-6"><span id="major_smp_"></span></div>
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
        <form id="myform" method="post" action="data_edu.php">
            <div class="form-group">
                <label>Id</label>
                <input id="id" class="form-control" type="text" name="id">
            </div>
            <div class="form-group">
                <label>Campus</label>
                <input id="kampus" class="form-control" type="text" name="kampus">
            </div>
            <div class="form-group">
                <label>Year</label>
                <input id="tahun_kampus" class="form-control" type="text" name="tahun_kampus">
            </div>
            <div class="form-group">
                <label>Desc Campus</label>
                <input id="des_kampus" class="form-control" type="text" name="des_kampus">
            </div>
            <div class="form-group">
                <label>Major</label>
                <input id="major_kampus" class="form-control" type="text" name="major_kampus">
            </div>      
            <div class="form-group">
                <label>SHS</label>
                <input id="sma" class="form-control" type="text" name="sma">
            </div>   
            <div class="form-group">
                <label>Year</label>
                <input id="tahun_sma" class="form-control" type="text" name="tahun_sma">
            </div>   
            <div class="form-group">
                <label>Desc SHS</label>
                <input id="des_sma" class="form-control" type="text" name="des_sma">
            </div>     
            <div class="form-group">
                <label>Major</label>
                <input id="major_sma" class="form-control" type="text" name="major_sma">
            </div>      
            <div class="form-group">
                <label>JHS</label>
                <input id="smp" class="form-control" type="text" name="smp">
            </div>   
            <div class="form-group">
                <label>Year</label>
                <input id="tahun_smp" class="form-control" type="text" name="tahun_smp">
            </div>   
            <div class="form-group">
                <label>Desc JHS</label>
                <input id="des_smp" class="form-control" type="text" name="des_smp">
            </div>   
            <div class="form-group">
                <label>Major</label>
                <input id="major_smp" class="form-control" type="text" name="major_smp">
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
            $('#des_gambar3_').text(des_gambar3);
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