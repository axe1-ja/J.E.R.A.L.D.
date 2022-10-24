# Documentation pour de Développement du Site J.E.R.A.L.D

## 1. Pour avoir le site sur son ordi

Prérequis:
- Avoir installé php7
- Avoir installé git

Etape 1: Créer un folder pour le projet

Etape 2: Dans le folder, exectuer les commandes:
```
git init
git remote add origin https://github.com/axe1-ja/J.E.R.A.L.D..git
git checkout -b main
git pull origin main
```



## 2. Pour pouvoir voir le site

Ouvrir un terminal dans le folder du projet et lancer la commande:
```
php -S localhost:8888
```

Puis aller sur 'http://localhost:8888/public/home/index'



## 3. Pour avoir toutes les tables de la base de données créée

- Ouvrir XAMPP (v8)
- Lancer le serveur Apache et MySQL
- aller sur 'localhost/phpmyadmin'
- créer une nouvelle database ('+new')
- appeler cette base de donnée 'jeraldb_master'
- dans le projet, créer un fichier '.env' (dans le meme folder que '.gitignore' et 'README.md')
- mettre le code suivant dedans:
```
php app/migrations.php        
```
- ouvrir un nouveau terminal dans le projet (vscode) et ecrire la ligne de code suivante:
```
APP_URL=localhost:8888/public 
APP_ENV=local 
APP_NAME="EKAÏ" 

DB_DSN=mysql:host=localhost;port=3306;dbname=jeraldb_master 
DB_DRIVER='mysql' 
DB_HOST=localhost 
DB_PORT=3306 
DB_NAME=jeraldb_master 
DB_USERNAME= 
DB_PASSWORD=    
```
(cette ligne de code est a lancer a chaque fois que quelqu'un a créé une nouvelle table)

--> normalement, les nouvelles tables seront créées

