## BWAP Theme is not a parent theme

This theme is meant to be installed and hacked. It's not a parent theme and it can't be updated.

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
```

This will automatically run the bower installation and compiles a first CSS.

Next time you will need to compile the CSS, use
```
gulp css
//or
gulp css:watch
```
