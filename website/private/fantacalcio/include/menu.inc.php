<?php
echo"
    <div id='menu'>
  <div class='chromestyle' id='chromemenu'>
    <ul>
      <li> <a href='";
echo $relocate_string . "index.php'>Home</a> </li>
      <li> <a href='";
echo $relocate_string . "#' rel='dropmenu5'>Risultati</a> </li>
      <li> <a href='";
echo $relocate_string . "#' rel='dropmenu1'>Marcatori</a> </li>
      <li> <a href='";
echo $relocate_string . "#' rel='dropmenu2'>Rose</a> </li>
      <li> <a href='";
echo $relocate_string . "#' rel='dropmenu3'>Regole</a> </li>
      <li> <a href='";
echo $relocate_string . "#' rel='dropmenu4'>Albo d'oro</a> </li>
      <li> <a href='";
echo $relocate_string . "mercato/offerte.php'>Offerte</a> </li>
      <li> <a href='";
echo $relocate_string . "download.php'>Download</a> </li>
    </ul>
  </div><!-- marcatori drop down menu -->
  <div id='dropmenu1' class='dropmenudiv'> <a href='";
echo $relocate_string . "marcatoriCampionato.php'>Campionato</a> <a href='";
echo $relocate_string . "marcatoriCoppa.php'>Coppa</a> </div>
  <!-- rose drop down menu -->
  <div id='dropmenu2' class='dropmenudiv' style='width: 150px;'> 
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=atletico'>Atletico? No Grazie!</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=bradipo'>Bradipo</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=ciofeca'>Dinamo Ciofeca</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=fedora'>Fedora</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=eporediese'>EPOrediese</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=lokomotiv'>Lokomotiv Peccorino</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=patelavache'>Ij Patelavache</a>
    <a href='";
echo $relocate_string . "squadre/squadra.php?squadra=real'>Real Mentescars</a>
  </div>
  <!-- regole drop down menu -->
  <div id='dropmenu3' class='dropmenudiv' style='width: 150px;'> <a href='";
echo $relocate_string . "regolamento/campionato.php'>Campionato</a> <a href='";
echo $relocate_string . "regolamento/calendario.php'>Calendario</a> <a href='";
echo $relocate_string . "regolamento/moduli.php'>Moduli</a> <a href='";
echo $relocate_string . "regolamento/punteggio.php'>Punteggio</a> <a href='";
echo $relocate_string . "regolamento/risultato.php'>Risultato</a> <a href='";
echo $relocate_string . "regolamento/ant_post_rinv.php'>Ant/Post/Rinv</a> <a href='";
echo $relocate_string . "regolamento/sfide.php'>Sfide</a> <a href='";
echo $relocate_string . "regolamento/comunicare_ris.php'>Comun risultato</a> <a href='";
echo $relocate_string . "regolamento/modificatore.php'>Modificatore</a> <a href='";
echo $relocate_string . "regolamento/mercato.php'>Mercato</a> <a href='";
echo $relocate_string . "regolamento/classifica_fin.php'>Classifica</a> <a href='";
echo $relocate_string . "regolamento/coppe.php'>Coppe</a> <a href='";
echo $relocate_string . "regolamento/premi.php'>Premi</a> </div>
  <!-- albo drop down menu -->
  <div id='dropmenu4' class='dropmenudiv' style='width: 150px;'> <a href='";
echo $relocate_string . "albi/albocampionato.php'>Campionato</a> <a href='";
echo $relocate_string . "albi/albocoppa.php'>Coppa</a> <a href='";
echo $relocate_string . "albi/albosupercoppa.php'>Supercoppa</a> <a href='";
echo $relocate_string . "albi/albochampions.php'>Champions</a> <a href='";
echo $relocate_string . "albi/albomarcatori.php'>Marcatori</a> </div>
  <!-- risultati drop down menu -->
  <div id='dropmenu5' class='dropmenudiv' style='width: 150px;'> <a href='";
echo $relocate_string . "risultati.php'>Campionato</a> <a href='";
echo $relocate_string . "coppa.php'>Coppa</a></div>
  <script type='text/javascript'>cssdropdown.startchrome('chromemenu')</script>
</div>";
?>