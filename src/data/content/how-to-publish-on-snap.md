## Publier un jeu Godot sur Snap (store ubuntu)

Cet article vous montre comment publier un jeu Godot sur le store Ubuntu (snap), je n'aborde pas ici d'autre moteur de jeu,  mais ce tuto peut vous aider à comprendre la mécanique utilisée.

#### Créer un compte Ubuntu One

Pour publier sur le Snap Store, vous avez besoin d'un compte Ubuntu One, si ce n'est pas déjà fait, créez en un sur https://login.ubuntu.com

#### Organiser votre projet

Comme pour un export classique, on va créer un peu d'arborescence pour ranger les fichiers

```
mkdir -p export/linux/snap
cd export/linux/snap
mkdir -p snap/gui
```

#### Exporter votre jeu vers Linux

Dans Godot, faites un export Linux et définissez comme destination le répertoire export/linux/snap

Vous avez 2 fichiers: votre_jeu.x86_64 et votre_jeu.pck

#### Installer snapd et snapcraft

snapd est le service qui permet d'installer et de faire tourner des snaps, snapcraft est l'outil qui sert à faire le build

Sur les distribution ubuntu et dérivés (mint..), snapd est déjà installé, sinon, par example sur ma LMDE (basée sur debian), besoin de mon coté d'installer également lxd

```
sudo apt install snapd
```

Passons à snapcraft, lui même distribué sous forme de snap

```
sudo snap install snapcraft --classic
```

Sur ma distribution basée sur debian j'ai du installer lxd et m'assurer d'avoir les bonnes permissions avec:
```
sudo apt install snapd lxd
lxd init --auto
```

#### Créer le fichier snapcraft.yaml

On créé maintenant la fiche de construction snapcraft.yaml dans export/linux/snap

```
vi snap/snapcraft.yaml
```

Contenu de snap/snapcraft.yaml

```
title: Votre jeu
name: votredomaine-votre-jeu
version: '1.0'
summary: Résumé court de votre jeu
description: |
  La description de votre jeu

grade: stable
confinement: strict
base: core22

apps:
  votredomaine-votre-jeu:
    command: votre_jeu.x86_64
    extensions: [gnome]
    plugs:
      - opengl
      - audio-playback
      - x11
      - wayland
      - joystick

parts:
  game:
    plugin: dump
    source: .
    organize:
      votre_jeu.x86_64: votre_jeu.x86_64
      votre_jeu.pck: votre_jeu.pck
    stage:
      - votre_jeu.x86_64
      - votre_jeu.pck
    prime:
      - votre_jeu.x86_64
      - votre_jeu.pck
    stage-packages:
      - libc6
```

Ici on décrit
- le nom du snap (votredomaine-votre-jeu) et sa version
- une commande à lancer une fois le snap installé, ici directement le binaire exporté par Godot
- des accès système (plugs) dont votre jeu peut avoir besoin: opengl pour l'affichage, audio-playback pour le son, x11/wayland pour l'affichage, joystick si vous gérez les manettes
- une partie (part) qui vient récupérer les fichiers exportés (le .x86_64 et le .pck) et les inclure dans le snap

L'extension gnome apporte les librairies graphiques et audio courantes, ça évite de devoir toutes les lister soi même

#### Builder votre snap

Aller dans export/linux/snap

```
cd /path/vers/votre/jeu/export/linux/snap
snapcraft pack
```

snapcraft va télécharger un environnement de build (via LXD ou multipass la première fois), puis fabriquer votre paquet

Vous devriez obtenir un fichier votredomaine-votre-jeu_1.0_amd64.snap

#### Tester votre snap en local

Pour tester l'installation de l'application en snap

```
sudo snap install votredomaine-votre-jeu_1.0_amd64.snap --dangerous
```

Le flag --dangerous permet d'installer un snap qui n'est pas signé par le store, indispensable en local

pour lancer, simplement

```
votredomaine-votre-jeu
```


#### Créer un compte développeur et enregistrer le nom

On se connecte avec le compte Ubuntu One

```
snapcraft login
```

Puis on réserve le nom de votre snap sur le store, nom du style xx.votredomain.votrejeu

```
snapcraft register votredomaine-votre-jeu
```

#### Publier votre snap

On envoie le paquet construit précédemment sur le store, en le publiant directement sur le canal stable

```
snapcraft upload votredomaine-votre-jeu_1.0_amd64.snap --release=stable
```

Il existe aussi d'autres canaux (edge, beta, candidate) qui permettent de publier des versions de test avant de les faire passer en stable

```
snapcraft upload votredomaine-votre-jeu_1.0_amd64.snap --release=edge
```

vous devriez avoir une ligne du type

```
Revision N created for 'votredomaine-votre-jeu' and released to 'stable'
```


```
snapcraft release votredomaine-votre-jeu N stable
```

Une fois publié, je vous invite à vous rendre sur https://snapcraft.io/ pour aller ajouter les screenshot et autres améliorations concernant la fiche de votre application

```
sudo snap install votredomaine-votre-jeu
```


#### Conclusion

Comme vous voyez il est très simple de publier des snaps
