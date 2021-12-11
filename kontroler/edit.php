
<?php
include("../broker.php");
$naziv = '';
$opis= '';
$budzet=0;
$godina=0;

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM film WHERE filmID=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $naziv = $row['naziv'];
    $budzet=$row['budzet'];
    
    $opis = $row['opis'];
    
    $godina=$row['godina'];
  }
}

if (isset($_POST['update'])) {
  
  //$title= $_POST['title'];
  //$description = $_POST['description'];
    $id = $_GET['id'];
    $naziv = $_POST['naziv'];
    $budzet=$_POST['budzet'];
    $opis = $_POST['opis'];
   
   
    $godina=$_POST['godina'];

  $query = "UPDATE film set naziv = '$naziv',  budzet='$budzet', opis = '$opis' ,godina='$godina' WHERE filmID=$id";
  mysqli_query($conn, $query);
  
  header('Location: ../home.php');
}

?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="naziv" type="text" class="form-control" value="<?php echo $naziv; ?>" placeholder="Update Naziv">
        </div>
        <div class="form-group">
          <input name="budzet" type="text" class="form-control" value="<?php echo $budzet; ?>" placeholder="Update Budzet">
        </div>
        <div class="form-group">
        <textarea name="opis" class="form-control" cols="30" rows="10"><?php echo $opis;?></textarea>
        </div>
        
        <div class="form-group">
          <input name="godina" type="text" class="form-control" value="<?php echo $godina; ?>" placeholder="Update Godina">
        </div>
        <button class="btn-success" name="update">
          Update
</button>
      </form>
      </div>
    </div>
  </div>
</div>

<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>