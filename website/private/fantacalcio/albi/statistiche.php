<?php
$relocate_string = "../";
//require_once ("logger.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html
xmlns="http://www.w3.org/1999/xhtml">
  <!-- InstanceBegin template="/Templates/modello.dwt" codeOutsideHTMLIsLocked="false" -->
  <head>
    <title>Fantacalcio NMR</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="shortcut icon" href="<?php echo $relocate_string; ?>favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=chrometheme/chromestyle.css&type=css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $relocate_string; ?>documentPreProcessor.php?document=stylesheet.css&type=css" />
    <script type="text/javascript" src="<?php echo $relocate_string; ?>chromejs/chrome.js"></script>
    <script type="text/javascript" src="<?php echo $relocate_string; ?>version.js"></script>
    <!-- InstanceEndEditable -->

  </head>
  <!-- <body onresize="Count();"> -->
  <body>

    <?php
    require $relocate_string . 'include/title.inc.php';
    ?>
    <?php
    require $relocate_string . 'include/menu.inc.php';
    ?>
    <!-- InstanceBeginEditable name="hiddenBox" -->
    <!-- InstanceEndEditable -->
    <div id="main">
      <!-- InstanceBeginEditable name="body" -->
      <h1 class="title">STATISTICHE</h1>
      <br />

      <?php
      $handle = fopen($relocate_string . '777/allTimeStats.txt', 'r');
      $i = 0;
      $stats = array();
      while (!feof($handle)) {
        array_push($stats, explode('/', fgets($handle)));
      }
      fclose($handle);

      function pointsSingle($a, $b) {
        if (isset($a[5]) && isset($a[6]) && isset($b[5]) && isset($b[6])) {
          if ($a[5] == $b[5] && $a[6] == $b[6]) {
            return 0;
          }

          return (($a[5] > $b[5] && $a[5] > $b[6]) || ($a[6] > $b[5] && $a[6] > $b[6])) ? -1 : 1;
        } else
          return;
      }

      function pointsTotal($a, $b) {
        if (isset($a[5]) && isset($a[6]) && isset($b[5]) && isset($b[6])) {
          if ($a[5] + $a[6] == $b[5] + $b[6]) {
            return 0;
          }

          return ($a[5] + $a[6] > $b[5] + $b[6]) ? -1 : 1;
        } else
          return;
      }

      function pointsDiff($a, $b) {
        if (isset($a[5]) && isset($a[6]) && isset($b[5]) && isset($b[6])) {
          if (abs($a[5] - $a[6]) == abs($b[5] - $b[6])) {
            return 0;
          }
          return (abs($a[5] - $a[6]) > abs($b[5] - $b[6])) ? -1 : 1;
        } else
          return;
      }

      function pointsSingleMin($a, $b) {
        if (isset($a[3]) && isset($a[5]) && isset($a[6]) && isset($b[5]) && isset($b[6])) {
          if ($a[3] == '')
            return 1;
          if ($a[5] == $b[5] && $a[6] == $b[6]) {
            return 0;
          }

          return (($a[5] < $b[5] && $a[5] < $b[6]) || ($a[6] < $b[5] && $a[6] < $b[6])) ? -1 : 1;
        } else
          return;
      }

      function pointsTotalMin($a, $b) {
        if (isset($a[5]) && isset($a[6]) && isset($b[5]) && isset($b[6]) /*&& $a[5]!=0 && $a[6]!=0 && $b[5]!=0 && $b[6]!=0 && $a[5]!='' && $a[6]!='' && $b[5]!='' && $b[6]!=''*/ ) {
          if ($a[5] + $a[6] == $b[5] + $b[6]) {
            return 0;
          }
          return ($a[5] + $a[6] < $b[5] + $b[6]) ? -1 : 1;
        } else
          return;
      }

      function diffRetiMax($a, $b) {
        if (isset($a[3]) && isset($a[4]) && isset($b[3]) && isset($b[4])) {
          if (abs($a[3] - $a[4]) == abs($b[3] - $b[4])) {
            return 0;
          }
          return (abs($a[3] - $a[4]) > abs($b[3] - $b[4])) ? -1 : 1;
        } else
          return;
      }

        usort($stats, 'pointsSingle');

        echo "<p>MAX points single team:</p><br />";
        echo "
  				<table style='margin:auto'>
  					<tr>
  						<th>anno</th>
  						<th>squadra</th>
  						<th>squadra</th>
  						<th>goal</th>
  						<th>goal</th>
  						<th>punti</th>
  						<th>punti</th>
  					</tr>";
        for ($i = 0; $i < 10; $i++) {
          if (isset($stats[$i][1]) && isset($stats[$i][2]) && isset($stats[$i][3]) && isset($stats[$i][4]) && isset($stats[$i][5]) && isset($stats[$i][6])) {
            echo "<tr>
  						<td>" . substr_replace($stats[$i][0], "/", 2, 0) . "</td>
  						<td>" . $stats[$i][1] . "</td>
  						<td>" . $stats[$i][2] . "</td>
  						<td>" . $stats[$i][3] . "</td>
  						<td>" . $stats[$i][4] . "</td>
  						<td>" . $stats[$i][5] . "</td>
  						<td>" . $stats[$i][6] . "</td>
  					</tr>";
          }
        }
        echo "</table>
  				<br />";

        usort($stats, 'pointsTotal');

        echo "<p>MAX points match:</p><br />";
        echo "
  				<table style='margin:auto'>
  					<tr>
  						<th>anno</th>
  						<th>squadra</th>
  						<th>squadra</th>
  						<th>goal</th>
  						<th>goal</th>
  						<th>punti</th>
  						<th>punti</th>
  						<th>tot</th>
  					</tr>";
        for ($i = 0; $i < 10; $i++) {
          if (isset($stats[$i][1]) && isset($stats[$i][2]) && isset($stats[$i][3]) && isset($stats[$i][4]) && isset($stats[$i][5]) && isset($stats[$i][6])) {
            echo "<tr>
  						<td>" . substr_replace($stats[$i][0], "/", 2, 0) . "</td>
  						<td>" . $stats[$i][1] . "</td>
  						<td>" . $stats[$i][2] . "</td>
  						<td>" . $stats[$i][3] . "</td>
  						<td>" . $stats[$i][4] . "</td>
  						<td>" . $stats[$i][5] . "</td>
  						<td>" . $stats[$i][6] . "</td>
  						<td>" . ($stats[$i][5] + $stats[$i][6]) . "</td>
  					</tr>";
            }
        }
        echo "</table>
  				<br />";

        usort($stats, 'pointsDiff');

        echo "<p>MAX points diff:</p><br />";
        echo "
  				<table style='margin:auto'>
  					<tr>
  						<th>anno</th>
  						<th>squadra</th>
  						<th>squadra</th>
  						<th>goal</th>
  						<th>goal</th>
  						<th>punti</th>
  						<th>punti</th>
  						<th>diff</th>
  					</tr>";
        for ($i = 0; $i < 10; $i++) {
          if (isset($stats[$i][1]) && isset($stats[$i][2]) && isset($stats[$i][3]) && isset($stats[$i][4]) && isset($stats[$i][5]) && isset($stats[$i][6])) {
          echo "<tr>
  						<td>" . substr_replace($stats[$i][0], "/", 2, 0) . "</td>
  						<td>" . $stats[$i][1] . "</td>
  						<td>" . $stats[$i][2] . "</td>
  						<td>" . $stats[$i][3] . "</td>
  						<td>" . $stats[$i][4] . "</td>
  						<td>" . $stats[$i][5] . "</td>
  						<td>" . $stats[$i][6] . "</td>
  						<td>" . abs($stats[$i][5] - $stats[$i][6]) . "</td>
  					</tr>";
            }
        }
        echo "</table>
  				<br />";

        usort($stats, 'pointsSingleMin');

        echo "<p>MIN points single:</p><br />";
        echo "
  				<table style='margin:auto'>
  					<tr>
  						<th>anno</th>
  						<th>squadra</th>
  						<th>squadra</th>
  						<th>goal</th>
  						<th>goal</th>
  						<th>punti</th>
  						<th>punti</th>
  					</tr>";
        for ($i = 0; $i < 10; $i++) {
          if (isset($stats[$i][1]) && isset($stats[$i][2]) && isset($stats[$i][3]) && isset($stats[$i][4]) && isset($stats[$i][5]) && isset($stats[$i][6])) {
          echo "<tr>
  						<td>" . substr_replace($stats[$i][0], "/", 2, 0) . "</td>
  						<td>" . $stats[$i][1] . "</td>
  						<td>" . $stats[$i][2] . "</td>
  						<td>" . $stats[$i][3] . "</td>
  						<td>" . $stats[$i][4] . "</td>
  						<td>" . $stats[$i][5] . "</td>
  						<td>" . $stats[$i][6] . "</td>
  					</tr>";
          }
        }
        echo "</table>
  				<br />";

        usort($stats, 'pointsTotalMin');

        
        echo "<!--<p>MIN points match:</p><br />";
        echo "
  				<table style='margin:auto'>
  					<tr>
  						<th>anno</th>
  						<th>squadra</th>
  						<th>squadra</th>
  						<th>goal</th>
  						<th>goal</th>
  						<th>punti</th>
  						<th>punti</th>
  						<th>tot</th>
  					</tr>";
        for ($i = 0; $i < 10; $i++) {
          if (isset($stats[$i][1]) && isset($stats[$i][2]) && isset($stats[$i][3]) && isset($stats[$i][4]) && isset($stats[$i][5]) && isset($stats[$i][6])) {
          echo "<tr>
  						<td>" . substr_replace($stats[$i][0], "/", 2, 0) . "</td>
  						<td>" . $stats[$i][1] . "</td>
  						<td>" . $stats[$i][2] . "</td>
  						<td>" . $stats[$i][3] . "</td>
  						<td>" . $stats[$i][4] . "</td>
  						<td>" . $stats[$i][5] . "</td>
  						<td>" . $stats[$i][6] . "</td>
  						<td>" . ($stats[$i][5] + $stats[$i][6]) . "</td>
  					</tr>";
            }
        }
        echo "</table>
  				<br />-->";

        usort($stats, 'diffRetiMax');

        echo "<p>MAX diff reti match:</p><br />";
        echo "
  				<table style='margin:auto'>
  					<tr>
  						<th>anno</th>
  						<th>squadra</th>
  						<th>squadra</th>
  						<th>goal</th>
  						<th>goal</th>
  						<th>punti</th>
  						<th>punti</th>
  						<th>tot</th>
  					</tr>";
        for ($i = 0; $i < 10; $i++) {
          if (isset($stats[$i][1]) && isset($stats[$i][2]) && isset($stats[$i][3]) && isset($stats[$i][4]) && isset($stats[$i][5]) && isset($stats[$i][6])) {
          echo "<tr>
  						<td>" . substr_replace($stats[$i][0], "/", 2, 0) . "</td>
  						<td>" . $stats[$i][1] . "</td>
  						<td>" . $stats[$i][2] . "</td>
  						<td>" . $stats[$i][3] . "</td>
  						<td>" . $stats[$i][4] . "</td>
  						<td>" . $stats[$i][5] . "</td>
  						<td>" . $stats[$i][6] . "</td>
  						<td>" . abs($stats[$i][3] - $stats[$i][4]) . "</td>
  					</tr>";
            }
        }

        echo "</table>
				<br />";
      ?>
    </div>
    <?php include $relocate_string . 'include/footer.inc.php'?>
  </body>
  <!-- InstanceEnd -->
</html>
