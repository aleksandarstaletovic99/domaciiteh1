<?php include("broker.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    

</head>

<body>


    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">Filmovi</a>
        </div>
    </nav>

    <main class="container p-4">
        <div class="row">
            <div class="col-md-4">
               
                <div class="card card-body">
                <form action="kontroler/add.php" id="dodajFonmuZaUnosFilmova" method="POST" onsubmit="return validateForm()">

                        <div class="form-group">
                            <input type="text" name="naziv" class="form-control" placeholder="Naziv" autofocus>
                        </div>
                        <div class="form-group">
                            <input type="text" name="budzet" class="form-control" placeholder="Budzet">
                        </div>
                        <div class="form-group">
                            <textarea name="opis" rows="5" class="form-control" placeholder="Opis"></textarea>
                        </div>

                        

                        <div class="form-group">
                            <input type="text" name="godina" class="form-control" placeholder="Godina">
                        </div>


                        <input type="submit" name="add" class="btn btn-primary btn-block" value="Sacuvaj film">

                    </form>
                </div>
            </div>
            <div class="col-md-8">
            <table class="table table-bordered" id="tabelaFilmovi">
                    <thead>
                        <tr>
                            <th onclick="sortTable(0)">Naziv</th>
                            <th onclick="sortTable(1)">Budzet</th>
                            <th>Opis</th>
                            <th>Godina</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT filmId,naziv,budzet,opis,godina FROM film";
                        $filmovi = $conn->query($query);
                    while ($row = mysqli_fetch_array($filmovi)) {?>
                           <tr id="delete<?php echo $row['filmId'] ?>">
        
                                <td><?php echo $row['naziv']  ?></td>
                                <td><?php echo $row['budzet']  ?></td>
                                <td><?php echo $row['opis']  ?></td>
                                <td><?php echo $row['godina']  ?></td>
                            
                                <td><button onclick="deleteAjax(<?php echo $row['filmId']; ?>)" class="btn btn-danger">Obrisi</button></td>
                                <td><a href="kontroler/edit.php?id=<?php echo $row['filmId'] ?>">Izmeni</a></td>

                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script type="text/javascript">
        function deleteAjax(filmId){
                if(confirm('are You sure?')){
                    $.ajax({
                        type:'post',
                        url:'kontroler/delete.php',
                        data:{delete_filmId:filmId},
                        success:function(data){
                            $('#delete'+filmId).hide();
                        }
                        
                    });
                    
                }
                
        }
    </script>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/main.js"> </script>
</body>
                    