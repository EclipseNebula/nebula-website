<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# cdatetime.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2006-08-30
	#
	# Description: Describes the CDateTime widget.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these.
	$pageKeywords	= "Nebula, SWT, Widgets, Controls";
	$pageAuthor		= "Jeremy Dowdall";
	$pageTitle1		= "Nebula CDateTime";
	if($_GET['page'] == 'api') {
		$pageTitle2		= "Developer API";
		$pageContent	= file_get_contents("content/api.html");
	} else if($_GET['page'] == 'i18n') {
		$pageTitle2		= "Internationalization";
		$pageContent	= file_get_contents("content/i18n.html");
	} else if($_GET['page'] == 'operation') {
		$pageTitle2		= "End-User Operation";
		$pageContent	= file_get_contents("content/operation.html");
	} else if($_GET['page'] == 'patterns') {
		$pageTitle2		= "Date/Time Patterns and Formats";
		$pageContent	= file_get_contents("content/patterns.html");
	} else if($_GET['page'] == 'reference') {
		$pageTitle2		= "Links to Interesting Stuff";
		$pageContent	= file_get_contents("content/links.html");
	} else if($_GET['page'] == 'snippets') {
		$pageTitle2		= "Example Code Snippets";
		$pageContent	= file_get_contents("content/snippets.html");
	} else if($_GET['page'] == 'styles') {
		$pageTitle2		= "Style Settings";
		$pageContent	= file_get_contents("content/styles.html");
	} else {
		$showOsIcons	= true;
		$pageTitle2		= "<img src='images/linux.png'><img src='images/mac.png'><img src='images/windows.png'>";
		$pageContent	= file_get_contents("content/cdatetime.html");
	}
	
	$onPageTitle	= $pageTitle1."<br/>&nbsp;&nbsp;&nbsp;".$pageTitle2;
	$pageTitle 		= $pageTitle1.": ".$pageTitle2;
	$menu = "<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=patterns'>Patterns</a>" .
			"<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=styles'>Styles</a>" .
			"<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=i18n'>I18N</a>" .
			"<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=api'>API</a>" .
			"<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=operation'>Operation</a>" .
			"<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=reference'>Links</a>" .
			"<a style='border: #999999 solid 1px;border-top: 0px;padding-left: 3px;padding-right: 3px;' href='cdatetime.php?page=snippets'>Snippets</a>";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);


	# End: page-specific settings
	#
		
	# Paste your HTML content between the EOHTML markers!
	$html = <<<EOHTML
		<div id="midcolumn">
			<div style="float: right;">$menu</div>
			<h1>$onPageTitle</h1>
			$pageContent
			<hr class="clearer"/>
		</div>
EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>