<?php
/*
+---------------------------------------------------------------+
|        e107 website system  Language File
|
|        $Source: /cvsroot/e107/e107_langpacks/e107_languages/Danish/admin/help/newsfeed.php,v $
|        $Revision: 1.2 $
|        $Date: 2006/01/10 16:31:21 $
|        $Author: e107dk $
+---------------------------------------------------------------+
*/








if (!defined('e107_INIT')) { exit; }

$text = "Du kan hente og frmvise andre site's backend RSS nyheds feeds på dit eget site herfra.<br />Skriv hele URL stien til backenden (eks. http://e107.org/news.xml). Hvis dem RSS feed du henter har en url til en link knap og du vil have den fremvist lad da billede boxen være tom, ellers skriv stien til det billede du vil have vist, eller skriv 'none' for ikke at fremvise et billede. Afmærk så de boxe for at vise presis hvad du vil vise i dine Overskrifter menu. Du kan aktivere og de-aktivere backenden hvis sitet eks. går ned.<br /><br />For at se Overskrifterne på dit site, vær sikker på at  headlines_menu er aktiveret på din menu side.";

$ns -> tablerender("Overskrifter", $text);
?>