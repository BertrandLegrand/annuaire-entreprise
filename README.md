
Ce projet est une application web simple permettant de gérer un **annuaire d’employés** d'une entreprise. Il a été réalisé dans le cadre de l'épreuve de rattrapage de **GIT & PHP/MySQL** (Semestre 2 – Année académique 2024-2025).

---

## 🧩 Fonctionnalités

- 🔍 Recherche dynamique d’employés par nom ou poste
- ➕ Ajout d’un nouvel employé
- ✏️ Modification des informations d’un employé
- 🗑 Suppression d’un employé
- 📄 Affichage de tous les employés sous forme de tableau

---

## 🛠 Technologies utilisées

- **Langage** : PHP 8, HTML, CSS
- **Base de données** : MySQL
- **Outils** : Git, VS Code, XAMPP / WAMP
- **Méthode de versionnement** : Git avec branches (`feature/`, `test/`, `dev`, `main`)

---

## 🌳 Structure des branches Git

| Branche              | Rôle                                                      |
|----------------------|-----------------------------------------------------------|
| `main`               | Version finale livrée                                     |
| `dev`                | Intégration des fonctionnalités validées                  |
| `feature/db-setup`   | Création de la base de données et table `employes`        |
| `feature/php-crud`   | Création, lecture, modification et suppression (CRUD)     |
| `feature/ui-design`  | Ajout de style CSS pour améliorer l’interface utilisateur |
| `feature/search`     | Intégration du moteur de recherche                        |
| `test/backend`       | Test des fonctions PHP et connexion base de données       |
| `test/frontend`      | Vérification visuelle de l’interface utilisateur          |

---

## 📂 Structure du projet
annuaire-entreprise/
│
├── index.php # Accueil (liste + recherche)
├── ajouter.php # Formulaire d’ajout
├── modifier.php # Formulaire de modification
├── supprimer.php # Suppression
│
├── includes/
│ └── db.php # Connexion à la base de données
│
├── css/
│ └── style.css # Design CSS
│
├── sql/
│ └── create_db.sql # Script SQL de création de la base
│
├── test_db.php # Test backend (connexion, insertion, lecture)
├── check_ui.html # Check-list frontend
├── README.md # Ce fichier
└── .gitignore
