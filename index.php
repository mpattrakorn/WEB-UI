<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/HomepageStyle.css" type="text/css">
    <link rel="stylesheet" href="css/commonCSS.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">






</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12">
                <div class=" pull-right">


                    <a href="Login page.html">
                        <button class="btn setmargin" onClick="history.go(-1);return true;"> ลงชื่อเข้าใช้</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <img class="img-responsive center-block" src="image/logo.png" alt="logo">
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-md-12 col-sm-12">


                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <form action="after search.php" type="GET">
                            <input type="text" name="search" class="form-control input-lg" placeholder="ค้นหา" />

                            <span class="input-group-btn">
                
                                <button type="submit">
                                
                                  <i class="glyphicon glyphicon-search"></i>
                                  
                                </button>

                            </span>
                        </form>
                    </div>
                </div>

                <div>
                    <a id="qr" href="QR Scan.html"><img class="img-responsive center-block" style="width: 80%; margin-top: 10%; max-width: 500px;" src="image/QR%20code.png" alt="Qr-code"></a>
                </div>

            </div>
        </div>



    </div>


</body>

</html>