#!/bin/sh

# Testing if we have two arguments:
[ $# -eq 3 ] || {
  echo "Usage: update.sh <platform> <package version> <revision>"
  exit 1
}

PLATFORM=$1
PACKAGE_VERSION=$2
REVISION=$3

CURRENT_DATE=`date +"%F %a %X"`

# Updating the download links:
if [ $PLATFORM = "win32" ]
then
  EXE_FILE="KMaps-${PACKAGE_VERSION}-r${REVISION}-win32.exe"
  ZIP_FILE="KMaps-${PACKAGE_VERSION}-r${REVISION}-win32.zip"
  sed "1,31s/Windows x32.*/Windows x32 (revision: ${REVISION}, ${CURRENT_DATE}): <a href="${EXE_FILE}">${EXE_FILE}<\/a>, <a href="${ZIP_FILE}">${ZIP_FILE}<\/a>/g" website/aspect/index.html.in > website/aspect/index.html
elif [ $PLATFORM = "win64" ]
then
  ZIP_FILE="KMaps-${PACKAGE_VERSION}--r${REVISION}win64.zip"
  sed "1,31s/Windows x64.*/Windows x64 (revision: ${REVISION}, $CURRENT_DATE): <a href="${ZIP_FILE}">${ZIP_FILE}<\/a>/g" website/aspect/index.html.in > website/aspect/index.html
elif [ $PLATFORM = "Linux" ]
then
  TGZ_FILE="KMaps-${PACKAGE_VERSION}-Linux.tar.gz"
  sed "1,31s/Linux x64.*/Linux x64 (revision: ${REVISION}, $CURRENT_DATE): <a href="${TGZ_FILE}">${TGZ_FILE}<\/a>/g" website/aspect/index.html.in > website/aspect/index.html
elif [ $PLATFORM = "MacOSX" ]
then
  DMG_FILE="KMaps-${PACKAGE_VERSION}-Darwin.dmg"
  sed "1,31s/Mac OS X.*/Mac OS X (revision: ${REVISION}, $CURRENT_DATE): <a href="${DMG_FILE}">${DMG_FILE}<\/a>/g" website/aspect/index.html.in > website/aspect/index.html
fi

# Updating the date:
sed "1,31s/Last update:.*$/Last update: ${CURRENT_DATE}/" website/aspect/index.html.in > website/aspect/index.html
