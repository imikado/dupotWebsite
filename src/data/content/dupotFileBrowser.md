## Dupot File browser
<figure class="project-media">
<img src="/images/promo/apps/dupotFileBrowser/promo.gif?v=20261023" alt="Dupot File browser en action : navigation en colonnes, vues grille et détails, onglets" />
</figure>

La plupart des gestionnaires de fichiers veulent tout faire. Dupot File browser se concentre sur ce que vous faites chaque jour&nbsp;: **trouver, ouvrir et ranger vos fichiers**, dans une interface épurée façon GNOME qui s'intègre à n'importe quel bureau Linux moderne.

- ⚡ **Simple et léger**&nbsp;: un seul binaire Rust en GTK 4 / Libadwaita
- 🗂️ **Navigation en colonnes** inspirée de macOS&nbsp;: chaque dossier ouvert s'affiche à côté du précédent, pour ne jamais perdre le fil de l'arborescence
- 🌍 Disponible en français, anglais et italien

### Navigation

- **Trois modes d'affichage**&nbsp;: **colonnes** (par défaut), **grille** avec curseur de taille des icônes (idéal pour parcourir vos photos) et **détails**
- **Onglets** pour ouvrir plusieurs dossiers côte à côte (Ctrl+T / Ctrl+W)
- **Chemin éditable**&nbsp;: tapez l'emplacement voulu et validez avec Entrée
- **Barre latérale** avec Dossier personnel, Corbeille, vos favoris et des raccourcis vers `/etc` et `/usr` de l'hôte (pratique depuis le bac à sable Flatpak)&nbsp;; elle se replie sur les fenêtres étroites
- **Ouvrir un dossier depuis la ligne de commande**&nbsp;: `dupot-file-browser ~/Projets` (réutilise la fenêtre ouverte)
- Ouverture en **simple clic** et affichage des **fichiers cachés** en option

### Opérations sur les fichiers

- Copier, couper / déplacer, coller, renommer et **mettre à la corbeille**
- **Page Corbeille**&nbsp;: restaurez ou supprimez définitivement, videz la corbeille
- Une notification confirme chaque copie, déplacement, compression ou extraction terminé
- **Compresser** fichiers et dossiers en `.zip`, `.tar`, `.tar.gz`, `.tar.bz2`, `.tar.xz`
- **Extraire** les archives, y compris les `.rar`
- **Ouvrir avec…** n'importe quelle application, et choisir l'application par défaut d'un type de fichier
- **Ouvrir un terminal ici** et **copier le chemin** depuis le menu contextuel

### Organisation

- **Couleurs**&nbsp;: marquez vos dossiers importants pour les repérer instantanément
- **Ajoutez des dossiers aux favoris** de la barre latérale
- **Propriétés**&nbsp;: taille (calculée pour les dossiers), type, dates, propriétaire et **permissions** modifiables
- **Définir une image comme fond d'écran** directement depuis ses propriétés

### Apparence

- Thème clair, sombre ou celui du système
- Icônes de fichiers intégrées ou **thème d'icônes du système**
- **Raccourcis clavier**&nbsp;: Ctrl+1 / 2 / 3 pour changer de vue, Ctrl+L pour éditer le chemin, Alt+↑ pour le dossier parent, F9 pour la barre latérale, Ctrl+, pour les paramètres
- Taille de la fenêtre, mode d'affichage et préférences sont mémorisés

Gratuit et open source (licence LGPL-2.1), écrit en Rust avec une architecture propre et testée.

### Screenshots

![Dossier personnel](/images/screenshots/apps/dupotFileBrowser/homepage.png?v=20261023)
![Navigation en colonnes](/images/screenshots/apps/dupotFileBrowser/columns_navigation.png?v=20261023)
![Vue grille avec miniatures des images](/images/screenshots/apps/dupotFileBrowser/display_mode_icons.png?v=20261023)
![Vue détails](/images/screenshots/apps/dupotFileBrowser/display_mode_details.png?v=20261023)
![Thème sombre](/images/screenshots/apps/dupotFileBrowser/display_mode_list.png?v=20261023)
![Chemin éditable](/images/screenshots/apps/dupotFileBrowser/path_editable.png?v=20261023)
![Menu contextuel d'un dossier](/images/screenshots/apps/dupotFileBrowser/folder_menu.png?v=20261023)
![Marquer un dossier d'une couleur](/images/screenshots/apps/dupotFileBrowser/add_color.png?v=20261023)
![Propriétés d'un fichier](/images/screenshots/apps/dupotFileBrowser/file_properties.png?v=20261023)
![Paramètres](/images/screenshots/apps/dupotFileBrowser/parameters.png?v=20261023)
