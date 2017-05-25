<!DOCTYPE html>
<html lang="en">
<head>
  <title>Temple search result ผลการค้นหา</title>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/Forgetpassword-Style.css" type="text/css">
  <link rel="stylesheet" href="css/commonCSS.css" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  
.setmargin{
      margin-left: 0px;
      background-color: black;
      color: white;
      opacity: 0.8;
      font-size: 1.5em;
      margin-bottom: 13px;
      margin-top: 5px;
    }
.scale-up{
  width: 100%;

}
.temple-image-frame{
  position: relative; 
   width: 100%;
}
.temple-label { 
   position: absolute; 

   left: 0;
   bottom: 0;
   width: 100%;

   color: white; 
   font: bold 180% Sans-Serif; 
   letter-spacing: -1px;  
   background: rgb(0, 0, 0); /* fallback color */
   background: rgba(0, 0, 0, 0.7);
   padding: 10px;
   line-height: 80%;
}
span.province{
  font-size: 60%;
}
.nopadding {
   padding: 0 !important;
   margin: 0 !important;
}


input::-webkit-input-placeholder {
    font-size: 1.8em;
    line-height: 3;
}
</style>
<script type="text/javascript">
  function popUp(){
    alert("ข้อมูลได้ถูกส่งไปยังผู้ดูแลระบบเรียบร้อยแล้ว");
  }
</script>




</head>

<body>
   <div class="container-fluid" style="background-color: rgba(255, 255, 255, 0.5)"> 
      
        
        
      

      <div class="row">
        <div class="col-md-2 col-xs-4 col-sm-2 nopadding">
          <button class="btn setmargin" onClick="history.go(-1);return true;">< กลับ</button> 
          
        </div>
        
        <div class="col-md-8 col-xs-8 col-sm-9" style="margin-top: 5px">

            <div id="custom-search-input">
                <div class="input-group col-md-12">

                    <input type="text" class="form-control input-lg" placeholder="ค้นหา" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>


        </div>
   
        </div>


    <div class="row">

      <div class="col-xs-12 col-md-12 col-sm-12 nopadding">
          <span style="font-size: 6vmax">ผลการค้นหา</span>  
      </div>
    </div>

      <?php
        $search = $_GET["search"];
        require_once("backend/mysql.php");
        $query = $mysqli->query("SELECT * FROM temple WHERE name LIKE '%".$search."%' ");

        if($query->num_rows > 0){

          while($data = $query->fetch_assoc()){

            ?>
            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 nopadding">
                  <a href="temple detail.php?id=<?php echo $data["temple_id"]; ?>">
                    <div class="temple-image-frame">
                      <img class="img-responsive scale-up"  src="image/temple1.jpg" alt="Temple" />
                      
                      <span class="temple-label"><?php echo $data["name"]; ?><br><span class="province">จังหวัด:<?php echo $data["city"]; ?></span></span>
                      
                    </div>
                  </a>
                </div>
            </div>
 <?php
          }
        } else {
           echo "ไม่พบรายชื่อวัดที่ต้องการ";
        }
  ?>   



        <div class="row">
          <div class="col-sm-12 col-xs-12 col-md-12 nopadding" style="background-color: rgba(0, 0, 0, 0.5)">
            <div class="col-md-12 nopadding" style="border-bottom: solid 2px;">     </div>
            <span style="font-size: 2em;color: white;">ติดต่อผู้ดูแลระบบ <a data-toggle="modal" data-target="#myModal">คลิ๊ก</a> </span>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">สอบถาม</h4>
                  </div>
                  <div class="modal-body">
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="phone">เบอร์โทร:</label>
                    <input type="text" class="form-control" id="phone">
                  </div>
                    <div class="form-group">
                       <label for="sel1">เลือกหัวข้อ:</label>
                        <select class="form-control" id="sel1">
                          <option>สอบถามข้อมูลทั่วไป</option>
                          <option>ติดต่อปัญหาการใช้งาน</option>
                          <option>รายงานข้อมูลผิดพลาด</option>
                          <option>ติดต่อสอบถามข้อมูลอื่นๆ</option>
                        </select>

                      <label for="comment">กรอกข้อมูล:</label>
                      <textarea class="form-control" rows="3" id="comment"></textarea>
                    </div>
                    
                  </div>
                  <div class="modal-footer">
                  <input type="submit" class="btn btn-info" value="ส่ง" onclick="popUp()" data-dismiss="modal">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                  </div>
                </div>

              </div>
            </div> 
            
          </div>
        </div>




  </div>
</body>
</html>
