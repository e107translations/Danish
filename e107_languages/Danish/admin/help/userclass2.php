<?php
/*
+---------------------------------------------------------------+
|        e107 website system  Language File
|
|        $Source: /cvsroot/e107/e107_langpacks/e107_languages/Danish/admin/help/userclass2.php,v $
|        $Revision: 1.2 $
|        $Date: 2006/01/10 16:31:21 $
|        $Author: e107dk $
+---------------------------------------------------------------+
*/








if (!defined('e107_INIT')) { exit; }

$caption = "Brugergruppe hjælp";
$text = "Du kan lave eller redigere/slette eksisterende grupper fra denne side.<br />Er nyttigt for at begrænse brugere til bestemte dele af dit websted. For eksempel, du kunne lave en gruppe kaldet TEST, derefter lave et forum der kun kan ses af brugere i TEST gruppen.<br /> Ved af bruge grupper kan du nemt skabe et område kun for medlemmer på dit websted.";
$ns -> tablerender($caption, $text);
?>