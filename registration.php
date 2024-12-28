 <?php
/*$servername = "";
$username = "lally";
$password = "robert";
$conn = new mysqli('$servername' , '$username' , '$password' , 'cat');

$servername = "localhost";
$username = "lally";
$password = "robert";

// Create connection
$conn = new mysqli($servername, $username, $password,'cat');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/

 $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mob = $_POST['mob'];
    $job = $_POST['job'];
    $comp = $_POST['comp'];
    $ans = $_POST['ans'];

  if (empty($fname) || empty($lname) || empty($email) || empty($mob) || empty($job) || empty($comp) || empty($ans)){
    
    
    echo "Fields Are Empty";    
     
    }
   
    /*else{
        echo  "
        $fname <br>";
        echo "$lname<br>";
        echo "$email<br>";
        echo "$mob<br>";
        echo "$job<br>";
        echo "$comp<br>";
        echo "$ans<br>";
           $host = "localhost";
    $username = "root";
    $password = " ";
    $conn = new mysqli($host, $username , $password , 'cat');
    
    echo "Welcome";
    }*/
   
   else{
        echo "$mob<br>";
       $host = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli( $host , $username , $password , 'cat');
         if(mysqli_connect_error()){
         die('Connect error('.mysqli_connect_error().')'.mysqli_connect_error()); 
         }
         else{
        $stmt = $conn->prepare("insert into registration(fname, lname, email, mob, job, comp, ans) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss",$fname, $lname, $email , $mob, $job ,$comp, $ans);
        $stmt->execute();
        echo "Registration Successfully Done...";
        $stmt->close();
        $conn->close();
    }
   }

       /*
              
   
         else{
        
      $SELECT = " SELECT email from registration Where email = ? Limi t 1";
      $INSERT = "INSERT  Into registration (fname, lname, email, mob, job, comp, ans) values(?, ?, ?, ?, ?, ?, ?) ";
      $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",email);  
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt_>num_rows;
    
        if($rnum==0){
        $stmt = $conn->prepare($INSERT);
        
        $stmt->bind_param("sssisss",$fname, $lname, $email , $mob, $job ,$comp, $ans);
        $stmt->execute();
        echo "Record is inserted successfully";
       
   }
    }
    }
   /* 
   
    
         
    
        else 
        {
        $host = "localhost";
        $username = "root";
        $password = "";
         $conn = new mysqli('$host', '$username','$password');
         if(mysqli_connect_error()){
         die('Connect error('.mysqli_connect_error().')'.mysqli_connect_error());
         }
         
    }
        else{
        $SELECT = "SELECT email From registration Where email = ? Limt 1";
        $INSERT = "INSERT  Into registration (fname, lname, email, mob, job, comp, ans) values(?, ?, ?, ?, ?, ?, ?) ";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt_>num_rows;
        
        if($rnum==0){
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssisss",$fname, $lname, $email $mob, $job ,$comp, $ans);
        $stmt->execute();
        echo "Record is inserted successfully";
        }
    }

    
    $conn = new mysqli('localhost','root','test');
    if($conn->connect_error){
        die('connection failed : ' .conn->connect_error );
    }
    else{
        $stmt = $conn->prepare("insert into registration(fname, lname, email, mob, job, comp, ans) values(?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisss",$fname, $lname, $email $mob, $job ,$comp, $ans);
        $stmt->execute();
        echo "Registration Successfully Done...";
        $stmt->close();
        $conn->close();
    }*/
?>