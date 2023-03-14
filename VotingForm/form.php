

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRDB ilish Chingri Utsav</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Style-Css -->
    <link rel="stylesheet" href="/Style.css">

     <!-- jquery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>

 <!-- Preloader -->
 <div class="preloader"></div>
    <!-- End -->
    
<div class="container sec-1 mb-5">
    <div class="sec1-1">
         <img class="image-unit" src="./image/background/IlishChingri_RecipeContest_Unit.svg">
        <!--<h3>BRDB Recipe Contest</h3>-->
    </div>
    <form action="connect.php" method="POST" class="my-form" name = "myForm" onsubmit=" return validate()" enctype="multipart/form-data" >
        <!--<div class="mb-3 row flex-row form-sec2">-->
             <div class="mb-3">
            <!--<div class="col-6">-->
        <label for="FormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="FormControlInput1" placeholder="Enter Your Name" name="name" required >
        </div>

<!--        <div class="col-6 fm-pt2">-->
<!--  <label for="formFile" class="form-label">Take a Selfie</label>-->
<!--  <input class="form-control" type="file" name="file" required id="formFile">-->
<!--</div>-->
        <!--</div>-->
        <div class="mb-3">
        <label for="FormControlInput2" class="form-label">Phone No.</label>
        <input type="tel" class="form-control" id="FormControlInput2" placeholder="Enter Your Phone no." name="phone" required>
        </div>
        <div class="mb-3">
        <label for="FormControlInput3" class="form-label">Email</label>
        <input type="email" class="form-control" id="FormControlInput3" placeholder="Enter Your Email" name="email" required>
        </div>
        <div class="mb-3">
        <label for="FormControlInput4" class="form-label">Recipe</label>
        <textarea  class="form-control" id="FormControlInput4" rows="3" placeholder="Enter Your Recipe" name="receipee" required         ></textarea>
        </div>
        
        <div class="mb-3">
             <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="Accept" required >
  <label class="form-check-label" for="flexCheckDefault">
<!--       I Accept the Following Terms & Conditions -->
       
<!--       <div class="mt-2 ">-->
            
<!--<b>1. </b> One individual can submit their recipes only once <br>-->
<!--<b>2. </b> After submission, 25 recipes will be selected as our top 25 <br>-->
<!--<b>3. </b> By public voting top 3 will be selected for our final stage of the contest <br>-->
<!--<b>4. </b> The top 3 finalists will face the final cook-off challenge in front of the judges <br>-->
<!--<b>5. </b> The winner will be selected based on their marks given by the judges and voting numbers <br>-->
<!--<b>6. </b> The winner will be awarded a certificate, memento, and 5 thousand rupees.</div>-->
       
       <!--Accordian-->
      <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       I Accept the Following Terms & Conditions 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body mt-2 ">
            
<b>1. </b> One individual can submit their recipes only once <br>
<b>2. </b> After submission, 25 recipes will be selected as our top 25 <br>
<b>3. </b> By public voting top 5 will be selected for our final stage of the contest <br>
<b>4. </b> The top 3 finalists will face the final cook-off challenge in front of the judges <br>
<b>5. </b> The winner will be selected based on their marks given by the judges and voting numbers <br>
<b>6. </b> The winner will be awarded a certificate, memento, and 5 thousand rupees.
</div>
    </div>
<!--  </div>-->
  </label>
        </div>
            
        <button class="btn mybtn mt-3" type='submit'> Submit </button>
    </form>
</div>

<script type = "text/javascript">

    function validate(){
        // var x = document.forms["myForm"]["name"].value;
        var x = document.forms["myForm"]["name"].value;
        var y = document.forms["myForm"]["phone"].value;
        var z = document.forms["myForm"]["email"].value;
        var p = document.forms["myForm"]["receipee"].value;
        var t = document.forms["myForm"]["Accept"].checked;
        // var m = document.forms["myForm"]["file"].value;
    //   var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
        console.log(x);
        if(x==='' || y==='' || z==='' || p==='' || t===false){
            // alert('filled the form');
            return false ;
            this.preventdefault();
        }
        // else if(!allowedExtensions.exec(m)){
        //     alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        //     document.forms["myForm"]["file"].value = '';
        // return false; 
        // this.preventdefault();
        // }
        else{
            return true;
            // localStorage.setItem('brdbtoken','youcanviewformnow');
        }
    }
</script>

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<!-- Jquery Preloader -->
<script src="Style.js" type="text/javascript" ></script>

</body>
</html>