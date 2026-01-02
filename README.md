<<<<<<< HEAD
# Medical-Records-System
=======
# 🏥 Système de Gestion des Patients - Atelier 3

## 👶 GUIDE POUR DÉBUTANTS ABSOLUS - Première Fois avec PHP

**ATTENTION : Ce guide est fait pour quelqu'un qui n'a JAMAIS touché à PHP ou à la programmation web !**

Si vous êtes dans ce cas, **NE PANIQUEZ PAS** ! Ce guide explique TOUT depuis le début absolu.

### 🤔 Qu'est-ce qu'on va faire exactement ?

Imaginez que vous allez créer un **logiciel médical** sur internet qui permet de :
- 📝 **Ajouter** les informations d'un nouveau patient
- 👀 **Voir** la liste de tous les patients
- 🔍 **Regarder** les détails d'un patient spécifique
- ✏️ **Changer** les informations d'un patient
- 🗑️ **Supprimer** un patient du système

**C'est comme un Excel mais sur internet, avec des boutons et des formulaires !**

### 💡 Ce que vous allez apprendre

Au final, vous saurez :
- Créer des sites web dynamiques
- Sauvegarder des données dans une base de données
- Faire des formulaires qui marchent
- Créer des pages web belles et modernes

---

## 🔍 ÉTAPE 0 : Vérifications Avant de Commencer

**Avant d'installer quoi que ce soit, vérifions votre ordinateur !**

### 💻 Quel système d'exploitation avez-vous ?

**Cliquez droit sur "Ce PC" ou "Ordinateur" → "Propriétés"**

#### Pour Windows 10/11 :
- ✅ Parfait ! Ce guide est fait pour vous
- Version minimum : Windows 10 version 1903

#### Pour Windows 8/7 :
- ⚠️ Ça marchera mais prenez la version 7.4 de XAMPP
- Certaines fonctionnalités peuvent être limitées

#### Pour Linux/Mac :
- Ce guide est principalement pour Windows
- Cherchez "Symfony installation Linux" sur Google

### 🖥️ Configuration minimale requise

Votre ordinateur doit avoir AU MINIMUM :
- **RAM :** 4 Go (8 Go recommandé)
- **Espace disque :** 5 Go libres
- **Processeur :** Dual-core 2 GHz minimum

**Comment vérifier :**
1. Clic droit sur "Ce PC" → Propriétés
2. Regardez "Mémoire installée (RAM)"
3. Regardez l'espace disponible sur C:

### 🌐 Connexion Internet

- **Obligatoire** pour télécharger les logiciels
- **Vitesse minimum :** 2 Mbps
- **Pas de limite de données** (téléchargements de 500 Mo+)

### 🔒 Droits Administrateur

**TRÈS IMPORTANT :** Vous devez avoir les droits administrateur

**Comment vérifier :**
1. Tapez "cmd" dans la recherche Windows
2. Clic droit sur "Invite de commandes" → "Exécuter en tant qu'administrateur"
3. Si ça demande un mot de passe → Vous avez les droits ✅
4. Si c'est grisé → Demandez à votre administrateur système

---

## 📦 ÉTAPE PRÉ-INSTALLATION : Préparer votre ordinateur

### 🧹 1. Nettoyer les anciennes installations

**Si vous avez déjà essayé d'installer XAMPP, WAMP, ou EasyPHP :**

1. **Désinstallez-les complètement :**
   - Allez dans "Paramètres" → "Applications"
   - Cherchez "XAMPP", "WAMP", "EasyPHP"
   - Cliquez "Désinstaller"

2. **Supprimez les dossiers restants :**
   - `C:\xampp\` (si existe)
   - `C:\wamp\` (si existe)
   - `C:\easyphp\` (si existe)

3. **Vérifiez les variables d'environnement :**
   - Tapez "variables d'environnement" dans la recherche
   - Cliquez "Modifier les variables d'environnement système"
   - Dans "Variables système", cherchez "Path"
   - Supprimez toute référence à d'anciens PHP/XAMPP

### 🛡️ 2. Désactiver temporairement l'antivirus

**Certains antivirus bloquent XAMPP :**

1. **Windows Defender :**
   - Cliquez l'icône bouclier dans la barre des tâches
   - "Protection contre les virus et menaces"
   - "Gérer les paramètres" → Désactiver "Protection en temps réel"

2. **Autre antivirus (Avast, Norton, etc.) :**
   - Ouvrez votre antivirus
   - Cherchez "Désactiver" ou "Pause protection"
   - Désactivez pour 1 heure

**⚠️ IMPORTANT :** Réactivez après l'installation !

### 🌐 3. Vérifier les paramètres réseau

1. **Pare-feu Windows :**
   - Tapez "pare-feu" dans la recherche
   - "Pare-feu Windows Defender"
   - "Paramètres avancés"
   - Assurez-vous que les connexions sortantes sont autorisées

2. **Proxy entreprise :**
   - Si vous êtes dans une entreprise/université
   - Demandez à votre administrateur réseau
   - Il faudra peut-être configurer des paramètres proxy

---

## 🖥️ CONFIGURATIONS ORDINATEUR DIFFÉRENTES

### Pour les PC d'entreprise/université

**Problèmes courants :**
- Logiciels de sécurité bloquent les installations
- Proxy internet obligatoire
- Droits administrateur limités
- Antivirus d'entreprise très strict

**Solutions :**
1. **Demandez à votre administrateur IT**
2. **Utilisez un PC personnel** (recommandé)
3. **Installez sur une clé USB** (voir section alternative)

### Pour les PC anciens (Windows 7/8)

**Compatibilité :**
- XAMPP 7.4.x maximum
- PHP 7.4 maximum
- Certaines fonctionnalités limitées

**Installation alternative :**
1. Utilisez WAMP au lieu de XAMPP
2. Version 3.2.6 pour Windows 7
3. Suivez le même guide mais avec WAMP

### Pour les PC avec peu de RAM (< 4 Go)

**Problèmes :**
- XAMPP trop lourd
- Symfony demande beaucoup de mémoire

**Solutions :**
1. Fermez tous les autres programmes
2. Utilisez navigateur léger (Firefox au lieu de Chrome)
3. Évitez Visual Studio Code (utilisez Notepad++)
4. Travaillez étape par étape

### Pour les connexions internet lentes

**Solutions :**
1. Téléchargez tout d'abord :
   - XAMPP : https://www.apachefriends.org/download.html
   - Composer : https://getcomposer.org/Composer-Setup.exe
   - Symfony CLI : https://symfony.com/download

2. **Utilisez un téléphone comme hotspot** si nécessaire

---

## 🔄 MÉTHODES ALTERNATIVES D'INSTALLATION

### Méthode 1 : Installation portable (clé USB)

**Avantages :**
- Pas d'installation sur le PC
- Fonctionne sur n'importe quel PC Windows
- Pas de droits administrateur nécessaires

**Étapes :**
1. Téléchargez XAMPP portable
2. Extrayez sur votre clé USB
3. Lancez `xampp-control.exe` depuis la clé
4. Suivez le guide normalement

### Méthode 2 : Utiliser WAMP au lieu de XAMPP

**Si XAMPP ne marche pas :**
1. Téléchargez WAMP : http://www.wampserver.com/
2. Installez dans `C:\wamp\`
3. Démarrez WAMP
4. Vérifiez localhost
5. Suivez le guide en remplaçant `xampp` par `wamp`

### Méthode 3 : Installation manuelle (avancé)

**Si rien ne marche :**
1. Installez Apache séparément
2. Installez MySQL séparément
3. Installez PHP séparément
4. Configurez tout manuellement

**⚠️ Difficile pour débutants - Évitez si possible**

---

## 📋 PRÉREQUIS - Installation des Outils Nécessaires

**Maintenant on peut installer ! Chaque outil est expliqué en détail.**

### 🔍 Qu'est-ce que chaque outil ?

- **PHP** : Le langage de programmation principal
- **Composer** : Outil pour installer les bibliothèques PHP
- **Symfony CLI** : Outil officiel pour développer avec Symfony
- **MySQL** : Base de données pour stocker les patients
- **XAMPP** : Paquet complet avec Apache, MySQL et PHP

### 📥 Installation étape par étape (avec captures d'écran détaillées)

#### 🚀 1. Installer XAMPP (Le plus important !)

**XAMPP = Apache + MySQL + PHP** (tout ce qu'il faut pour faire tourner un site web)

##### 📥 Téléchargement de XAMPP

1. **Ouvrez votre navigateur** (Chrome, Firefox, Edge)
2. **Tapez cette adresse EXACTE :** `https://www.apachefriends.org/`
3. **Cliquez sur "XAMPP for Windows"**
4. **Choisissez la version :**
   - Pour Windows 10/11 : **8.2.12** (dernière version)
   - Pour Windows 7/8 : **7.4.33** (version compatible)
5. **Cliquez sur "Download (64-bit)"** ou "Download (32-bit)"
   - Comment savoir si 64-bit ? Clic droit "Ce PC" → Propriétés → Regardez "Type du système"

**Taille du fichier : ~150 Mo - Temps : 5-10 minutes selon votre connexion**

##### 🛠️ Installation de XAMPP

1. **Trouvez le fichier téléchargé :**
   - Normalement dans `Téléchargements/`
   - Fichier nommé `xampp-windows-x64-8.2.12-0-VS16-installer.exe`

2. **Clic droit → "Exécuter en tant qu'administrateur"**
   - ⚠️ **OBLIGATOIRE** : Si pas administrateur, ça ne marchera pas !

3. **Écran de bienvenue :**
   - Langue : Choisissez "Français" ou "English"
   - Cliquez "OK"

4. **Composants à installer :**
   - ✅ Apache (serveur web)
   - ✅ MySQL (base de données)
   - ✅ PHP (langage de programmation)
   - ✅ phpMyAdmin (interface graphique pour MySQL)
   - ✅ Tous les autres sont optionnels
   - Cliquez "Next"

5. **Dossier d'installation :**
   - **CHANGEZ en :** `C:\xampp`
   - ⚠️ **NE CHANGEZ PAS** l'emplacement !
   - Cliquez "Next"

6. **Options supplémentaires :**
   - ✅ "Learn more about Bitnami for XAMPP"
   - ✅ "Install Apache as service"
   - ✅ "Install MySQL as service"
   - Cliquez "Next"

7. **Installation :**
   - Cliquez "Install"
   - Attendez 2-3 minutes
   - Cliquez "Finish"

##### 🎯 Premier démarrage de XAMPP

1. **Trouvez XAMPP :**
   - Dans le menu Démarrer : "XAMPP Control Panel"
   - Ou dans : `C:\xampp\xampp-control.exe`

2. **Démarrez les services :**
   - Cliquez "Start" à côté d'**Apache** (devient vert)
   - Cliquez "Start" à côté de **MySQL** (devient vert)
   - Vous devriez voir :
     ```
     Apache: Running (Port 80)
     MySQL: Running (Port 3306)
     ```

3. **Si ça ne démarre pas :**
   - **Problème de port 80 :** Skype ou autre logiciel utilise le port
     - Solution : Fermez Skype, quittez complètement
   - **Erreur "blocked" :** Antivirus bloque
     - Solution : Désactivez temporairement l'antivirus
   - **Erreur "missing" :** Installation corrompue
     - Solution : Désinstallez et réinstallez

##### ✅ Vérification que XAMPP fonctionne

1. **Ouvrez votre navigateur**
2. **Tapez dans la barre d'adresse :** `http://localhost/`
3. **Vous devriez voir :**
   - Page d'accueil de XAMPP
   - Tableau de bord avec les modules
   - Liens vers phpMyAdmin, etc.

4. **Testez phpMyAdmin :**
   - Tapez : `http://localhost/phpmyadmin/`
   - Vous devriez voir l'interface de gestion MySQL
   - Utilisateur : `root`
   - Mot de passe : *(vide)*

**🎉 Si vous voyez ces pages : XAMPP est correctement installé !**

##### 🔧 Dépannage XAMPP

**Problème : Apache ne démarre pas**
```
Solutions par ordre :
1. Fermez Skype/Teams/Zoom (utilisent port 80)
2. Désactivez temporairement l'antivirus
3. Redémarrez l'ordinateur
4. Vérifiez que rien d'autre n'utilise le port 80
```

**Problème : MySQL ne démarre pas**
```
Solutions :
1. Vérifiez qu'aucun autre MySQL n'est installé
2. Supprimez le dossier C:\xampp\mysql\data\* (sauf ibdata1)
3. Réinstallez XAMPP
```

**Problème : Page localhost ne s'affiche pas**
```
Solutions :
1. Vérifiez que Apache est vert dans XAMPP Control Panel
2. Essayez http://127.0.0.1/
3. Désactivez le proxy dans les paramètres Internet
4. Vérifiez le pare-feu Windows
```

#### 🐘 2. Vérifier PHP et installer Composer

**PHP est déjà dans XAMPP, mais Composer est séparé.**

##### ✅ Vérification de PHP

1. **Ouvrez l'invite de commandes :**
   - Tapez "cmd" dans la recherche Windows
   - Clic droit → "Exécuter en tant qu'administrateur"

2. **Tapez cette commande :**
   ```bash
   php --version
   ```

3. **Résultat attendu :**
   ```
   PHP 8.1.10 (cli) (built: Sep 15 2022 11:45:40) (ZTS Visual C++ 2019)
   Copyright (c) The PHP Group
   Zend Engine v4.1.10, Copyright (c) Zend Technologies
   ```

4. **Si vous voyez une erreur :**
   - "php n'est pas reconnu" → PHP n'est pas dans le PATH
   - Solution : Ajoutez `C:\xampp\php\` aux variables d'environnement

##### 📦 Installation de Composer

**Composer = gestionnaire de bibliothèques PHP (comme un "app store" pour code PHP)**

1. **Allez sur le site officiel :**
   - Adresse : `https://getcomposer.org/`
   - Cliquez "Download" (pas "Getting Started")

2. **Téléchargez l'installateur :**
   - "Composer-Setup.exe" (~3 Mo)
   - Enregistrez dans Téléchargements

3. **Installez Composer :**
   - Clic droit sur le fichier → "Exécuter en tant qu'administrateur"
   - Cliquez "Next" plusieurs fois
   - **IMPORTANT :** Laissez coché "Add to PATH"
   - Cliquez "Install"

4. **Vérification :**
   ```bash
   composer --version
   ```
   **Résultat attendu :**
   ```
   Composer version 2.5.8 2023-06-09 17:13:21
   ```

##### 🔧 Problèmes courants avec Composer

**Erreur : "php.exe not found"**
```
Solutions :
1. Vérifiez que XAMPP est installé dans C:\xampp\
2. Ajoutez C:\xampp\php\ au PATH :
   - Variables d'environnement → Path → Nouveau
   - Tapez : C:\xampp\php\
3. Redémarrez l'invite de commandes
```

**Erreur : "Connection refused"**
```
Solutions :
1. Vérifiez votre connexion internet
2. Désactivez le proxy si vous en avez un
3. Essayez plus tard (serveurs parfois surchargés)
```

**Composer ne s'installe pas**
```
Solutions alternatives :
1. Téléchargez composer.phar manuellement
2. Placez-le dans C:\xampp\php\
3. Créez un fichier composer.bat avec :
   @php C:\xampp\php\composer.phar %*
```

#### 3. Installer Symfony CLI (Optionnel mais recommandé)

1. **Téléchargez Symfony CLI** :
   - Allez sur https://symfony.com/download
   - Téléchargez la version Windows
   - Installez-le

2. **Vérifier Symfony CLI** :
   ```bash
   symfony --version
   ```
   Vous devriez voir : `Symfony CLI version 5.x.x`

### ✅ Vérification finale des prérequis

Ouvrez un terminal (cmd.exe) et exécutez ces commandes une par une :

```bash
# 1. Vérifier PHP
php --version

# 2. Vérifier Composer
composer --version

# 3. Vérifier Symfony CLI (optionnel)
symfony --version

# 4. Vérifier que MySQL fonctionne
# Ouvrez http://localhost/phpmyadmin dans votre navigateur
# Vous devriez voir l'interface phpMyAdmin
```

**Si tout fonctionne, félicitations ! Vous êtes prêt pour la suite.** 🚀

**Si vous avez des erreurs :**
- Vérifiez que XAMPP est démarré
- Redémarrez votre ordinateur si nécessaire
- Cherchez l'erreur exacte sur Google

---

## ⚠️ ERREURS COURANTES DES DÉBUTANTS (À LIRE ABSOLUMENT !)

### 😱 Problème #1 : "Ça ne marche pas du tout !"

**Symptômes :**
- Rien ne fonctionne
- Erreurs partout
- "Command not found"

**Cause probable :** Vous n'avez pas suivi les étapes dans l'ordre

**Solution :**
1. **Recommencez depuis le début**
2. **Ne sautez AUCUNE étape**
3. **Vérifiez chaque point de contrôle**

### 😱 Problème #2 : "XAMPP ne démarre pas"

**Solutions par priorité :**

1. **Ports occupés :**
   ```
   - Skype utilise le port 80 → Fermez Skype
   - Teams utilise le port 80 → Fermez Teams
   - VMware/VirtualBox → Désactivez
   ```

2. **Antivirus trop protecteur :**
   ```
   - Désactivez Windows Defender temporairement
   - Ajoutez XAMPP dans les exceptions
   - Désactivez votre antivirus 3rd party
   ```

3. **Droits insuffisants :**
   ```
   - Lancez XAMPP en tant qu'administrateur
   - Vérifiez que vous êtes administrateur du PC
   ```

4. **Installation corrompue :**
   ```
   - Désinstallez XAMPP complètement
   - Supprimez C:\xampp\
   - Réinstallez depuis zéro
   ```

### 😱 Problème #3 : "PHP n'est pas reconnu"

**Cause :** PHP n'est pas dans les variables d'environnement

**Solution détaillée :**
1. Tapez "variables d'environnement" dans la recherche
2. "Modifier les variables d'environnement système"
3. Dans "Variables système", sélectionnez "Path"
4. Cliquez "Modifier"
5. Cliquez "Nouveau"
6. Tapez : `C:\xampp\php\`
7. Cliquez "OK" partout
8. **Redémarrez l'invite de commandes**

### 😱 Problème #4 : "Composer ne s'installe pas"

**Alternatives :**
1. **Méthode manuelle :**
   - Téléchargez `composer.phar` depuis https://getcomposer.org/composer.phar
   - Placez-le dans `C:\xampp\php\`
   - Créez `composer.bat` :
     ```
     @echo off
     php C:\xampp\php\composer.phar %*
     ```

2. **Utiliser l'installateur alternatif :**
   - Téléchargez depuis : https://getcomposer.org/Composer-Setup.exe
   - Choisissez "Developer mode" lors de l'installation

### 😱 Problème #5 : "Le projet Symfony ne se crée pas"

**Vérifications :**
1. **Connexion internet :** Testez Google
2. **Composer fonctionne :** `composer --version`
3. **PHP fonctionne :** `php --version`
4. **Droits d'écriture :** Vous pouvez créer des dossiers dans `C:\xampp\htdocs\`
5. **Espace disque :** Au moins 500 Mo libres

### 😱 Problème #6 : "Page blanche dans le navigateur"

**Causes possibles :**
1. **Apache pas démarré :** Vérifiez XAMPP Control Panel
2. **Mauvaise URL :** Utilisez `http://localhost/ExamPHP/public/`
3. **Erreur PHP :** Vérifiez les logs dans `var/log/`
4. **Cache :** `php bin/console cache:clear`

### 😱 Problème #7 : "Base de données ne marche pas"

**Vérifications :**
1. **MySQL démarré :** Vert dans XAMPP
2. **phpMyAdmin accessible :** `http://localhost/phpmyadmin/`
3. **Mot de passe :** Pour root, laissez vide
4. **Base existe :** Créez "patient" dans phpMyAdmin

### 💡 Conseils pour éviter les erreurs

1. **Ne fermez jamais XAMPP Control Panel**
2. **Gardez l'invite de commandes ouverte**
3. **Testez chaque commande immédiatement**
4. **Notez les erreurs exactes**
5. **Faites des captures d'écran des erreurs**
6. **Ne continuez que si l'étape précédente fonctionne**
7. **Demandez de l'aide sur les forums si bloqué**

---

## 🔄 PROCÉDURES DE RÉCUPÉRATION

### Si tout est cassé : Reset complet

1. **Sauvegardez vos fichiers importants** (si vous en avez)
2. **Désinstallez XAMPP**
3. **Supprimez `C:\xampp\`**
4. **Redémarrez l'ordinateur**
5. **Réinstallez XAMPP depuis zéro**
6. **Suivez le guide depuis le début**

### Si seulement le projet est cassé

1. **Supprimez le dossier ExamPHP :** `rmdir /s ExamPHP`
2. **Recréez le projet :** `composer create-project symfony/skeleton ExamPHP`
3. **Continuez depuis l'étape 2**

---

## 📞 OÙ DEMANDER DE L'AIDE

### Forums et communautés
- **Stack Overflow :** Cherchez "Symfony XAMPP Windows"
- **Reddit r/PHP ou r/symfony**
- **Forum Apache Friends :** https://community.apachefriends.org/
- **Discord Symfony :** https://symfony.com/community

### Comment poser une bonne question
```
Mauvaise question : "Ça ne marche pas !"
Bonne question :
- "Windows 11, XAMPP 8.2.12, PHP 8.1.10"
- "Erreur exacte : SQLSTATE[HY000] [2002] Connection refused"
- "Étapes suivies : 1. Installé XAMPP 2. Démarré Apache/MySQL 3. php --version OK"
- "Ce que j'ai essayé : Redémarré XAMPP, vérifié ports"
```

## 🚀 Étape 1 : Installation et Configuration de Symfony

**Objectif :** Créer un nouveau projet Symfony et installer tous les composants nécessaires.

### 📂 1.1 Créer un nouveau projet Symfony

**Explication :** Nous allons créer un nouveau projet Symfony dans le dossier web de XAMPP.

```bash
# Étape 1 : Ouvrir le terminal
# Cliquez sur le menu Démarrer → tapez "cmd" → Entrée

# Étape 2 : Aller dans le dossier web de XAMPP
cd c:/xampp/htdocs

# Étape 3 : Créer le projet Symfony
# Cette commande va télécharger Symfony et créer le dossier ExamPHP
composer create-project symfony/skeleton ExamPHP

# Étape 4 : Entrer dans le dossier du projet
cd ExamPHP

# Étape 5 : Vérifier que nous sommes au bon endroit
# Vous devriez voir "c:\xampp\htdocs\ExamPHP>"
pwd
```

**Que fait cette commande ?**
- `composer create-project symfony/skeleton ExamPHP` : Télécharge la version de base de Symfony et crée le dossier ExamPHP

**Temps estimé :** 2-3 minutes (dépend de votre connexion internet)

### 📦 1.2 Installer les dépendances nécessaires

**Explication :** Symfony fonctionne par composants. Nous devons installer ceux dont nous avons besoin.

```bash
# Commande 1 : Installer l'application web complète
# Cela ajoute : templates, formulaires, sécurité, etc.
composer require webapp

# Commande 2 : Installer Doctrine (pour la base de données)
composer require symfony/orm-pack

# Commande 3 : Installer les composants de formulaires
composer require symfony/form

# Commande 4 : Installer la validation des données
composer require symfony/validator

# Commande 5 : Installer Twig (moteur de templates)
composer require symfony/twig-pack

# Commande 6 : Installer la sécurité
composer require symfony/security-bundle

# Commande 7 : Outils de développement (debug)
composer require --dev symfony/debug-bundle
composer require --dev symfony/maker-bundle
composer require --dev symfony/profiler-pack
```

**Explication de chaque commande :**
- `webapp` : Interface web complète
- `orm-pack` : Doctrine pour gérer la base de données
- `form` : Création de formulaires
- `validator` : Validation des données
- `twig-pack` : Templates HTML
- `security-bundle` : Sécurité de l'application
- `--dev` : Outils seulement pour le développement

**Temps estimé :** 5-10 minutes

### ⚙️ 1.3 Configuration de la base de données

**Explication :** Nous devons dire à Symfony comment se connecter à MySQL.

1. **Ouvrir le fichier .env**
   - Dans VS Code, ouvrez le fichier `.env` à la racine du projet
   - Ce fichier contient les configurations

2. **Modifier la ligne DATABASE_URL**
   ```env
   # Trouvez cette ligne dans .env :
   DATABASE_URL="mysql://root:@127.0.0.1:3306/patient?serverVersion=8.0.32&charset=utf8mb4"

   # Remplacez par :
   DATABASE_URL="mysql://root:@127.0.0.1:3306/patient?serverVersion=8.0.32&charset=utf8mb4"
   ```

3. **Explication des paramètres :**
   - `root` : nom d'utilisateur MySQL (par défaut dans XAMPP)
   - `127.0.0.1:3306` : adresse du serveur MySQL
   - `patient` : nom de la base de données (nous la créerons)
   - `serverVersion=8.0.32` : version de MySQL

4. **Générer une clé secrète**
   ```bash
   # Cette commande génère une clé secrète aléatoire
   php bin/console secrets:generate
   ```

### 🗄️ 1.4 Créer la base de données

**Explication :** Maintenant nous créons la base de données "patient" dans MySQL.

```bash
# Créer la base de données
php bin/console doctrine:database:create
```

**Vérification :**
- Ouvrez http://localhost/phpmyadmin
- Vous devriez voir une nouvelle base "patient" dans la liste

**Si vous avez une erreur :**
- Vérifiez que MySQL est démarré dans XAMPP
- Vérifiez la configuration dans .env

## 🏗️ Étape 2 : Création de l'Entité Patient

**Objectif :** Créer la structure de données pour stocker les informations des patients dans la base de données.

### 📋 2.1 Qu'est-ce qu'une entité ?

**Explication simple :**
- Une **entité** est une classe PHP qui représente une **table** dans la base de données
- Chaque propriété de la classe devient une **colonne** dans la table
- Symfony utilise Doctrine pour faire le lien entre PHP et MySQL

**Notre entité Patient aura :**
- `id` : Identifiant unique (généré automatiquement)
- `nom` : Nom complet du patient
- `maladie` : Maladie diagnostiquée
- `medecin` : Nom du médecin
- `dateVisite` : Date de la consultation

### 🛠️ 2.2 Générer l'entité avec le Maker Bundle

**Explication :** Au lieu d'écrire tout le code à la main, Symfony peut le générer automatiquement.

```bash
# Commande pour créer l'entité Patient
php bin/console make:entity Patient
```

**Maintenant, répondez aux questions interactives :**

1. **Nom de la classe de l'entité :**
   ```
   Patient
   ```
   *(Appuyez sur Entrée)*

2. **Pour chaque propriété, répondez :**

   **Première propriété - nom :**
   ```
   Nom de la propriété : nom
   Type de champ : string
   Longueur : 255
   Peut être null : no
   ```

   **Deuxième propriété - maladie :**
   ```
   Nom de la propriété : maladie
   Type de champ : string
   Longueur : 255
   Peut être null : no
   ```

   **Troisième propriété - medecin :**
   ```
   Nom de la propriété : medecin
   Type de champ : string
   Longueur : 255
   Peut être null : no
   ```

   **Quatrième propriété - dateVisite :**
   ```
   Nom de la propriété : dateVisite
   Type de champ : date_immutable
   Peut être null : no
   ```

3. **Terminer :**
   ```
   Terminé ! Appuyez sur Entrée pour quitter.
   ```

**Explication des choix :**
- `string` : Texte simple (nom, maladie, médecin)
- `date_immutable` : Date qui ne change pas (plus sûr que `date`)
- `255` : Longueur maximale du texte
- `no` : Le champ est obligatoire (ne peut pas être vide)

### 📄 2.3 Vérifier le code généré

**Ouvrez le fichier** `src/Entity/Patient.php` dans VS Code.

Le fichier devrait contenir exactement ceci :

```php
<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $maladie = null;

    #[ORM\Column(length: 255)]
    private ?string $medecin = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $dateVisite = null;

    // Getters et setters générés automatiquement
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getMaladie(): ?string
    {
        return $this->maladie;
    }

    public function setMaladie(string $maladie): static
    {
        $this->maladie = $maladie;
        return $this;
    }

    public function getMedecin(): ?string
    {
        return $this->medecin;
    }

    public function setMedecin(string $medecin): static
    {
        $this->medecin = $medecin;
        return $this;
    }

    public function getDateVisite(): ?\DateTimeImmutable
    {
        return $this->dateVisite;
    }

    public function setDateVisite(\DateTimeImmutable $dateVisite): static
    {
        $this->dateVisite = $dateVisite;
        return $this;
    }
}
```

## 🎮 Étape 3 : Création du Contrôleur Patient

**Objectif :** Créer la logique métier qui gère les actions des utilisateurs (afficher, créer, modifier, supprimer).

### 🧠 3.1 Qu'est-ce qu'un contrôleur ?

**Explication simple :**
- Un **contrôleur** est comme un chef d'orchestre
- Il reçoit les demandes des utilisateurs (clics sur les boutons)
- Il appelle les bonnes méthodes (logique métier)
- Il retourne les bonnes pages (templates)

**Notre contrôleur gérera :**
- `index()` : Afficher la liste des patients
- `new()` : Créer un nouveau patient
- `show()` : Afficher les détails d'un patient
- `edit()` : Modifier un patient
- `delete()` : Supprimer un patient

### 🛠️ 3.2 Générer le contrôleur CRUD

**Explication :** Générer automatiquement un contrôleur basique.

```bash
# Créer le contrôleur Patient avec les méthodes de base
php bin/console make:controller PatientController
```

**Répondez à la question :**
```
Nom du contrôleur (ex: BlogController) : PatientController
```

Symfony génère automatiquement un contrôleur basique avec une méthode `index()`.

### ✏️ 3.3 Modifier le contrôleur pour ajouter toutes les fonctionnalités CRUD

**Explication :** Nous allons remplacer le code généré par notre code complet.

**Ouvrez** `src/Controller/PatientController.php` et **remplacez tout le contenu** par :

```php
<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Form\PatientType;
use App\Repository\PatientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/patient')]
class PatientController extends AbstractController
{
    #[Route('/', name: 'app_patient_index', methods: ['GET'])]
    public function index(PatientRepository $patientRepository): Response
    {
        return $this->render('patient/index.html.twig', [
            'patients' => $patientRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_patient_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $patient = new Patient();
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($patient);
            $entityManager->flush();

            $this->addFlash('success', 'Le patient a été créé avec succès.');
            return $this->redirectToRoute('app_patient_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('patient/new.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_patient_show', methods: ['GET'])]
    public function show(Patient $patient): Response
    {
        return $this->render('patient/show.html.twig', [
            'patient' => $patient,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_patient_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PatientType::class, $patient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Le patient a été modifié avec succès.');
            return $this->redirectToRoute('app_patient_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('patient/edit.html.twig', [
            'patient' => $patient,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_patient_delete', methods: ['POST'])]
    public function delete(Request $request, Patient $patient, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($patient);
            $entityManager->flush();
            $this->addFlash('success', 'Le patient a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_patient_index', [], Response::HTTP_SEE_OTHER);
    }
}
```

## 📝 Étape 4 : Création du Formulaire Patient

**Objectif :** Créer des formulaires HTML pour saisir et modifier les données des patients.

### 📋 4.1 Qu'est-ce qu'un formulaire Symfony ?

**Explication simple :**
- Un **formulaire Symfony** génère automatiquement le HTML
- Il valide les données saisies par l'utilisateur
- Il transforme les données pour les sauvegarder en base

**Avantages :**
- ✅ Génération automatique du HTML
- ✅ Validation automatique des données
- ✅ Protection contre les attaques (CSRF)
- ✅ Gestion des erreurs

### 🛠️ 4.2 Générer la classe de formulaire

```bash
# Créer la classe de formulaire PatientType
php bin/console make:form PatientType
```

**Répondez aux questions :**
```
Nom de la classe du formulaire (ex: BlogType) : PatientType

Nom de l'entité liée (ex: Blog) : Patient
```

Symfony génère automatiquement une classe de formulaire basique.

### ✏️ 4.3 Modifier le formulaire généré

**Explication :** Personnaliser le formulaire avec nos champs et options.

**Ouvrez** `src/Form/PatientType.php` et **remplacez tout le contenu** par :

```php
<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\CallbackTransformer;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom complet du patient',
                'attr' => [
                    'placeholder' => 'Ex: Dupont Jean',
                    'class' => 'form-control'
                ]
            ])
            ->add('maladie', TextType::class, [
                'label' => 'Maladie diagnostiquée',
                'attr' => [
                    'placeholder' => 'Ex: Grippe, Hypertension',
                    'class' => 'form-control'
                ]
            ])
            ->add('medecin', TextType::class, [
                'label' => 'Médecin assigné',
                'attr' => [
                    'placeholder' => 'Ex: Dr. Martin',
                    'class' => 'form-control'
                ]
            ])
            ->add('dateVisite', DateType::class, [
                'label' => 'Date de visite',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;

        // Transformateur pour convertir DateTimeImmutable ↔ DateTime
        $builder->get('dateVisite')->addModelTransformer(new CallbackTransformer(
            function ($dateTimeImmutable) {
                // Conversion DateTimeImmutable → DateTime pour l'affichage du formulaire
                return $dateTimeImmutable ? \DateTime::createFromImmutable($dateTimeImmutable) : null;
            },
            function ($dateTime) {
                // Conversion DateTime → DateTimeImmutable pour l'entité
                return $dateTime ? \DateTimeImmutable::createFromMutable($dateTime) : null;
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
```

## 🎨 Étape 5 : Création des Templates Twig

### 5.1 Template de base (base.html.twig)

Créez/modifiez le fichier `templates/base.html.twig` :

```twig
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{% block title %}Système de Gestion des Patients{% endblock %}</title>
        <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'><text y='1em' font-size='96'>🏥</text></svg>">
        {# Bootstrap CSS #}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        {# Font Awesome #}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="{{ path('app_default') }}">
                    <i class="fas fa-hospital me-2"></i>Système Médical
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ path('app_default') }}">
                                <i class="fas fa-home me-1"></i>Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ path('app_patient_index') }}">
                                <i class="fas fa-users me-1"></i>Patients
                            </a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="{{ path('app_patient_new') }}" class="btn btn-light">
                            <i class="fas fa-plus me-1"></i>Ajouter Patient
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-shrink-0">
            {% block body %}{% endblock %}
        </main>

        <footer class="footer mt-auto py-3 bg-light">
            <div class="container text-center">
                <span class="text-muted">© 2024 Système de Gestion des Patients - Atelier 3</span>
            </div>
        </footer>

        {# Bootstrap JS #}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
```

### 5.2 Template d'accueil (templates/default/index.html.twig)

Créez le fichier `templates/default/index.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Accueil - Système Médical{% endblock %}

{% block body %}
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="text-center mb-5">
                <h1 class="display-4 text-primary">
                    <i class="fas fa-hospital me-3"></i>
                    Système de Gestion des Patients
                </h1>
                <p class="lead text-muted">
                    Bienvenue dans votre système de gestion médicale complet
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Gestion des Patients</h5>
                            <p class="card-text">
                                Ajoutez, consultez, modifiez et supprimez les informations des patients.
                            </p>
                            <a href="{{ path('app_patient_index') }}" class="btn btn-primary">
                                <i class="fas fa-list me-2"></i>Voir les Patients
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="fas fa-user-plus fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Nouveau Patient</h5>
                            <p class="card-text">
                                Enregistrez un nouveau patient dans le système médical.
                            </p>
                            <a href="{{ path('app_patient_new') }}" class="btn btn-success">
                                <i class="fas fa-plus me-2"></i>Ajouter un Patient
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-header bg-light">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>À propos de ce système
                    </h5>
                </div>
                <div class="card-body">
                    <p class="mb-3">
                        Ce système de gestion des patients a été créé dans le cadre de l'Atelier 3 du cours de développement web.
                        Il utilise le framework Symfony 6 et implémente toutes les opérations CRUD (Créer, Lire, Mettre à jour, Supprimer).
                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <h6><i class="fas fa-code me-2"></i>Technologies</h6>
                            <ul class="list-unstyled">
                                <li>• Symfony 6</li>
                                <li>• Doctrine ORM</li>
                                <li>• Twig Templates</li>
                                <li>• Bootstrap 5</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6><i class="fas fa-database me-2"></i>Base de données</h6>
                            <ul class="list-unstyled">
                                <li>• MySQL</li>
                                <li>• Migrations Doctrine</li>
                                <li>• Entités & Repositories</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6><i class="fas fa-tools me-2"></i>Fonctionnalités</h6>
                            <ul class="list-unstyled">
                                <li>• CRUD complet</li>
                                <li>• Validation de formulaires</li>
                                <li>• Interface responsive</li>
                                <li>• Messages flash</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
```

### 5.3 Template de liste des patients (templates/patient/index.html.twig)

Créez le fichier `templates/patient/index.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Liste des Patients{% endblock %}

{% block body %}
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1><i class="fas fa-users me-2"></i>Liste des Patients</h1>
            <a href="{{ path('app_patient_new') }}" class="btn btn-primary">
                <i class="fas fa-plus me-2"></i>Ajouter un Patient
            </a>
        </div>

        {% for message in app.flashes('success') %}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        {% endfor %}

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Maladie</th>
                                <th>Médecin</th>
                                <th>Date de visite</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for patient in patients %}
                            <tr>
                                <td>{{ patient.id }}</td>
                                <td><strong>{{ patient.nom }}</strong></td>
                                <td>
                                    <span class="badge bg-danger">{{ patient.maladie }}</span>
                                </td>
                                <td>
                                    <span class="badge bg-info">{{ patient.medecin }}</span>
                                </td>
                                <td>{{ patient.dateVisite ? patient.dateVisite|date('d/m/Y') : '' }}</td>
                                <td>
                                    <a href="{{ path('app_patient_show', {'id': patient.id}) }}"
                                       class="btn btn-sm btn-info me-2"
                                       title="Voir les détails">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ path('app_patient_edit', {'id': patient.id}) }}"
                                       class="btn btn-sm btn-warning me-2"
                                       title="Modifier">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    {{ include('patient/_delete_form.html.twig') }}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    <i class="fas fa-info-circle me-2"></i>Aucun patient trouvé
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
```

### 5.4 Template de détails du patient (templates/patient/show.html.twig)

Créez le fichier `templates/patient/show.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Détails du Patient{% endblock %}

{% block body %}
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ path('app_patient_index') }}">Patients</a>
                </li>
                <li class="breadcrumb-item active">{{ patient.nom }}</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header bg-info text-white">
                        <h2 class="card-title mb-0">
                            <i class="fas fa-user me-2"></i>Détails du Patient
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-primary">Informations Personnelles</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-muted">ID :</th>
                                        <td>{{ patient.id }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Nom complet :</th>
                                        <td><strong>{{ patient.nom }}</strong></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary">Informations Médicales</h5>
                                <table class="table table-borderless">
                                    <tr>
                                        <th class="text-muted">Maladie :</th>
                                        <td>
                                            <span class="badge bg-danger fs-6">{{ patient.maladie }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Médecin assigné :</th>
                                        <td>
                                            <span class="badge bg-info fs-6">{{ patient.medecin }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-muted">Date de visite :</th>
                                        <td>{{ patient.dateVisite ? patient.dateVisite|date('d/m/Y') : 'Non spécifiée' }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ path('app_patient_edit', {'id': patient.id}) }}" class="btn btn-warning">
                            <i class="fas fa-edit me-2"></i>Modifier
                        </a>
                        <a href="{{ path('app_patient_index') }}" class="btn btn-secondary ms-2">
                            <i class="fas fa-arrow-left me-2"></i>Retour à la liste
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
```

### 5.5 Template de création (templates/patient/new.html.twig)

Créez le fichier `templates/patient/new.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Nouveau Patient{% endblock %}

{% block body %}
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ path('app_patient_index') }}">Patients</a>
                </li>
                <li class="breadcrumb-item active">Nouveau</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h2 class="card-title mb-0">
                            <i class="fas fa-user-plus me-2"></i>Ajouter un Nouveau Patient
                        </h2>
                    </div>
                    <div class="card-body">
                        {{ include('patient/_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
```

### 5.6 Template de modification (templates/patient/edit.html.twig)

Créez le fichier `templates/patient/edit.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Modifier le Patient{% endblock %}

{% block body %}
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ path('app_patient_index') }}">Patients</a>
                </li>
                <li class="breadcrumb-item active">Modifier {{ patient.nom }}</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h2 class="card-title mb-0">
                            <i class="fas fa-user-edit me-2"></i>Modifier les Informations
                        </h2>
                    </div>
                    <div class="card-body">
                        {{ include('patient/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
                    </div>
                </div>

                <div class="card mt-4 border-danger">
                    <div class="card-header bg-danger text-white">
                        <h5 class="card-title mb-0">
                            <i class="fas fa-exclamation-triangle me-2"></i>Zone de Danger
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-danger mb-3">
                            <strong>Attention :</strong> La suppression d'un patient est définitive.
                        </p>
                        {{ include('patient/_delete_form.html.twig') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
```

### 5.7 Template de formulaire réutilisable (templates/patient/_form.html.twig)

Créez le fichier `templates/patient/_form.html.twig` :

```twig
{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">
                <i class="fas fa-user me-2"></i>Informations du Patient
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        {{ form_label(form.nom, 'Nom complet', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.nom, {'attr': {'class': 'form-control' ~ (form.nom.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {{ form_errors(form.nom) }}
                        <div class="form-text">Nom et prénom du patient</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        {{ form_label(form.maladie, 'Maladie', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.maladie, {'attr': {'class': 'form-control' ~ (form.maladie.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {{ form_errors(form.maladie) }}
                        <div class="form-text">Maladie diagnostiquée</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        {{ form_label(form.medecin, 'Médecin assigné', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.medecin, {'attr': {'class': 'form-control' ~ (form.medecin.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {{ form_errors(form.medecin) }}
                        <div class="form-text">Nom du médecin traitant</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        {{ form_label(form.dateVisite, 'Date de visite', {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_widget(form.dateVisite, {'attr': {'class': 'form-control' ~ (form.dateVisite.vars.errors|length > 0 ? ' is-invalid' : '')}}) }}
                        {{ form_errors(form.dateVisite) }}
                        <div class="form-text">Date de la consultation</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save me-2"></i>{{ button_label|default('Enregistrer') }}
            </button>
            <a href="{{ path('app_patient_index') }}" class="btn btn-secondary ms-2">
                <i class="fas fa-arrow-left me-2"></i>Retour à la liste
            </a>
        </div>
    </div>
{{ form_end(form) }}
```

### 5.8 Template de formulaire de suppression (templates/patient/_delete_form.html.twig)

Créez le fichier `templates/patient/_delete_form.html.twig` :

```twig
<form method="post" action="{{ path('app_patient_delete', {'id': patient.id}) }}"
      onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce patient ?');"
      style="display: inline;">
    <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ patient.id) }}">
    <button type="submit" class="btn btn-danger btn-sm" title="Supprimer">
        <i class="fas fa-trash me-1"></i>Supprimer
    </button>
</form>
```

## 🗄️ Étape 6 : Migration de Base de Données

### 6.1 Générer et exécuter la migration

```bash
# Générer la migration basée sur l'entité
php bin/console make:migration

# Appliquer la migration à la base de données
php bin/console doctrine:migrations:migrate --no-interaction
```

### 6.2 Vérifier la structure de la base de données

```bash
# Vérifier le statut des migrations
php bin/console doctrine:migrations:status

# Valider le schéma de la base de données
php bin/console doctrine:schema:validate
```

## 🚀 Étape 7 : Lancement et Test Complet de l'Application

**Objectif :** Démarrer l'application et tester toutes les fonctionnalités une par une.

### 🖥️ 7.1 Démarrer le serveur Symfony

**Méthode recommandée (avec Symfony CLI) :**
```bash
# Vider le cache d'abord (important !)
php bin/console cache:clear

# Démarrer le serveur
symfony server:start
```

**Adresse :** http://127.0.0.1:8002/

**Méthode alternative (sans Symfony CLI) :**
```bash
# Démarrer le serveur PHP intégré
php -S 127.0.0.1:8000 -t public/
```

**Adresse :** http://127.0.0.1:8000/

### 🌐 7.2 Accéder à l'application

1. **Ouvrez votre navigateur** (Chrome, Firefox, Edge)
2. **Tapez l'adresse** dans la barre d'adresse
3. **Vous devriez voir** la page d'accueil avec le titre "Système de Gestion des Patients"

### 🧪 7.3 Test détaillé de chaque fonctionnalité

**Suivez ces étapes dans l'ordre :**

#### ✅ Test 1 : Page d'accueil
1. **Action :** Allez à l'adresse principale
2. **Résultat attendu :**
   - Titre : "Système de Gestion des Patients"
   - Menu de navigation en haut
   - Deux boutons : "Gestion des Patients" et "Nouveau Patient"
   - Description du système
3. **Vérification :** La page se charge sans erreur

#### ✅ Test 2 : Liste des patients (vide au début)
1. **Action :** Cliquez sur "Patients" dans le menu OU "Voir les Patients"
2. **Résultat attendu :**
   - Titre : "Liste des Patients"
   - Tableau avec colonnes : ID, Nom, Maladie, Médecin, Date de visite, Actions
   - Message : "Aucun patient trouvé"
   - Bouton "Ajouter un Patient"
3. **Vérification :** Le tableau est vide, pas d'erreur

#### ✅ Test 3 : Ajouter un premier patient
1. **Action :** Cliquez sur "Ajouter un Patient"
2. **Remplissez le formulaire :**
   - Nom : `Dupont Jean`
   - Maladie : `Grippe`
   - Médecin : `Dr. Martin`
   - Date de visite : `2024-01-15` (utilisez le calendrier)
3. **Action :** Cliquez sur "Enregistrer"
4. **Résultat attendu :**
   - Message vert : "Le patient a été créé avec succès."
   - Redirection vers la liste des patients
   - Le patient apparaît dans le tableau

#### ✅ Test 4 : Voir les détails du patient
1. **Action :** Dans la liste, cliquez sur l'icône œil (👁️)
2. **Résultat attendu :**
   - Page "Détails du Patient"
   - Fil d'Ariane : Accueil > Patients > Dupont Jean
   - Informations organisées en deux colonnes
   - Boutons "Modifier" et "Retour à la liste"

#### ✅ Test 5 : Modifier le patient
1. **Action :** Cliquez sur "Modifier" OU icône crayon (✏️) dans la liste
2. **Modifiez :**
   - Maladie : `Grippe → Angine`
3. **Action :** Cliquez sur "Mettre à jour"
4. **Résultat attendu :**
   - Message : "Le patient a été modifié avec succès."
   - La maladie est changée en "Angine"

#### ✅ Test 6 : Ajouter un deuxième patient
1. **Action :** Ajoutez un nouveau patient
   - Nom : `Marie Curie`
   - Maladie : `Hypertension`
   - Médecin : `Dr. Dubois`
   - Date : `2024-01-20`
2. **Vérification :** Deux patients dans la liste

#### ✅ Test 7 : Supprimer un patient
1. **Action :** Cliquez sur l'icône poubelle (🗑️) de Dupont Jean
2. **Confirmez :** Cliquez "OK" dans la popup
3. **Résultat attendu :**
   - Message : "Le patient a été supprimé avec succès."
   - Dupont Jean disparaît de la liste
   - Marie Curie reste

#### ✅ Test 8 : Validation des formulaires
1. **Action :** Essayez d'ajouter un patient avec des champs vides
2. **Résultat attendu :**
   - Messages d'erreur en rouge
   - Formulaire ne s'envoie pas

#### ✅ Test 9 : Navigation complète
1. **Testez tous les liens :**
   - Menu "Accueil" → retourne à l'accueil
   - Menu "Patients" → liste des patients
   - Boutons "Retour à la liste" → liste
   - Fil d'Ariane → navigation

### 📊 7.4 Vérifications techniques

**Après les tests, vérifiez :**

```bash
# 1. Vérifier que la base de données contient bien les données
# Ouvrez http://localhost/phpmyadmin
# Sélectionnez base "patient"
# Cliquez sur table "patient"
# Vous devriez voir Marie Curie

# 2. Vérifier les logs (pas d'erreur)
# Vérifiez var/log/dev.log

# 3. Tester les commandes Symfony
php bin/console debug:router
php bin/console doctrine:schema:validate
```

### 🎯 7.5 Scénarios de test avancés

**Testez ces cas particuliers :**

1. **Dates :** Essayez différentes dates (passées, futures)
2. **Texte long :** Noms très longs, maladies complexes
3. **Caractères spéciaux :** Accents, apostrophes
4. **Navigateur :** Testez sur Chrome, Firefox, Edge
5. **Responsive :** Redimensionnez la fenêtre

### ✅ Checklist finale

- [ ] Page d'accueil s'affiche
- [ ] Navigation fonctionne
- [ ] Formulaire d'ajout fonctionne
- [ ] Liste des patients s'affiche
- [ ] Détails d'un patient fonctionnent
- [ ] Modification fonctionne
- [ ] Suppression fonctionne
- [ ] Validation des formulaires
- [ ] Messages de succès
- [ ] Base de données contient les données
- [ ] Pas d'erreur dans les logs
- [ ] Interface responsive

**Si tout est coché : Félicitations ! Votre application fonctionne parfaitement !** 🎉

## 🔧 Commandes Utiles pour le Développement

```bash
# Créer une nouvelle entité
php bin/console make:entity

# Créer un contrôleur
php bin/console make:controller

# Créer un formulaire
php bin/console make:form

# Générer une migration
php bin/console make:migration

# Appliquer les migrations
php bin/console doctrine:migrations:migrate

# Vider le cache
php bin/console cache:clear

# Vérifier les routes
php bin/console debug:router

# Valider le schéma de la base de données
php bin/console doctrine:schema:validate

# Créer des données de test (fixtures)
php bin/console make:fixtures
php bin/console doctrine:fixtures:load
```

## 📖 Glossaire pour Débutants

**Avant de continuer, voici quelques termes importants :**

### 🏗️ Architecture MVC
- **Modèle (Model)** : Les données (entités, base de données) → `src/Entity/`
- **Vue (View)** : L'affichage (templates HTML) → `templates/`
- **Contrôleur (Controller)** : La logique métier → `src/Controller/`

### 🔧 Concepts Clés
- **CRUD** : Create, Read, Update, Delete (Créer, Lire, Modifier, Supprimer)
- **ORM** : Object-Relational Mapping (Doctrine transforme PHP ↔ MySQL)
- **Migration** : Script qui modifie la structure de la base de données
- **Route** : URL qui pointe vers une méthode du contrôleur
- **Template** : Fichier HTML avec du Twig (moteur de templates)
- **Formulaire** : Classe qui génère et valide les formulaires HTML

### 📦 Bundles Symfony
- **Maker Bundle** : Génère automatiquement du code
- **Twig Bundle** : Moteur de templates
- **Form Bundle** : Gestion des formulaires
- **Doctrine Bundle** : Gestion de la base de données

## 🐛 Dépannage Complet

### Problèmes courants et solutions détaillées

#### 1. ❌ Erreur "Connection refused" ou "Unknown database"
**Symptômes :**
- "An exception occurred in driver: SQLSTATE[HY000] [2002] Connection refused"
- "Base patient does not exist"

**Solutions étape par étape :**
1. **Vérifiez XAMPP :**
   - Ouvrez le panneau de contrôle XAMPP
   - Vérifiez que MySQL est en vert (Started)
   - Si rouge, cliquez sur "Start" pour MySQL

2. **Vérifiez la configuration .env :**
   ```env
   DATABASE_URL="mysql://root:@127.0.0.1:3306/patient?serverVersion=8.0.32&charset=utf8mb4"
   ```

3. **Créez la base manuellement :**
   - Ouvrez http://localhost/phpmyadmin
   - Cliquez sur "Nouvelle base de données"
   - Nom : `patient`
   - Interclassement : `utf8mb4_general_ci`

4. **Testez la connexion :**
   ```bash
   php bin/console doctrine:database:create
   ```

#### 2. ❌ Erreur "Template not found"
**Symptômes :**
- "Unable to find template"
- Page blanche ou erreur 500

**Solutions :**
1. **Vérifiez le nom du fichier :**
   - `templates/patient/index.html.twig` (pas `index.twig`)
   - Respectez la casse (majuscules/minuscules)

2. **Vérifiez le chemin dans le contrôleur :**
   ```php
   return $this->render('patient/index.html.twig', [
       'patients' => $patientRepository->findAll(),
   ]);
   ```

3. **Vérifiez que le dossier existe :**
   - `templates/patient/` doit exister
   - Tous les fichiers `.twig` doivent être présents

#### 3. ❌ Erreur "Unable to generate a URL for the named route"
**Symptômes :**
- Liens qui ne marchent pas
- "route app_patient_index not found"

**Solutions :**
1. **Vérifiez les routes :**
   ```bash
   php bin/console debug:router
   ```

2. **Vérifiez les annotations dans le contrôleur :**
   ```php
   #[Route('/patient', name: 'app_patient_index', methods: ['GET'])]
   ```

3. **Vérifiez les appels dans les templates :**
   ```twig
   {{ path('app_patient_index') }}
   ```

#### 4. ❌ Erreur de formulaire ou validation
**Symptômes :**
- Champs qui ne s'affichent pas
- Erreurs de validation inattendues

**Solutions :**
1. **Vérifiez PatientType.php :**
   - Tous les champs correspondent à l'entité
   - Les types sont corrects (`TextType`, `DateType`)

2. **Vérifiez le template de formulaire :**
   - `{{ form_start(form) }}` et `{{ form_end(form) }}`
   - Tous les champs sont affichés avec `{{ form_widget() }}`

3. **Testez la validation :**
   - Laissez des champs vides
   - Vérifiez les messages d'erreur

#### 5. ❌ Problème de cache
**Symptômes :**
- Modifications qui ne s'appliquent pas
- Erreurs qui persistent

**Solutions :**
```bash
# Vider tout le cache
php bin/console cache:clear

# En développement, vous pouvez aussi supprimer le dossier var/cache/
# Mais attention en production !
```

#### 6. ❌ Erreur "Class not found"
**Symptômes :**
- "Class App\Entity\Patient not found"

**Solutions :**
1. **Vérifiez les namespaces :**
   ```php
   namespace App\Entity;
   ```

2. **Vérifiez les imports :**
   ```php
   use App\Entity\Patient;
   ```

3. **Rechargez l'autoloader :**
   ```bash
   composer dump-autoload
   ```

#### 7. ❌ Erreur CSRF ou sécurité
**Symptômes :**
- "Invalid CSRF token"
- Suppression qui ne marche pas

**Solutions :**
1. **Vérifiez le token dans le template :**
   ```twig
   <input type="hidden" name="_token" value="{{ csrf_token('delete' ~ patient.id) }}">
   ```

2. **Vérifiez la validation dans le contrôleur :**
   ```php
   if ($this->isCsrfTokenValid('delete'.$patient->getId(), $request->getPayload()->getString('_token')))
   ```

### 🔍 Commandes de diagnostic

```bash
# Vérifier les routes
php bin/console debug:router

# Vérifier les services
php bin/console debug:container

# Vérifier la base de données
php bin/console doctrine:schema:validate

# Lister les entités
php bin/console debug:entity

# Vérifier les formulaires
php bin/console debug:form PatientType
```

### 💡 Conseils généraux de dépannage

1. **Toujours vérifier les logs :**
   - `var/log/dev.log` pour les erreurs de développement
   - `var/log/prod.log` pour la production

2. **Mode debug activé :**
   - En développement, Symfony affiche les erreurs détaillées
   - Vérifiez `APP_ENV=dev` dans `.env`

3. **Recommencer depuis zéro si nécessaire :**
   ```bash
   # Supprimer la base et recommencer
   php bin/console doctrine:database:drop --force
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate --no-interaction
   ```

4. **Chercher sur Google :**
   - Copiez le message d'erreur exact
   - Ajoutez "Symfony" au début
   - Exemple : "Symfony Unable to find template"

## 📚 Structure Finale du Projet

Votre projet devrait avoir cette structure :

```
c:/xampp/htdocs/ExamPHP/
├── bin/
│   └── console
├── config/
│   ├── bundles.php
│   ├── packages/
│   ├── routes.yaml
│   └── services.yaml
├── migrations/
│   └── Version20240102000000.php
├── public/
│   └── index.php
├── src/
│   ├── Controller/
│   │   ├── DefaultController.php
│   │   └── PatientController.php
│   ├── Entity/
│   │   └── Patient.php
│   ├── Form/
│   │   └── PatientType.php
│   ├── Repository/
│   │   └── PatientRepository.php
│   └── Kernel.php
├── templates/
│   ├── base.html.twig
│   ├── default/
│   │   └── index.html.twig
│   └── patient/
│       ├── index.html.twig
│       ├── show.html.twig
│       ├── new.html.twig
│       ├── edit.html.twig
│       ├── _form.html.twig
│       └── _delete_form.html.twig
├── var/
│   ├── cache/
│   └── log/
├── vendor/
├── composer.json
├── composer.lock
├── symfony.lock
└── .env
```

## 🎯 Fonctionnalités Implémentées

✅ **CRUD complet** : Créer, Lire, Mettre à jour, Supprimer des patients
✅ **Interface moderne** : Bootstrap 5 avec design responsive
✅ **Validation de formulaires** : Contrôle des données saisies
✅ **Messages flash** : Notifications de succès/erreur
✅ **Navigation intuitive** : Breadcrumbs et boutons d'action
✅ **Gestion d'erreurs** : Exceptions et messages appropriés
✅ **Sécurité** : Protection CSRF et validation côté serveur

## 🚀 Prochaines Étapes

Maintenant que vous maîtrisez les bases, vous pouvez :

1. **Ajouter des relations** : Lier patients et médecins
2. **Implémenter l'authentification** : Système de login
3. **Ajouter des rôles** : Administrateur, médecin, secrétaire
4. **Créer des rapports** : Statistiques et exports
5. **Ajouter des tests** : Tests unitaires et fonctionnels

---

## ✅ CHECKLIST FINAL - Avant de commencer le développement

**Cochez chaque case au fur et à mesure :**

### 🔧 Installation matérielle/logicielle
- [ ] Windows 10/11 (ou 7/8 avec compatibilité)
- [ ] Au moins 4 Go RAM
- [ ] 5 Go d'espace disque libre
- [ ] Connexion internet stable
- [ ] Droits administrateur

### 📦 XAMPP
- [ ] Téléchargé depuis apachefriends.org
- [ ] Installé dans C:\xampp\
- [ ] Apache démarre (port 80)
- [ ] MySQL démarre (port 3306)
- [ ] http://localhost/ fonctionne
- [ ] http://localhost/phpmyadmin/ fonctionne

### 🐘 PHP
- [ ] Commande `php --version` fonctionne
- [ ] Version 8.1 ou supérieure
- [ ] PHP ajouté au PATH système

### 📦 Composer
- [ ] Téléchargé depuis getcomposer.org
- [ ] Installé avec "Add to PATH"
- [ ] Commande `composer --version` fonctionne
- [ ] Version 2.x

### 🛠️ Symfony CLI (optionnel)
- [ ] Téléchargé depuis symfony.com/download
- [ ] Commande `symfony --version` fonctionne

### 🌐 Navigateur et éditeur
- [ ] Navigateur moderne (Chrome/Firefox/Edge)
- [ ] Éditeur de texte (VS Code recommandé)

### 🔍 Tests préliminaires
- [ ] Antivirus temporairement désactivé
- [ ] Pare-feu Windows configuré
- [ ] Aucun proxy bloquant
- [ ] Tous les anciens logiciels PHP supprimés

**Si TOUTES les cases sont cochées : Vous êtes prêt !** 🚀

**Si certaines cases ne sont pas cochées :**
1. Revenez à la section correspondante
2. Relisez les instructions
3. Vérifiez les solutions de dépannage
4. Demandez de l'aide si nécessaire

---

## 🎯 RÉSUMÉ DE CE QUE VOUS ALLEZ APPRENDRE

Après avoir suivi ce guide, vous saurez :

### 🏗️ Architecture Web
- Comment créer des applications web dynamiques
- La différence entre frontend (HTML/CSS/JS) et backend (PHP)
- Comment un serveur web fonctionne

### 💾 Bases de Données
- Créer et gérer des bases de données MySQL
- Faire des requêtes SQL automatiquement
- Sauvegarder et récupérer des données

### 🐘 Programmation PHP
- Les bases du langage PHP
- Utiliser des frameworks (Symfony)
- Créer des classes et objets

### 🎨 Interface Utilisateur
- Créer des formulaires HTML
- Utiliser Bootstrap pour le design
- Gérer les interactions utilisateur

### 🔒 Sécurité Web
- Protéger contre les attaques CSRF
- Valider les données utilisateur
- Bonnes pratiques de sécurité

---

## 💪 MOTIVATION POUR LES DÉBUTANTS

**Si vous êtes débutant absolu :**

1. **C'est normal d'être perdu au début** - Tout le monde l'est !
2. **Suivez UNE étape à la fois** - Ne regardez pas tout d'un coup
3. **Testez chaque commande immédiatement** - Ne continuez que si ça marche
4. **Les erreurs sont normales** - Elles vous apprennent à déboguer
5. **Demandez de l'aide** - La communauté PHP est très accueillante

**Rappelez-vous :** Même les plus grands développeurs ont commencé comme vous !

---

## 🚀 PRÊT À COMMENCER ?

**Maintenant que tout est installé, allez à l'Étape 1 !**

**Félicitations !** 🎉 Vous avez créé avec succès un système complet de gestion des patients en Symfony 6. Ce projet démontre toutes les compétences essentielles du développement web moderne.

**Et le plus important : Vous avez appris à créer des applications web from scratch !** 💪
>>>>>>> master
