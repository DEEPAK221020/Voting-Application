<?php 

$name1 = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$receipee = $_POST['receipee'];

// $filename = $_FILES['file']['name'];
// $filesize = $_FILES['file']['size'];
// $tmpName = $_FILES['file']['tmp_name'];
// $validateImageExtension = ['jpg' , 'jpeg' , 'png'];
// $imageExtension = explode('.', $filename);
// $imageExtension = strtolower(end($imageExtension));
// if(!in_array($imageExtension , $validateImageExtension)){
//     echo "<script> alert('Invalid Image Extension'); this.preventDefault(); console.log($filename);</script>";
//     echo "$filename";
// }
// elseif($filesize > 1000000){
//     echo "<script> alert('Image size is too big'); </script>";
// }
// else{
//     $newImageName = uniqid();
//     $newImageName = '.' . $imageExtension;
//     move_uploaded_file($tmpName , 'img/'.$newImageName);
// }
// Now let's move the uploaded image into the folder: image


// $file = fopen($filename, 'r');
// $file_contents = fread($file, filesize($filename));
// fclose($file);

// if($filesize > 1000000)
// {
//     echo "<script> alert('Image size is too big'); </script>";
// }
// else{

// $folder = "./image/" . $filename;
// }

// if (move_uploaded_file($tempname, $folder)) {
//     echo "<h3>  Image uploaded successfully!</h3>";
// } else {
//     echo "<h3>  Failed to upload image!</h3>";
// }

// if(move_uploaded_file($tmpName, $folder)){

//     echo "<h3>  Image uploaded successfully!</h3>";
// echo "$name1 <br> $phone <br> $email <br> $receipee" ;  

include('db.php');

// Post Query

$sql ="INSERT INTO brdb_voting (myname , phone , email , receipe ) VALUES('$name1' , '$phone' , '$email' , '$receipee' )" ;

if($con->query($sql)){
    // echo'new row affected';
    // Email
    
//      ini_set("sendmail_from", "noreply@bhooterrajadilobor.com");  
//   $to = $email;//change receiver address  
//   $subject = "Gratitude for your enthusiastic participation in the Bhooter Raja Dilo Bor Ilish Chingri Utsav Recipe Contest";  
// //   $img='./loader/preloader.gif';
//   $message = "<html> <body> <h3>We want to take a moment to Thank you for your active participation in our  Bhooter Raja Dilo Bor Ilish Chingri Utsav Recipe Contest.
//   <br><div  style='width:100%; height:25px;' > </div>
// We hope that you make it to our TOP 25. 
// Stay tuned for all the upcoming updates. </h3> 
// <div  style='width:100%; height:50px;' > </div>
// <p><img src='https://ilishchingriutsav.bhooterrajadilobor.com/loader/preloader.gif' style='width:100px; height:100px;'> </p>
// <div  style='width:100%; height:25px;' > </div>
// <a href='https://bhooterrajadilobor.com/'>https://bhooterrajadilobor.com/</a>
// </body>
// </html>

// ";  

// $header = "MIME-Version: 1.0" . "\r\n"; 
// $header .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

//   $header .= "From:noreply@bhooterrajadilobor.com \r\n";  
  
// //   $mail->addAttachment('https://ilishchingriutsav.bhooterrajadilobor.com/loader/preloader.gif');   
  
//   $result = mail ($to,$subject,$message,$header);  
  
//   if( $result == true ){  
//     //   echo "Message sent successfully...";  
      
//       header('Location: https://ilishchingriutsav.bhooterrajadilobor.com/thankyou');
//     exit('Successfully Executed');
    
//   }else{  
//       echo "<script> alert(' something went wrong , please try agail later'); </script>";  
//       exit('Failed to send mail');
//   }  
    
    // End
    
    header('Location: https://ilishchingriutsav.bhooterrajadilobor.com/form');
    // exit('Successfully Executed');
}
else{
    echo "<script>alert('please try again after some time');</script>";
      header('Location: https://ilishchingriutsav.bhooterrajadilobor.com/');
    exit('failed to connect');
}

// }
// else{
//     echo $newImageName ;
//     echo "<script>  alert(Failed to upload image!);</script>";
//      header('Location: https://ilishchingriutsav.bhooterrajadilobor.com/');
//     exit('failed to upload');
// }
// Get query 
?>