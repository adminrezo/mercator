## Administration

### Gestion des utilisateurs

Les utilisateurs de l'application Mercator sont renseignés dans la base de données de l'application.

Table *users* :

| Champ             | Type         | Description      |
|:------------------|:-------------|:-----------------|
| id                | int unsigned | auto_increment |
| name              | varchar(255) | Nom de l'utilisateur |
| email             | varchar(255) | Adresse mail de l'utilisateur |
| email_verified_at | datetime     | Date de vérification de l'adresse email |
| password          | varchar(255) | Mot de passe de l'utilisateur |
| remember_token    | varchar(255) | Token de session |
| granularity       | int          | Niveau de granularité utilisé |
| language          | varchar(2)   | Langue de l'utilisateur |
| created_at        | timestamp    | Date de création |
| updated_at        | timestamp    | Date de mise à jour |
| deleted_at        | timestamp    | Date de suppression |

Les mots de passes sont hashés par la fonction fournie en standard dans Laravel.

Il est possible de connecter Mercator à un annuaire LDAP (voir LoginController.php). 

### Gestion des rôles

Pour chaque objet de la cartographie, il existe un droit en :

- accès
- création
- édition
- affichage
- suppression

Trois rôles sont encodés par défaut :

- Utilisateur : les utilisateur ont tous les droits sur tous les object à l'exception des utilisateurs et de la configuation.
- Auditeur : l'auditeur à le droit d'accéder et d'afficher tous les objets à l'exception des utilisateurs et de la configutation.
- Administrateur : l'administrateur a tous les droits sans exception.

Il est possible de créer de nouveaux rôles selon les besoins. 

### Gestion des certificats

Des notifications d'expiration des certificats peuvent être envoyés à des pérides définies.

L'écran de configuration est accessible via le menu "Préférences" -> "Configuration".

   [<img src="/mercator/images/certificates.png" width="600">](/mercator/images/certificates.png)

Le bouton "Test"permet d'nvoyer un mail de test à l'adresse de notification spécifiées.

