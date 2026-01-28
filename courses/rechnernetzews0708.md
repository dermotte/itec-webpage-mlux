# PR Rechnernetze WS 2007/2008

* Folien vom 08.10. 2007 (OMNeT++ Einführung in der VO) → [download](http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/OMNet-Einfuehrung.pdf "http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/OMNet-Einfuehrung.pdf")

* Folien vom 03.10. 2007 →  [download](http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/Rechnernetze-2007-10-03.pdf "http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/Rechnernetze-2007-10-03.pdf")
* Folien vom 17.10. 2007 →  [download](http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/Rechnernetze-2007-10-17.pdf "http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/Rechnernetze-2007-10-17.pdf")
* ~~Folien vom 24.10. 2007~~ entfällt

## Useful Links

* [NanoHTTPD](http://elonen.iki.fi/code/nanohttpd/ "http://elonen.iki.fi/code/nanohttpd/") - A one file, one class Java HTTP server.

## TCPMon - Monitor für TCP basierte Protokolle

Der TCPMonitor (aus dem [Apache Axis Projekt](http://ws.apache.org/axis/ "http://ws.apache.org/axis/")) erlaubt das “Mithören” bei HTTP Verbindungen. Will man zum Beispiel die Verbindung des Webbrowsers zur ORF Webseite *abhören*, dann kann man mit folgender Konfiguration (siehe Bild) eine Weiterleitung einrichten. Durch Besuch der Adresse [http://127.0.0.1:9001](http://127.0.0.1:9001 "http://127.0.0.1:9001") im Browser werden alle HTTP Requests und Responses im TCPMonitor angezeigt.

[![](/~mlux/wiki/lib/exe/fetch.php?media=courses:tcpmon.png)](/~mlux/wiki/lib/exe/detail.php?id=courses%3Arechnernetzews0708&media=courses:tcpmon.png "courses:tcpmon.png")

### Download

Bereits als Paket für Windows bzw. Java hier zum Download, [Java 6](http://java.sun.com "http://java.sun.com") wird allerdings in beiden Fällen benötigt:

* Windows executable → [download](http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/utils/tcpmon-windows-bin.zip "http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/utils/tcpmon-windows-bin.zip")
* Java package → [download](http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/utils/tcpmon-java-bin.zip "http://www.itec.uni-klu.ac.at/~mlux/rechnernetze-ws07/utils/tcpmon-java-bin.zip")

## PuTTy & XMing HowTo

1. Installieren Sie PuTTY →  [download](http://www.chiark.greenend.org.uk/~sgtatham/putty/ "http://www.chiark.greenend.org.uk/~sgtatham/putty/")
2. Installieren Sie Xming X Server for Windows →  [download](http://sourceforge.net/projects/xming "http://sourceforge.net/projects/xming")
3. Starten Sie PuTTY und geben sie für als „Host Name“ `pl00-itec.uni-klu.ac.at` ein.
4. Geben sie unter „Saved Sessions“ `pl00-itec` ein
5. Wählen Sie die Kategorie „X11“ im Verzeichnisbaum auf der rechten Seite.
6. Aktivieren Sie „Enable X11 Forwarding“.
7. Geben sie im Feld „X display location“ `localhost:0` ein.
8. Gehen Sie zurück auf die Kategorie „Session“ und klicken sie den Button „Save“.
9. Starten Sie Xming
10. Klicken Sie den Button „Open“
11. Loggen Sie sich mit ihrem UniKlu Account ein.

### Screenshots

[![ Screenshot PuTTy 1](/~mlux/wiki/lib/exe/fetch.php?media=courses:putty1.png " Screenshot PuTTy 1")](/~mlux/wiki/lib/exe/detail.php?id=courses%3Arechnernetzews0708&media=courses:putty1.png "courses:putty1.png")

[![ Screenshot PuTTy 2](/~mlux/wiki/lib/exe/fetch.php?media=courses:putty2.png " Screenshot PuTTy 2")](/~mlux/wiki/lib/exe/detail.php?id=courses%3Arechnernetzews0708&media=courses:putty2.png "courses:putty2.png")