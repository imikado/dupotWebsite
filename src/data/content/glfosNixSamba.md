## GLF OS Nix Samba
Sous [GLF OS](https://github.com/Gaming-Linux-FR/GLF-OS), la distribution GNU/Linux basée sur NixOS, toute la configuration du système passe par des fichiers Nix. Nix Samba vous permet de gérer vos partages Samba **sans éditer ces fichiers à la main**.

- 🌐 **Partages distants (client CIFS)**&nbsp;: montez les partages d'un NAS ou d'un autre ordinateur
  - listez, ajoutez, modifiez et supprimez les points de montage
  - fichier d'identifiants, UID/GID, montage automatique systemd et délais d'attente
  - favori dans le gestionnaire de fichiers (GTK ou KDE) et raccourci sur le bureau en option
- 🔑 **Fichier d'identifiants**&nbsp;: créez un fichier d'identifiants Samba protégé (`chmod 600`)
- 📁 **Partages locaux (serveur Samba)**&nbsp;: partagez un dossier sur votre réseau
  - accès public (invité) ou réservé à certains utilisateurs
  - lecture seule ou lecture / écriture
- 💾 **Enregistrer et reconstruire**&nbsp;: l'application écrit la configuration NixOS et lance `nixos-rebuild switch` dans un terminal
- ✅ **Vérification de la configuration**&nbsp;: détecte les imports manquants dans `/etc/nixos/customConfig/default.nix` et propose de les corriger
- 🌍 Disponible en français et en anglais

Vos modifications restent en mémoire jusqu'au clic sur **Enregistrer sur le disque**, et l'application demande confirmation si vous fermez la fenêtre sans avoir enregistré.

Écrit en Python avec GTK 4 et Libadwaita, il est livré avec GLF OS.

### Screenshots

![Accueil](/images/screenshots/apps/glfosNixSamba/01-home.png?v=20261025)
![Liste des partages distants](/images/screenshots/apps/glfosNixSamba/02-remote-list.png?v=20261025)
![Modifier un partage distant](/images/screenshots/apps/glfosNixSamba/03-remote-edit.png?v=20261025)
![Ajouter un partage distant](/images/screenshots/apps/glfosNixSamba/04-remote-add.png?v=20261025)
![Créer un fichier d'identifiants](/images/screenshots/apps/glfosNixSamba/05-credentials.png?v=20261025)
![Liste des partages locaux](/images/screenshots/apps/glfosNixSamba/06-local-list.png?v=20261025)
![Modifier un partage local](/images/screenshots/apps/glfosNixSamba/07-local-edit.png?v=20261025)
![Ajouter un partage local](/images/screenshots/apps/glfosNixSamba/08-local-add.png?v=20261025)
