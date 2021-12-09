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
                    
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>

