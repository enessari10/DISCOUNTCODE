<?php
// Veritabanı bağlantısı için database.php dosyasını çağırıyorum.
include("config/Database.php"); 
session_start();
if (empty($_COOKIE['login'])){
    header("location: login.php"); 
}

$query = "SELECT * FROM Formlar ORDER BY Form_ID DESC "; // form ıd en büyük olana göre çağırdık
$result = mysqli_query($db, $query) or die (mysqli_error($db)); // queryi sorguya atıyor hata varsa çalıştırma

$data= array(); // boş array verileri atamak için

while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {$data[]=$row;} // veritabanındaki bütün kayıtları arraya atadım.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
<!-- DataTables -->
    <link href="css/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="css/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="css/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="css/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
<style>
    div.dataTables_wrapper div.dataTables_filter input {
      width: 400px;
  margin: 0;
  border: solid 2px #344750;

} 
.dt-buttons {
	margin-bottom: 10px;
}
.dt-buttons.btn-group{
	float: left;
	margin-right: 2%;
}
.dataTables_filter {
	float: left;
	margin-top: 4px;
	margin-right: 2%;
	text-align: left;
}

.dataTables_length{
	float: right;
	margin-top: 4px;
	margin-left: 2%;
}
</style>


</head>
<body>
    <div class="container">
    <table id="myTable" class="display table table-striped">
    <thead>
        <tr>
            <th>FormId</th>
            <th>Ad Soyad</th>
            <th>Email Adres</th>
            <th>Telefon</th>
            <th>Firma Adı</th>
            <th>İndirim Kodu</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data as $value) { // elemanları tek tek döndük
            echo'
            <tr>
            <td>'.$value['Form_ID'].'</td>
            <td>'.$value['Ad_Soyad'].'</td>
            <td>'.$value['Email'].'</td>
            <td>'.$value['Telefon'].'</td>
            <td>'.$value['Firma_Adi'].'</td>
            <td>'.$value['Indirim_Kodu'].'</td>
        </tr>
        ';
        }
        ?>

    </tbody>
</table>
    </div>
</body>
    <script src="js/common_scripts.js"></script>
	<script src="js/common_func.js"></script>
<!-- Required datatable js -->
<script src="css/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="css/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="css/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="css/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="css/jszip/jszip.min.js"></script>
        <script src="css/pdfmake/build/pdfmake.min.js"></script>
        <script src="css/pdfmake/build/vfs_fonts.js"></script>
        <script src="css/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="css/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="css/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <script src="css/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="css/datatables.net-select/js/dataTables.select.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="css/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="css/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="css/js/pages/datatables.init.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable({
        language: {url: 'css/tr.json'},
        dom: '<"dt-buttons"Bfl>rtp',
        pageLength: 50,
        buttons: [       
        { extend: 'excel', className: 'btn btn-dark waves-effect waves-light'}],
    });    
} );
</script>
</html>