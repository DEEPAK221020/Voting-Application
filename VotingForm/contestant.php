<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRDB ilish Chingri Utsav</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link  href="Style.css" rel="stylesheet">
     <style>
     
     </style>

 <!-- jquery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>

<!-- Preloader -->
<div class="preloader"></div>
    <!-- End -->

<div class="container" style="height:100vh;">
    <h3 class="mt-5 text-center "> CONTESTANTS </h3>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col" class="col">SL.</th>
      <!--<th scope="col" class="content-name col">PHOTO</th>-->
      <th scope="col" class="content-name col">NAME</th>
      <!-- <th scope="col">PHONE</th>
      <th scope="col">Email</th> -->
      <th scope="col" class="col-9">RECIPE</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include('fetch.php');
    if ($result->num_rows > 0){
        $i= 1;
        while($row = $result->fetch_assoc()) {
            // echo "<tr><th scope='row'>".$row["id"]."</th>"
            //      "<td>".$row["myname"]."
            //      ".$row["phone"]." 
            //      ".$row["email"]."
            //       ".$row["receipe"]."
            //       </td></tr>";

        //     echo "<tr>
        //     <th scope='row'>".$i++."</th>
        //     <td class='content-image'> <img src='./image/".$row["photo"]."'></td>
        //     <td class='content-name'>".$row["myname"]."</td>
        //     <td class='content-recep more'>".$row["receipe"]."</td>
        //   </tr>";
           echo "<tr>
            <th scope='row'>".$i++."</th>
            <td class='content-name'>".$row["myname"]."</td>
            <td class='content-recep more'>".$row["receipe"]."</td>
          </tr>";
          }
    }
    else {
        echo "0 results";
      }
    ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr> -->
  </tbody>
</table>
<div class="text-center"><a href="https://bhooterrajadilobor.com/"><button class="btn mybtn  mb-2">Go Back</button></a></div>
</div>
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Read more";
    var lesstext = "Read less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>
<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<!-- Jquery Preloader -->
<script src="Style.js" type="text/javascript" ></script>

</body>
</html>