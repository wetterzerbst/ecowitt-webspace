<?php
date_default_timezone_set('Europe/Berlin'); // Die Zeitzone sorgt dafür, das die Wetterdaten in der aktuellen Uhrzeit auf dem Server abgespeichert werden und verhindert eventuelle falsche Zeitangaben durch den Server!
?>
<?PHP
$mac = "00:00:00:00:00:00"; // Nur die MAC-Adresse ändern.
// AB HIER NICHTS MEHR ÄNDERN
$md5hash = strtoupper(md5($mac));

	if ($_POST["PASSKEY"] == $md5hash) 
	{
		$f = date('Y-m-d') .".csv";
		$csv_header = "";
		$csv_data = "";
		$csv_seperator = ";";
		$csv_linebreak = "\n";
		
		$handle = fopen($f, "a");
				
		foreach($_POST as $key => $value)
		{
			$csv_header = $csv_header .$key .$csv_seperator;
			$csv_data = $csv_data .$value .$csv_seperator;
		}
		
		$csv_header = rtrim($csv_header, $csv_seperator);
		$csv_data =	rtrim($csv_data, $csv_seperator);
		
		if (filesize($f) == 0)
		{
			fwrite($handle, $csv_header);
			fwrite($handle, $csv_linebreak);	
		}
		
		fwrite($handle, $csv_data);
		fwrite($handle, $csv_linebreak);
		
		fclose($handle);
	}

?>
<?php
 /**
 * Name der Datei
 */
 $datei_name = 'live.csv';
 /**
 * Nun prüfen wir mit file_exists() und einer
 IF-Anweisung, ob die Datei vorhanden ist. Wir
 stellen ein @ Zeichen vor die PHP Funktion
 file_exists() damit bei einem Fehlerfall
 keine PHP Fehlermeldung ausgegeben wird.
 */
 if (@file_exists($datei_name) == true) {
 /**
 * Wenn die Datei vorhahen ist, löschen wir
 diese mit der Php Funktion unlink(). Hier
 stellen wir wieder ein @ Zeichen vor, die
 PHP Funktion, damit keine Fehlermeldung
 ausgegeben wird.  */
 if (@unlink($datei_name) == true) {
 /**
 * Wenn die PHP-Funktion unlink() ein true
 Zurück gibt, wurde die Datei
 erfolgreich gelöscht. Dafür geben wir
 eine Meldung aus mit den echo Befehl.
 */
 echo 'Die Datei: '.$datei_name.' wurde
 erfolgreich gelöscht.';
 } else {
 /**
 * Sollte ein Fehler beim Löschen der Datei
 auftreten, gibt die PHP-Funktion
 unlink() false zurück.
 */
 echo 'Die Datei: '.$datei_name.' konnte
 nicht gelöscht werden!';
 }
 } else {
 /**
 * Wenn die Datei nicht vorhanden ist, geben
 wir eine Fehlermeldung aus.
 */
 echo 'Die Datei: '.$datei_name.' ist nicht
 vorhanden!';
 }
?>


<?PHP

	if ($_POST["PASSKEY"] == $md5hash) 
	{
		$f = "live.csv";
		$csv_header = "";
		$csv_data = "";
		$csv_seperator = ";";
		$csv_linebreak = "\n";
		
		$handle = fopen($f, "a");
				
		foreach($_POST as $key => $value)
		{
			$csv_header = $csv_header .$key .$csv_seperator;
			$csv_data = $csv_data .$value .$csv_seperator;
		}
		
		$csv_header = rtrim($csv_header, $csv_seperator);
		$csv_data =	rtrim($csv_data, $csv_seperator);
		
		if (filesize($f) == 0)
		{
			fwrite($handle, $csv_header);
			fwrite($handle, $csv_linebreak);	
		}
		
		fwrite($handle, $csv_data);
		fwrite($handle, $csv_linebreak);
		
		fclose($handle);
	}

?>

<?PHP

	if ($_POST["PASSKEY"] == $md5hash) 
	{
		$f = date('Y-m') .".csv";
		$csv_header = "";
		$csv_data = "";
		$csv_seperator = ";";
		$csv_linebreak = "\n";
		
		$handle = fopen($f, "a");
				
		foreach($_POST as $key => $value)
		{
			$csv_header = $csv_header .$key .$csv_seperator;
			$csv_data = $csv_data .$value .$csv_seperator;
		}
		
		$csv_header = rtrim($csv_header, $csv_seperator);
		$csv_data =	rtrim($csv_data, $csv_seperator);
		
		if (filesize($f) == 0)
		{
			fwrite($handle, $csv_header);
			fwrite($handle, $csv_linebreak);	
		}
		
		fwrite($handle, $csv_data);
		fwrite($handle, $csv_linebreak);
		
		fclose($handle);
	}

?>

<?PHP

	if ($_POST["PASSKEY"] == $md5hash) 
	{
		$f = date('Y') .".csv";
		$csv_header = "";
		$csv_data = "";
		$csv_seperator = ";";
		$csv_linebreak = "\n";
		
		$handle = fopen($f, "a");
				
		foreach($_POST as $key => $value)
		{
			$csv_header = $csv_header .$key .$csv_seperator;
			$csv_data = $csv_data .$value .$csv_seperator;
		}
		
		$csv_header = rtrim($csv_header, $csv_seperator);
		$csv_data =	rtrim($csv_data, $csv_seperator);
		
		if (filesize($f) == 0)
		{
			fwrite($handle, $csv_header);
			fwrite($handle, $csv_linebreak);	
		}
		
		fwrite($handle, $csv_data);
		fwrite($handle, $csv_linebreak);
		
		fclose($handle);
	}

?>
