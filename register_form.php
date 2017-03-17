<html lang="en">
<head>
    <meta charset="utf-8">
    <title>From Validation</title>
</head>
<body>
<h3>แบบฟอร์มลงทะเบียน</h3>
<form action="dopost.php" method="post"class="a">
    ชื่อ-นามสกุล:</br>
    <input type="text" class="text" name="name" id="name" /><br/>
    อีเมล:<br/>
    <input type="email" class="text" name="email" id="email" /><br/>
    เพศ:<br/>
    <input type="radio" class="radio" name="sex" id="sex" value="M" />ชาย
    <input type="radio" class="radio" name="sex" id="sex" value="F"/>หญิง
    <br/>
    ความสนใจ:<br/>
    <input type="checkbox" class="checkbox" name="intr1" id="intr1"/>เรียน
    <input type="checkbox" class="checkbox" name="intr2" id="intr2" />เกมส์
    <br/>
    ที่อยู่:<br/>
    <textarea class="text"name="address" id="address" rows="4" cols="50"></textarea>
    <br/>
    จังหวัด:<br/>
    <select name="province" id="province">
    <option value="">---เลือกจังหวัด---</option>
    <option value="1">กรุงเทพมหานครฯ </option>
    <option value="2">ชลบุรี </option>
    </select><br/>
    <br/><br/>
    <input type="submit" id="submit" value="Submit" name="submit"/>
    </form>
    
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script>
    $('#submit').on('click',function(event){
        var valid = true,
        errorMessage = "";
        if($('#name').val()==''){
            errorMessage = "โปรดป้อนชื่อ-นามสกุล\n";
            valid = false;

        }
        if ($('#address').val() == ''){
            errorMessage +="โปรดป้อนที่อยู่\n";
            valid = false;

        }
        if ($('#email').val() == ''){
            errorMessage +="โปรดป้อนemail\n";
            valid = false;

        }
        if (!$('#sex').prop("checked") && !$('#sex').prop("checked")){
            errorMessage +="โปรดป้อนเพศ\n";
            valid = false;

        }
        if ($('#intr1').prop("checked")==false && $('#intr2').prop("checked")==false){
            errorMessage +="โปรดป้อนความสนใจ\n";
            valid = false;

        }
        if ($('#province').val() == ''){
            errorMessage +="โปรดป้อนจังหวัด\n";
            valid = false;

        }
        if (!valid && errorMessage.length>0){
            alert(errorMessage);
            event.preventDefault();

        }
        
    });
    </script>
</body>
</html>