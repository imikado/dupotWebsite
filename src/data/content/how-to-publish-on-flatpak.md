## Publier un jeu Godot sur Flathub

Cet article vous montre comment publier un jeu Godot sur Flathub, je n'aborde pas ici d'autre moteur de jeu,  mais ce tuto peut vous aider à comprendre la mécanique utilisée.

#### Créer un compte github
Vous allez avoir besoin d'un compte github dans cet article, si ce n'est pas déjà fait, je vous invite à en créer un sur https://github.com

J'y ferais réference dans cet article avec le nom "votre_identifiant_github"

#### Créer un projet pour votre jeu
Sur github, créez un projet pour votre jeu, vous y stoquerez la version compilé de celui-ci pour linux

Une fois ce dépot créé, nous l'appelrons ici github.com/votre_identifiant_github/votre_jeu

Sur votre ordinateur
```
mkdir github
cd github
git clone github.com/votre_identifiant_github/votre_jeu.git
cd votre_jeu
```
nous allons ici créer l'arborescence suivante, histoire d'organiser le tout proprement

```
mkdir -p export/linux/flatpak
mkdir -p export/linux/screenshots

```

#### Exporter votre jeu vers Linux 

Dans Godot, export
- Linux / X11

et définissez comme destination le répertoire export/linux que l'on vient de créer 

Vous pouvez en profitez pour faire quelques screenshots et les déposer dans export/linux/screenshots

#### Finissons le setup sur notre dépot Github

Nous revenons sur notre dépot github du jeu

Vous avez donc dans export/linux 2 fichiers: votre_jeu.x86_64 et votre_jeu.pck

Il nous faut créer 3 autres fichiers:

```
cd votre_jeu
touch export/linux/flatpack/512x512.png
touch export/linux/flatpack/com.domain.votre_jeu.desktop
touch export/linux/flatpack/com.domain.votre_jeu.appdata.xml
```

Pour l'image 512x512, je vous laisse utiliser vos outils préféré (Gimp,Krita,Inkscape...) pour faire l'icone le plus sympa

Contenu de votre_jeu.desktop
```
[Desktop Entry]
Name=Votre jeu
Exec=votre_jeu.x86_64
Type=Application
Icon=com.domain.votre_jeu
Categories=Game
```

Contenu de votre_jeu.appdata.xml
```
<?xml version="1.0" encoding="UTF-8"?>
<component type="desktop">
  <id>com.domain.votre_jeu</id>
  <metadata_license>CC0-1.0</metadata_license>
  <project_license>Votre_licence</project_license>
  <name>Votre jeu</name>
  <summary>Résume court de votre jeu</summary>
  <description>
    <p>
  Description de votre jeu
    </p>
  </description>

   <screenshots>
    <screenshot type="default">
      <image>https://raw.githubusercontent.com/votre_identifiant_github/votre_jeu/identifiant_commit/export/linux/screenshots/le_nom_de_votre_screenshot.png</image>
    </screenshot>

<url type="homepage">https://votre.site.web</url>
  <url type="vcs-browser">https://github.com/votre_identifiant_github/votre_jeu/</url>
  <update_contact>votre@email.com</update_contact>
  <content_rating type="oars-1.1"/>
  <releases>
    
    <release date="2023-10-03" version="1.0"/>
  </releases>

</component>
```
Faites un commit + push, récupéré le commit id pour venir le remplacer dans l'url des screenshots

Faites un second commit + push, et cette fois copier le commit ID, nous allons en avoir besoin

nous l'appelerons identifiant_du_dernier_commit

#### Forker le dépot flathub
Sur votre ordinateur, 

```
mkdir github
cd github
git clone --branch=new-pr git@github.com:votre_identifiant_github/flathub.git
```

Vous avez forké le dépot flathub sur votre compte github, allez dedans pour créer une branche pour votre jeu

```
cd flathub
git checkout -b identifiant_de_votre_jeu
```
Par convention, on nomme les jeux avec un id qui ressemble à un nom de domaine inversé, par exemple j'ai ici un nom de domaine dupot.org
et je nomme mes jeux: org.dupot.mon_jeu

Si vous n'avez pas de nom de domaine, vous pouvez utiliser celui de github 
com.github.votre_identifiant_github.votre_jeu

Donc ici il faut faire une création de branche de ce nom complet

```
cd flathub
git checkout -b com.github.votre_identifiant_github.votre_jeu
```

j'utiliserais pour y faire réference dans cet article com.domain.votre_jeu

#### Créer la fiche d'identité Flathub
Vous allez créer ici 2 fichiers flathub.json et com.domain.votre_jeu.yml
```
touch flathub.json
touch com.domain.votre_jeu.yml
```

Contenu de flathub.json
```
{
  "only-arches": ["x86_64"]
}
```

Contenu de com.domain.votre_jeu.yml
```
id: com.domain.votre_jeu.yml
runtime: org.freedesktop.Platform
runtime-version: "23.08"
sdk: org.freedesktop.Sdk
command: votre_jeu
finish-args:
  - --share=ipc
  - --socket=pulseaudio
  - --socket=x11
  - --device=dri
  - --persist=.local/share/godot/app_userdata/votre_jeu

modules:
  - name: VotreJeu
    buildsystem: simple
    sources:
      - type: git
        url: https://github.com/votre_identifiant_github/votre_jeu/
        commit: identifiant_du_dernier_commit

    build-commands:
      - install -Dm755 export/linux/votre_jeu.x86_64 $FLATPAK_DEST/bin/votre_jeu.x86_64
      - install -Dm555 export/linux/votre_jeu.pck $FLATPAK_DEST/bin/votre_jeu.pck
      - install -Dm644 export/linux/flatpack/512x512.png $FLATPAK_DEST/share/icons/hicolor/512x512/apps/com.domain.votre_jeu.png
      - install -Dm644 export/linux/flatpack/com.domain.votre_jeu.desktop $FLATPAK_DEST/share/applications/com.domain.votre_jeu.desktop
      - install -Dm644 export/linux/flatpack/com.domain.votre_jeu.appdata.xml $FLATPAK_DEST/share/metainfo/com.domain.votre_jeu.appdata.xml      
```
Ici on indiquer que l'on va récuperer notre jeu sur notre dépot github au dernier commit ID

Une fois la récupération de nos sources faite, on va installer le fichier présent sur notre github 
- le fichier du jeu .x86_64 et .pck dans l'espace où sont stoqués les binaries flathub
- l'icone du jeu en 512x512
- le fichier desktop, qui est l'identité de notre jeu, une fois installé chez l'utilisateur (dans quel menu..)
- le fichier appdata qui stoque d'autres informations come le changelog, les screenshots..

Vous pouvez commit, push (sur votre branch com.github.votre_identifiant_github.votre_jeu )

Ensuite, rendez vous sur https://github.com/flathub/flathub/branches

et faites un pull request de votre branche de jeu vers "new-pr"

S'ensuite une phase de validation de votre envoi, avec souvent un chat avec les mainteneurs du projet

Une fois que tout est validé, flathub devrait créer une branche de votre jeu sur son dépôt


#### Conclusion

Comme vous avez pu le voir, c'est ici très simple de packager votre jeu sur Flathub

C'est impressionnant de voir la mécanique totalement automatisé de gestion de nouveaux paquets, les builds...




