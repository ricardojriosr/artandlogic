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

    <title>Ricardo Rios | Art & Logic Challenge</title>
  </head>
  <body>
    <div class="container-fluid">

        <h1><b>Art and Logic</b></h1>
        <h3>Ricardo Rios</h3>
        <h4><a href="mailto:ricardojriosr@gmail.com"><u>ricardojriosr@gmail.com</u></a></h4>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
            <h4>Encoding Function</h4>
            <form class="vertical-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
                <div class="form-group">
                    <label>Input an Integer</label>
                    <input type="number" name="encodingNumber" id="EncodingNumber" min="-8192" max="8192" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submitEncode" id="submitEncode" value="Encode" class="btn btn-primary">
                </div>
                <?php if (isset($_POST['submitEncode'])) { ?>
                <div class="alert alert-info" role="alert">
                      <?php
                          $encodeNumber = new AdecodingFunctions();
                          $encodeNumber->Set('integerValue',$_POST['encodingNumber']);
                          echo 'Encoded Output = ' . $encodeNumber->EncodeInteger();
                      ?>
                </div>
                <?php } ?>
            </form>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
            <h4>Decoding Function</h4>
            <form class="vertical-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
                <div class="form-group">
                    <label>Input a String</label>
                    <input type="text" name="decodingNumber" id="decodingNumber"  class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" name="submitDecode" id="submitDecode" value="Decode" class="btn btn-primary">
                </div>
                <?php if (isset($_POST['submitDecode'])) { ?>
                <div class="alert alert-info" role="alert">
                      <?php
                          $decodeNumber = new AdecodingFunctions();
                          $decodeNumber->Set('hexValue',$_POST['decodingNumber']);
                          echo 'Decoded Output = ' . $decodeNumber->DecodeHex();
                      ?>
                </div>
                <?php } ?>
            </form>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
            <h4>Encoding Examples</h4>
            <?php
            $encodeNumber = new AdecodingFunctions();

            $encodeNumber->Set('integerValue', 0);
            $example1 = '0';
            $exampleResult1 = $encodeNumber->EncodeInteger();

            $encodeNumber->Set('integerValue', -8192);
            $example2 = '-8192';
            $exampleResult2 = $encodeNumber->EncodeInteger();

            $encodeNumber->Set('integerValue', 8191);
            $example3 = '8191';
            $exampleResult3 = $encodeNumber->EncodeInteger();

            $encodeNumber->Set('integerValue', 2048);
            $example4 = '2048';
            $exampleResult4 = $encodeNumber->EncodeInteger();

            $encodeNumber->Set('integerValue', -4096);
            $example5 = '-4096';
            $exampleResult5 = $encodeNumber->EncodeInteger();
            ?>
            <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <th scope="col">Unencoded (decimal)</th>
                          <th scope="col">Encoded (hex)</th>
                      </thead>
                      <tbody>
                          <tr>
                            <td><?php echo $example1; ?></td>
                            <td><?php echo $exampleResult1; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $example2; ?></td>
                            <td><?php echo $exampleResult2; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $example3; ?></td>
                            <td><?php echo $exampleResult3; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $example4; ?></td>
                            <td><?php echo $exampleResult4; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo $example5; ?></td>
                            <td><?php echo $exampleResult5; ?></td>
                          </tr>
                      </tbody>
                  </table>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
            <h4>Decoding Examples</h4>
            <?php
            $decodeNumber = new AdecodingFunctions();

            $decodeNumber->Set('hexValue', '4000');
            $example1 = '4000';
            $exampleResult1 = $decodeNumber->DecodeHex();

            $decodeNumber->Set('hexValue', '0000');
            $example2 = '0000';
            $exampleResult2 = $decodeNumber->DecodeHex();

            $decodeNumber->Set('hexValue', '7F7F');
            $example3 = '7F7F';
            $exampleResult3 = $decodeNumber->DecodeHex();

            $decodeNumber->Set('hexValue', '5000');
            $example4 = '5000';
            $exampleResult4 = $decodeNumber->DecodeHex();

            $decodeNumber->Set('hexValue', '0A05');
            $example5 = '0A05';
            $exampleResult5 = $decodeNumber->DecodeHex();

            $decodeNumber->Set('hexValue', '5500');
            $example6 = '5500';
            $exampleResult6 = $decodeNumber->DecodeHex();
            ?>
            <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <th scope="col">Hi byte</th>
                          <th scope="col">Lo byte</th>
                          <th scope="col">Value</th>
                      </thead>
                      <tbody>
                          <tr>
                            <td><?php echo substr($example1,0,-2); ?></td>
                            <td><?php echo substr($example1,-2,2); ?></td>
                            <td><?php echo $exampleResult1; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo substr($example2,0,-2); ?></td>
                            <td><?php echo substr($example2,-2,2); ?></td>
                            <td><?php echo $exampleResult2; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo substr($example3,0,-2); ?></td>
                            <td><?php echo substr($example3,-2,2); ?></td>
                            <td><?php echo $exampleResult3; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo substr($example4,0,-2); ?></td>
                            <td><?php echo substr($example4,-2,2); ?></td>
                            <td><?php echo $exampleResult4; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo substr($example5,0,-2); ?></td>
                            <td><?php echo substr($example5,-2,2); ?></td>
                            <td><?php echo $exampleResult5; ?></td>
                          </tr>
                          <tr>
                            <td><?php echo substr($example6,0,-2); ?></td>
                            <td><?php echo substr($example6,-2,2); ?></td>
                            <td><?php echo $exampleResult6; ?></td>
                          </tr>
                      </tbody>
                  </table>
            </div>
        </div>
        <br>
        <hr>
        <br>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
