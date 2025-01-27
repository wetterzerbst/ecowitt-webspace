Die Datei speichern.php nimmt die Wetterdaten einer Ecowitt Wetterstation entgegen und speichert sie.
Die Datei muss auf einem Webspace mit PHP liegen.
Es werden jeweils 4 Dateien gespeichert:
1. live.csv Welche immer wieder komplett überschrieben wird
2. YYYY-MM-DD.csv - Im Format Jahr-Monat-Tag als Tagesdatei (Datensatz wird hinzu gefügt ohne die Datei zu löschen)
3. YYYY-MM.csv - Im Format Jahr-Monat als Monatsdatei (Datensatz wird hinzu gefügt ohne die Datei zu löschen)
4. YYYY.csv - Im Format Jahr als Jahresdatei (Datensatz wird hinzu gefügt ohne die Datei zu löschen)

Durch die Speicherung dieser Datenstruktur, kann z.B. die live.csv genutzt werden, um die aktuellen Wetterdaten im Web dar zu stellen.
Die Tages- Montats und Jahresdarstellung dient der Auswertung der Daten des jeweiligen Zeitraums.

Beispiel: https://wetterstation.mx/station/e/
