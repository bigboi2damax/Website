<?php 
/*
/////////////////////////////////////////////////////////////////////
 Display functions: For functions that display directly to the user /
 Ex: get methods.                                                   /
/////////////////////////////////////////////////////////////////////

Comment code appropriately. Also, include your name for each function.

*/


function getTitle($pageNum)
	{
		 global $pages;
		 echo ($pageNum == 404 ? '404 page' : $pages[$pageNum]['title']);
	}

function getBody($pages, $pageNum)
	{ 
        include(($pageNum == 404 ? BADREQUEST : BODYPATH.$pages[$pageNum]['filename']));
	}
	

/*
 Function: getCSS
 Author: Aaron Clark
 Description: echos out a CSS include tag for the current page's stylesheet.
 Parameters: $pages (array containing page information), $pageNum (current page number)	

 function getCSS($pages, $pageNum)
	{
		global $currentPage;
		/* fenrirAB Edit 
		$css = 
			($currentPage === "404") ? 
				("<link rel=\"stylesheet\" href=\"./stylesheets/pageConstrution.php\">") : 
				("<link rel=\"stylesheet\" href=\"".BODYPATH.$pages[$pageNum]['stylesheet']."\">");

		echo $css;
		
	}
	Let's keep one stylesheet
	*/

function getNav()
	{

		global $pages;
		global $currentPage;
		global $idNumber;

		$idNumber = 1; // IMPORTANT! ID incrementer for navList id!
		foreach($pages as $page)
		{
			echo (($currentPage === $page['page']) ? 
				"<li class=\"navListClass\" id=\"navList".$idNumber++."\">
					<a id=\"navLinks\" href=\"?page=".$page['page']."\">".$page['page'].
					"</a></li>" :
				"<li class=\"navListClass\" id=\"navList".$idNumber++."\">
					<a id=\"navLinks\" href=\"?page=".$page['page']."\">".$page['page'].
					"</a></li>");  
		}
	}

 function getMeta()
 	{
 	  include(METAFILE);
 	}

 ?>