<?php
@ini_set('display_errors', '0');
function CalGPA($grade){
    $subject;
    $score;
    for ($i=0; $i < 8 ; $i++) { 
       if($grade[$i]!=null){
        $score += $grade[$i];
        $subject++;
       }
    }
    return $score/$subject; 
}

?>
<?php
 $major ='';
 $name = $_POST['name'] ;
 $education = $_POST['education'] ;
 $language = $_POST['language'] ;
 $computer = $_POST['computer'] ;
 $manage = $_POST['manage'] ;
 $design = $_POST['design'] ;
 $math = $_POST['math'] ;
 $applied = $_POST['applied'] ;
 $comunication = $_POST['comunication'] ;
 $analysis = $_POST['analysis'] ;
 $logic = $_POST['logic'] ;
 $humanrelation = $_POST['humanrelation'] ;
 $maintenance = $_POST['maintenance'] ;
 $metal = $_POST['metal'] ;
 $tech_equi = $_POST['tech_equi'] ;
 $wood = $_POST['wood'] ;
 $creative = $_POST['creative'] ;
 $grade= array();
 $grade[0] = $_POST['grade1'];
 $grade[1] = $_POST['grade2'];
 $grade[2] = $_POST['grade3'];
 $grade[3] = $_POST['grade4'];
 $grade[4] = $_POST['grade5'];
 $grade[5] = $_POST['grade6'];
 $grade[6] = $_POST['grade7'];
 $grade[7] = $_POST['grade8'];
 $gpa=CalGPA($grade);
 $dream = $_POST['dream'];

 $data = array('education,Language,computer,manage,design,math,applied,communication,analysis,logic,humanrelation,maintenance,metal,technician-equipment,wood,creative,GPA,dream,class',
                'art-math,5,5,4,3,2,3,3,4,4,3,3,3,2,1,5,3,programmer,IT',
                'vocational,3,4,3,3,3,3,3,4,4,3,3,3,2,2,4,3.3125,com-sci,IT',
                'art-math,4,4,3,2,3,5,2,4,5,5,2,3,3,1,5,2.8125,system_analyze,IT',
                'vocational,3,3,3,2,4,3,5,3,4,4,3,3,1,1,3,2.9375,qa,IM',
                'sciene-math,3,2,3,1,2,3,4,2,2,3,4,1,2,3,3,3.125,machine-design,TA',
                'sciene-math,2,4,2,2,2,2,2,5,4,3,1,1,1,4,3,3.277039,engineer,CA',
                "$education,$language,$computer,$manage,$design,$math,$applied,$comunication,$analysis,$logic,$humanrelation,$maintenance,$metal,$tech_equi,$wood,$creative,$gpa,$dream,?"
            );
$fp = fopen('major.csv','w');
foreach ($data as $line) {
    $val = explode(",",$line);
    fputcsv($fp,$val);
}
fclose($fp);
$cmd = 'java -classpath "weka.jar" weka.core.converters.CSVLoader major.csv > unseen_major.arff';
exec($cmd,$output);


$cmd = 'java -classpath "weka.jar" weka.classifiers.trees.J48 -T "unseen_major.arff" -l "fitm-major.model" -p 10 ';
exec($cmd,$output1);

for ($i=0; $i < sizeof($output1); $i++) { 
  trim($output1[$i]);
  if($i==sizeof($output1)-2)
   $major = substr($output1[$i],29,2); 
}

if($major=="IT") $icon_major = "programmer.png";
if($major=="IM") $icon_major = "manager.png";
if($major=="CA") $icon_major = "carpenter.png";
if($major=="TA") $icon_major = "plumber.png";

?>
<html>
    <title>ระบบสนับสนุนการตัดสินใจในการเลือกสาขาเพื่อศึกษาต่อในระดับปริญญาตรี คณะเทคโนโลยีและการจัดการอุตสาหกรรม</title>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
    </head>
    <body>
     <section class="hero is-large">
            <div class="box box-predict">
                <div class="container">               
                    <article class="media box">
                        <div class="columns is-mobile">
                            <div class="coulmn is-3">
                                <img src="img/<?php echo $icon_major; ?>" width="150" alt="Image">
                            </div>
                            <div class="coulmn is-7 content">
                                    <p>
                                    <h4>ผลการทำนายของคุณ &nbsp <b><?php echo $name; ?></b></h4> 
                                    <br>
                                    <h4>คุณเหมาะสมกับสาขา  &nbsp <?php echo $major; ?></h4>
                                    </p>
                            </div>
                        </div>
                    </article>
                    <a class="button is-success" href="index.php">กลับไปหน้าหลัก</a>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-logo">
        <img src="img/fitm-logo.png" width="100" alt=""><br>
        powered by IT@KMUTNB
    </div>
    
    </body>
<html>
<style>
.box-predict{
    margin-top:0px;
}
.content{
    margin-left:60px;
}
body{
     background:url("img/data-analysis.png");
     
     background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: RSU;
    height:100%;
    
 }
 .footer-logo{
    margin-top:23%;
    float:right;
    margin-right:10px;
 }

</style>
