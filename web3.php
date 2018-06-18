<!DOCTYPE html>
<html lang="en">
<head>
    
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
     <script>
    
    function myFunction(){
    if(document.getElementById("name").value=="" || document.getElementById("phone").value=="" || document.getElementById("location").value=="" || document.getElementById("pname").value==""){
            $.alert({
        title: 'Alert!',
        content: 'Please fill all the fields.',
    });
    }
    else {
        var x=document.getElementById("location").value;
        x1="mangalore";
        x2="mangaluru";
        x3="bangalore";
        x4="bengaluru";
        x5="Mangalore";
        x6="Mangaluru";
        x7="Bengaluru";
        x8="Bangalore";
        x9="MANGALORE";
        x10="MANGALURU";
        x11="BANGALORE";
        x12="BENGALURU";
        if(x.includes(x1) || x.includes(x2) || x.includes(x3) || x.includes(x4) || x.includes(x5) || x.includes(x6) || x.includes(x7) || x.includes(x8) || x.includes(x9) || x.includes(x10) || x.includes(x11) || x.includes(x12)){
            alert("Thank you for choosing Trashin Recycling.Our Customer Relationship team will get in touch with you shortly.");
        }
        else{
            alert("Sorry! We do not serve in your area. Hopefully, we shall in the near future.");
        }
    }

}
    
    </script>
    
    <title>TRASHIN RECYCLING</title>
     <link rel="icon" href="trashin_logo.png" />
    <link rel="stylesheet" type="text/css" href="style3.css">
    
</head>
    
<body>
    
<div class="container-fluid">
    
    <br><br>
        
        <a><div style="float:left"><img src="trashin_logo.png" class="logo" style="width:35px;"/>&nbsp;</div><div style="float:left"><img src="trashin.png" class="image" style="width:110px;"/>&nbsp;</div></a>
        <br><br><br><br><br>
    <div class="row">
    
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <h2>Zero-waste solutions for</h2>
        <h2>your business</h2>
        <br>
        
        <div class="row">
            
            
            <div class="col-xs-1 col-lg-2 col-sm-1 col-md-2">
                
        <i class="fa fa-truck" aria-hidden="true" style="color:#273478;font-size: 50px;"></i><br><br><br>
        <i class="fa fa-list" aria-hidden="true" style="color:#38a2cc;font-size: 50px;"></i><br><br><br>
        <i class="fa fa-check-square" aria-hidden="true" style="color:#63b547;font-size: 50px;"></i><br><br><br>
        <i class="fa fa-recycle" aria-hidden="true" style="color:#104c30;font-size: 50px;"></i>
        </div>
        <div class="col-xs-8 col-lg-7 col-sm-8 col-md-7">
        <h3>Dry-waste recycling</h3>
        <p style="font-size:17px;">Pick-up scheduling, tracking and reports - all available at your fingertips.</p>
        <h3>Free waste audit</h3>
        <p style="font-size:17px;">Analyse the composition of your waste and get a complimentary audit report.</p>
        <h3>EPR compliance</h3>
        <p style="font-size:17px;">Customised recycling program to fulfil your company's Extended Producer Responsibility objectives.</p> 
        <h3>Trash Barter</h3>
        <p style="font-size:17px;">Exchange your recyclable trash for your choice of stationery of equal value.</p>
        </div>
        
        
        </div>
        
        </div>
        
    <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4">
        
        
        <div class="loginbox">
    <h1>Register Here</h1>
        <form action="demo.php" method="post">
            <i class="fa fa-male" style="font-size:25px;" aria-hidden="true"></i>
            <input type="text" placeholder="Enter your Name" name="pname" id="pname" style="margin-left:5px;" required><br>
            <i class="fa fa-bank" aria-hidden="true"></i>     
            <input type="text" placeholder="Enter the Organisation Name" name="name" id="name" required><br>
        <i class="fa fa-phone" aria-hidden="true" style="font-size:22px;"></i>
            <input type="text" maxlength="10" name="contact" placeholder="Enter Contact Number" id="phone" required><br>
            <i class="fa fa-envelope" aria-hidden="true"></i>
             <input type="text" placeholder="Enter the Address" name="location" id="location" required><br>
            <p class="hey">Select a service</p><br>
            <div class="container-fluid">
                 <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><label for="dry-waste" class="service">
                <input type="radio" name="mode" id="dry-waste" value="Dry-waste recycling" onclick="myDry()" checked>
			<span><i class="fa fa-truck" aria-hidden="true" style="font-size:30px;"></i></span>
                    <!--<p class="dry">Dry-waste recycling</p>-->
                    </label></div>
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><label for="free-audit" class="service">
			<input type="radio" name="mode" id="free-audit" value="Free-waste audit" onclick="myAudit()">
			<span><i class="fa fa-list" aria-hidden="true" style="font-size:30px;"></i></span>
                         <!--<p class="free">Free waste audit</p>-->
                    </label></div>
                     <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><label for="epr" class="service">
			<input type="radio" name="mode" id="epr" value="EPR compliance">
			<span><i class="fa fa-check-square" aria-hidden="true" style="font-size:30px;" onclick="myepr()"></i></span>
                         <!--<p class="eprc">EPR compliance</p>-->
                        </label></div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"> <label for="dumpster" class="service">
			<input type="radio" name="mode" id="dumpster" value="Trash Barter">
			<span><i class="fa fa-recycle" aria-hidden="true" style="font-size:36px;" onclick="myrecycle()"></i></span>
                        <!--<p class="dump">Trash Barter</p>-->
                         </label></div>
            </div>
            </div>
            <p style="margin:0;display:inline;color: darkgreen;font-weight:bold;">Service chosen:</p>
            <p id="waste" style="margin:0;display:inline;" align="right">Dry-waste recycling</p>
            <br><br>
             <button class="btn" name="btn" onclick="myFunction()">Get Started</button>
            
        </form>
    </div>
        
        </div>
    
    
    
    
    </div>
    
    
    
    
    </div>
    
    
    <script>
    
    function myDry(){
    document.getElementById("waste").innerHTML="Dry-waste recycling";
}
    
    function myAudit(){
    document.getElementById("waste").innerHTML="Free-waste audit";
}
    
    function myepr(){
    document.getElementById("waste").innerHTML="EPR compliance";
}
        
    function myrecycle(){
    document.getElementById("waste").innerHTML="Trash barter";
}
      
    
    </script>
    
</body>
    
</html>