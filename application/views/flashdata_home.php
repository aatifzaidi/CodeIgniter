<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter Flashdata Test</title> 
   </head>
	
   <body> 
      Flash Data Test 
      <h2><?php echo $this->session->flashdata('item'); ?></h2> 
      <a href = 'flashdata/add'><button>Click Here</button></a> to add flash data. 
   </body>
	
</html>