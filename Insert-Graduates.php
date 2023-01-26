<!doctype html>
<html>
<head>
	<!--It's developed by Rsquare:Razan Alqahtani - Wed, 19 Feb 2020 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> تسجيل الخريجين | كلية المجتمع جامعة الإمام عبدالرحمن بن فيصل</title>
    
    <style>
        /*#E0CC8F */
        
        @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
        
        body { background-color: #3a3a3a; height: auto; }
        
        nav { text-align: center; margin: 0px auto;}
        
        .p1 { 
            margin: 0px auto 10px auto;
            text-align: center;
            font-size: large;
            font-family:'Droid Arabic Naskh', serif; 
            line-height: 30px;
            color: #E0CC8F;
        }
        
        .p2 { 
            margin: 50px auto 0px auto;
            text-align: center;
            font-size: large;
            font-family:'Droid Arabic Naskh', serif; 
            line-height: 30px;
            color: #E0CC8F;
        }
        
        table {
            margin: 10px auto 15px auto;
            border-style: solid;
            border-width: 1px;
            border-color: #E0CC8F;
        }
        
        tr {
            margin: 0px 0px 0px 10px;
            background-color: whitesmoke;
            border-style: solid;
            border-width: 1px;
            border-color: #E0CC8F;
        }
        
        .tr {font-size:large;
            background-color:#E0CC8F;
            color:white;}
        
        th {
            font-size: medium;
            color: #3a3a3a;
            padding: 5px 5px;}
        
        td { 
            text-align: center; 
            padding: 5px 65px;
            color: #3a3a3a;
        }
        
        td input[type = text]{
            text-align: right;
            padding: 5px 5px;
            width: 200px;
            color: #3a3a3a;
        }
        
        td input[type = radio]{
            float: right;
            color: #3a3a3a;
            text-align: right;
            padding: 5px 5px;
            margin: 0px 0px 5px 0px;
        }
        
        td input[type = submit]{
            background-color: #E0CC8F;
            border: none;
            border-radius: 50px;
            color: whitesmoke;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 5px 20px;
        }
        
        .students table {margin: 0px 50px 30px  50px; }
        
        .footer  {
            margin: 0px auto;
            font-family: Copperplate;
            text-align: center;
            font-size: small;
            color: gray;
            margin-bottom: 5px;
        }
        .footer a {    
            text-decoration: none;
            font-family: Copperplate;
            text-align: center;
            font-size: small;
            color: gray;
        }
/*----------------------------------------------------*/
         @media screen and (max-width: 600px){
             nav img { 
                text-align: center; 
                 margin: 0px 20px 0px auto;
                 width: 250px;
             }
             
             .body {
                 padding-bottom: 5px; 
                 margin-top: 10%;
                 background-repeat: repeat-y;
                 height: 1000px;
                 background-size: 100px;
             }
             
             table { text-align: center; margin: 10px auto 50px auto;}
             
             .p2 {margin: 50px 0px 0x 0px;}
             .students table { margin: 0px auto 30px  auto; }
             .tr {display: none;}
             .students td {display: block;}
            
        
    </style>
    
    </head>
<body>
        <nav><ul><img src="https://drive.google.com/uc?id=1G3c2-WHJAD1FDkTFJRZmIfVaVDnhEV39" alt="شعار وكالة الشؤون الأكاديمية | كلية المجتمع من جامعة الإمام عبدالرحمن بن فيصل" width="300"></ul></nav>
<!-------------------------------------------------------->
    
    <p class="p1">تسجيل الخريجين</p>
    
    <table>
        <form action="insert.php" method="POST">
            
            <!------>
            <tr>
                <td style="display: none;"><input type='hidden' name='id'/></td>
            </tr>
            
            <tr>
                <td><input type='text' name='student_id' placeholder='الرقم الإكاديمي'/></td>
                
                <th><p>الرقم الأكاديمي</p></th>
            </tr>
            
            
            <tr>
                <td><input type='text' name='student_name' placeholder='اسم الطالب/ة'/></td>
                
                <th><p>اسم الطالب/ة</p></th>
            </tr>
             
    
            <tr>
                
                <td>
                    فرع الدمام<input type='RADIO' name='college_branche' value='الدمام'/><br>
                    فرع القطيف<input type='RADIO' name='college_branche' value='القطيف' />
                </td>
                
                <th><p>فرع الكلية</p></th>
            </tr>
            
            
            <tr>
                <td>
                 علوم الحاسب<input type='RADIO' name='student_major' value='علوم حاسب'/><br>
                تقنية المعلومات <input type='RADIO' name='student_major' value='تقنية معلومات'/><br>
                نظم معلومات <input type='RADIO' name='student_major' value='نظم معلومات'/><br>
                
                مسار التمويل <input type='RADIO' name='student_major' value='مسار التمويل'/><br>
                مسار الإستثمار <input type='RADIO' name='student_major' value='مسار الاستثمار'/><br>
                مسار التأمين <input type='RADIO' name='student_major' value='مسار التأمين'/><br>
                مسار إدارة الإمداد<input type='RADIO' name='student_major' value='مسار إدارة الإمداد'/><br>
                    
                مسار الموارد البشرية<input type='RADIO' name='student_major' value='مسار الموارد البشرية'/></td>
                
                <th><p>تخصص الطالب/ة</p></th>
            </tr>
              
            
            <tr>
                 <td>
                الفصل الاول<input type='RADIO' name='graduation_semester' value='الفصل الآول'/><br>
                الفصل الثاني<input type='RADIO' name= 'graduation_semester' value='الفصل الثاني'/><br>
                الفصل الصيفي<input type='RADIO' name='graduation_semester' value='الفصل الصيفي'/></td>
                
                <th><p>فصل التخرج</p></th>
            </tr>
            
            
            <tr>
                <td>
                ذكر <input type='RADIO' name='gender' value='ذكر'/><br>
                انثى<input type='RADIO' name='gender' value='انثى'/></td>
                
                <th><p>الجنس</p></th> 
            </tr>
            
            <tr style="display:none;">
                <td>
                 <input type='RADIO' name='checking' value='no'/>
                </td>
                
                <th><p>التسجيل</p></th> 
            </tr>
            
            <tr>
                <td colspan="2"><input type='submit' name='submit' value='تسجيل'  /></td>
            </tr>

        </form>
    </table>
    <!-------------------------------------------------------------------------------------->
    
    <p class="p2">الطالبات</p>
    
    <div class="students">
        
        <?php 
        include 'connection.php';
        
        if($con === false){
            die('error connect ' . mysqli_connect_error());
        
        }
            
            $query = 'SELECT * FROM graduates';
            if($result = mysqli_query($con, $query)){
                if(mysqli_num_rows($result) > 0){ ?>
            
            <br/>
                
            <table>
                <tr class="tr">
            <td> التسجيل</td>  
            <td>الجنس</td> 
            <td>فصل التخرج</td>
            <td>تخصص الطالب/ة</td>
            <td>فرع الكلية</td>
            <td>اسم الطالب/ة</td>
            <td>الرقم الأكاديمي</td>        
            
                </tr>
            <?php while($row = mysqli_fetch_array($result)){ ?>
                
                <tr>
                    <td>
                        <?php echo $row['checking'] ?>
                    </td>
                    
                    <td>
                        <?php echo $row['gender'] ?>
                    </td>
                    
                    <td>
                        <?php echo $row['graduation_semester'] ?>
                    </td>
    
                    <td>
                        <?php echo $row['student_major'] ?>
                    </td>
                    
                    <td>
                        <?php echo $row['college_branche'] ?>
                    </td>
                    
                    <td>
                        <?php echo $row['student_name'] ?>
                    </td>
                    
                    <td>
                        <?php echo $row['student_id'] ?>
                    </td>
                </tr>
                
            <?php } ?>
                     </table>
                <?php } else {
                    echo ' ' . mysqli_error($con);
                }
                mysqli_free_result($result);
            } else {
                echo ' not done ';
            }
            mysqli_close($con);
        ?>
    </div>           
              
<!-------------------------------------------------------->  
<!-------------------------------------------------------->  

    <p class="footer">Go to <a href="2020-Graduates.php" target="_blank">2020 Graduates List.</a></p>
    <p class="footer">Go to <a href="index.html" target="_blank">Gifts Page.</a></p>


    </body>
</html>

<!-- -->