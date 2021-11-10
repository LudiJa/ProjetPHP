# Projet PHP

## Interface

-in english please
-voir https://www.gloomaps.com/3NrdPXZiFN
-changement navbar quand connexion => accueil annonces mon compte deconnexion

### MLD

| user                                |
| ----------------------------------- |
| id (int) PRIMARY_KEY AUTO_INCREMENT |
| username (varchar 255) NOT_NULL     |
| password (varchar 512) NOT_NULL     |
| prénom (varchar 512) NOT_NULL       |
| nom (varchar 512) NOT_NULL          |
| mail (varchar 512) NOT_NULL         |
| ville INT FOREIGN KEY NOT_NULL      |

---

| ville                               |
| ----------------------------------- |
| id (int) PRIMARY_KEY AUTO_INCREMENT |
| nom (varchar 255) NOT_NULL          |

---

| type de logement                    |
| ----------------------------------- |
| id (int) PRIMARY_KEY AUTO_INCREMENT |
| nom (varchar 255) NOT_NULL          |

---

| logement                                  |
| ----------------------------------------- |
| id (int) PRIMARY_KEY AUTO_INCREMENT       |
| description (text) NOT_NULL               |
| price (float) NOT_NULL                    |
| date debut DATE NOT_NULL                  |
| date fin DATE NOT_NULL                    |
| place disponible INT NOT_NULL             |
| image (varchar 512)                       |
| adress (varchar 512) NOT_NULL             |
| adress2 (varchar 512)                     |
| disponible TINYINT NOT NULL               |
| ville int FOREIGN KEY NOT NULL            |
| type de logement int FOREIGN KEY NOT_NULL |

#

- Créer un fichier dev.env.php dans le dossier app/includes/ contenant les constantes DATABASE, SERVER, USER,PASSWORD relatives à votre SGBD.
