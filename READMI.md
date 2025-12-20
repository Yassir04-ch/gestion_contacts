# === gestion_contacts === #

   ## === Présentation du projet === ##

        Ce projet consiste en la conception et le développement d’une application web de gestion des contacts, réalisée dans le cadre de la formation Développeur Web et Web Mobile (2023).

        L’application permet à un utilisateur de créer un compte, de se connecter et de gérer une liste privée de contacts via une interface web simple, intuitive et sécurisée.

        Le projet est réalisé pour la société fictive ConnectSys, spécialisée dans le développement de solutions web sécurisées.

        --- Objectifs ---

                Mettre en place un système d’authentification sécurisé

                Permettre la gestion complète des contacts (CRUD)

                Appliquer les bonnes pratiques du développement PHP 8 procédural

                Valider les données côté client et côté serveur

                Concevoir les diagrammes UML avant l’implémentation

                Organiser le travail selon les méthodes Agiles (Scrum / Kanban)

                🛠️ Technologies utilisées
                Frontend

                HTML5

                CSS3

                Bootstrap

                JavaScript

                Responsive Design

                UX / UI

                SEO

                Backend

                PHP 8 (procédural)

                MySQL ou PostgreSQL

                SQL

                Sessions PHP

                Validation serveur avec expressions régulières (Regex)

                Outils & Méthodologie

                Git / GitHub

                Jira (User Stories, tâches, sprints)

                UML (diagramme de cas d’utilisation, diagramme de classes)

                Méthodes Agiles (Scrum, Kanban)

   ### === Fonctionnalités principales === ###
   
                --- Page d’accueil ---

                Message de bienvenue

                Boutons S’inscrire et Se connecter

                Barre de navigation dynamique selon l’état de connexion

                --- Page de connexion ---

                Nom d’utilisateur

                Mot de passe

                Redirection automatique vers la page Profil

                --- Page d’inscription ---

                Nom d’utilisateur (minimum 3 caractères, alphanumérique)

                Mot de passe (minimum 6 caractères)

                Confirmation du mot de passe

                Validation côté client (JavaScript) et côté serveur (PHP)

                Enregistrement de la date d’inscription

                --- Page Profil ---

                Message de bienvenue

                Informations utilisateur :

                Nom d’utilisateur

                Date d’inscription

                Heure de connexion (via session PHP)

                Lien vers la gestion des contacts

                --- Page Contacts ---

                A. Liste des contacts

                Nom

                Téléphone

                Email

                Adresse

                Actions : Modifier / Supprimer

                Message affiché si la liste est vide

                B. Formulaire d’ajout / modification

                Nom (obligatoire, minimum 2 caractères)

                Email (obligatoire, format valide)

                Adresse (optionnelle, maximum 255 caractères)

                Le formulaire bascule automatiquement en mode édition lors du clic sur Modifier.

                --- Base de données ---
                Tables

                users

                contacts

                Relations

                Un utilisateur possède plusieurs contacts (relation 1:N)

                Toutes les requêtes SQL sont sécurisées à l’aide de requêtes préparées (MySQLi).

                --- Sécurité ---

                Protection contre les injections SQL

                Validation et assainissement des données

                Protection contre les attaques XSS

                Gestion sécurisée des sessions

                Identifiants de base de données stockés dans un fichier config.php

                --- Modélisation UML ----

                Diagramme de cas d’utilisation

                Diagramme de classes



                