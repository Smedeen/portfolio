<section id="sidebar">
 <! –– Her er starten på min navbar. det første del af koden er min buger i navnbaren, det er her hvor farven og Størrelsen er blevet givet ––>     
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
      
<! –– Dette er min horizontal navbar, som der kun kan ses på pc størrelse..––>  
         <ul class="navbar-nav">
          <li><a href="Index.html">Hjem</a></li>
          <li><a href="programm.html">Programmering</a></li>
          <li><a href="design.html">Design</a></li>
          <li><a href="web.html">Webudvikling</a></li>
          <li><a href="Kommunikation.html">Kommunikation</a></li>
        </ul>
    </nav>

<! –– Min navbaren i min buuger.––>             
        <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
             <a href="Index.html">Hjem</a>
             <a href="programm.html">Programmering</a>
             <a href="design.html">Design</a>
             <a href="web.html">Webudvikling</a>
             <a href="Kommunikation.html">Kommunikation</a>
        </div>

</section>
    
<! –– Java-script til buger navbaren, dette gøre at jeg kan åbne og lukke for den. ––> 
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