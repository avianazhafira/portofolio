<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin About</title>
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
            <h1>About</h1>
            </div>
        </div>
        <div class="row mb-3 mt-3">
            <div class="col-md-12">
            <a href="data_about.php" class="btn btn-primary">Input Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <table id="listtable" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Description</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
    <?php
    //buat sql
    $strSQL = "SELECT * FROM about";
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
                        <td><?php echo $row['deskripsi']?></td>
                        <td><?php echo $row['nama']?></td>
                        <td><?php echo $row['ttl']?></td>
                        <td><?php echo $row['alamat']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['telepon']?></td>
                        <td><img class="img=thumbnail" style="height:60px" src="images/<?php echo $row["foto"]; ?>"></td>
                        <td>
                            <a href="edit_about.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a>
                            <a class="btn btn-danger delete_data" id="<?php echo $row['id']?>-<?php echo $row['deskripsi']?>-<?php echo $row['nama']?>-<?php echo $row['ttl']?>-<?php echo $row['alamat']?>-<?php echo $row['email']?>-<?php echo $row['telepon']?>-<?php echo $row['foto']?>" href="javascript:void(0);">Hapus</a>
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
            var deskripsi = splited[1];
            var nama = splited[2];
            var ttl = splited[3];
            var alamat = splited[4];
            var email = splited[5];
            var telepon = splited[6];
            var foto = splited[7];
            var parent = $(this).parent("td").parent("tr");
            var mes = 'Apakah anda ingin menghapus data ini ? <br><pre><p class="text-primary"><strong>Description : ' + deskripsi + '</strong></p><p class="text-primary"><strong>Name : ' + nama + '</strong></p><p class="text-primary"><strong>Date of Birth : ' + ttl + '</strong></p><p class="text-primary"><strong>Address : ' + alamat + '</strong></p><p class="text-primary"><strong>Email : ' + email + '</strong></p><p class="text-primary"><strong>Phone : ' + telepon + '</strong></p><p class="text-primary"><strong>Photo: ' + foto + '</strong></p></pre>';
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
                            $.post('hapus_about.php', { 'delete': pid })
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