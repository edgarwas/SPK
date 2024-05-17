<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="RocketCake">
	<title></title>
	<link rel="stylesheet" type="text/css" href="index_php.css">
</head>
<body>
<div class="textstyle1">
<div id="container_eaea99e"><div id="container_eaea99e_padding" ><div class="textstyle1"><div id="container_d695c69"><div class="textstyle2">  <div id="menu_8980bcc">
    <div  class="menuholder1"><a href="javascript:void(0);">
	<div id="menuentry_83d87bc"  class="menustyle1 menu_8980bcc_mainMenuEntry mobileEntry">
		<div class="menuentry_text1">
      <span class="textstyle3">&#8801;</span>
		</div>
	</div>
</a>
<a href="javascript:void(0);">
	<div id="menuentry_1da27e3"  class="menustyle2 menu_8980bcc_mainMenuEntry normalEntry">
		<div class="menuentry_text2">
      <span class="textstyle4">&#8801;</span>
      <span class="textstyle5"> Auswahl</span>
		</div>
	</div>
</a>

	<script type="text/javascript" src="rc_images/wsp_menu.js"></script>
	<script type="text/javascript">
		var js_menu_8980bcc= new wsp_menu('menu_8980bcc', 'menu_8980bcc', 10, null, true);

		js_menu_8980bcc.createMenuForItem('menuentry_83d87bc', ["      <span class=\"textstyle6\">&#8801; </span> ", 'javascript:void(0);', '',
		                                   "      <span class=\"textstyle6\">&#160;&#160;&#160;Home</span> ", 'javascript:void(0);', '',
		                                   "      <span class=\"textstyle6\">&#160;&#160;&#160;About</span> ", 'about.html', '',
		                                   "      <span class=\"textstyle6\">&#160;&#160;&#160;Contact</span> ", '', '']);
		js_menu_8980bcc.createMenuForItem('menuentry_1da27e3', ["      <span class=\"textstyle4\">About</span> ", 'about.html', '',
		                                   "      <span class=\"textstyle4\">Gesamt&#252;bersicht</span> ", 'allemodule.html', '',
		                                   "      <span class=\"textstyle4\">Einstellungen</span> ", 'einstellungen.html', '',
		                                   "      <span class=\"textstyle4\">Backup und Restore</span> ", 'backuprestore.html', '',
		                                   "      <span class=\"textstyle4\">Buchungen</span> ", 'buchung.html', '',
		                                   "<div style=\"white-space:nowrap; overflow:hidden;\"><span style=\"display:inline-block; float:left;\">      <span class=\"textstyle4\">Tagesabschluss</span> </span><span style=\"display:inline-block; float:right; padding-top:2px; font-size:9pt; font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-weight:bold; \"/>&#x25BA;</span></div>", ["      <span class=\"textstyle4\">Tagesabschluss</span> ", 'tagesabschluss.html', '',
		                                   "      <span class=\"textstyle4\">Ausgabe Dateien</span> ", 'tagausgabe.html', ''], '',
		                                   "<div style=\"white-space:nowrap; overflow:hidden;\"><span style=\"display:inline-block; float:left;\">      <span class=\"textstyle4\">Jahresende</span> </span><span style=\"display:inline-block; float:right; padding-top:2px; font-size:9pt; font-family:Arial, Helvetica, sans-serif; color:#FFFFFF; font-weight:bold; \"/>&#x25BA;</span></div>", ["      <span class=\"textstyle4\">Jahresende Info</span> ", 'jahrend.html', '',
		                                   "", 'javascript:void(0);', ''], '',
		                                   "      <span class=\"textstyle4\">Telekom</span> ", 'telekom.html', '_blank',
		                                   "      <span class=\"textstyle4\">&#196;nderungsInfo</span> ", 'changelog.html', '',
		                                   "      <span class=\"textstyle4\">Was ist Neu???</span> ", 'wasistneu.html', '',
		                                   "      <span class=\"textstyle4\">Wiki</span> ", 'https://github.com/edgarwas/SPK/wiki', '_blank',
		                                   "      <span class=\"textstyle4\">Dataaccess Forum</span> ", 'dataaccess.html', '']);

	</script>
      </div>
    </div>
  <div id="text_29a689e6">
    <div class="textstyle1">
      <span class="textstyle7">Startseite</span>
      </div>
    </div>
</div>
</div><div id="container_6a5612c4"><div id="container_6a5612c4_padding" ><div class="textstyle1"><span class="textstyle8"><br/><br/></span><span class="textstyle9"><br/></span></div>
<div class="textstyle2"><div id="container_1de1103f"><div id="container_1de1103f_padding" ><div class="textstyle1"><span class="textstyle10">Projekt SPK 64bit</span><span class="textstyle9"><br/>Kurzbeschreibung des Projektes</span></div>
</div></div><span class="textstyle9"><br/><br/></span><span class="textstyle8"> </span><div id="elem_5f95e7b0"  style="vertical-align: top; position:relative; display: inline-block; width:50%; height:320px; min-width:350px; background:none; " ><form action="index.php" enctype="application/x-www-form-urlencoded" method="POST">  <div id="text_2052e7db">
    <div class="textstyle1">
<span class="textstyle11"><br/><br/></span><input type="text" value="" title="" name="query" required="required"  id="edit_4a9af10c" >
<input name="Button1" type="submit" value="Search" title=""  id="button_3ea0fed2" >
<span class="textstyle11"><br/><br/><br/></span><div id="container_3ccd43ed"><div id="container_3ccd43ed_padding" ><div class="textstyle2">      <span class="textstyle11">The search result will be displayed in here.</span>
</div>
</div></div><span class="textstyle11"><br/></span>      </div>
    </div>
</form>
<?PHP
error_reporting(E_ALL ^ E_WARNING ^ E_ERROR); // hide errors and warnings
function stripTagsWithContent($str, $tagbegin, $tagend)
{    while (($pos = stripos ($str, $tagbegin)) !== false) 
	{
            $part = substr ($str, $pos + strlen($tagbegin));
            $str = substr ($str, 0, $pos);
            if (($pos2 = stripos ($part, $tagend)) !== false) 
                $str .= substr ($part, $pos2 + strlen($tagend));
        }

        return $str;
}
// returns string found or false					
function getHTMLFileTitle($filename)				
{													
	$filecontent = file_get_contents($filename);	
    if ($filecontent === false)					
        return false;								
    												
    $bodybegin = strpos($filecontent, '<title');	
    if ($bodybegin === false)						
        return false;								
    												
    $bodybegin = strpos($filecontent, '>', $bodybegin);
    if ($bodybegin === false)						
        return false;								
    $bodybegin += 1;    							
    $bodyend = strpos($filecontent, '</title>');	
    if ($bodyend === false)						
        return false;								
													
	$titlecontent = substr($filecontent, $bodybegin, $bodyend-$bodybegin); 
	$titlecontent = htmlspecialchars_decode($titlecontent);			
	return $titlecontent;		
}			
// returns string fragment found or false
function searchHTMLFile($filename, $tosearch)
{
    $filecontent = file_get_contents($filename);
    if ($filecontent === false)
        return false;
    
    $bodybegin = strpos($filecontent, '<body');
    if ($bodybegin === false)
        return false;
    
    $bodybegin = strpos($filecontent, '>', $bodybegin);
    if ($bodybegin === false)
        return false;
    $bodybegin += 1;    
    $bodyend = strpos($filecontent, '</body>');
    if ($bodyend === false)
        return false;
    
    $bodycontent = substr($filecontent, $bodybegin, $bodyend-$bodybegin);
        
    $contentstripped = $bodycontent;
    $contentstripped = stripTagsWithContent($contentstripped, '<script', '</script>');
    $contentstripped = strip_tags($contentstripped);
                
    $posfound = stripos($contentstripped, $tosearch);
    if ($posfound === false)
        return false;
    
    $fragmentSizeToReturn = 200;
    $fragmentStartPos = max(0, $posfound - ($fragmentSizeToReturn / 2));
        
    return substr($contentstripped, $fragmentStartPos, $posfound - $fragmentStartPos) .
            '<b>' 
            . substr($contentstripped, $posfound, strlen($tosearch)) 
            . '</b>' 
            . substr($contentstripped, $posfound + strlen($tosearch), $fragmentSizeToReturn - ($posfound - $fragmentStartPos))
            . '...';
}

$resulttext = '';

class searchEntry
{
    public $name;
    public $url;
}

$allPages = array();
$searchquery = '';

if (isset($_POST['query']))
{
    $searchquery = $_POST['query'];
    $resulttext = 'Results for:  ' . htmlentities($searchquery) . '<br/><br/>';
    
    // build database

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'allemodule.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'backuprestore.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'buchung.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'einstellungen.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'jahrend.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'tagesabschluss.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'telekom.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'about.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'gestag.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'index.php';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'tagausgabe.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = '';
   $x->url = 'changelog.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = 'Was ist Neu';
   $x->url = 'wasistneu.html';
   array_push($allPages, $x);

   $x = new searchEntry();
   $x->name = 'Was ist Neu';
   $x->url = 'dataaccess.html';
   array_push($allPages, $x);

// now search database
   
   $resultsFound = 0;
   
   foreach ($allPages as $pageEntry) 
   {      
      $found = false;
      $fragmentToShow = '';
      
      if (!(stripos($pageEntry->name, $searchquery) === false))
      {
         $found = true;
         $fragmentToShow = $pageEntry->name;
      }
      else            
      {
         $fragmentToShow = searchHTMLFile($pageEntry->url, $searchquery);
         if ($fragmentToShow !== false)
            $found = true;         
      }
      
      if ($found)
      {
         // add as found
         $uptodateTitle = getHTMLFileTitle($pageEntry->url);
         if ($uptodateTitle !== false)
             $pageEntry->name = $uptodateTitle;
             
         $ptitle = $pageEntry->name == '' ? $pageEntry->url : $pageEntry->name;
         $resulttext .= '<a style="font-size: 130%;" href="' . $pageEntry->url . '">' . $ptitle . '</a><br/>' . $fragmentToShow . '<br/><br/>';
         $resultsFound += 1;
      }
   }
   
   if ($resultsFound == 0)
      $resulttext = '0 results found.';
}

// display result or nothing

$lnbr = "\n";
$jsresult = json_encode($resulttext, JSON_UNESCAPED_UNICODE);

echo '<script type="text/javascript">' . $lnbr;
echo 'var rootform = document.getElementById("elem_5f95e7b0");' .$lnbr;
echo 'var resultelem = rootform.querySelectorAll(\'[id^="container_"]\');';
echo ' ' . $lnbr;
echo 'var textelem = resultelem[1];' . $lnbr;
echo '// search inner element to replace to keep font as specified by user' . $lnbr;
echo 'var testelem = textelem;' . $lnbr;
echo 'while(testelem)' . $lnbr;
echo '{' . $lnbr;
echo '	if (testelem && testelem.nodeType == 1) ' . $lnbr;
echo '	{' . $lnbr;
echo '		textelem = testelem;' . $lnbr;
echo '		testelem = testelem.firstChild;' . $lnbr;
echo '	}' . $lnbr;
echo '	else		' . $lnbr;
echo '		testelem = testelem.nextSibling;' . $lnbr;
echo '}' . $lnbr;
echo 'if (!(\'innerHTML\' in textelem)) textelem = resultelem[1]; // in case found something invalid' . $lnbr;
echo 'textelem.innerHTML = ' . $jsresult . ';' . $lnbr;
echo 'var queryform = document.getElementsByName(\'query\');' . $lnbr;
echo 'queryform[0].value = ' . json_encode($searchquery) . ';' . $lnbr;
echo '</script>' . $lnbr;   
    ?>
</div></div>
<div style="clear:both"></div></div></div><div id="container_22e4a421"><div id="container_22e4a421_padding" ><div class="textstyle2"><span class="textstyle12"><br/></span><div id="container_470ac4dd"><div id="container_470ac4dd_padding" ><div class="textstyle2"><div id="container_5c19d71c"><div id="container_5c19d71c_padding" ><div class="textstyle2"><span class="textstyle13">Projekt SPK64</span><span class="textstyle14"><br/></span><div id="container_367bebf6"><div id="container_367bebf6_padding" ><div class="textstyle2"><span class="textstyle15"><br/></span><span class="textstyle16">Das Programm wurde mit DataFlex realisiert.</span><span class="textstyle15"><br/><br/>DataFlex ist eine objektorientierte Programmiersprache und eine visuelle Entwicklungsumgebung f&#252;r Windows-, Web- und Mobile-Anwendungen. DataFlex wurde von Data Access Corporation im Jahr 1982 eingef&#252;hrt und entwickelt. <br/><br/>DataFlex kann mit allen popul&#228;ren Datenbankmanagementsystemen (DBMS) arbeiten, wie Oracle, Microsoft SQL Server, IBM Db2, MySQL, PostgreSQL und anderen ODBC-Datenbanken. DataFlex verf&#252;gt &#252;ber eine integrierte DataFlex-Datenbank, die ohne zus&#228;tzliche Treiber verwendet werden kann. DataFlex erm&#246;glicht auch den Zugriff auf andere Datenbanken ohne eine &#196;nderung des Quellcodes. <br/><br/>DataFlex ist eine flexible und portable Sprache, die Variablen mit lockerer Typisierung, automatische Konvertierungen, Vererbung, Methoden und Eigenschaften unterst&#252;tzt. DataFlex kompiliert den Code zu einem Zwischencode, der auf verschiedenen Betriebssystemen lauff&#228;hig ist. DataFlex bietet auch die M&#246;glichkeit, Funktionen aus dynamischen Bibliotheken oder COM-Modulen zu nutzen.</span></div>
</div></div><span class="textstyle17"><br/></span></div>
<div style="clear:both"></div></div></div><div id="container_9e8f6cb"><div id="container_9e8f6cb_padding" ><div class="textstyle2"><img src="rc_images/startbild_1200x648.png" width="1200" height="648" id="img_1bf540d3" alt="" title="" /></div>
<div class="textstyle1"><div id="container_626e4233"><div id="container_626e4233_padding" ><div class="textstyle2"><table id="table_5e6975ff" cellpadding="3" cellspacing="1" >	<tr>
		<td width="100%" height="35px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_13c9e25a">
    <div class="textstyle2">
      <span class="textstyle18">Kurz-Beschreibung</span>
      </div>
    </div>
		</td>
	</tr>
</table><span class="textstyle11"><br/><br/>Das Programm Sparkontenverwaltung ist f&#252;r Windows-Betriebssysteme konzipiert und erm&#246;glicht die Verwaltung von Sparkonten f&#252;r mehrere Mandanten. Sie k&#246;nnen mit dem Programm Buchungen erfassen, die den jeweiligen Konten zugeordnet werden. Nach der Erfassung f&#252;hrt das Programm einen Tagesabschluss durch, in dem die Voraus-Zinsen f&#252;r die Konten berechnet werden. Das Programm bietet Ihnen eine &#252;bersichtliche und benutzerfreundliche Oberfl&#228;che, mit der Sie alle Funktionen einfach und schnell ausf&#252;hren k&#246;nnen. Mit dem Programm Sparkontenverwaltung haben Sie Ihre Sparkonten immer im Blick und k&#246;nnen sie optimal verwalten. <br/></span></div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle12"><br/></span><span class="textstyle19">Angaben zum Code<br/></span><table id="table_53c17b29" cellpadding="3" cellspacing="1" >	<tr>
		<td width="33%" height="30px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_3ed1db06">
    <div class="textstyle2">
      <span class="textstyle20">Total Commands : 217468</span>
      </div>
    </div>
		</td>
		<td width="29%" height="30px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_35c328c9">
    <div class="textstyle2">
      <span class="textstyle21">Total Symbols  : 91471</span>
      </div>
    </div>
		</td>
		<td width="37%" height="30px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_29677850">
    <div class="textstyle2">
      <span class="textstyle22">Total Windows  : 117</span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width="33%" height="30px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_7803b8b1">
    <div class="textstyle2">
      <span class="textstyle23">Total Errors   : 0</span>
      </div>
    </div>
		</td>
		<td width="29%" height="30px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_6779c72">
    <div class="textstyle2">
      <span class="textstyle24">Static Data    : 1981723</span>
      </div>
    </div>
		</td>
		<td width="37%" height="30px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_1ee20c64">
    <div class="textstyle2">
      <span class="textstyle25">Message area   : 1580911</span>
      </div>
    </div>
		</td>
	</tr>
	<tr>
		<td width="33%" height="29px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_1f3203a9">
    <div class="textstyle2">
      <span class="textstyle26">Total Blocks   : 77193</span>
      </div>
    </div>
		</td>
		<td width="29%" height="29px" style="vertical-align: top; overflow:hidden; ">  <div id="cell_5f4e8a6d">
    <div class="textstyle2">
      <span class="textstyle27">Zeilen  : 171031</span>
      </div>
    </div>
		</td>
		<td width="37%" height="29px" >
		</td>
	</tr>
</table><span class="textstyle11"><br/><br/></span><div id="container_5abfa5b"><div id="container_5abfa5b_padding" ><div class="textstyle2"><span class="textstyle28">Dies ist nur ein kleiner Auszug aus dem Projekt. Weitere Beschreibungen sind im Wiki und auf der T-Online Seite vorhanden. Das Programm selbst besitzt eine Hilfe Datei (*.chm) die die meisten Fragen beantwortet. Es gibt auch umfangreiche Hilfs-Formulare auf Html Basis.</span><span class="textstyle29"><br/><br/><br/></span></div>
</div></div><span class="textstyle12"><br/><br/></span><div id="container_6485017a"><div id="container_6485017a_padding" ><div class="textstyle2"><div id="container_66281d83"><div id="container_66281d83_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><span class="textstyle30">More information</span><span class="textstyle31"><br/><br/>edgar.wassmuth@gmx.de</span></div>
</div></div><div id="container_4132943e"><div id="container_4132943e_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><span class="textstyle30">How to Find us</span><span class="textstyle31"><br/><br/>wer suchet der findet</span></div>
</div></div><div id="container_45a28d37"><div id="container_45a28d37_padding" ><div class="textstyle2"></div>
<div class="textstyle1"><span class="textstyle30">Social Media</span><span class="textstyle31"><br/><br/>keine Accounts</span></div>
</div></div></div>
<div style="clear:both"></div></div></div><span class="textstyle12"><br/><br/><br/><br/></span></div>
<div style="clear:both"></div></div></div></div>
<div style="clear:both"></div></div></div>  </div>
</body>
</html>