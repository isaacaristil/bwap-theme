## Requirements
 - Php 5.6 or higher
 - Node.js 0.10.29 or higher
 - Grunt 0.4.5 or higher
 - Bower 1.5.2 or higher

## Initialize a new project

Clone locally the project :
```
mkdir /path/to/projects/folder
cd /path/to/projects/folder
git clone https://alanpilloud@bitbucket.org/alanpilloud/rapid.git
cd rapid
```

Update the theme depedencies and install the node modules (Grunt) :
```
bower install
npm install
```

Then compile the project :
```
grunt compile
```

To install a complete website, you will have to run wp-installer.bat
This requires WP-CLI.