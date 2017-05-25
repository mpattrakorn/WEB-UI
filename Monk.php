<!DOCTYPE html>
<html lang="en">
<head>
  <title>Temple edit</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/commonCSS.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    body
    {
      background:url(image/RegisterBG.jpg) no-repeat center center fixed;
 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size:cover;
  background-size: cover;
    }
    .nopadding {
          padding: 0 !important;
          margin: 0 !important;
        }
    .setmargin{
      margin-left: 13px;
      background-color: black;
      color: white;
      opacity: 0.8;
      font-size: 1.5em;
      margin-bottom: 13px;
      margin-top: 5px;
    }
    .btn-file {
    position: relative;
    overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
    }

  </style>
  <script type="text/javascript">
    $(document).ready( function() {
      $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
      
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    });   
  });

  function popUp(){
    alert("QR code ได้ถูกส่งไปยังemail ของคุณเรียบร้อยแล้ว");
  }

  </script>



</head>
<body>

<div class="container">
<div class="row">

  <button class="btn setmargin" onClick="history.go(-1);return true;">< กลับ</button> 
  
</div>

  <div class="row">
    <div class="col-sm-12 col-md-12 col-xs-12">

      <form action="backend/setTemple.php" method="POST">
        <div class="form-group">
          <label for="nameTemple">ชื่อวัด:</label>
            <input class="form-control" type="text" id="nameTemple" name="nameTemple" placeholder="ชื่อวัดภาษาไทย">
        </div>
        <div>
            <label for="phone">เบอร์โทร:</label>
            <input class="form-control" type="text" id="phone" name="phone" placeholder="053-XXX-XXXX">
        </div>
        <div>
            <label for="phone">จังหวัด:</label>
            <input class="form-control" type="text" id="city" name="city" placeholder="จังหวัด">
        </div>

          
          <div class="form-group">
            <label>อัพโหลดรูป:</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-default btn-file">
                        เลือกภาพ <input type="file" id="imgInp">
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
            <img id='img-upload'/>
        </div>
            
        <div> 
          <button class="btn btn-default" style="width: 100%" onclick="popUp()"><img src="images/QRicon.png" style="min-width: 40px ; max-width:60px">        สร้าง QR Code</button>
        </div>
    </div>

    <div class="col-sm-12 col-md-12 col-xs-12" style="background-color: rgba(255, 255, 255, 0.65)">
        <div style="width: 80%">
          <table class="table" >
            <thead>
              <tr>
                <th>ของที่วัดต้องการ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input class="form-control" type="text" id="item1" name="item1" placeholder="สิ่งที่วัดต้องการ">
                </td>
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" id="item2" name="item2" placeholder="สิ่งที่วัดต้องการ">
                </td>
              </tr>
            </tbody>
          </table>

          <table class="table" >
            <thead>
              <tr>
                <th>ของที่วัดไม่ต้องการ</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input class="form-control" type="text" id="noitem1" name="noitem1" placeholder="สิ่งที่วัดต้องการ">
                </td>
              
              </tr>
              <tr>
                <td>
                  <input class="form-control" type="text" id="noitem2" name="noitem2" placeholder="สิ่งที่วัดต้องการ">
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 100%" >ส่ง</button>
    </div>



        
    </form>

  </div>

</div>
</body>
</html>
