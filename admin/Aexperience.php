<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Experience</title>
     <!-- CSS only -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <?php
        include_once "header.php";
        include_once "koneksi.php";
        if (isset($_GET["sukseshapus"])) {
            echo "<div id='sukses' class='alert alert-success alert-dismissible fade show'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "Data berhasil dihapus dari database";
            echo "</div>";
        }
    
        elseif (isset($_GET["gagalhapus"])) {
            echo "<div id='gagal' class='alert alert-danger alert-dismissible fade show'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "Data gagal dihapus dari database";
            echo "</div>";
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Experience</h1>
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-md-12">
            <a href="data_ex.php" class="btn btn-primary">Input Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <table id="listtable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Experience 1</th>
                        <th>Description 1</th>
                        <th>Photo 1</th>
                        <th>Experience 2</th>
                        <th>Description 2</th>
                        <th>Photo 2</th>
                        <th>Experience 3</th>
                        <th>Description 3</th>
                        <th>Photo 3</th>
                        <th>Experience 4</th>
                        <th>Description 4</th>
                        <th>Photo 4</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM experience";
    $runStrSQL = mysqli_query($conn,$strSQL);
    $jmlRowData = mysqli_num_rows($runStrSQL);
    if ($jmlRowData < 0){
        echo "<tr><td colspan='4'>Data Tidak Terdaftar Dalam Database</td></tr>";
    }
    else{
        while($row = mysqli_fetch_assoc($runStrSQL)){
    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['ex1']?></td>
                        <td><?php echo $row['des1']?></td>
                        <td><?php echo $row['gambar1']?></td>
                        <td><?php echo $row['ex2']?></td>
                        <td><?php echo $row['des2']?></td>
                        <td><?php echo $row['gambar2']?></td>
                        <td><?php echo $row['ex3']?></td>
                        <td><?php echo $row['des3']?></td>
                        <td><?php echo $row['gambar3']?></td>
                        <td><?php echo $row['ex4']?></td>
                        <td><?php echo $row['des4']?></td>
                        <td><?php echo $row['gambar4']?></td>
                        <td>
                            <a href="edit_ex.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>
                            <a class="btn btn-danger delete_data" id="<?php echo $row['id']?>-<?php echo $row['ex1']?>-<?php echo $row['des1']?>-<?php echo $row['gambar1']?>-<?php echo $row['ex2']?>-<?php echo $row['des2']?>-<?php echo $row['gambar2']?>-<?php echo $row['ex3']?>-<?php echo $row['des3']?>-<?php echo $row['gambar3']?>-<?php echo $row['ex4']?>-<?php echo $row['des4']?>-<?php echo $row['gambar4']?>" href="javascript:void(0);">Hapus</a>
                        </td>
                    </tr>
    <?php
        }
    }
    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <?php
        include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src=" https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#listtable').DataTable();
    } );
    </script>
    <script>
      $(document).ready(function () {
        $(document).on('click', '.delete_data', function (e) {
            e.preventDefault();
            var id = $(this).prop('id');
            var splited = id.split("-");
            var pid = splited[0];
            var ex1 = splited[1];
            var des1 = splited[2];
            var gambar1 = splited[3];
            var ex2 = splited[4];
            var des2 = splited[5];
            var gambar2 = splited[6];
            var ex3 = splited[7];
            var des3 = splited[8];
            var gambar3 = splited[9];
            var ex4 = splited[10];
            var des4 = splited[11];
            var gambar4 = splited[12];
            var parent = $(this).parent("td").parent("tr");
            var mes = 'Apakah anda ingin menghapus data ini ? <br><pre><p class="text-primary"><strong>Campus : ' + ex1 + '</strong></p><p class="text-primary"><strong>Year : ' + des1 + '</strong></p><p class="text-primary"><strong>Desc Campus : ' + gambar1 + '</strong></p><p class="text-primary"><strong>Major : ' + ex2 + '</strong></p><p class="text-primary"><strong>SHS : ' + sma + '</strong></p><p class="text-primary"><strong>Year : ' + des2 + '</strong></p><p class="text-primary"><strong>Desc SMA: ' + gambar2 + '</strong></p><p class="text-primary"><strong>Major : ' + ex3 + '</strong></p><p class="text-primary"><strong>JHS : ' + des3 + '</strong></p><p class="text-primary"><strong>Year : ' + gambar3 + '</strong></p><p class="text-primary"><strong>Desc JHS : ' + ex4 + '</strong></p><p class="text-primary"><strong>Major : ' + des4 + '</strong></p></pre>';
            bootbox.dialog({
                message: mes,
                title: "Hapus Data yang dipilih !",
                closeButton: true,
                buttons: {
                    success: {
                        label: "No",
                        className: "btn-succes",
                        callback: function () {
                            $('.bootbox').modal('hide');
                        }
                    },
                    danger: {
                        label: "Remove",
                        className: "btn-danger",
                        callback: function () {
                            $.post('hapus_ex.php', { 'delete': pid })
                                .done(function (response) {
                                    bootbox.alert(response);
                                    parent.fadeOut('slow');
                                })
                                .fail(function () {
                                    bootbox.alert('Something Went Wrog ....');
                                })
                        }
                    }
                }
            });
        });
      });
  </script>
</body>
</html>