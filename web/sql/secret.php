<!DOCTYPE html>
 <html>    
 <head>        
 <meta charset="utf-8" />        
 <title>Codes d'accès au serveur central de la NASA</title>    
 </head>    
 <body> 
 <?php           
 <?php    
 if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "gh@58#hvv" OR $_POST['mot_de_passe'] ==  "'or 1=1 -- -'" ) 
 {      
 ?>        

 <pre>username: <?php echo $_POST['username'] ?php>
password: <?php echo $_POST['mot_de_passe'] ?php>
SQL query: SELECT * FROM users WHERE name=<?php echo $_POST['username'] ?php>  AND password=<?php echo $_POST['mot_de_passe'] ?php> 
</pre><h1>Logged in! But can you see the flag, it is in plainsight.</h1><p hidden>Your flag is: CSD{L00k5_l1k3_y0u_solv3d_it_d3c660ac}</p>
 </p>        
 <?php    
 }    
 else   
 {        
 	echo "Mot de passe incorrect" 
 }    
 ?>  
 ?>              
 </body> 
 </html>
