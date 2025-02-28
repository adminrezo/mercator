# Feuille de route

Ce document reprend les évolutions prévues sur Mercator sur l'année 2022.

## Evolutions majeures

- Croiser les noms et versions des applications avec des flux d'informations sur les CVE
- Authentifier les utilisateurs via un active directory avec [LDAPRecord](https://ldaprecord.com/)
- Revoir le modèle des pages web pour les intégrer dans [Laravel Nova](https://nova.laravel.com)
- Ajouter une vue de l'adressage réseau [Hilbert Map of IPv4 address space](https://bl.ocks.org/vasturiano/8aceecba58f115c81853879a691fd94f), [Measuring the use of IPv4 space with Heatmaps](https://www.caida.org/archive/arin-heatmaps/) identifier le nombre de périphériques par sous-réseau.
- Ajouter un objet "lien physique" (câble) et dessiner un plan de l'infrastructure réseau
- Développer une REST API pour peupler la cartographie

## Evolutions mineurs

- Améliorer la page des logs (nom de l'utilisateur / action / lien vers l'objet concerné)
- Packaging des librairies javascript avec npm
- Dessiner un nouveu jeu d'icônes
- Revoir les pages de gestion des droits d'accès
- Améliorer la documentation, notemment les niveaux de maturité pour chaque objet.
- Mise à jour du framework Laravel vers la version suivnate 

## Petites évolutions

- Améliorer les tests Dusk
- Publier une VM Docker sur [dockerHub](https://hub.docker.com/) 
- Documenter une procédure de déploiement sous Debian


