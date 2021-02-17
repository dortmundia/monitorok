
<!doctype html>
<html lang="en">
<head>
<title>Monitor Business</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="UTF-8">
    <style>

    .col-sm-12,.col-sm-6{ 
      background-color:#EFEFFF ;
      border-radius: 5px;
      border: 1px solid   #DEDEEE;   
    }
    </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color:#303060;">


  <div class="container-fluid">
        <div class="row">
        <div class="col-sm-12">
            <a href="index.php"> Lista </a>
            <a href="felvetel.php"> Felvétel </a>
            <a href="delete.php"> Törlés </a>
            <h1 style="font-size:500%; text-align:center; font-color:#88AAFF;  text-shadow: 5px 5px #4444FF"><i> Monitor Business</i></h1>
        </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <form class="row g-3 needs-validation" method="POST">

                Monitor Neve: 	<input type='text'  class="form-control" name='input_name' required><br />
                Monitor Mérete: <input type='text' name='input_col' class="form-control" required><br />
                Monitor felbontása: <input type='text' name='input_res' class="form-control" required><br />
                
                    <label for="csatlakozok">Monitor csatlakozoja:</label>
                        <select  name="input_port" form="cmd_insert_monitor" class="form-control">
                            <option value="VGA">VGA</option>
                            <option value="HDMI">HDMI</option>
                            <option value="VGA+HMDI">VGA+HMDI</option>
                        </select>

                <label for="input_price" class="form-label">Monitor Ára:</label>
                <input type='number' name='input_price' class="form-control" required><br />

                
                

                <input type='hidden' name='action' value='cmd_insert_monitor'>
                <input type='submit' value='Felvétel' class='btn btn-success'> 
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-12">
              Készítette: Berendi Barnabás, 2021
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="scripts.js"></script>
  </body>

</html>
