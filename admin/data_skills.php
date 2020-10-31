<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Skills</title>
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
        $html = $_POST['html'];
        $css = $_POST['css'];
        $php = $_POST['php'];
        $ms = $_POST['ms']; 
        $tm = $_POST['tm']; 
        $ps = $_POST['ps']; 

         //buat koneksi
         $strsql = "INSERT INTO skills (id, html, css, php, ms, tm, ps) 
         VALUES ('$id','$html','$css','$php','$ms','$tm','$ps')";
         
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
        <h2>Pengisian Skills</h2>   
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
                                <div class="col-6"><b>HTML</b></div>
                                <div class="col-6"><span id="html_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>CSS</b></div>
                                <div class="col-6"><span id="css_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>PHP</b></div>
                                <div class="col-6"><span id="php_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Microsoft</b></div>
                                <div class="col-6"><span id="ms_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Teamwork</b></div>
                                <div class="col-6"><span id="tm_"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Public Speaking</b></div>
                                <div class="col-6"><span id="ps_"></span></div>
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
        <form id="myform" method="post" action="data_skills.php">
            <div class="form-group">
                <label>Id</label>
                <input id="id" class="form-control" type="text" name="id">
            </div>
            <div class="form-group">
                <label>HTML</label>
                <input id="html" class="form-control" type="text" name="html">
            </div>
            <div class="form-group">
                <label>CSS</label>
                <input id="css" class="form-control" type="text" name="css">
            </div>
            <div class="form-group">
                <label>PHP</label>
                <input id="php" class="form-control" type="text" name="php">
            </div>
            <div class="form-group">
                <label>Microsoft</label>
                <input id="ms" class="form-control" type="text" name="ms">
            </div>      
            <div class="form-group">
                <label>Teamwork</label>
                <input id="tm" class="form-control" type="text" name="tm">
            </div>   
            <div class="form-group">
                <label>Public Speaking</label>
                <input id="ps" class="form-control" type="text" name="ps">
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
            const html = $('#html').val();
            const css = $('#css').val();
            const php = $('#php').val();
            const ms = $('#ms').val();
            const tm = $('#tm').val();
            const ps = $('#ps').val();

            $('#id_').text(id);
            $('#html_').text(html);
            $('#css_').text(css);
            $('#php_').text(php);
            $('#ms_').text(ms);
            $('#tm_').text(tm);
            $('#ps_').text(ps);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>