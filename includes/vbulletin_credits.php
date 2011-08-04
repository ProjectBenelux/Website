<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.1.5 
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2011 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

if (!isset($GLOBALS['vbulletin']->db))
{
	exit;
}

// display the credits table for use in admin/mod control panels

print_form_header('index', 'home');
print_table_header($vbphrase['vbulletin_developers_and_contributors']);
print_column_style_code(array('white-space: nowrap', ''));
print_label_row('<b>' . $vbphrase['software_developed_by'] . '</b>', '
	vBulletin Solutions, Inc.,
	Internet Brands, Inc.
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['business_product_development'] . '</b>', '
	Fabian Schonholz,
	Alan Chiu,
	Michael Anders,
	Adrian Harris
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['engineering'] . '</b>', '
	Kevin Sours,
	Freddie Bingham,
	Edwin Brown,
	Colin Frei,
	David Grove,
	Zoltan Szalay,
	Jorge Tiznado,
	Ivan Milanez,
	Alan Orduno,
	Michael Lavaveshkul,
	Stefano Acerbetti,
	Xiaoyu Huang,
	Oscar Ulloa,
	Kyle Furlong
        Fernando Varesi
        Glenn Vergara
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['qa'] . '</b>', '
	Allen Lin,
	Meghan Sensenbach,
	Joanna W.H.,
	Priyanka Porwal,
	Reshmi Rajesh,
	Ruth Navaneetha
', '', 'top', NULL, false);

print_label_row('<b>' . $vbphrase['support'] . '</b>', '
	Steve Machol,
	Wayne Luke,
	George Liu,
	Jake Bunce,
	Zachery Woods,
	Carrie Anderson,
	Lynne Sands,
	Trevor Hannant,
	Marlena Machol,
	Kay Alley,
	Danny Morlette,
	Zuzanna Grande,
	Jasper Aguila,
	Dody
', '', 'top', NULL, false);

print_label_row('<b>' . $vbphrase['special_thanks_and_contributions'] . '</b>', '
	Ace Shattock,
	Adrian Sacchi,
	Ahmed,
	Ajinkya Apte,
	Andreas Kirbach,
	Andrew Elkins,
	Andy Huang,
	Aston Jay,
	Billy Golightly,
	bjornstrom,
	Bob Pankala,
	Brad Wright,
	Brian Swearingen,
	Brian Gunter,
	Chen Avinadav,
	Chevy Revata,
	Chris Holland,
	Christopher Riley,
        Colin Frei,
	Daniel Clements,
	Darren Gordon,
	David Bonilla,
	David Webb,
	David Yancy,
	digitalpoint,
	Dominic Schlatter,
	Don Kuramura,
	Don T. Romrell,
	Doron Rosenberg,
	Elmer Hernandez,
	Eric Johney,
	Eric Sizemore (SecondV),
	Fei Leung,
	Fernando Munoz,
	Floris Fiedeldij Dop,
        Forum Scriptz Team
	Harry Scanlan,
	Gavin Robert Clarke,
	Geoff Carew,
	Giovanni Martinez,
	Green Cat,
	Hanafi Jamil,
	Hani Saad,
	Hanson Wong,
	Hartmut Voss,
	Ivan Anfimov,
	Jacquii Cooke,
	Jan Allan Zischke,
	Jaume L&oacute;pez,
	Jelle Van Loo,
	Jen Rundell,
	Jeremy Dentel,
	Jerry Hutchings,
	Joan Gauna,
	Joe Rosenblum,
	Joe Velez,
	Joel Young,
	John Jakubowski,
	John Percival,
	Jonathan Javier Coletta,
	Joseph DeTomaso,
	Kevin Connery,
	Kevin Schumacher,
	Kevin Wilkinson,
	Kier Darby,
	Kira Lerner,
	Kolby Bothe,
	Lisa Swift,
	Marco Mamdouh Fahem,
	Mark James,
	Martin Meredith,
	Matthew Gordon,
	Merjawy,
	Mert Gokceimam,
	Michael Biddle,
	Michael Fara,
	Michael Henretty,
	Michael Kellogg,
	Michael \'Mystics\' K&ouml;nig,
	Michael Pierce,
	Michlerish,
	Mike Sullivan,
	Milad Kawas Cale,
	miner,
	Nathan Wingate,
	nickadeemus2002,
	Ole Vik,
	Overgrow,
	Paul Marsden,
	Peggy Lynn Gurney,
	Prince Shah,
	Pritesh Shah,
	Pieter Verhaeghe,
	Riasat Al Jamil,
	Robert Beavan White,
	Roms,
	Ryan Ashbrook,
	Ryan Royal,
	Sal Colascione III,
	Scott MacVicar,
	Scott Molinari,
	Scott William,
	Scott Zachow,
	Shawn Vowell,
	Sophie Xie,
	Stephan \'pogo\' Pogodalla,
	Sven "cellarius" Keller,
	Tariq Bafageer,
	The Vegan Forum,
	ThorstenA,
	Tom Murphy,
	Tony Phoenix,
	Torstein H&oslash;nsi,
	Tully Rankin,
	Vinayak Gupta,
	Yves Rigaud
	', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['copyright_enforcement_by'] . '</b>', '
	vBulletin Solutions, Inc.
', '', 'top', NULL, false);
print_table_footer();

/*======================================================================*\
|| ####################################################################
|| # 
|| # CVS: $RCSfile$ - $Revision: 44909 $
|| ####################################################################
\*======================================================================*/
?>
