**Installatie**

* In `config.php` moeten lokale 
waarden voor de url en database worden ingevuld. 
  * De standaard instelleingen zijn op de volgende base url gebaseerd: http://localhost/webtech/
  * Als de url niet op /webtech eindigt moet dit worden aangepast in de config
* Opzetten database
  * In de folder /database/setup/ zitten 2 .sql bestanden waar de database mee opgezet kan worden.
     1. Importeer `maak_tabellen_aan.sql`
     2. Importeer `voeg_data_toe_aan_tabelleng.sql` 
     
**Project structuur**

* /
    * .config.php
        * Hier staan de omgevingsafhankelijke instellingen
    * .htaccess
        * Hier staan instellingen die ervoor zorgen dat alle urls naar index.php worden geleid. Dit zorgt ervoor dat er custom urls gebruikt kunnen worden die niet afhankelijk zijn van de bestandsnaam. Bijvoorbeeld /login in plaats van /login.php
    * index.php
        * Dit bestand wordt altijd aangesproken en hier worden enkele algemene dingen ingeladen.   
    * routes.php
        * Dit bestand verwijst de urls naar de verschillende controllers.
* /afbeeldingen
    * Deze map bevat alle boekafbeeldingen
* /controllers
    * De controllers halen de informatie uit de database ie gebruikt wordt in de views
    * Ook verwerken de controllers de get en post requests
    * PaginaController.php
        * Alle andere controllers extenden deze abstracte klasse.
        * Deze klasse maakt een standaard pagina aan met alle onderdelen (head.php, header.php)
* /database
  * /setup
    * Bevat setup scripts voor het aanmaken van de database
  * /vragen
    * Bevat de queries die gebruikt worden om data uit de database op te vragen en veranderingen aan te brengen
  * Database.php
    * Met deze klasse wordt de PDO gemaakt
* /scss
  * In deze map staan alle stijl bestanden, in scss vorm. Dit geeft meer flexibiliteit dan pure .css
  * Alles in deze map wordt gecompiled naar in bestand: style.css in de /styles map
* /style
  * style.css
    * Dit is gecompilde variant van alle scss. Dit bestand wordt ook ingeladen in de website
* /views
  * deze map bevat alle pagina's
    * Omdat de PageController.php altijd de head, header inlaadt, staat in deze pagina.php bestanden alleen de unieke data
    * /componenten
      * Bevat de componenten die op elke pagina worden ingeladen      

    
         
        

