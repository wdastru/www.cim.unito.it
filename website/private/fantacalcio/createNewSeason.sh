#!/bin/sh
# example usage:
# $1 = 1819
# $2 = 2019

mkdir -p archivio/$2

cp -n calendario.inc archivio/$2/calendario$1.inc
cp -n calendarioCoppa.inc archivio/$2/calendarioCoppa$1.inc
cp -n classifica.inc.php archivio/$2/classifica$1.inc.php
cp -n classifica.inc.php archivio/$2/classifica$1.inc.php
cp -n index.php archivio/$2/classifica$1.php
cp -n coppa.js archivio/$2/coppa$1.js
cp -n coppa.php archivio/$2/coppa$1.php
cp -n 777/datiCampionato.txt archivio/$2/datiCampionato$1.txt
cp -n 777/datiCoppa.txt archivio/$2/datiCoppa$1.txt
cp -n functions.inc.php archivio/$2/functions$1.inc.php
cp -n javascript.js archivio/$2/javascript$1.js
cp -n risultati.php archivio/$2/risultati$1.php
cp -n javascript.js archivio/$2/javascript$1.js
cp -n squadre.inc archivio/$2/squadre$1.inc

sed -i 's/squadre.inc/squadre'$1'.inc/g' archivio/$2/calendario$1.inc
sed -i 's/squadre.inc/squadre'$1'.inc/g' archivio/$2/calendarioCoppa$1.inc
sed -i 's/squadre.inc/squadre'$1'.inc/g' archivio/$2/classifica$1.inc.php
sed -i 's/squadre.inc/squadre'$1'.inc/g' archivio/$2/classifica$1.php
sed -i 's/calendario.inc/calendario'$1'.inc/g' archivio/$2/classifica$1.php
sed -i 's/classifica.inc.php/classifica'$1'.inc.php/g' archivio/$2/classifica$1.php
sed -i 's/classifica.inc.php/classifica'$1'.inc.php/g' archivio/$2/classifica$1.php
sed -i 's/777\/datiCampionato.txt/archivio\/'$2'\/datiCampionato'$1'.txt/g' archivio/$2/classifica$1.php
sed -i 's/squadre.inc/archivio\/'$2'\/squadre'$1'.inc/g' archivio/$2/risultati$1.php
sed -i 's/calendario.inc/archivio\/'$2'\/calendario'$1'.inc/g' archivio/$2/risultati$1.php
sed -i 's/777\/datiCampionato.txt/archivio\/'$2'\/datiCampionato'$1'.txt/g' archivio/$2/risultati$1.php
sed -i 's/calendarioCoppa.inc/archivio\/'$2'\/calendarioCoppa'$1'.inc/g' archivio/$2/coppa$1.php
sed -i 's/javascript.js/archivio\/'$2'\/javascript'$1'.js/g' archivio/$2/coppa$1.php
sed -i 's/coppa.js/archivio\/'$2'\/coppa'$1'.js/g' archivio/$2/coppa$1.php
sed -i 's/777\/datiCoppa.txt/archivio\/'$2'\/datiCoppa'$1'.txt/g' archivio/$2/coppa$1.php

