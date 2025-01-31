<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="test_php.css?h=fd99e3b0">
</head>
<body>
<div class="textstyle1">
<div id="container_1249fdfd"><div id="container_1249fdfd_padding" ><div class="textstyle1"><div id="container_195e522a"><div class="textstyle2">  <div id="menu_64badf88">
    <div  class="menuholder1"><a href="javascript:void(0);">
	<div id="menuentry_588ca806"  class="menustyle1 menu_64badf88_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
      <span class="textstyle3">&#8801;</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="rc_images/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_64badf88= new wsp_menu('menu_64badf88', 'menu_64badf88', 10, null, true);

		js_menu_64badf88.createMenuForItem('menuentry_588ca806', ["      <span class=\"textstyle4\">&#8801; </span> ", 'index.html', '',
		                                   "      <span class=\"textstyle4\">&#160;&#160;&#160;Home</span> ", 'index.html', '',
		                                   "      <span class=\"textstyle4\">&#160;&#160;&#160;About</span> ", 'about.html', '',
		                                   "      <span class=\"textstyle4\">&#160;&#160;&#160;Contact</span> ", '', '']);

	</script>
      </div>
    </div>
  <div id="text_430e85af">
    <div class="textstyle2">
      <span class="textstyle5">FiBu &#228;ndern Infos</span>
      </div>
    </div>
</div>
</div><div id="container_50de75ce"><div id="container_50de75ce_padding" ><div class="textstyle1"><span class="textstyle6"><br/><br/></span><span class="textstyle7"><br/></span></div>
<div class="textstyle2"><div id="container_5224ef04"><div id="container_5224ef04_padding" ><div class="textstyle1"><span class="textstyle8">Projekt FiBu &#228;ndern</span><span class="textstyle7"><br/>Kurzbeschreibung des Projektes</span></div>
</div></div><span class="textstyle7"><br/><br/></span><span class="textstyle6"> </span></div>
<div style="clear:both"></div></div></div><div id="container_72077c1"><div id="container_72077c1_padding" ><div class="textstyle2"><div id="container_1aa79cd2"><div id="container_1aa79cd2_padding" ><div class="textstyle2"><div id="elem_5aab4579"  style="vertical-align: top; position:relative; display: inline-block; width:50%; height:320px; min-width:350px; background-color:#E5E5E5; " ><form action="test.php" enctype="multipart/form-data" method="POST">  <div id="text_208c692c">
    <div class="textstyle1">
<span class="textstyle9"><br/>Upload Form<br/><br/></span><div id="container_5a8bf83f"><div id="container_5a8bf83f_padding" ><div class="textstyle2"><span class="textstyle9">Name:</span><input type="text" value="" title="" name="NameField" required="required"  id="edit_30933864" >
<span class="textstyle9"><br/><br/>Email</span><input type="text" value="" title="" name="EmailField" required="required"  id="edit_7fdbf287" >
<span class="textstyle9">:<br/><br/>Text</span><textarea name="TextField" title="" required="required" cols="15" rows="3"  id="edit_6fc0cf3d"></textarea>
<span class="textstyle9">:<br/><br/><br/><br/>File:</span><input type="file" value="" title="" name="TextField" required="required"  id="edit_89c6769" >
</div>
<div style="clear:both"></div></div></div><span class="textstyle9"><br/><br/></span><input name="Button1" type="submit" value="Send" title=""  id="button_7b65636a" >
      </div>
    </div>
</form>
<?PHP																						
$htmltext = "";																			
$message = 'Thanks for sending';															
$mailcontent = '';																			
																							
$semi_rand = md5(time());  																
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  								
$headers = "From: Contact Form <" . "email@example.com" . ">"; 					
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 					
$fileToAttach = null;																		
$origFilename = 'tmp.txt';																	
																							
foreach($_POST as $name => $value)															
{   																						
   if(!empty($_FILES[$name]["name"]))													
   { 																						
		$filename = $_FILES[$name]["tmp_name"];											
		$error = $_FILES[$name]["error"];													
																							
		if (is_uploaded_file($filename) )													
		{																					
			$fileToAttach = $filename;														
			$origFilename = basename($_FILES[$name]["name"]); 							
		}																					
		else																				
			$error = 1;																		
																							
		if ($error)																			
			$message = 'An error happened while uploading the file (is the file too big?)';	
   }																						
   else	   																				
		$htmltext .= "$name : $value<br/>";												
}																							
																							
if ($htmltext != "" || $fileToAttach != null)											
{																							
	if ($fileToAttach != null)																
	{																						
		$mailcontent = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 					
					"Content-Transfer-Encoding: 7bit\n\n" . $htmltext . "\n\n";  	
		$mailcontent .= "--{$mime_boundary}\n"; 											
		$fhandle =    @fopen($fileToAttach,"rb"); 										
		$readdata =  @fread($fhandle,filesize($fileToAttach)); 								
		@fclose($fhandle); 																	
		$readdata = chunk_split(base64_encode($readdata)); 									
		$mailcontent .= "Content-Type: application/octet-stream; name=\"". $origFilename ."\"\n" .  					
		"Content-Description: ". $origFilename ."\n" . 								
		"Content-Disposition: attachment;\n" . " filename=\"". $origFilename ."\"; size=".filesize($fileToAttach).";\n" .  					
		"Content-Transfer-Encoding: base64\n\n" . $readdata . "\n\n"; 				
																							
		$mailcontent .= "--{$mime_boundary}--"; 											
	}																						
	else																					
	{																						
		$headers .= "\r\n". "MIME-Version: 1.0"; 										
       $headers .= "\r\n". "Content-type:text/html;charset=UTF-8"; 					
		$mailcontent = $htmltext;															
	}																						
																							
  echo $message;																			
  echo '<script type="text/javascript">var e = document.getElementById("elem_5aab4579"); e.firstChild.style.display = "none";</script>';					
    																						
  mail("email@example.com", "Contact form request", $mailcontent, $headers);			
}																							
																							
?>																							

</div></div>
<div style="clear:both"></div></div></div><span class="textstyle10"><br/><br/><br/><br/><br/><br/><br/></span><div id="container_6ce37980"><div id="container_6ce37980_padding" ><div class="textstyle2"><div id="container_2e505378"><div id="container_2e505378_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><span class="textstyle11">More information</span><span class="textstyle12"><br/><br/>edgar.wassmuth@gmx.de</span></div>
</div></div><div id="container_2f0325f4"><div id="container_2f0325f4_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><span class="textstyle11">How to Find us</span><span class="textstyle12"><br/><br/>wer suchet der findet</span></div>
</div></div><div id="container_6c81ba1c"><div id="container_6c81ba1c_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><span class="textstyle11">Social Media</span><span class="textstyle12"><br/><br/>keine Accounts</span></div>
</div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle10"><br/><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div>  </div>
</body>
</html>