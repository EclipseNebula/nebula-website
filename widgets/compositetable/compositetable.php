<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# ctabletree.php
	#
	# Author: 		Jeremy Dowdall
	# Date:			2006-08-30
	#
	# Description: Describes the CTableTree widget.
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Nebula CompositeTable Widget";
	$pageKeywords	= "Nebula, SWT, Widgets, Controls, CompositeTable";
	$pageAuthor		= "David Orme";
	
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
		<h1>$pageTitle</h1>
		
		<img src='images/ctable-sn3.PNG' align="RIGHT">
		<img src='images/ctable-sn6.PNG' align="RIGHT">
		
		<h2>CompositeTable</h2>
		
		<p><a target="screencast" href="screencasts/30sec.html">
		30 second introductory screencast</a></p>
		
		<p>
		CompositeTable is a custom SWT grid control that:
		<ol>
			<li>Gives you control over the layout of your rows</li>
			<li>Automatically edits in place using any SWT control</li>
			<li>Manages CRUD operations simply and automatically</li>
			<li>Requests only visible data using a virtual table API for maximum 
			    scalability and performance.</li>
		</ol>
		</p>

		<p>Sponsored by <a href="http://www.coconut-palm-software.com">Coconut
		Palm Software, Inc.</a></p>
		
		<p>
		NOTE: The CompositeTable widget is still under active development.<br>
		The code is made available in a
		<font color=red><b>BETA</b></font> state.  Users should expect changes in future versions.
		Having said this, CompositeTable is currently successfully deployed in
		a two-and-a-quarter line mission-critical enterprise RCP application.</p>
		
		<p>
		<a href='snippets.php'>CompositeTable Snippets</a>
		</p>
		<p>
		<a href='http://www.eclipse.org/downloads/download.php?file=/technology/nebula/compositetable.zip'>Download the CompositeTable widget - Beta Version</a>
		</p>
		<p>
		<a href='history.php'>Update History (like release notes)</a>
		</p>


		<hr class="clearer"/>
	</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>