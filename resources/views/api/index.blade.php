<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>添加信息</title>
</head>
<body>
    <form id="form" method="post">
        地区 <input type="text" name="region" >
        公司名 <input type="text" name="Cname" >
        职能 <input type="text" name="position" >
        地址 <input type="text" name="addr" >
        邮箱 <input type="text" name="email" >
        电话 <input type="text" name="tel" >
        传真 <input type="text" name="fax" >
        <input type="button" id="button" value="提交">
    </form>
    <script src='https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js'></script>
    <script>
    $('#button').click(function(){
        $data=$('#form').serialize();$.post('/api/user',$data);
        });
    </script>
</body>
</html>