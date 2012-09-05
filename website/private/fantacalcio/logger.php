<?php

/**
 * Semplice implementazione del design pattern singleton.
 * Data la struttura sintattica di PHP non è possibile sfruttare l'ereditarietà
 * per poter riutilizzare il pattern, se non utilizzando piccoli stratagemmi sintattici.
 */
class MySingleton {
	/**
	 * La variabile statica privata che conterrà l'istanza univoca
	 * della nostra classe.
	 */
	private static $instance = null;
	/**
	 * Il costruttore in cui ci occuperemo di inizializzare la nostra
	 * classe. E' opportuno specificarlo come privato in modo che venga
	 * visualizzato automaticamente un errore dall'interprete se si cerca
	 * di istanziare la classe direttamente.
	 */
	private function __construct() {
		// ... codice ...
	}

	/**
	 * Il metodo statico che si occupa di restituire l'istanza univoca della classe.
	 * per facilitare il riutilizzo del codice in altre situazioni, si frutta la
	 * costante __CLASS__ che viene valutata automaticamente dall'interprete con il
	 * nome della classe corrente (ricordo che "new $variabile" crea un'istanza della classe
	 * il cui nome è specificato come stringa all'interno di $variabile)
	 */
	public static function getInstance() {
		if (self::$instance == null) {
			$c = __CLASS__;
			self::$instance = new $c;
		}

		return self::$instance;
	}

	public static function writeToLog($value, $file) {
		$date = date("j F Y, G:i", time()) . " :\t";
		
		if (!file_exists($file)) {
			mkdir(dirname($file));
			$fh = fopen($file, 'w') or die("can't open file");
		} else {
			$fh = fopen($file, 'a') or die("can't open file");
		}
		fwrite($fh, $date . $value . "\n");
		fclose($fh);
	}
}
?>