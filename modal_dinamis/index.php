<?php
require_once("./application/config/database.php");
$query = mysqli_query($db, "SELECT * FROM daftar_paket;");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Modal bootstrap dinamis | wadagizig.com</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
 
  <body>
    <div class="container">
      <div class="row"> 
        <table class="table table-bordered">
        <tr>
        <td style='text-align:center'><b>No</b></td>
        <td style='text-align:center'><b>Kode Paket</b></td>
        <td style='text-align:center'><b>Nama Paket</b></td>
        <td style='text-align:center'><b>Keterangan</b></td>
        </thead>
        <tbody>
        <?php
        $no=1;
        foreach ($query as $row) {
            echo "<tr>
                <td style='text-align:center'>$no</td>
                <td style='text-align:left'>".$row['kode_paket']."</td>
                <td style='text-align:left'>".$row['nama_paket']."</td>
                <td style='text-align:center'><button class='btn btn-primary' data-toggle='modal' data-target='#show' data-id=".$row['id'].">Detail</button></td>
                </tr>";
            $no++;
        }
        ?>
        </tbody>
        </table>
      </div>
    </div>

<!-- Modal start here -->
<div class="modal fade" id="show" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Paket Pemrograman</h5>
                </div>
                <div class="modal-body">
                    <div class="modal-data"></div>
                </div>
            </div>
      </div>
</div>
<!-- End of Modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#show').on('show.bs.modal', function (e) {
            var getDetail = $(e.relatedTarget).data('id');
            /* fungsi AJAX untuk melakukan fetch data */
            $.ajax({
                type : 'post',
                url : './application/view/detail.php',
                /* detail per identifier ditampung pada berkas detail.php yang berada di folder application/view */
                data :  'getDetail='+ getDetail,
                /* memanggil fungsi getDetail dan mengirimkannya */
                success : function(data){
                $('.modal-data').html(data);
                /* menampilkan data dalam bentuk dokumen HTML */
                }
            });
         });
    });
  </script>
</body>
</html>
