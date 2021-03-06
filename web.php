<!DOCTYPE html>
<html lang="en">
    
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="alert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="alert/dist/sweetalert.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<script src="my_js.js"></script>
    
<script src="jquery-3.3.1.min.js"></script>      
    
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            alert("Sorry!!!! We do not have service in your area and we are looking forward to work for the same in the near future.");
        }
    }

}
    
    </script>
    
<title>TRASHIN RECYCLING</title>
     <link rel="icon" href="trashin_logo.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <a class="page-top"><div style="float:left"><img src="trashin_logo.png" width="35px"/>&nbsp;</div><div style="float:left"><img src="trashin.png" width="120px"/>&nbsp;</div></a>
    <h2 class="top">Zero-waste solutions for </h2><br>
    <h2 class="bottom">your business</h2>
    <div class="row about">
        <div class="col-lg-2">
        <br>
        <i class="fa fa-truck" aria-hidden="true" style="color:#273478;font-size:50px;"></i><br><br><br>
        <i class="fa fa-list" aria-hidden="true" style="color:#38a2cc;font-size:50px;"></i><br><br><br>
        <i class="fa fa-check-square" aria-hidden="true" style="color:#63b547;font-size:50px;"></i><br><br><br>
        <i class="fa fa-recycle hello" aria-hidden="true" style="color:#104c30;font-size:50px;"></i>
        </div>
        <div class="col-lg-9">
        <h3>Dry-waste recycling</h3>
        <p style="font-size:15px;">Pick-up scheduling, tracking and reports - all available at your fingertips.</p>
        <h3>Free waste audit</h3>
        <p style="font-size:17px;">Analyse the composition of your waste and get a complimentary audit report.</p>
        <h3>EPR compliance</h3>
        <p style="font-size:17px;">Customised recycling program to fulfil your company's Extended Producer Responsibility objectives.</p> 
        <h3>Trash Barter</h3>
        <p style="font-size:17px;">Exchange your recyclable trash for your choice of stationery of equal value.</p>
        </div>
    </div>
    
    <!--<img src="avatar2.png" class="avatar">-->
    <div class="loginbox">
    <h1>Register Here</h1>
        <form action="demo.php" method="post">
            <i class="fa fa-male" style="font-size:25px;" aria-hidden="true"></i>
            <input type="text" placeholder="Enter the Name" name="pname" id="pname" style="margin-left:5px;" required><br>
            <i class="fa fa-bank" aria-hidden="true"></i>     
            <input type="text" placeholder="Enter the Organisation Name" name="name" id="name" required><br>
        <i class="fa fa-phone" aria-hidden="true" style="font-size:22px;"></i>
            <input type="text" maxlength="10" name="contact" placeholder="Enter Contact Number" id="phone" required><br>
            <i class="fa fa-envelope" aria-hidden="true"></i>
             <input type="text" placeholder="Enter the Address" name="location" id="location" required><br>
            <p class="hey">Select a service</p><br>
             <div class="container-fluid">
                 <div id="service-names" class="row">
                <div class="col-lg-3"><label for="dry-waste" class="service">
                <input type="radio" name="mode" id="dry-waste" value="Dry-waste recycling" onclick="myDry()" checked>
			<span><i class="fa fa-truck" aria-hidden="true" style="font-size:30px;"></i></span>
                    <!--<p class="dry">Dry-waste recycling</p>-->
                    </label></div>
                     <div class="col-lg-3"><label for="free-audit" class="service">
			<input type="radio" name="mode" id="free-audit" value="Free-waste audit" onclick="myAudit()">
			<span><i class="fa fa-list" aria-hidden="true" style="font-size:30px;"></i></span>
                         <!--<p class="free">Free waste audit</p>-->
                    </label></div>
                     <div class="col-lg-3"><label for="epr" class="service">
			<input type="radio" name="mode" id="epr" value="EPR compliance">
			<span><i class="fa fa-check-square" aria-hidden="true" style="font-size:30px;" onclick="myepr()"></i></span>
                         <!--<p class="eprc">EPR compliance</p>-->
                         </label></div>
                    <div class="col-lg-3"> <label for="dumpster" class="service">
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
    </div>-->
    
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