Projet gité sur [le git d'Anthony Laplane](https://github.com/arirangz/studi_votit).

---

# VOTIT :

## Live 1 :

> Mise en place des bases: Je récupére les assets, fournis par le live, ainsi que la BDD au format SQL.
> Création du MCD dans le live.
> J'initialise la page index.php avec [Bootstrap](https://getbootstrap.com/).
> Je crée un domaine local, comme si on avais un nom de domaine. (Voir le PDF du projet.)
> /|\ A partir de maintenant je tappe [votit.local](http://votit.local/) pour aller sur le site en développement.

## Live 2 :

> Je crée l'ossature de index.php avec Bootstrap.
> Je crée le dossier template afin de couper le header et le footer dans des fichiers appellés de même nom, et je require_once les fichiers.
> Dans ce dossier template, je crée poll_part.php afin de centraliser les card Bootstrap que je modifie en fonction de la demande.
> Je crée le dossier lib afin de faire le fichier config.php pour y mettre les constantes de base que j'inclue dans header.php.
> Je récupère les enregistrements de la BDD, en mettant en place PDO et en définissant les constantes et j'appelle pdo.php dans le header.
> Je crée poll.php pour inscrire la requête pour récupérer les sondages pour les afficher sur index.php.
> Sur index.php, je boucle sur poll.php.
> Je rends poll_part.php dynamique.
