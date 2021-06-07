<?php
	include("header.php");

    	if(isset($_GET["durum"])){
		$GelenDurum = $_GET["durum"];
	}else{
		$GelenDurum = "";
	}
	
?>

<?php
    if($GelenDurum == "ok"){
?>
    <script type="text/javascript">
        alert("Yeni Bilgiler Başarıyla Eklendi.");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "silindi"){
?>
    <script type="text/javascript">
        alert("Silme İşlemi Başarılı..");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "duzenlendi"){
?>
    <script type="text/javascript">
        alert("Güncelleme İşlemi Başarılı..");
    </script>
<?php
    }
?>



<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      GÜBRE BİLGİSİ
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">               
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3" align="right">
            <a href="gubre-ekle-alani">
            <button class="btn btn-success" type="button">Ekle (+)</button></a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Küçük Başlık</th>
            <th>Büyük Başlık</th>
            <th>Ön Detay</th>
            <th>Tarih</th>
            <th>Düzenle</th>
            <th>Sil</th>
          </tr>
        </thead>
        <tbody>


        <?php
        foreach($GubreCek as $GubreDongusu){
            ?>
          <tr>
        

            <td><?php echo $GubreDongusu["k_baslik"]; ?></td>
            <td><?php echo $GubreDongusu["b_baslik"]; ?></td>
            <td><?php echo $GubreDongusu["OnDetay"]; ?></td>
            <td><?php echo $GubreDongusu["Tarih"]; ?></td>
            <td><a href="gubre-duzenle-sayfa?id=<?php echo $GubreDongusu["id"]; ?>"><button class="btn btn-info">Düzenle</button></a></td>
            <td><a href="gubre-sil-sonuc?id=<?php echo $GubreDongusu["id"]; ?>"><button class="btn btn-danger">Sil</button></a></td>
          </tr>
        <?php
        }
        ?>


        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<?php
	require("footer.php"); //include gibi
?>