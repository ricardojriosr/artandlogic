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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Ricardo Rios | Art & Logic Challenge 2</title>
  </head>
  <body>

    <div class="container-fluid">

      <div class="row">
        <div class="col-4">
            <h2>Commands</h2>
            <div class="form-group">
              <ul class="list-group">
                <li class="list-group-item"><a href="javascript:void(0)" onclick="$('#command_to_execute').val('CLR');" class="btn btn-primary">Clear | CLR</a></li>
                <li class="list-group-item"><a href="javascript:void(0)" onclick="$('#command_to_execute').val('PEN');" class="btn btn-primary">Raise/Down Pen | PEN</a></li>
                <li class="list-group-item"><a href="javascript:void(0)" onclick="$('#command_to_execute').val('CO');" class="btn btn-primary">Change Color | CO</a></li>
                <li class="list-group-item"><a href="javascript:void(0)" onclick="$('#command_to_execute').val('MV');" class="btn btn-primary">Move Pen | MV</a></li>
              </ul>
            </div>
            <form class="vertical-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
                <div class="form-group">
                  <h2>Type Command</h2>
                  <input type="text" name="command_to_execute" id="command_to_execute" value="" placeholder="CLR" class="form-control" >
                </div>
                <div class="form-group">
                  <input type="submit" name="command_submit" value="Execute!" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col-8">
            <h2>Graphic</h2>
        </div>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
