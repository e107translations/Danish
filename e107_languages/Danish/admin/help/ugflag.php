<?php
/*
+---------------------------------------------------------------+
|        e107 website system  Language File
|
|        $Source: /cvsroot/e107/e107_langpacks/e107_languages/Danish/admin/help/ugflag.php,v $
|        $Revision: 1.2 $
|        $Date: 2006/01/10 16:31:21 $
|        $Author: e107dk $
+---------------------------------------------------------------+
*/








if (!defined('e107_INIT')) { exit; }

$text = "Hvis du opgraderer e107 eller bare har brug for dit site er offline en stund da Afmærk Vedligeholdelses boxen og dine besøgende vil blive omdirigeret til en side der forklarer at sitet er nede pga. reparationer. Når du er færdig fjerner du blot markeringen og returnerer sitet til normalen.";

$ns -> tablerender("Vedligeholdelse", $text);
?>