<html>
    <title>ระบบสนับสนุนการตัดสินใจในการเลือกสาขาเพื่อศึกษาต่อในระดับปริญญาตรี คณะเทคโนโลยีและการจัดการอุตสาหกรรม</title>
    <head>
        <link href="css/freelancer.css" rel="stylesheet">
        <link href="css/scrolling-nav.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
    </head>
    <body>
            <section class="hero banner ">
                <img src="img/fitm-logo.png" width="150" style="margin-left:10%;" alt="">
                <div class="hero-body ">
                    <div class="container">
                       <h1 class="title">ระบบสนับสนุนการตัดสินใจ</h1><p class="subtext-banner">ในการเลือกสาขาเพื่อศึกษาต่อในระดับปริญญาตรี<br> คณะเทคโนโลยีและการจัดการอุตสาหกรรม</p><br>
                    <h2 class="subtitle"> 
                        <a class="button is-success page-scroll" href="#form">เริ่มทำนายกันเลย!</a>
                    </h2>
                    </div>
                </div>
            </section>
            <section class="hero is-large " id="form">
                <form class="form-group" action="predict.php" method="post">
                    <div class="container is-offset-4">
                        <h1 class="title">
                            ระบบการตัดสินใจเลือกสาขา
                        </h1>
                       <div class="container">
                           <div class="columns">
                               <div class="column is-2">
                                 ชื่อ-นามสกุล 
                               </div>
                               <div class="column is-5">
                                 <input class="input" type="text" name="name" >
                               </div>
                           </div>
                            <div class="columns">
                               <div class="column is-2">
                                 สายการเรียน
                               </div>
                               <div class="column is-5">
                                 <span class="select">
                                    <select name="education">
                                        <option value="sciene-math">วิทย์-คณิต</option>
                                        <option value="art-math">ศิลป์-คำนวณ</option>
                                        <option value="vocational">ปวช.</option>
                                    </select>
                                 </span>
                               </div>
                           </div>
                            <div class="columns">
                               <div class="column is-3">
                                   <img src="img/cup.png" width="35" style="margin-right:10px;"><b>ทักษะในแต่ละด้าน</b>
                               </div>
                            </div>
                            <div class="columns">
                               <div class="column">
                                   <table class="table is-striped">
                                        <thead class="thead-inverse">
                                            <th>ทักษะ</th><th>น้อยที่สุด</th><th>น้อย</th><th>ปานกลาง</th><th>มาก</th><th>มากที่สุด</th>
                                        </thead>
                                        <tr>
                                            <td>ด้านภาษาต่างประเทศ</td>
                                            <td><center><input type="radio" class="form-check" name="language" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="language" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="language" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="language" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="language" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านคอมพิวเตอร์</td>
                                            <td><center><input type="radio" class="form-check" name="computer" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="computer" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="computer" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="computer" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="computer" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการจัดการ</td>
                                            <td><center><input type="radio" class="form-check" name="manage" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="manage" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="manage" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="manage" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="manage" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการออกแบบ</td>
                                            <td><center><input type="radio" class="form-check" name="design" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="design" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="design" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="design" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="design" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการคำนวณคณิตศาตร์</td>
                                            <td><center><input type="radio" class="form-check" name="math" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="math" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="math" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="math" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="math" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการประยุกต์</td>
                                            <td><center><input type="radio" class="form-check" name="applied" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="applied" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="applied" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="applied" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="applied" value="5" required="required"><center></td>
                                        </tr>
                                         <tr>
                                            <td>ด้านการสื่อสาร</td>
                                            <td><center><input type="radio" class="form-check" name="comunication" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="comunication" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="comunication" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="comunication" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="comunication" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการวิเคราะห์</td>
                                            <td><center><input type="radio" class="form-check" name="analysis" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="analysis" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="analysis" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="analysis" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="analysis" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านตรรกศาสตร์</td>
                                            <td><center><input type="radio" class="form-check" name="logic" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="logic" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="logic" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="logic" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="logic" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการมีมนุษยสัมพันธ์</td>
                                            <td><center><input type="radio" class="form-check" name="humanrelation" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="humanrelation" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="humanrelation" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="humanrelation" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="humanrelation" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านการบำรุงรักษา</td>
                                            <td><center><input type="radio" class="form-check" name="maintenance" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="maintenance" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="maintenance" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="maintenance" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="maintenance" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านงานโลหะ</td>
                                            <td><center><input type="radio" class="form-check" name="metal" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="metal" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="metal" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="metal" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="metal" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านเครื่องมือช่าง</td>
                                            <td><center><input type="radio" class="form-check" name="tech_equi" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="tech_equi" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="tech_equi" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="tech_equi" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="tech_equi" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านงานไม้</td>
                                            <td><center><input type="radio" class="form-check" name="wood" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="wood" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="wood" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="wood" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="wood" value="5" required="required"><center></td>
                                        </tr>
                                        <tr>
                                            <td>ด้านความคิดสร้างสรรค์</td>
                                            <td><center><input type="radio" class="form-check" name="creative" value="1" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="creative" value="2" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="creative" value="3" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="creative" value="4" required="required"><center></td>
                                            <td><center><input type="radio" class="form-check" name="creative" value="5" required="required"><center></td>
                                        </tr>     
                                </table>
                               </div>
                               <div class="column is-5 is-hidden-touch">
                                   <img src="img/integrate.png"  width="200" style="margin-left:130px;" alt=""><br>
                                   <img src="img/analyze.png"  width="200" style="margin-left:190px;" alt="">
                                   <img src="img/visualize.png"  width="200" style="margin-left:100px;" alt="">
                                   <img src="img/man.png" width="150" style="margin-right:10px;">
                               </div>
                               
                           </div>
                           <img src="img/grades.png" width="40" style="margin-right:20px;"><b>เกรดเฉลี่ย (ถ้าไม่ได้เรียนไม่ต้องกรอก)</b><br><br>     <!--  grade  -->            
                               <div class="columns ">
                                        <div class="column is-2 ">
                                            วิทยาศาสตร์
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade1" >
                                        </div>
                                        <div class="column is-2">
                                            วิชาคณิตศาสตร์
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade2" >
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-2">
                                            วิชาศิลปะ
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade3" >
                                        </div>
                                        <div class="column is-2">
                                            วิชาภาษาต่างประเทศ
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade4" >
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-2">
                                            วิชาการงานอาชีพและเทคโนโลยี
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade5" >
                                        </div>
                                        <div class="column is-2">
                                            วิชาฟิสิกส์
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade6" >
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-2">
                                            วิชาคอมพิวเตอร์
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade7" >
                                        </div>
                                        <div class="column is-2">
                                            วิชาสังคมศึกษา
                                        </div>
                                        <div class="column is-1">
                                            <input class="input" type="text" name="grade8" >
                                        </div>
                                    </div>
                                    <br>
                                    <div class="columns">
                                        <div class="column is-2">
                                            <img src="img/engineer.png" width="34" style="margin-right:10px;"><b>อาชีพที่สนใจ </b>
                                        </div>
                                        <div class="column is-5">
                                            <span class="select">
                                                <select name="dream">
                                                    <option >เลือกอาชีพ</option>
                                                    <option value="engineer">วิศวกร</option>
                                                    <option value="com-sci">ผู้เชี่ยวชาญด้านคอมพิวเตอร์</option>
                                                    <option value="system_analyze">นักวิเคราะห์ระบบ</option>
                                                    <option value="programmer">นักโปรแกรมเมอร์</option>
                                                    <option value="machine-design">นักออกเเบเครื่องจักกล</option>
                                                    <option value="machine-design">สถาปนิก</option>
                                                    <option value="qa">นักตรวจสอบคุณภาพสินค้า</option>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-7 is-offset-3">
                                            <input type="submit" class="button is-info" value="ทำนายผล">
                                        </div>
                                    </div>     
                       </div>
                    </div>
                </form>    
            </section>
    </body>
    
     <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
    
</html>
<<style>
 .banner{
     background:url("img/data-analysis.png");
     height:auto;
     background-repeat:no-repeat;
 }
 body{
     font-family: RSU;
 }
 select{
     font-family: RSU;
 }
 input{
     font-family: RSU;
 }
 .subtext-banner{
     font-size: 20px;
 }
</style>
