<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f1f1f1;
        }
        .inner-container{
        width: 55%;
        float: right;
        background-color: #fdfdfd;
        padding: 150px;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        text-align: center;
        }
        .inner-container h1, h2{
        margin-bottom: 30px;
        font-size: 30px;
        font-weight: 900;
        }
        span{
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        padding: 10px;
        width: 500px;
        background-color: #3AA9E2;
        
        }
        span:hover{
        background-image: linear-gradient(to right top, #f85370, #f35470, #ee5570, #e8556f, #e3566f);
        color: #fff;
        border-radius: 20px;
        transition: 0.5s;
        
        }
    </style>
</head>
<body>
    <div class="inner-container">
        
        <h1>Home</h1>
        <h2>My first laravel project</h2>
        
        <div class="skills">
            <span><a href="/profile" style="text-decoration: none; color: black;">My Profile</a></span>
        </div>
    </div>
    
</body>
</html>