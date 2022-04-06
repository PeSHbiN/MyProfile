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
    
        }
        .inner-container h1{
        margin-bottom: 30px;
        font-size: 30px;
        font-weight: 900;
        }
        .text{
        font-size: 16px;
        color: #545454;
        line-height: 30px;
        text-align: justify;
        margin-bottom: 40px;
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
        <img src="Photo/Peshbin2.jpg" alt="Peshbin Photo" style="width: 200px; height: 200px; float: right; margin: 0 0 0 15px;">
        <h1>About Me</h1>
        <p class="text">
            My name is Peshbin Hama Amin, I am born at 6/Feb/2001 in sulaymaniyah and now I life in sulaymaniyah.
            Now I am in information technology stage three. I love my department, I like to be a good programmer in the future.
        </p>
        <div class="skills">
            <span><a href="/" style="text-decoration: none; color: black;">Go Back</a></span>
            
            
        </div>
    </div>
</body>
</html>