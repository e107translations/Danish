<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|
|     $Source: /cvsroot/e107/e107_langpacks/e107_languages/Danish/lan_installer.php,v $
|     $Revision: 1.8 $
|     $Date: 2006/11/23 00:02:40 $
|     $Author: e107dk $
+----------------------------------------------------------------------------+
*/
define("LANINS_001", "e107 Installation");
define("LANINS_002", "Installation");
define("LANINS_003", "1");
define("LANINS_004", "Sprog Valg");
define("LANINS_005", "Vælg venligst sprog der skal bruges under installations proceduren");
define("LANINS_007", "4");
define("LANINS_008", "PHP og MySQL Versioner & Fil Tilladelses Kontrol");
define("LANINS_009", "Gentest Fil Tilladelser");
define("LANINS_010", "Fil er skrivebeskyttet:");
define("LANINS_010a", "Mappe er skrivebeskyttet:");
define("LANINS_012", "MySQL Funktioner lader ikke til at eksistere. Dette betyder formentlig at enten er MySQL PHP Udvidelsen ikke installeret eller den er ikke konfigureret korrekt.");
define("LANINS_013", "Kunne ikke bestemme dit MySQL versions nummer. Dette er ikke en fatal fejl, så fortsæt blot med at installere, men vær opmærksom på at e107 kræver MySQL >= 3.23. for at fungere korrekt");
define("LANINS_014", "Fil Tilladelser");
define("LANINS_015", "PHP Version");
define("LANINS_017", "OK");
define("LANINS_018", "Sikrer dig at alle de viste filer eksisterer og ikke er skrivebeskyttede for serveren. Dette indebærer normalt CHMODe dem til 777, men miljøer varierer - kontakt din host hvis du har problemer.");
define("LANINS_019", "Den version PHP der er installeret på din server er ikke i stand til at køre e107. e107 kræver en PHP version på mindst 4.3.0 for at køre korrekt. Opgrader enten din PHP version, eller kontakt din host for en opgradering.");
define("LANINS_021", "2");
define("LANINS_022", "MySQL Server Detaljer");
define("LANINS_023", "Skriv venligst dine MySQL indstillinger her. Hvis du har rod tilladelser kan du oprette en ny database ved at markere boksen, hvis ikke skal du oprette en database eller bruge en eksisterende. Hvis du kun har en database brug et prefix så andre scripts kan dele den samme database. Hvis du ikke kender dine MySQL detaljer kontakt din web host.");
define("LANINS_024", "MySQL Server:");
define("LANINS_025", "MySQL Brugernavn:");
define("LANINS_026", "MySQL Kodeord:");
define("LANINS_027", "MySQL Database:");
define("LANINS_028", "Opret Database?");
define("LANINS_029", "Tabel prefix:");
define("LANINS_030", "Den MySQL server du ønsker e107 skal bruge. Den kan også indeholde et port nummer. eks. \"hostnavn:port\" eller en sti til en lokal sokkel eks. \":/sti/til/sokkel\" for localhost.");
define("LANINS_031", "Brugernavnet du ønsker e107 skal bruge til at forbinde til din MySQL server");
define("LANINS_032", "Kodeordet for den bruger du lige skrev");
define("LANINS_033", "Den MySQL database du ønsker e107 skal befinde sig i, nogle gange refereret til som skematisk. Hvis brugeren har database oprettelses tilladelser kan du sætte den til at oprette databasen automatisk hvis den ikke allerede eksisterer.");
define("LANINS_034", "Det prefix du ønsker e107 skal bruge til oprettelse af e107 tabellerne. Nyttigt for flere installationer af e107 i en database.");
define("LANINS_036", "3");
define("LANINS_037", "MySQL Forbindelses Bekræftelse");
define("LANINS_038", " og Database Oprettelse");
define("LANINS_039", "Sikrer dig venligst at du udfylder alle felter, vigtigst, MySQL Server, MySQL Brugernavn og MySQL Database (Disse er altid krævet af MySQL Serveren)");
define("LANINS_040", "Fejl");
define("LANINS_041", "e107 var ikke i stand til at etablere en forbindelse til MySQL serveren med de informationer du oplyste.<br />Gå venligst tilbage til forrige side og kontroller at informationerne er korrekte.");
define("LANINS_042", "Forbindelse til MySQL serveren etableret og verificeret.");
define("LANINS_043", "Kunne ikke oprette database, kontroller venligst at du har de korrekte tilladelser til at oprette databaser på din server.");
define("LANINS_044", "Oprettede database med succes.");
define("LANINS_045", "Klik venligst på knappen for at fortsætte til næste trin.");
define("LANINS_046", "5");
define("LANINS_047", "Administrator Detaljer");
define("LANINS_048", "Gå Tilbage Til Forrige Trin");
define("LANINS_049", "De to kodeord du skrev er ikke ens. Gå venligst tilbage og prøv igen.");
define("LANINS_050", "XML Udvidelse");
define("LANINS_051", "Installeret");
define("LANINS_052", "Ikke Installeret");
define("LANINS_055", "Installations Bekræftelse");
define("LANINS_056", "6");
define("LANINS_057", " e107 har nu alle de oplysninger det kræver for at fortsætte installationen. Klik venligst på knappen for at oprette database tabelller og gemme alle dine indstillinger.");
define("LANINS_058", "7");
define("LANINS_060", "Kan ikke læse sql datafilen. Sikrer dig venligst at filen [b]core_sql.php[/b] eksisterer i [b]/e107_core/sql[/b] mappen.");
define("LANINS_061", "e107 kunne ikke oprette alle de krævede database tabeller. Ryd venligst databasen og ret eventuelle problemer før du prøver igen.");
define("LANINS_069", "e107 er blevet installeret med succes! Af sikkerheds messige årsager bør du nu indstille fil rettighederne på [b]e107_config.php[/b] filen tilbage til 644.Slet også install.php og e107_install mappen fra din server efter du har klikket på knappen herunder.");
define("LANINS_070", "e107 var ikke i stand til at gemme hoved konfigurations filen til din server. Kontroller venligst at [b]e107_config.php[/b] filen har de rette tilladelser");
define("LANINS_071", "Afslutter Installation");
define("LANINS_072", "Admin Brugernavn");
define("LANINS_073", "Dette er navnet du bruger til at logge ind på sitet. Hvis du også ønsker at bruge dette som dit fremviste navn");
define("LANINS_074", "Admin Fremvist Navn");
define("LANINS_076", "Admin Kodeord");
define("LANINS_077", "Skriv venligst det admin kodeord du ønsker at bruge her");
define("LANINS_078", "Admin Kodeord Bekræftelse");
define("LANINS_079", "Skriv venligst admin kodeordet igen for bekræftelse");
define("LANINS_080", "Admin Email");
define("LANINS_081", "Skriv din email adresse");
define("LANINS_083", "MySQL Rapoterede Fejl:");
define("LANINS_084", "Installationen kunne ikke etablere en forbindelse til databasen");
define("LANINS_085", "Installationen kunne ikke vælge database:");
define("LANINS_105", "Et database navn eller prefix der begynder med tegn efterfulgt af 'e' eller 'E' er ikke acceptable Et database navn eller prefix kan ikke tømmes");
define("LANINS_106", "ADVARSEL - e107 kan ikke skrive til mapper/filerne i listen. selvom dette ikke forhindrer e107 i at installere, vil det betyde at visse funktioner ikke er tilgængelige. Du skal ændre filtilladelser for at bruge disse funktioner");
define("LANINS_107", "e107_config.php er ikke tom fil");
define("LANINS_108", "Muligvis har du en eksisterende installation");
define("LANINS_109", "indlede");
define("LANINS_111", "e107 Temaer");
define("LANINS_112", "e107 Håndbog");
define("LANINS_113", "Indtast et navn på websted");
define("LANINS_114", "Vælg et tema");
define("LANINS_115", "Temanavn");
define("LANINS_116", "Tematype");
define("LANINS_117", "Hjemmeside præferencer");
define("LANINS_118", "Installere Plugins");
define("LANINS_119", "Installere alle plugins, som temaet kan kræve.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php eksisterer i øjeblikket!");
define("LANINS_122", "Du har måske en eksisterende installation");
define("LANINS_123", "Valgfrit: Din offentlige navn eller alias. Lad stå tomt for at bruge brugernavnet");
define("LANINS_124", "Sporet");
define("LANINS_125", "Ugyldig trin");
define("LANINS_126", "Af sikkerhedsmæssige årsager bør du nu angive filtilladelser på e107_config.php fil tilbage til 644.");
define("LANINS_127", "Databasen [x] findes allerede. Vil du overskrive den? (eksisterende data vil gå tabt)");
define("LANINS_128", "Overskrive");
define("LANINS_129", "Database ikke fundet.");
define("LANINS_134", "Installation");
define("LANINS_135", "af");
define("LANINS_136", "Slettede eksisterende database");
define("LANINS_137", "Fandt eksisterende database");
define("LANINS_141", "Udfyld venligst nedenstående formular med din MySQL detaljer. Hvis du ikke kender disse oplysninger, bedes du kontakte din hosting udbyder. Du kan svæve over hvert felt for at få yderligere oplysninger.");
define("LANINS_142", "VIGTIGT: Skal du omdøbe e107.htaccess til .htaccess");
define("LANINS_144", "VIGTIGT: Venligst kopier og Indsæt indholdet af [b]e107.htaccess[/b] i filen [b] .htaccess [/b]. Behage passe på ikke for at overskrive eksisterende data, der kan være i det.");
define("LANINS_145", "e107 v2.x kræver PHP [x] skal installeres. Bedes du kontakte din vært eller læse oplysningerne på [y], før du fortsætter.");
define("LANINS_086", "Admin Username, Admin Password og Admin E-mail er obligatoriske felter. Venligst vende tilbage til sidste side og sikre oplysninger, der er indtastet korrekt.");
