<html> 
  
<head> 
    <meta charset="UTF-8"> 
  
    <style> 
        h3 { 
            text-align: center; 
        } 
  
        img { 
            display: block; 
            margin: auto; 
            height: 150px; 
            width: 150px; 
        } 
  
        .input { 
            margin: 6px; 
            padding: 10px; 
            display: block; 
            margin: auto; 
            color: palevioletred; 
            font-size: 30px; 
        } 
  
        input { 
            width: 90%; 
            display: block; 
            margin-left: 12px; 
            background: none; 
            background-color: lightyellow; 
        } 
  
        select { 
            width: 90%; 
            display: block; 
            margin-left: 12px; 
            background: none; 
            background-color: lightyellow; 
        } 
  
        #heading { 
            font-family: cursive; 
            text-align: center; 
            color: green; 
            padding-top: 20px; 
  
        } 
  
        #form_page { 
            height: 500px; 
            width: 50%; 
            display: flex; 
            flex-wrap: wrap; 
            flex-direction: row; 
            margin: auto; 
  
        } 
  
        #form_body { 
            border-radius: 12px; 
            height: 430px; 
            width: 450px; 
            background-color: beige; 
            border: 1px solid pink; 
            margin: auto; 
            margin-top: 12px; 
        } 
  
        #text { 
            color: red; 
            width: 100px; 
        } 
  
        #head { 
            border-bottom: 2px solid red; 
            height: 100px; 
            background-color: aliceblue; 
        } 
  
        #submit { 
            background-color: white; 
            width: 70px; 
        } 
    </style> 
  
</head> 
  
<body> 
  
    <form method="post" action="From.php"> 
  
        <div id="form_page"> 
  
            <div id="form_body"> 
                <div id="head"> 
                    <h1 id="heading">Registration From</h1> 
                </div> 
                <br /> 
                <div id="input_name" class="input"> 
                    <input id="name" type="text" 
                        Placeholder="Name" name="name" 
                        required> 
                </div>
                <div id="input_name" class="input"> 
                    <input id="Fathername" type="text" 
                        Placeholder="FatherName" name="name" 
                        required> 
                </div>
                 <div id="input_name" class="input"> 
                    <input id="Mothername" type="text" 
                        Placeholder="MotherName" name="name" 
                        required> 
                </div> 
                <div id="input_class" class="input"> 
                    <input type="number" placeholder= 
                        "Age" name="Age" required> 
                </div> 
                <div id="input_name" class="input"> 
                    <input id="email" type="email" 
                        name="email" 
                        placeholder="email"> 
                </div> 
  
                <div class="id input"> 
                    <input id="submit" type="submit" 
                        name="submit" value="submit" 
                        onclick="on_submit()"> 
                </div> 
            </div> 
        </div> 
    </form> 
  
</body> 
  
</html> 