<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter Tempdata Example</title> 
   </head>
	
   <body> 
      Temp Data Example 
      <h2><?php echo $this->session->tempdata('item'); ?></h2>
      <a href = 'tempdata/add'><button>Click Here</button></a> to add temp data. 
   </body>
	
</html>