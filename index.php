<?php 
		
	if($_POST["submit"]){
	
		
		
		if(!$_POST["name"]){
		
			$error="<br/>Please enter your name.";
			
		}
		
		if(!$_POST["email"]){
		
			$error.="<br/>Please enter your email.";
			
		}
		
		if(!$_POST["comment"]){
		
			$error.="<br/>Please enter your comment.";
			
		}
		
		// if ($_POST["email"]!="" AND !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
//     		
//     		$error.="<br/>Please enter a valid email address!"; 
//     		
// 		} 
		
		if($error){
		
			$result='<div class="alert alert-danger"><strong>There exists some error(s):</strong>'.$error.'</div>';
		
		}else{
		
			// //mail($emailTo, $subject, $body, $headers)
			if(mail("", "Comment From Website", "Name :" .$_POST['name']."Email: ".$_POST['email']."Comment: ".$_POST['comment'])){
			
				$result='<div class="alert alert-success"><strong>Thank!</strong> I\'ll be in touch</div>';
				
				
			}else{
			
			
				$result='<div class="alert alert-danger"><strong>Sorry,there was an error sending your message. Please try again later! <strong></div>';
			
			}
			
		}
		
	}



?>

<!doctype html>
<html>
<head>
<title>Comments page</title> 
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap
.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap
-theme.min.css">

<style>

.emailForm{

	border: 2px solid white;
	border-radius: 10px;
	margin-top: 60px;
	opacity: 20%;
	/* 
background-color: #ea4444;
	background-opacity:
 */
	background-color: transparent;

}

.emailForm h1{

	color: white;
	opacity: 80%;
}

.emailForm p{

	color: white;
	opacity: 80%;
	
}



form{

	padding-bottom: 20px;
	
}



.contentDiv{

	width: 100%;
    background-size: cover;
    background-image: url("background3.jpg");
	/* background-color: transparent; */
}

/* 
.marginBottom{

	margin-bottom: 66px;

}
 */

.whiteFont{

	color:white;

}
</style>
</head>

<body>
<div>

	

	<?php
// **********************GET and POST variables***********************//
	// print_r($_POST);
// 	
	// $names=array("viggie","cc","joy");
// 	
// 	if($_POST["submit"]){
// 	
// 		if($_POST["name"]){
// 		
// 			foreach($names as $name){
// 			
// 				if($_POST["name"]==$name){
// 				
// 					echo "Hello, I know you! Your name is ".$_POST["name"];
// 					
// 					$knowyou=1;
// 					
// 				}
// 			
// 			}
// 			
// 			if($knowyou!=1){
// 			
// 				echo "Sorry,".$_POST["name"]."! I don't know you";
// 				
// 			}
// 		
// 		 	
// 		}
// 		
// 
// 	}

	// if($_GET["submit"]){
// 
// 		
// 		if($_GET["name"]){
// 		
// 			echo"Your name is  ".$_GET["name"];
// 			
// 		}else {
// 			
// 			echo "Please input your name";	
// 			
// 		}
// 	}
// 	
	
// **********************sending email***********************//
	
    	// $emailTo="";
//     	$subject="I hope this works!";
//     	$body="I think you're great";
//     	$headers="From: 278764796@qq.com";
//     	
//     	if(mail($emailTo, $subject, $body, $headers)){
//     	
//     		echo "The email sent successfully";
//     	}else {
//     	
//     		echo "Have not sent to users!";
//     	
//     	}
//     	
    // **********************variable***************************//

	// $test="I \"m a variable!";
// 	
// 	$test2="Me Too!";
// 	
// 	$number=75;
// 	
// 	$name="Wenjing";
// 	
// 	$a="number";
// 	
// 	// echo "My name is $name";
// 	
// 	// echo "My name is ".$name;
// 	
// 	echo "The number is ".$$a;
// 	
// 	
// 	// echo $test2;


// **********************arrays***************************//

// $myArray=array("Pizza","Chocolate","Coffee");
// 
// print_r($myArray);
// 
// echo "<br/><br/>"; -->
// 
// echo $myArray[2];
// 
// echo "<br/><br/>"; -->
// 
// // another way to display the array
// 
// $anotherArray[0]="Peach";
// 
// $anotherArray[1]="Apple";
// 
// print_r($anotherArray);
// 

// echo "<br/><br/>";
// 
 
// 
// // another way to display the array: use key and(=>) value
// 
// $thirdArray=array(
// 
// 	"Frence"=>"French",
// 	
// 	"China"=>"Chinese",
// 	
// 	"America"=>"English"
// );
// 
// print_r($thirdArray);
// 
// echo "<br/><br/>"; 
// 
// $anotherArray[]="Orange";
// 
// print_r($anotherArray);
// 
// echo $thirdArray[China];
// 
// unset($thirdArray["America"]); //delete the America's value
// 
// echo "<br/><br/>"; 
// 
// print_r($thirdArray);
// 
// $name="Joy";
// 
// echo "<br/><br/>"; 
// 
// unset($name);
// 
// echo $name;


// **********************if statements*************************//

// $number=3;
// 
// $number1=2;
// 
// $number2=3;
// if($number==$number1 OR $number== $number2 ){
// 
// 	echo "True!";
// 
// }else
// 
// 	echo "False!";

// **********************for and foreach***********************//

// $myArray=array("Pizza","Chocolate","Coffee");
// 
// foreach($myArray as $key => $value){  
// 
 // 	echo "Key: $key, Value: $value <br/> ";
// 
// }
// 
// for($i=100; $i>50; $i=$i-10){
// 
 
// 	echo $i. "<br/>";

// 
// }

// **********************while statement***********************//

// $i=0;
// 
// $myArray=array("Pizza","Chocolate","Coffee");
// 
// // while($i<3){
// // 	
// // 	echo $myArray[$i]. "<br/>"; 
// // 	
// // 	$i++;
// // 
// // }
// 
// while($myArray[$i]){
// 	
// 	echo "Key:$i Value: $myArray[$i] <br/>";
// 	
// 	$i++;
// 
// }
// 
// 
// 


	?>
	
<!-- 
<form method="post">
	
		
		<label for="name">Name</label>
	
		<input name="name" type="text" value="name" />
		
		<input type="submit" name="submit" value="Submit your name"/ >
		
		<!~~ <button> submit </button> ~~>
	
	
	</form>
 -->
 
<div class="contentDiv">
<div class="container " >

		<div class="row ">
	
			<div class="col-md-6 col-md-offset-3 emailForm ">
	
				<h1 >Your Comments</h1>
			
				<?php echo $result; ?>
			
				<p class="lead"> Please get in touch- I'll get back to you as soon as I can.</p>
			
				<form method="post" >
			
					<div class="form-group">
			
						<label for="name" class="whiteFont"> Your Name: </label>
				
						<input type="text" name="name" class="form-control" placeholder="Your Name" value="<?php echo $_POST['name'];?>"/ >
				
					</div>
				
					<div class="form-group">
			
						<label for="email" class="whiteFont"> Your Email: </label>
				
						<input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $_POST['email'];?>"/ >
				
					</div>
				
					<div class="form-group">
			
						<label for="comment" class="whiteFont"> Your Comment: </label>
				
						<textarea class="form-control" name="comment" ><?php echo $_POST['comment']; ?></textarea>
				
					</div>
				
					<input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg" />
				
				</form>
			
			</div>

		
		</div>
		
	
	
</div>
</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>

        $(".contentDiv").css("height", $(window).height());

       
</script>


</body>
</html>

                                                                    

