<!DOCTYPE html>
<html lang="da">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Min portfolio</title>
        <link rel="stylesheet" href="Kommustyle.css">
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
<! –– Slutning på min navbar. ––>         

<! –– SStarten på indholdet.––> 
<! –– main er id'en på alle overemne på hjemmesiden, gruden til at alle har samme id navn er så kan koden bare kopires og derefter puttes på den anden side, på hjemmesiden.––>         
        <div id="mitgrid">
            <div id="main">
                <h1>Kommunikation</h1>
            </div>

<! –– Gruden til emner er for at folk hurtig kan danne et overblik, på hvad der kan findes på siden. Emnerne kan ogsåvære med til at lade folk komme til det ene emne, man er interesseret, istedet for at scrolle ned til det.––>
            <div id="emner"> 
                <ul>
                    <li><a href="#kommunikation">Kommunikation</a></li>
                    <li><a href="#kvantitativ">Kvantitativ empiri</a></li>
                    <li><a href="#præsentationsteknik">Præsentationsteknik</a></li>
                    <li><a href="#paradigme">Paradigme</a></li>
                    <li><a href="#tekstproduktion">Tekstproduktion</a></li>
                    <li><a href="business">Business Model Canvas</a></li>
                    <li><a href="thinking">Design thinking</a></li>
                    <li><a href="#refleksion">Refleksion</a></li>
                </ul>
            </div>
            
            <div id="kommunikation">
                <h1>Kommunikation</h1>
                  <p>Kommunikation kan udtrykke sig meget forskelligt, så den måde vi kommunikerer på, kan svinge en del. Kommunikation kan kategorisere i nogle kategorier. De kategorier som jeg har gået mest i dybde med på første hovedforløb er: verbal, nonverbal og skriftlig kommunikation. Kategorierne kan godt anvendes sammen og derved kan man opnå en bedre kommunikation.</p>
                <h3>Verbal kommunikation</h3>
                <p>Verbal kommunikation er det talte sprog. I starten af et interview er det altid godt at begynde med nogle venlige og opmuntrende ord, da starten kan påvirke hvordan resten af interview kommer til at forgå, ved at man begynder blødt, udviser man varme og åbenhed.</p> 
            </div>
            
            <div id="kommub">
                <h3>Nonverbal kommunikation</h3>
                <p>Nonverbal kommunikation henvender sig mest til brugen af ens toneleje og kropssprog. Sammen med den verbale kommunikation kan man opnå den bedst mulig svar fra modtageren, ved at have en rolig tonefald og være lytterne og reflektering over hvad modtageren fortæller.</p>
                <h3>Skriftlig kommunikation</h3>
                <p>Skriftlig kommunikation er for det meste en envejskommunikation, da modtageren ikke altid, har mulighed for at give respons og stille spørgsmål til hvad der er blevet skrevet. Dette kan medføre store konsekvenser, som misforståelser og mistolker budskabet, derfor er det vigtigt, som afsender tydeliggøre så meget som muligt for at få budskabet korrekt.</p>
            </div>
            
            <div id="kvantitativ">
                <h1>Kvantitativ metode</h1>
                <p>Kvantitativ metode kan finder man resultater ved spørgeskemaer eller lukket interview spørgsmål. Spørgeskemaer, kan man bruge til at finde svaret på hvor mange mennesker gøre noget/bruger noget. </p>
                
                <ul>
                    <li>Fordelene ved kvantitativ er at man kan få svar fra mange mennesker på en gang og med de informationer, som man så kan lave statistik ud fra.</li>
                    <li>Ulemperne ved kvantitativ er at man lære ikke noget nyt eller får øje på nogle problemer der måske er, man kan heller ikke være sikker på at folk er ærlige. </li>
                </ul>
                
            </div>
            
            <div id="Kvalitativ">
                 <h1>Kvalitativ metode</h1>
                    <P>Kvalitativ metode foregår ved at man, lytter til folk. Man kan bruger metoden, når man gerne at finde det mulige problem/lære noget man ikke haft øje på endnu. Spørgsmålene er åbne så folk ikke kan nøjes med at svare ja eller nej og derved får man nye vinkler ind til tingene.</P>
                
                 <ul>
                    <li>Fordelene ved kvalitativ er, at man får nye vinkler/viden på tingene. </li>
                    <li>Ulemperne ved kvalitativ er, at det kan tage lang tid, interviewe mange mennesker hvis behovet er for det.</li>
                </ul>
                
            </div>
            
            
            <div id="præsentationsteknik">
                <h1>Præsentationsteknik</h1>
                    <p>Når man skal præsentere et produkt eller strategi er kommunikationen blandt mennesker meget vigtigt, men også de forskellige præsentationsteknikker der findes, som man benytte. Formålet med at præsentere er</p>
                <ol>
                    <li>Informere </li>
                    <li>Overtale</li>
                    <li>Udanne</li>
                    <li>Underholde</li>
                    <li>Skabe og fastholde interesse</li>
                </ol>
                <p>Her er nogle forskellige præsentationstekniker:</p>
                <h3>Fisken</h3>
                    <p>Hovedet er præsentationen hvor man skaber man et overblik og prøver at fange folks interesse og nysgerrighed til emnet.</p>
                    <p>I kroppen fremlægger man om det man snakket om i præsentationen, deler ens viden om emnet som analyse, gode pointer og information.</p>
                    <p>Når man kommer til Halen giver man en kort gentagelse af præsentationen, med gode pointer fra ens taler.</p>
                <img src="fisk-8.png" width="60%">
            </div>
            
<! –– hver underemne er delt op i diver, dette grund skyldes ved ændringerne fra mobil til pc så layoutene kan se anderledes ud på de to visioner.––> 
            <div id="præsenb">
                 <h3>De 5 Canons of Rhetoric</h3>
                    <ol>
                        <li>Inventio (Invention): Hvordan man skaber en fin præsentation</li>
                        <li>Dispostio (arrangement): Hvordan man organiserer en præsentation.</li>
                        <li>Elocutio (style): Hvordan man præsenterer en præsentation. </li>
                        <li>Memoria (memory): Hvordan en person skal huske deres præsentation.</li>
                        <li>Actio (delivery): Kropssprog, toneleje, og udtalen af præsentation.</li>
                    </ol>
                <h3>Elevatortale</h3>
                    <p>Målet med at bruge elevatortale er at talen skal være kort, direkte og simpelt.</p>
                        <ol>
                            <li>Concise: gør det kort</li>
                            <li>Compelling: gør det interessant</li>
                            <li>Conceptual: ikke gør det detaljer  </li>
                            <li>Customized: lav den for dit publicum </li>
                            <li>Conversational: Gør det åbent for en yderligere samtale </li>
                            <li>Clear: gør det forståligt. </li>
                            <li>Credible: gør det troværdig</li>
                            <li>Concrete: Gør det specifikt </li>
                            <li>Consistent: Gør det på linje </li>
                        </ol>
            </div>
            
            <div id="paradigme">
                <h1>Paradigme</h1>
                <p>Paradigmer er en form for mønsterdannende og identificeret ved nogle tænkemåder/synsvinkler omkring videnskaben og virkeligheden. Der er overordnet set 3 paradigmer. Den naturvidenskabelige, samfundsvidenskabelige og Det Humanistiske paradigme. Paradigmer er en form for mønsterdannende og identificeret ved nogle tænkemåder/synsvinkler omkring videnskaben og virkeligheden. Der er overordnet set 3 paradigmer.</p>
                    <h3>Naturvidenskabligt paradigme</h3>
                <p>Den naturvidenskabelige, samfundsvidenskabelige og Det Humanistiske paradigme. Det naturvidenskabelige paradigme holder man sig til ren fakta og prøver ikke at fortolke noget. så her stiller man ikke et hvorfor man gøre tingene på den måde og man for ikke folks meninger med. </p>
                <h3>Samfundsvidenskabligt paradigme</h3>
                <p>Den Samfundsvidenskabligt paradigme Har fokus på afsenderen. Afsenderen bestemmer budskabet og hvordan det skal opfattes. Paradigmet mange modeller, teorier, hvor meget af det er “action orienterer.” Man skal forbeholde sig objektiv, når arbejder indenfor dette paradigme. Man kan bruge ”Lasswell's Kommunikation Model” til dette paradigme.</p>
                <p>kanyle formlen.</p>
                    <img src="Hvem-8.png" width="70%">
            </div>
            
            <div id="parab">
                    <h3>Humanistiske paradigme</h3>
                <p>Det Humanistiske paradigme har mere fokus på modtagerne, og derved er de også med til at bestemme mere. Den Humanistiske paradigmer går mere i dybde i modtageren’s verden her kan man bruge ”Imk modellen” til dette paradigme.</p>
                <p>Imk modellen.</p>
                    <img src="model-8.png"width="70%">
            </div>
            
            <div id="tekstproduktion">
                <h1>Tekstproduktion</h1>
                    <p>Når man skriver en tekst, er det vigtig man har den rette strategi på ens målgruppen, Ikke alle tekst former kan bruges til alt.</p>
                <h3>Artikel</h3>
                    <p>I en avis eller et nyhedssite online, skal Teksten enten være fagligt, nyhedspræget, eller skrevet personligt. I en artikel er det vigtigt at fange folks interesse hurtigt og give dem et godt overblik over teksten da folk for det meste ikke læser hele artiklen.</p>  
            </div>
            
            <div id="tekst">
                <h3>Tekst til web </h3>
                    <p>Tekster til web handler om at få læserens opmærksomhed hurtig. Teksten skal være let for folk at finde og at skimme Den skal have en klar titel så det er ingen forvirring hvad det er omkring. </p>
                <h3>Sociale medier</h3>
                    <p> På de sociale medier, er det vigtigt kort og præcis, det skal ikke være alt for detaljeret en fangende tekst og et billede vil være godt for at fange folks opmærksomhed hurtigt. </p>
            </div>
            
            <div id="Business">
                <h1>Business Model Canvas</h1>
                    <p>Business Model Canvas anvendes til analyseresultater, planlægning og forklare udvikling af virksomheden eller et projekt. Der er en række facer som alle har en indflydelse på hinanden en ændring ved den ene face har indflydelse på de andre. Business har ikke bestemt proces hvor man skal starte, man kan hoppe ind på de forskellige facere som der passer en. Business Model Canvas har 9 facer som er:</p>
            </div>
            
            <div id="facer">
                 <ul>
                            <li>Kundeværdi:  hvad sælger du?</li>
                            <li>Kunderelation: Hvilken relation forventer kunderne?</li>
                            <li>Indtægter:  hvordan tjener du penge?</li>
                            <li>Kanaler: hvordan kommer du ud til kunden?</li>
                            <li>Kundesegmenter: hvem køber dit produkt?</li>
                            <li>Aktiviteter: hvad laver virksomheden?</li>
                            <li>Ressourcer: hvad består virksomheden af?</li>
                            <li>Partnere: hvem samarbejder du med?</li>
                            <li>Omkostninger: hvad er dine omkostninger?</li>
                        </ul>
            </div>
            
            <div id="busb">
                <img src=buss-8.png width="60%">
            </div>
            
            <div id="thinking">
                <h1>Design thinking </h1>
                    <p>Design thinking er en bestemt måde at tænke på, Design thinking handler om at styre processen bag en ide. Det handler om at forstå problemet før man prøver på at finde løsninger.Der er 5 faser i Design Thinking.</p>
            </div>
            
            <div id="design">
                 <ul>
                    <li>Empathize: I empathize fasen skal man putte sig i brugerens sted, og sætter sine egne antagelser til side. Man skal forsøge at forstå problemet fra andre vinkler. </li>
                    <li>Define: I define fasen kigger man på resultaterne fra empathize fasen, også analysere dem. Derefter finder de vigtigste/største problemer. </li>
                    <li>Ideate: Her kan man begynde at komme med idéer til løsninger af problemet. </li>
                    <li>Prototype: Med en prototype så man kan undersøge om løsningen virker. </li>
                    <li>Test: I denne fase laver man en grundigt test af ens produkt, man kan altid hoppe nogle facere tilbage hvis der opstår nogle nye problemer.</li>
                </ul>
            </div>
            
            <div id="designb">
                <p>Her kan i se en gennemgang af de to første faser Empathize og Define fra vores app projekt.</p>
                
<! –– Iframe har jeg brugt til at få andre projkter ind som en hjemmeside, istedet for et billede. 2 div? hb divet bruges til grid, det andet at for at kommunikere med alle iframe på en gang (der findes sikkert en nemmer løsning) ––>                  
            <div id="iframe-container">
                <iframe src="https://www.youtube.com/embed/b30HsTnTjwI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
            
            <div id="thinkb">
                <p>Og kan i se gennemgangen af Ideate og Prototype</p>
            <div id="iframe-container">
                <iframe src="https://www.youtube.com/embed/q__bo-cYWHQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
            
            <div id="refleksion">
                <h1>Refleksion</h1>
                <p>Nogle af tingene her har underbevidstheden altid gjort, så synes at det har været spænde af få en forklaring på hvorfor man gøre som, man gør. Design thinking og Business Model Canvas synes jeg også har været interessant har ikke fået puttet mig tankegang på den måde før, synes det er fedt at man skal tænkte på helheden frem for sine egne tanker.</p>
                <p>Kilder:</p>
                <p>Kommunikation: Kommunikation i multimediedesign kap 1,5 og 8.</p>
                <p>Kvantitativ metode: Kommunikation i multimediedesign kap 6.</p>
                <P>Præsentationsteknik: Kommunikation i multimediedesign kap 22.</P>
                <p>Paradigme: Kvantitativ metode: Kommunikation i multimediedesign kap 5.</p>
                <p>Tekstproduktion: Kommunikation i multimediedesign kap. 17 og 5 sporg og formidling</p>
                <p>Business Model Canvas: Business Model Canvas - Alexander Osterwalder og Yves Pigneur</p>
                <p>Design thinking: Tim Brown urges designers to think big (film) og https://www.interaction-design.org/literature/topics/design-thinking.</p>
            </div>
            
        </div><!-- mitgrid -->
        <footer>
             <p>&copy; Maj Smedemark - portfolio</p>
        </footer>
    </body>
</html>
