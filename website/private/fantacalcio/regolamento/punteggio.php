<?php $relocate_string = "../"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Fantacalcio NMR 2011/12</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
<link rel="stylesheet" type="text/css" href="../documentPreProcessor.php?document=stylesheet.css&type=css" />
<script type="text/javascript" src="../chromejs/chrome.js"></script>
<script type="text/javascript" src="../version.js"></script>
	<!-- InstanceBeginEditable name="jQuery" -->
	<script type="text/javascript" src="<?php echo $relocate_string; ?>jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $relocate_string; ?>menu_jquery.js"></script>		
<!-- InstanceBeginEditable name="additional css" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="additional js" -->

<!-- InstanceEndEditable -->
</head>
<!-- <body onresize="Count();"> -->
<body>
<?php require $relocate_string . 'include/title.inc.php'; ?>
<?php require $relocate_string . 'include/menu.inc.php'; ?>
<!-- InstanceBeginEditable name="hiddenBox" --><!-- InstanceEndEditable -->
<div id="main"> <!-- InstanceBeginEditable name="body" -->
  <h1 class="title">Punteggio</h1>
  <table class="regole">
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><p class="justify">I giocatori che portano punti sono solo gli 11 che &quot;scendono in campo&quot;, cio&eacute; i titolari che hanno ottenuto punteggio e i giocatori della panchina che hanno sostituito i titolari senza voto.</p>
        <p class="justify">Se sia il titolare che le rispettive riserve non giocano o non vengono valutate, si assegna un punteggio di 3.</p>
        <p class="justify">Il punteggio che ottiene ogni giocatore &eacute; pari al voto preso nella pagella della Gazzetta al quale possono andare a sommarsi punti bonus e a sottrarsi penalit&aacute;. </p>
        <p class="justify">&nbsp;</p>
        <table width="500">
          <tr>
            <td class='regoleTitoli'>I BONUS </td>
          </tr>
          <tr>
            <td align="left"> + 3 punti per ogni gol segnato </td>
          </tr>
          <tr>
            <td align="left"> + 3 punti per ogni rigore parato </td>
          </tr>
          <tr>
            <td align="left"> + 1 punto per il &quot;gol-partita&quot; che decide la vittoria </td>
          </tr>
          <tr>
            <td align="left"> + 0,5 punto per il &quot;gol-partita&quot; che fissa il pareggio</td>
          </tr>
          <tr>
            <td align="left"> + 1 per ogni assist vincente<br />
              &nbsp;(fa fede quanto riportato il marted&iacute; sul sito fantacalcioservice)</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
          </tr>
        </table>
        <br />
        <table width="500">
          <tr>
            <td class='regoleTitoli'>LE PENALITA' </td>
          </tr>
          <tr>
            <td align="left">- 1 punto per un'espulsione</td>
          </tr>
          <tr>
            <td align="left">- 1 punto per ogni gol subito dal portiere</td>
          </tr>
          <tr>
            <td align="left">- 2 punti per ogni autorete</td>
          </tr>
          <tr>
            <td align="left">- 3 punti per ogni rigore sbagliato</td>
          </tr>
        </table>
        <br />
        <p class="link justify">I voti da prendere in considerazione sono quelli che compaiono sul sito della <a href="http://www.gazzetta.it">Gazzetta</a> </p>
        <p class="justify">Questi voti hanno la precedenza sopra ogni altra considerazione, anche in caso di evidente errore del quotidiano (per evitare discussioni).</p>
        <p class='regoleTitoli'>LE SOSTITUZIONI CON LA PANCHINA</p>
        <p class="justify">I titolari schierati che non hanno ottenuto punteggio, vengono automaticamente sostituiti dai giocatori dello stesso ruolo presenti in panchina.</p>
        <p class="justify">Attenzione: ovviamente ogni squadra pu&oacute; effettuare solo 3 sostituzioni automatiche a partita. </p>
        <p class="justify">Per le sostituzioni, i giocatori della panchina saranno scelti nell'ordine:</p>
        <table width="500">
          <tr>
            <td align="left"> portiere</td>
          </tr>
          <tr>
            <td align="left"> 1&deg; attaccante indicato</td>
          </tr>
          <tr>
            <td align="left"> 1&deg; centrocampista</td>
          </tr>
          <tr>
            <td align="left"> 1&deg; difensore</td>
          </tr>
          <tr>
            <td align="left"> 2&deg; attaccante</td>
          </tr>
          <tr>
            <td align="left"> 2&deg; centrocampista</td>
          </tr>
          <tr>
            <td align="left"> 2&deg; difensore</td>
          </tr>
        </table>
        <p class='regoleTitoli'>FATTORE CAMPO</p>
        <p class="justify">Alla squadra che gioca in casa vengono dati 2 punti di bonus.</p>
        <p class='regoleTitoli'>I GIOCATORI SENZA VOTO</p>
        <p class="justify"> Quando un giocatore non sar&aacute; giudicato dai giornalisti della Gazzetta (e quindi in pagella ricever&aacute; s.v. o n.g.), si inserir&aacute; al suo posto il primo dei panchinari del medesimo ruolo che abbia avuto un punteggio ai fini del Fantacalcio. </p>
        <p class="justify">Questa sostituzione avverr&aacute; sempre, fuorch&eacute; nei seguenti casi: </p>
        <table width="600" style="margin:auto;">
          <tr>
                  <td>&nbsp;</td>
                  <td><p class='regoleTitoli'>Il portiere</p></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><p class="justify">Nel caso un portiere giocasse ma non fosse giudicato (s.v. oppure n.g., anche se sostituito) riceverebbe 6 punti, +/- bonus/malus. </p></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><p class='regoleTitoli'>Il giocatore di movimento senza bonus/malus</p></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><p class="justify">Un giocatore di movimento che abbia giocato almeno 25 minuti (recupero escluso) senza bonus/malus e sia stato giudicato s.v. o n.g. ricever� 5,5 punti d�ufficio. Se ha giocato meno di 25 minuti verr� sostituito.</p></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><p class='regoleTitoli'>Il giocatore di movimento con bonus/malus</p></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><p class="justify">Un giocatore di movimento con bonus/malus che sia stato giudicato s.v. o n.g. ricever� 6 punti d�ufficio, +/- eventuali bonus/malus.</p></td>
                </tr>
        </table></td>
    </tr>
    <tr>
      <td><p class='regoleTitoli'>GOAL DECISIVI</p>
    </tr>
    <tr>
      <td><p class="justify">Al giocatore che segna il gol che decide il risultato di una partita, oltre ai 3 punti, viene assegnato un bonus ulteriore. </p>
        <p class="justify">Il gol che fissa il risultato di una partita sul pareggio porta 0,5 punto. </p>
        <p class="justify">Il gol che determina una vittoria porta 1 punto. </p>
        <p class="justify">In una partita finita con una vittoria, il gol-partita &eacute; il primo dei gol che la squadra vincitrice ha fatto pi&uacute; della perdente. 
          Ad esempio in una partita finita 4-2 il gol-partita &eacute; il terzo gol segnato dalla squadra vincitrice. </p>
        <p class="justify">Le autoreti non possono essere gol-partita. </p></td>
    </tr>
  </table>
  <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
