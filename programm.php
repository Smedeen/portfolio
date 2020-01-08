<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Min portfolio</title>
        <link rel="stylesheet" href="prostyle.css">
    </head>
    <body>
        <section id="sidebar">
    
  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
        </svg>
      </a>
    </span>

       <ul class="navbar-nav">
          <li><a href="Index.html">Hjem</a></li>
          <li><a href="programm.html">Programmering</a></li>
          <li><a href="design.html">Design</a></li>
          <li><a href="web.html">Webudvikling</a></li>
          <li><a href="Kommunikation.html">Kommunikation</a></li>
        </ul>
    </nav>
        
        <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
             <a href="Index.html">Hjem</a>
             <a href="programm.html">Programmering</a>
             <a href="design.html">Design</a>
             <a href="web.html">Webudvikling</a>
             <a href="Kommunikation.html">Kommunikation</a>
        </div>

</section>
    
         <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
        
        <div id="mitgrid">
            <div id="main">
                <h1>Programmering</h1>
             </div>
  
<! –– Gruden til emner er for at folk hurtig kan danne et overblik, på hvad der kan findes på siden. Emnerne kan ogsåvære med til at lade folk komme til det ene emne, man er interesseret, istedet for at scrolle ned til det.––>
            <div id="emner"> 
                <ul>
                    <li><a href="#html">HTML</a></li>
                    <li><a href="#css">CSS</a></li>
                    <li><a href="#grid">Grid</a></li>
                    <li><a href="#responsiv">Responsiv</a></li>
                    <li><a href="#php">PHP</a></li>
                    <li><a href="onepage">Onepage</a></li>
                    <li><a href="#refleksion">Refleksion</a></li>
                </ul>
            </div>
    
    
   <div id="html">
        <h1>Html:</h1>
            <p>På første hovedforløb blev jeg instrueret til det grundlæggende af Html. Html betyder HyperText Markup Language.</p>
            <p>HTML bruges til at strukturere indholdet på ens hjemmeside ved hjælp af en række elementer. HTML-elementer består af tags. Et tag består af < og >. Der er altid et startstag <tagnavn> og et slut tag </tagnavn>. Ved tagnavn skriver man en tekst. I den tekst man indsætter mellem start-tagget og slut-tagget, vil fortælle tagget betydning. Et element kan også have tilhørende attributter, som der er med til at bestemmer hvordan elementet skal være.</p>
    </div>

<! –– Iframe har jeg brugt til at få andre projkter ind som en hjemmeside, istedet for et billede. 2 div? hb divet bruges til grid, det andet at for at kommunikere med alle iframe på en gang (der findes sikkert en nemmer løsning) ––>             
    <div id="hb">
         <div id="iframe-container">
                <iframe src="http://majx0750.apache.eadania.dk/html/HTML.html"></iframe>
        </div>
    </div>
    
            
   <div id="css">
        <h1>CSS:</h1>
            <P>Jeg blev også instrueret til det grundlæggende af css. CSS står for "Cascading Style Sheets.</P>
            <p> CSS er et kodesprog der beskriver udseende på dine HTML-sider. CSS farvelægger og visualiserer dine HTML-sider. CSS giver en mange forskellige mulighed for at bestemme ens hjemmesides style, som skrifttyper, størrelser, farver, marginer, højder, bredder, baggrundsbilleder osv. på ens hjemmeside. CSS-koden behøves ikke at være skrevet i ens html-dokument, den kan være sin egen fil via et stylesheet, som er linket til ens HTML-dokument. CSS’en kan også skrives direkte i HTML-filen, hvis man ønsker at style et bestemt HTML-element. </p>

       </div>
       
    <div id="cssb">
         <div id="iframe-container">
                <iframe src="http://majx0750.apache.eadania.dk/css/"></iframe>
        </div>
    </div>
             
            
     <div id="grid">
        <h1>Css-grid:</h1>
            <p>CSS-grid er en teknik i ens Stylesheets, der gør det nemmer at lave et responsive hjemmeside lettere. Der har været andre metoder førhen til at kontrollere ens sides layoutmetoder, som tabeller og CSS flexbox. </p>
    </div>

<! ––Billede med det Størrelse jeg gerne vil have at det på mobil versionen ––> 
    <div id=gridb>
       <img src="mose.png" width="70%">
         <img src="grid.png" width="70%">
    </div>
                
    <div id="responsiv">
        <h1>Responsiv Design</h1>
            <P>Responsive er en måde at designe ens hjemmeside på. Da enheder som mobil og pc har meget forskellige skræm størrelser. Derfor er det godt at altid have et responsiv design, med i bagtankerne. Med responsiv vil hjemmesiden automatisk rette sig til de forskellige skærmstørrelser, det vil sige at ting som tekst, billeder, grafik osv. Vil skaleres enten op eller ned, afhængig af hvilken apparat man bruger. Ved responsivt design er det bedst at lave ”mobile First”, da det er nemmer lave noget større end mindre.</P>
    </div>
       
    <div id=resb>
        <img src="res-8.png" width="70%">
    </div>
                
    <div id="php">
         <h1>PHP</h1>
            <p>PHP står for "Hypertext Preprocessor"</p>
            <p>PHP er en server-side programmeringssprog. Alt kodning og data der bliver lavet i PHP køre på en server som der så derefter sender det alt informationen tilbage som en HTML på ens browser. Det vil sige at koden på ens PHP-fil bliver først læst og udført på browseren. I en PHP-fil kan man både skrive HTML, CSS og JavaScript koder.</p>
    </div>
       
    <div id=phpb>
        <img src="php-8.png"width=70%>
    </div>
    
       
     <div id="onepage">
        <h1>One page project</h1>
            <p>Med den samlet grundlæggende viden af HTML, CSS, Grid og Responsive fremstillet jeg dette website under et OnePage projekt, hvori jeg skulle lave en side omkring kiks.</p>
    </div>
       
    <div id="oneb">
         <div id="iframe-container">
                <iframe src="http://majx0750.apache.eadania.dk/onepage/">
                </iframe>
        </div>
    </div>   
            
   <div id="refleksion">
        <h1>Refleksion</h1>
            <p>Jeg havde nogen som helst erfaring med kodning af hjemmesider og havde heller ikke nogen ide om at det var det jeg skulle arbejde med hjemmesider i den nærmeste fremtid, men forløbet her har givet mig min lysten og nysgerrigheden for at arbejde endnu videre med det.</p>
            <p>Der er også blevet lavet en webbog af hele holdet, hvor der står hva man ellers kan bruge HTML og CSS, bogen kan findes her<a href="http://jesp883f.apache.eadania.dk/webbog/?fbclid=IwAR0sAE3PVsynPgA-wUGWFcXC0XZ6mYORMf_QBXxVcRxQr_okHn6CeER-ohM">Webbogen</a> </p>
            <p>Kilder: linkedin learning, w3schools og intro til html, CSS og PHP - Niels Østergaard </p>
    </div>
        
        
        <footer>
            <p>&copy; Maj Smedemark - portfolio</p>
        </footer>
        </div>
        
    </body>
</html>