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
                    <form action="kontroler/add.php" method="POST" onsubmit="return validateForm()">

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
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th >Naziv</th>
                            <th >Budzet</th>
                            <th>Opis</th>
                            
                            <th>Godina</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT filmID,naziv,budzet,opis,godina FROM film";
                        $filmovi = $conn->query($query);
                    while ($row = mysqli_fetch_array($filmovi)) {?>
                            <tr>
                            <div class="col-md-4"></div>
        
                                <td><?php echo $row['naziv']  ?></td>
                                <td><?php echo $row['budzet']  ?></td>
                                <td><?php echo $row['opis']  ?></td>
                                <td><?php echo $row['godina']  ?></td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
                    </body>
                    