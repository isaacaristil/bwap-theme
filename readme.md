## BWAP Theme is not a parent theme

This theme is meant to be installed and hacked. It's not a parent theme and is can't be updated.

## Requirements
 - Bower
 - Gulp

## Initialize a new project

Clone locally the project :
```
mkdir /path/to/projects/folder
cd /path/to/projects/folder
git clone https://github.com/alanpilloud/bwap-theme.git
cd bwap-theme
```

Update the theme depedencies :
```
npm install
bower install
```

Then compile the css :
```
gulp css
//or
gulp css:watch
```
