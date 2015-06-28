<!doctype html>
<html>
<head>
<title>My First Webpage</title> 
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1" /> 
</head>

<body>
<div>

	

	<?php
// **********************GET variables***********************//
	// print_r($_POST);
// 	
	$names=array("viggie","cc","joy");
	
	if($_POST["submit"]){
	
		if($_POST["name"]){
		
			foreach($names as $name){
			
				if($_POST["name"]==$name){
				
					echo "Hello, I know you! Your name is ".$_POST["name"];
					
					$knowyou=1;
					
				}
			
			}
			
			if($knowyou!=1){
			
				echo "Sorry,".$_POST["name"]."! I don't know you";
				
			}
		
		 	
		}
		

	}

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
	
	<form method="post">
	
		
		<label for="name">Name</label>
	
		<input name="name" type="text" value="name" />
		
		<input type="submit" name="submit" value="Submit your name"/ >
		
		<!-- <button> submit </button> -->
	
	
	</form>

</div>
</body>
</html>

                                                                    

