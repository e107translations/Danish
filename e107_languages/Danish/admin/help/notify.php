<?php
/*
+---------------------------------------------------------------+
|        e107 website system  Language File
|
|        $Source: /cvsroot/e107/e107_langpacks/e107_languages/Danish/admin/help/notify.php,v $
|        $Revision: 1.2 $
|        $Date: 2006/01/10 16:31:21 $
|        $Author: e107dk $
+---------------------------------------------------------------+
*/








if (!defined('e107_INIT')) { exit; }

$text = "Underretning sender email underretninger når e107 begivenheder sker.<br /><br />
F.eks., sæt 'IP banlyst for gentagne handlinger(flooded) mod site' til brugergruppe 'Admin' og alle admins vil få sendt en email når dit 
site bliver flooded.<br /><br />
Du kan også, som et andet eksempel, sætte 'Nyhed postet af admin' til brugergruppe 'Medlemmer' og alle dine brugere vil blive 
sendt nyheden du skriver på sitet i en email.<br /><br />
Hvis du ønsker at email underretninger bliver sendt til en alternativ email adresse - vælg 'Email' egenskaben og 
skriv email adressen i felter der vises.";

$ns -> tablerender("Underretning Hjælp", $text);
?>