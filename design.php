<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Min portfolio</title>
        <link rel="stylesheet" href="design.css">
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
       
<! –– main er id'en på alle overemne på hjemmesiden, gruden til at alle har samme id navn er så kan koden bare kopires og derefter puttes på den anden side, på hjemmesiden.––> 
        <div id="mitgrid">
            <div id="main">
                <h1>Design</h1>
            </div>
            
            <div id="emner"> 
                <ul>
                    <li><a href="#photoshop">Photoshop</a></li>
                    <li><a href="#illustrator">Illustrator</a></li>
                    <li><a href="#farver">Farver</a></li>
                    <li><a href="#fotografering">Fotografering</a></li>
                    <li><a href="#typograf">Typograf</a></li>
                    <li><a href="#gestaltlove">Gestaltlove</a></li>
                    <li><a href="#refleksion">Refleksion</a></li>
                </ul>
            </div>
            
            <div id="photoshop">
                <h1>Photoshop</h1>
                  <p>Photoshop er et billedbehandlingsprogram fra softwareproducenten Adobe. Med Photoshop kan man næsten gøre alt med billeder, det er kun fantasien som sætter grænser. Stort set alle billeder i hjemmesider, plakater, magasiner og brochure, som man ser i hverdagene, er helt sikkert blevet manipuleret på en eller anden måde med Photoshop. </p>  
            </div>
            
            <div id="photob">
                 <img src="thumbnail.jfif" width="70%">
                 <img src="DK%20morgenbord.jpg" width="70%">
            </div>

<! –– hver underemne er delt op i diver, dette grund skyldes ved ændringerne fra mobil til pc så layoutene kan se anderledes ud på de to visioner.––> 
            <div id="illustrator">
                <h1>Illustrator</h1>
                <p>Illustrator er et rigtig godt værktøj til både tegning, tekst og typografi. Illustrators er et rigtig godt program til at bruge hvis man skal lave vektor grafik, det vil sige at man kan skaleres logo eller tekst til en større eller mindre størrelse uden at tabe kvalitet i logoet.</p>
            </div>
            
            <div id="illub">
                 <img src="Asset%201.png" width="60%">
            </div>
            
            <div id="farver">
                <h1>Farver</h1>
                <p>Farver spiller en kæmpe rolle, det er med til at bestemme nogle bestemt udtryk/følelser i fx logoer, fotografering og hjemmeside. Farverne bruges som et virkemiddel, det kan forstærke nogle elementer op, og det samme kan mangel på farver ved brug af sort og hvid.</p>
            <h3>Komplementærfarver</h3>
                <p>Hvis man vil have en balance i det man laver, er det god ide at bruge komplementærfarver. Komplementærfarver er farver, der er modsætninger til hinanden, som man kan se på farvecirklen. På den måde træder det grafiske bedre frem og bliver mere synlig og samtidig er der harmoni mellem farverne. Farvecirklen er 3 forskellige dele som er: </p>
                <ul>
                    <li>Primære farver: Gul, rød, blå. Dette er farverne i midten af cirklen. Alle de andre farver stammer fra- og er en blanding af dem.</li>
                    <li>Sekundære farver Grøn, orange, lilla. Dette er farverne i den mellemste del af cirklen. </li>
                    <li>Tertiære farver er de yderste farver i ringen af cirklen. Disse farver er skabt ved at kombinere de sekundære farver.</li>
                </ul>
            </div>
            
            <div id="farveb">
                <img src="farver.png" width="60%">
            </div>
            
            <div id="fotografering">
                <h1>Fotografering</h1>
                    <p>Blænde, lukketid og ISO udgør de tre sider af eksponeringstrekanten. Sammen fremstiller de det gode eksponeringsbillede. Hvis en af parametre blive ændrer i, skal mindst en af de andre også ændres for at bibeholde en god eksponering.</p>
                        <ul>
                            <li>Blænde: Blænde handler om hvor høj dybdeskarphed kameraet har, det forgår ved at Blænde bestemmer hvor meget lys må komme igennem linsen, Jo større hul er, jo mere lys når sensoren. </li>
                            <li>Lukkertid: Lukkerhastighed er, hvor lang tid lyset får lov til at ramme sensoren. Det vil sige jo længere lukketid, jo lysere bliver billedet, men samtidig kan man risikere mere bevægelsesslørring og rystelser. </li>
                            <li>ISO: ISO bestemmer følsomheden på ens sensors. Jo højere ISO-værdi betyder, at der vil være mere støj fra sensoren, det betyder også at sensoren ikke behøver at samle så meget lys for at udføre en korrekt eksponering og omvendt jo lave ISO-værdier betyder, at sensoren bliver nødt til at samle mere lys for at gøre en god eksponeringen.</li>
                        </ul>
            </div>
            
            <div id="fotob">
                <img src="photo-8.png" width="70%">
            </div>
            
            <div id="typograf">
                <h1>Typograf</h1>
                    <P>Typografi har en stor indflydelse på hvordan mennesker modtager teksten og hvad den repræsenterer. Der findes forskellige slags fonte nogle er kursive eller fede, et bogstav kan have tykke stammer og nogle kan have tynde. Nogle har seriffer og nogen har ikke. Her er de 5 familier indenfor typografi.</P>
                        <ul>
                            <li>Antikva (serif):  har seriffer, som gør, at fonten er nemme at læse på trykte medier som eks. en annonce/bog. </li>
                            <li>Grotesk (sans-serif):  har ikke seriffer. Fonten er meget læsevenlige på skærmen og trykte medier (dog kun hvis det er kort tekst). </li>
                            <li>Dekorative (håndskrift): Er håndskrift. Det er ikke altid læsevenlige. De kan dog se godt ud at bruge den indenfor et logo design.</li>
                            <li>Fantasy: Er et design font og opfattes tit barnligt. Ligesom den Dekorative font bruges fanatasy kun indenfor et logo design.</li>
                            <li>Monospace: Monospace fonten kendes på at alle bogstaver har samme bredde både deres grundstrege og seriffer. I en længere tekst kan være svære at læse den.</li>
                        </ul>
            </div>
            
            <div id="typob">
                <img src="typo-8.png" width="70%">
            </div>
            
            <div id="gestaltlove">
                <h1>Gestaltlove</h1>
                    <p>I gestaltpsykologien er der opstillet en række love (gestaltlovene). Gestaltlovene handler om menneskets måde at grupperer former og figurer, og derefter skabe et helhedsbillede. Her er nogle af de grundlæggende principper indenfor gestaltlovene.</p>
                        <ol>
                            <li>Proximity: Figurer der er placeret tæt på hinanden ses som en gruppe.</li>
                            <li>Similaritys: Ens figurer som i farver, retning eller størrelse opfattes som en gruppe.</li>
                            <li>Continuity: Figur der er arrangeret på linje, eller kurver opfattes som en gruppe</li>
                            <li>Figure-Ground: handler om kontrasten imellem to farver som der er med til skabe et billede.</li>
                            <li>Common Fate: Figur der bevæger sig i samme retning, bliver opfattet som en gruppe. </li>
                            <li>Rule of Thirds: Er en grundlinje for hvordan et menneske øje bedst kan lige at se i et designet (balanceret)  </li>
                            <li>Closure: Er en ikke komplet figur af noget, vi alle kender til, hjernen udfylder hullerne og derved bliver figuren opfattet som et helt billede.</li>
                            <li>White Space: ligger tom luft omkring ens figur/elementer og er med til at øger læsbarheden. Det kan være med til at adskille og knytte figur sammen.</li>
                        </ol>
            </div>
            
            <div id="gestalb">
                <img src="Gestalt-8.png" width="70%">
            </div>
            
            <div id="refleksion">
                <h1>Refleksion</h1>
                <p>Farver og typografi har jeg leget en del med før i min skiltetekniker uddannelse så det har være fedt og blive påmindet omkring det igen, det samme gælder for Photoshop og Illustrator, dog Illustrator skal jeg lige vænne mig til, blev oplært i et andet program som fungere helt anderledes. Jeg har virkelig fået øje for hvor svær fotografering engerlig er, på dette forløb og derfor glæder jeg mig til at lege med det endnu mere i fremtiden. </p>
                <p>Kilder:</p>
                <p>Photoshop: Photoshop CC 2019 Essential Training (film) og Photoshop: grundlæggende - Carsten Kjeldsen Bogner</p>
                <p>Illustrator: Illustrator CC 2019 One on One Fundamentals og Illustrator: grundlæggende - Carsten Kjeldsen Bogner </p>
                <P>Farver: Interfacedesign Kap 15 og 17, https://videnskab.dk/sporg-videnskaben/hvordan-pavirker-farver-os og https://designmodo.com/color-psychology-web-design/</P>
                <p>Fotografering: Photography for Graphic Designers (film) og Fotografering: grundlæggende - Niels Østergaard</p>
                <p>Typograf: Interfacedesign Kap 16, https://www.webfx.com/blog/web-design/the-basics-of-typography/ og http://typeburrito.com/2016/03/18/stop-feeling-dumb-about-pairing-fonts.html</p>
                <p>Gestaltlove: http://www.andyrutledge.com/gestalt-principles-1-figure-ground-relationship.html, https://www.andyrutledge.com/gestalt-principles-2-similarity.html, https://www.andyrutledge.com/gestalt-principles-3.html, https://www.andyrutledge.com/common-fate.html og https://www.andyrutledge.com/closure.html</p>
            </div>
            
        </div><!-- mitgrid -->
        <footer>
             <p>&copy; Maj Smedemark - portfolio</p>
        </footer>
    </body>
</html>
