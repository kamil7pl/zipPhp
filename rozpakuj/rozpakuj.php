<?php
$zip = new ZipArchive();
if ($zip->open("folder.zip") !== TRUE)
{
 die ('Błąd przy rozpakowywaniu archiwum.');
 $zip->close();
}
else
{
 $zip->extractTo("folder/");
 $zip->close();
 echo ('Sukces. Rozpakowano poprawnie.');
}
?>