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
<h1 class="title">Modificatore della difesa</h1>
<table class="regole">
  <tr>
        <td><p class="justify">Si considerano solo i voti del quotidiano (senza bonus e malus) e si fa la media dei difensori che hanno giocato, considerando anche le eccezioni elencate al paragrafo &ldquo;I giocatori senza voto&rdquo;. Solo nel caso di giocatori s.v. non sostituibili, ossia quando si assegna un punteggio pari a 3, questo non verr&aacute; conteggiato nella media-difesa, che terr&aacute; conto solo dei voti degli altri difensori; conseguentemente, il n. totale dei difensori utilizzati risulter&aacute; quindi inferiore a quello impostato nella formazione. </p>
      <p class="justify">Il modificatore si applica al punteggio dell' avversario. </p>
      <br /></td>
  </tr>
</table>

<table class="modificatore">
  <tr>
    <th>&nbsp;</th>
    <th class="header" colspan="4">n&deg; difensori</th>
    </tr>
  <tr class="tableline">
    <th>media</th>
    <th class="header2">5/4</th>
    <th class="header2">3</th>
    <th class="header2">2</th>
    <th class="header2">1</th>
  </tr>
  <tr>
    <td></td>
    <td class="values">&nbsp;</td>
    <td class="values">&nbsp;</td>
    <td class="values">&nbsp;</td>
    <td class="values">&nbsp;</td>
  </tr>
  <tr>
    <td>meno di 5</td>
    <td class="values">+4</td>
    <td class="values">+3</td>
    <td class="values">+2</td>
    <td class="values">+1</td>
  </tr>
  <tr>
    <td>meno di 5.25</td>
    <td class="values">+3</td>
    <td class="values">+2</td>
    <td class="values">+1</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>meno di 5.5</td>
    <td class="values">+2</td>
    <td class="values">+1</td>
    <td class="values">-</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>meno di 5.75</td>
    <td class="values">+1</td>
    <td class="values">-</td>
    <td class="values">-</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>meno di 6</td>
    <td class="values">-</td>
    <td class="values">-</td>
    <td class="values">-</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>meno di 6.25</td>
    <td class="values">-1</td>
    <td class="values">-</td>
    <td class="values">-</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>meno di 6.5</td>
    <td class="values">-2</td>
    <td class="values">-1</td>
    <td class="values">-</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>meno di 6.75</td>
    <td class="values">-3</td>
    <td class="values">-2</td>
    <td class="values">-1</td>
    <td class="values">-</td>
  </tr>
  <tr>
    <td>6.75 o pi&ugrave;</td>
    <td class="values">-4</td>
    <td class="values">-3</td>
    <td class="values">-2</td>
    <td class="values">-1</td>
  </tr>
</table>
 
<!-- InstanceEndEditable --></div>

<?php include $relocate_string . 'include/footer.inc.php'?>
<!-- dragHelper for dragdrop.php -->
<div id='dragHelper' style="position: absolute; visibility: hidden;"> </div>
</body>
<!-- InstanceEnd --></html>
