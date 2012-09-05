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
        <h1 class="title">Mercato</h1>
        <table class="regole">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td align="justify"><p class="justify">Prima dell'inizio di ogni stagione, ciascuna squadra deve comunicare gli 11 giocatori della propria rosa che intende mantenere; gli altri risulteranno automaticamente sul mercato.</p>
              <p class="justify"> Successivamente, nel corso di un incontro tra tutti i partecipanti, i giocatori rimasti disponibili verranno acquistati all'asta, cos&iacute; da completare una rosa di 25 giocatori (3 portieri, 8 difensori, 8 centrocampisti e 6 attaccanti); per l'asta, ciascuna squadra avr&aacute; a disposizione 470 fmil, pi&uacute; quelli avanzati dalla stagione precedente (fino ad un massimo di 100 fmil), pi&uacute; quelli relativi ai premi per i piazzamenti in campionato e coppa nella stagione precedente, meno le eventuali sanzioni. </p>
              <p class="justify"> Se qualcuno dei 14 giocatori non mantenuti dalla stagione precedente saranno stati ceduti nel mercato estivo a qualcuna delle prime 50 squadre europee, italiane escluse, ( fa fede il sito:</p>
              <p class='link center'><a style="text-decoration:none" href="http://www.xs4all.nl/~kassiesa/bert/uefa/data/method4/trank2009.html">http://www.xs4all.nl/~kassiesa/bert/uefa/data/method4/trank2009.html</a></p>
              <p class='justify'> al momento della comunicazione degli 11 ), a questa cifra andrà aggiunto un importo in fmil calcolato, per ciascun giocatore, con la formula: 51 – (posizione della squadra a cui è stato ceduto), fino ad un massimo di 100 fmil. </p>
              <p class="justify">A turno, seguendo l'ordine inverso della classifica della stagione precedente, ciascuna squadra proporr&aacute; il giocatore da mettere all'asta, fino al completamento di tutte le rose.</p>
              <p class="justify"> Al termine, ciascuna squadra potr&aacute; avere gratuitamente la riserva di uno dei due portieri acquistati; in alternativa, potr&aacute; decidere di acquisare un unico portiere e poi avere gratuitamente le sue due riserve (in totale, quindi, ogni squadra sar&aacute; composta da 25 giocatori).</p>
              <p class="justify">Il ruolo di ciascun giocatore sar&aacute; quello indicato sul sito Magic Cup di Gazzetta</p>
              <p class="justify">Nel caso in cui un concorrente fosse impossibilitato a partecipare 
                all'asta, completera' la sua rosa nei giorni successivi scegliendo tra 
                i giocatori rimasti sul mercato, pagandoli secondo il seguente schema:</p>
              <p class="justify">- il primo di ciascun ruolo: 30 fmil</p>
              <p class="justify">- il secondo di ciascun ruolo: 20 fmil</p>
              <p class="justify">- il terzo di ciascun ruolo: 10 fmil</p>
              <p class="justify">- i rimanenti: 5 fmil</p>
              <h2>Regole per il mercato aperto</h2>
              <p class="justify"> Il mercato aperto ha inizio la settimana precedente l'ottava giornata di campionato, e chiude la settimana precedente la ventiduesima giornata di campionato (17 turni, comprendendo i 2 di fantacoppa).</p>
              <p class="justify"> Le offerte, su file Word protetto da password e contenenti il nome del giocatore desiderato, quello del giocatore tagliato (dello stesso ruolo) e i fmil offerti, devono pervenire al presidente entro e non oltre le ore 24 del gioved&iacute;, le passwords il venerd&iacute; entro le ore 12.</p>
              <p class="justify"> Nel caso in cui 2 (o pi&uacute;) squadre offrano per lo stesso giocatore la stessa cifra, l'acquisto slitter&aacute; alla giornata seguente, sempre mediante il sistema delle offerte in busta chiusa e ripartendo da 0 fmil, ma (per quel giocatore) solo le 2 (o pi&uacute;) squadre che hanno presentato l'offerta potranno parteciparvi. In caso di ulteriore parit&aacute; si continuer&aacute; ad oltranza di giornata in giornata. Le altre squadre non potranno fare offerte per quel giocatore. Offerte dovute in seguito a parit&aacute;, non impediscono la presentazione di nuove offerte per altri giocatori es.: </p>
              <p class="justify" id='mercato_example'>se A e B offrono entrambe 10 x Ciccio, la settimana seguente solo A e B potranno offrire x Ciccio; A e B potranno inoltre, se vorranno, presentare anche una seconda offerta per un altro giocatore (quella che possono presentare tutte le squadre).</p>
              <p class="justify">In alternativa all'offerta in busta chiusa, e sempre nel periodo in cui il mercato &eacute; aperto, &eacute; possibile concludere trattative dirette di scambio di giocatori tra 2 squadre, pi&uacute; eventuale conguaglio in denaro; lo scambio, non cumulabile con una contemporanea offerta in busta chiusa per un giocatore libero, pu&oacute; avvenire solo tra giocatori dello stesso ruolo, ed &eacute; consentito un massimo di 2 giocatori scambiati per volta (lo scambio va sempre comunicato al presidente entro le 24 del gioved&iacute;).</p>
              <p class="justify"> Un giocatore che viene tagliato o scambiato non pu&oacute; essere acquistato dalla stessa squadra prima che siano passate 5 giornate tra campionato e fantacoppa; inoltre, un giocatore acquistato o scambiato, non pu&oacute; essere scaricato prima che siano passate 5 giornate tra campionato e fantacoppa.</p>
              <p class="justify"> Se un giocatore, durante il mercato di riparazione, viene acquistato da una delle prime 50 squadre europee, italiane escluse, <br />
                ( fa fede il sito:</p>
              <p class='link center'><a style="text-decoration:none" href="http://www.xs4all.nl/~kassiesa/bert/uefa/data/method4/trank2009.html">http://www.xs4all.nl/~kassiesa/bert/uefa/data/method4/trank2009.html</a></p>
              <p class='justify'> 
                la sua squadra, nel momento in cui questo viene tagliato per acquistare un altro giocatore, recupererà un importo in fmil calcolato, per ciascun giocatore, con la formula: 51 – (posizione della squadra a cui è stato ceduto), fino ad un massimo complessivo di 100 fmil per squadra.</p>
              <p class="justify"> E' possibile, in qualsiasi momento della stagione, cambiare il terzo portiere, gratuitamente, scegliendo la riserva di uno dei due portieri rimanenti, con il solo vincolo 
                di non poter ricedere il nuovo scelto ne' riprendere quello ceduto prima che siano trascorse 5 giornate, tra campionato e coppa. La sostituzione va comunicata al presidente entro le h 24 del gioved&iacute;, e verra' poi da lui ufficializzata il venerd&iacute;, analogamente a quanto avviene per gli acquisti durante il periodo in cui il mercato e' aperto.</p>
              <p class="justify"> Nel caso in cui il terzo portiere cambi squadra durante il (vero) calciomercato, e quindi si arrivi ad avere 3 portieri di 3 squadre diverse, la sua sostituzione diventa obbligatoria, in quanto ciascuna fantasquadra deve avere portieri appartenenti al massimo a 2 societa' diverse. </p>
              <p class="justify"> Nel caso di una contemporanea offerta da parte di un'altra squadra, durante il periodo di apertura del mercato, per il portiere di cui si richiede l'acquisizione gratuita, questo andr&aacute; al miglior offerente; chi decide di cambiare il terzo portiere pu&oacute; quindi richiedere la sostituzione gratuita oppure, per tutelarsi maggiormente contro eventuali offerte da parte di altri, fare a sua volta un'offerta. Nel caso di richiesta di sostituzione gratuita, &eacute; possibile fare contemporaneamente un'offerta per un altro giocatore (sempre limitatamente al periodo di apertura del mercato), mentre ci&oacute; non e' possibile se gi&aacute; si decide di fare un'offerta per il cambio del terzo portiere.</p></td>
          </tr>
        </table>
        <!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
