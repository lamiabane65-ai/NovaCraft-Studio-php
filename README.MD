🚀 NovaCraft Studio – Projet PHP + Tailwind

Ce projet est une mini-application web en PHP utilisant un système de routage simple, des templates réutilisables (header/footer/layout), et des pages dynamiques. Le style est géré avec TailwindCSS.

📁 Structure du projet
/
│── index.php
│── README.md
│── controllers/
│── templates/
│   │── header.php
│   │── footer.php
│   │── layout.php
│── views/
│   │── home.php
│   │── about.php
│   │── services.php
│   │── contact.php
│   │── 404.php
│── assets/
│   │── css/
│   │── js/

🧠 Fonctionnement du routage

Le fichier index.php récupère la fin de l’URL :

?page=services


Puis charge automatiquement la page correspondante :

home → views/home.php

services → views/services.php

about → views/about.php

contact → views/contact.php

sinon → views/404.php

Le routage utilise :

$page = $_GET['page'] ?? 'home';

🖥️ Templates réutilisables

Toutes les pages utilisent automatiquement :

header.php

footer.php

layout.php

Cela évite de répéter le même code HTML dans chaque page.

🎨 TailwindCSS

Tailwind est utilisé pour gérer le style du site.
Il suffit d’inclure le CDN dans header.php :



📄 Pages du projet
✔️ Home

Présentation du site + bouton vers services.

✔️ Services

Affichage dynamique depuis :

un tableau PHP
OU

un fichier JSON

✔️ About

Présentation de l’entreprise.

✔️ Contact

Formulaire avec :

nom, email, message

validation PHP (champs vides + email valide)

affichage des erreurs

message de succès si tout est correct

(Aucun email n’est envoyé — simulation seulement)

✔️ 404

Page affichée si ?page= n’existe pas.