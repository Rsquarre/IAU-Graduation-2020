<!doctype html>
<html>
<head>
	<!--It's developed by Rsquare:Razan Alqahtani - Wed, 19 Feb 2020 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> الخريجين | كلية المجتمع جامعة الإمام عبدالرحمن بن فيصل</title>
    
    <style>
        /*#E0CC8F */
        
        @import url(https://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css);
        
        body { background-color: #3a3a3a; height: auto; }
        
        nav { text-align: center; margin: 0px auto;}
        
        p { 
            margin: 0px auto 0px auto;
            text-align: center;
            font-size: large;
            font-family:'Droid Arabic Naskh', serif; 
            line-height: 30px;
            color: #E0CC8F;
        }
        
        .table{ margin: 10px auto 30px auto;}
        .p3 {font-size: small;
            color: #3a3a3a;
            padding: 5px 5px;}
        
        
        table {
            margin: 10px auto 50px auto;
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
        .tr{font-size:large;
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
        
         input[type = submit]{
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
        
        .search input[type=text]{
            padding-right: 10px;
            margin: 30px auto; 
            display: block;
            width: 450px;
            height: 30px;
            border-radius: 5px;
            font-family: sans-serif;
            font-size: small;
            border-style: none;
            border-style: solid;
            border-color: lightgrey;
            text-align: right;
        }
        
        
        .students table {margin: 0px 50px 30px  50px; }
        
        .footer  {
            bottom: 0;
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
             
             .search input[type=text]{ margin: 0px auto 20px auto; width: 400px; }
             
             .p2 {margin: 50px 0px 0x 0px;}
             .students table {margin: 0px auto 30px  auto; }
             .tr {display: none;}
             .students td {display: block;}
        
    </style>
    
    </head>
<body>
        <nav><ul><img src="https://drive.google.com/uc?id=1G3c2-WHJAD1FDkTFJRZmIfVaVDnhEV39" alt="شعار وكالة الشؤون الأكاديمية | كلية المجتمع من جامعة الإمام عبدالرحمن بن فيصل" width="300"></ul></nav>
<!-------------------------------------------------------->
    
    
    <p class="p1">تسجيل الخريجين</p>
    
    <table>
        <form action="update.php" method="POST">
            
            <!------>
            <tr>
                <td style="display: none;"><input type='hidden' name='id'/></td>
            </tr>
            
            <tr>
                <td><input type='text' name='student_id' placeholder='الرقم الإكاديمي'/></td>
                
                <th><p class="p3">الرقم الأكاديمي</p></th>
            </tr>
            
            <tr>
                <td>
                 <input type='RADIO' name='new_checking' value='check'/>
                </td>
                
                <th><p class="p3">التسجيل</p></th> 
            </tr>
            
            <tr>
                <td colspan="2"><input type='submit' name='submit' value='تسجيل'  /></td>
            </tr>

        </form>
    </table>
    
<!------------------------------------------------------>     
    
    <div class="search">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder=" ..البحث ">
            </div>
    
<!-------------------------------------------------------->
    
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
            
            <br />
                
            <table id="myTable">
                <tr class="tr">
            <td>التسجيل</td>  
            <td>الجنس</td> 
            <td>فصل التخرج</td>
            <td>تخصص الطالب/ة</td>
            <td>فرع الكلية</td>
            <td>اسم الطالب/ة</td>
            <td>الرقم الأكاديمي</td>        
            
                </tr>
            <?php while($row = mysqli_fetch_array($result)){ ?>
                
                <tr>
                    <td style="display:none;">
                        <?php echo $row['student_id'] ?>
                    </td>
                    
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
        
<script>
            
function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }
        
    </script>
    
<!-------------------------------------------------------->  
<!-------------------------------------------------------->  

    <p class="footer">Go to <a href="Insert-Graduates.php" target="_blank">Insert Graduates.</a></p>
    <p class="footer">Go to <a href="index.html" target="_blank">Gifts Page.</a></p>

    </body>
</html>

<!-- -->