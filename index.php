<?php
require_once('controllers.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ricardo Rios | Art & Logic Challenge</title>
  </head>
  <body>
    <div class="container-fluid">

        <h1><b>Art and Logic</b></h1>
        <h3>Ricardo Rios</h3>
        <h4><a href="mailto:ricardojriosr@gmail.com"><u>ricardojriosr@gmail.com</u></a></h4>
        <hr>
        <div class="col-md-12">
            <h4>Encoding Function</h4>
            <form class="vertical-form" action="behavior.php" method="post" >
                <div class="form-group">
                    <label>Input an Integer</label>
                    <input type="number" name="encodingNumber" id="EncodingNumber" min="-8192" max="8192" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submitEncode" id="submitEncode" value="Encode" class="btn btn-primary">
                </div>
            </form>
        </div>
        <hr>
        <div class="col-md-12">
            <h4>Decoding Function</h4>
            <form class="vertical-form" action="behavior.php" method="post" >
                <div class="form-group">
                    <label>Input a String</label>
                    <input type="text" name="decodingNumber" id="decodingNumber"  class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submitDecode" id="submitDecode" value="Decode" class="btn btn-primary">
                </div>
            </form>
        </div>
        <hr>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
