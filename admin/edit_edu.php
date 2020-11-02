<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Education</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
    <?php   
    include_once "header.php";
    include_once "koneksi.php";
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $strSQL ="SELECT * FROM education WHERE id='".$id."'";
        $runStrSQL = mysqli_query($conn,$strSQL);
        $jmlRowData = mysqli_num_rows($runStrSQL);
        if ($jmlRowData > 0 ){
            while($row = mysqli_fetch_assoc($runStrSQL)){
                $kampus=$row["kampus"];
                $tahun_kampus= $row["tahun_kampus"];
                $des_kampus= $row["des_kampus"];
                $major_kampus = $row["major_kampus"];
                $sma = $row["sma"];
                $tahun_sma = $row["tahun_sma"];
                $des_sma = $row["des_sma"];
                $major_sma = $row["major_sma"];
                $smp=$row["smp"];
                $tahun_smp= $row["tahun_smp"];
                $des_smp= $row["des_smp"];
                $major_smp = $row["major_smp"];
            }
        }
    } 
    else {
        header("location:Aedu.php");
    }  
    $disableForm = isset($_GET['id'])?"enabled": "disabled";        
    ?>
    <div class="container">
        <h2>Edit Resume</h2>   
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
        
        <form id="myform" method="post" action="update_edu.php">
            <div class="form-group">
                <label>Id</label>
                <input id="id" class="form-control" type="text" name="id" value="<?php echo $id ?>" readonly <?php echo $disableForm ?>  >
            </div>
            <div class="form-group">
                <label>Campus</label>
                <input id="kampus" class="form-control" type="text" name="kampus" value="<?php echo $kampus ?>" <?php echo $disableForm ?> >
            </div>
            <div class="form-group">
                <label>Year</label>
                <input id="tahun_kampus" class="form-control" type="text" name="tahun_kampus" value="<?php echo $tahun_kampus ?>" <?php echo $disableForm ?> >
            </div>
            <div class="form-group">
                <label>Desc Campus </label>
                <input id="des_kampus" class="form-control" type="text" name="des_kampus" value="<?php echo $des_kampus ?>" <?php echo $disableForm ?> >
            </div>           
            <div class="form-group">
                <label>Major</label>
                <input id="major_kampus" class="form-control" type="text" name="major_kampus" value="<?php echo $major_kampus ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>SHS</label>
                <input id="sma" class="form-control" type="text" name="sma" value="<?php echo $sma ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>Year</label>
                <input id="tahun_sma" class="form-control" type="text" name="tahun_sma" value="<?php echo $tahun_sma ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>Desc SHS</label>
                <input id="des_sma" class="form-control" type="text" name="des_sma" value="<?php echo $des_sma ?>" <?php echo $disableForm ?> >
            </div>   
            <div class="form-group">
                <label>Major</label>
                <input id="major_sma" class="form-control" type="text" name="major_sma" value="<?php echo $major_sma ?>" <?php echo $disableForm ?> >
            </div>  
            <div class="form-group">
                <label>JHS</label>
                <input id="smp" class="form-control" type="text" name="smp" value="<?php echo $smp ?>" <?php echo $disableForm ?> >
            </div>  
            <div class="form-group">
                <label>Year</label>
                <input id="tahun_smp" class="form-control" type="text" name="tahun_smp" value="<?php echo $tahun_smp ?>" <?php echo $disableForm ?> >
            </div>  
            <div class="form-group">
                <label>Desc JHS</label>
                <input id="des_smp" class="form-control" type="text" name="des_smp" value="<?php echo $des_smp ?>" <?php echo $disableForm ?> >
            </div>  
            <div class="form-group">
                <label>Major</label>
                <input id="major_smp" class="form-control" type="text" name="major_smp" value="<?php echo $major_smp ?>" <?php echo $disableForm ?> >
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
            const kampus = $('#kampus').val();
            const tahun_kampus = $('#tahun_kampus').val();
            const des_kampus = $('#des_kampus').val();
            const major_kampus = $('#major_kampus').val();
            const sma = $('#sma').val();
            const tahun_sma = $('#tahun_sma').val();
            const des_sma = $('#des_sma').val();
            const major_sma = $('#major_sma').val();
            const smp = $('#smp').val();
            const tahun_smp = $('#tahun_smp').val();
            const des_smp = $('#des_smp').val();
            const major_smp = $('#major_smp').val();

            $('#id_').text(id);
            $('#kampus_').text(kampus);
            $('#tahun_kampus_').text(tahun_kampus);
            $('#des_kampus_').text(des_kampus);
            $('#major_kampus_').text(major_kampus);
            $('#sma_').text(sma);
            $('#tahun_sma_').text(tahun_sma);
            $('#des_sma_').text(des_sma);
            $('#major_sma_').text(major_sma);
            $('#smp_').text(smp);
            $('#tahun_smp_').text(tahun_smp);
            $('#des_smp_').text(des_smp);
            $('#major_smp_').text(major_smp);

            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    
    </script>
</body>
</html>