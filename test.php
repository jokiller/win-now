<html>
	<head>
		
		<title>php lessons by jawad</title>
	</head>
	<body>
	<?php
  // message non lu;

		define ('THE_DATA','www.jawad@gmail.net');
		echo THE_DATA; 
		$value = THE_DATA;
		echo $value;

			echo 'welcome to my website'; 

	$value = print"welcome to my first site web ";

	echo $value;
     
     $value =`mkdir PHPLessons`;  //cration un nouveau chemin dans le terminal  
     echo $value; 

     $value = `ls`;  // affichage de lien au ce trouver le dossier
     echo $value ;  

      $one =1;
      $two =2;
      echo $one + $two ;


$num =10;
$value = "welcome to "."muy site web".$num; // point pour concatiner les valeur taper 
echo $value ; 


     $__value    // magic variable;
     __value__ // magic canstant; 

     echo __FILE__;     //le chemin ou le fichier trouver  dans le desk top,
     echo __LINE__;     // le numero de linge au se trouver; 

	//weak type    php 
   // strong type

$value = 10; // integer;
$$value = "abdallah aid"; 

$value = array(10,2.3, true, yes);
echo $value [1];

// numerical indexed array
$val = array (1.2, 2, "welcome");


// ternary operator  inline if
$val =5;
$value = ($val ==5) ? 6 : 7;
// $val = 5 alors $value =6 else ($val =! 5) $value =7;

		//while 
		$val =1;
		while ($val <=10) :
			echo 'yes'
		    $val++;
		endwhile;    
?>
 // scalar type   

<p>  <?php echo "welcome";  ?>  </p>
<i>     <?= "fqsdqf";?>   </i>


	</body>

</html>
