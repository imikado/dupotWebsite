## Dupot Dev Tools
<figure class="project-media">
<img src="/images/promo/apps/dupotDevTools/promo.gif?v=20261023" alt="Dupot Dev Tools en action : construire une requête sur le canevas du SQL Viewer, la filtrer, l'exécuter, puis taper du SQL et le voir redessiné" />
</figure>

Combien de fois par jour collez-vous un JWT, un bloc JSON ou une requête SQL dans un site web inconnu, juste pour le lire&nbsp;? Dupot Dev Tools réunit tous ces petits outils du quotidien dans **une seule application de bureau**.

- 🔒 **100 % local**&nbsp;: vos tokens, vos données et vos requêtes ne quittent jamais votre machine
- ⚡ **Natif et léger**&nbsp;: un seul binaire Rust en GTK 4, sans Electron ni navigateur
- 🎨 **Bien intégré au bureau**&nbsp;: interface Libadwaita, thèmes clair et sombre, mise en page adaptative et recherche parmi les outils
- 🐧 **Linux et Windows**

### 16 outils

- 🗄️ **Base de données**&nbsp;: SQL Viewer, pour explorer vos bases SQLite, PostgreSQL et MySQL
- 🎨 **Formatage**&nbsp;: JSON (embellir ou minifier), SQL et XML
- 🔄 **Conversion**&nbsp;: timestamp ↔ date (UTC, local, ISO 8601, RFC 2822, temps relatif), YAML ↔ JSON, HTML vers texte
- 🔐 **Encodage**&nbsp;: Base64, encodage d'URL, entités HTML et décodeur de JWT
- 🔤 **Texte**&nbsp;: générateur de hash (MD5, SHA-1, SHA-2, SHA-3, BLAKE2b), testeur de regex avec groupes de capture et remplacement, comparaison de textes, générateur UUID v4 / v7 et ULID
- 🧮 **Analyse**&nbsp;: explication d'une expression cron en clair, avec ses prochaines exécutions

Chaque outil texte présente l'entrée et la sortie côte à côte, avec coloration syntaxique et copie en un clic. Timestamp, UUID, regex, diff et cron se mettent à jour pendant la saisie.

### Zoom sur le SQL Viewer

Un constructeur visuel de requêtes, dans l'esprit de SQL Server Management Studio, pour comprendre une base de données d'un coup d'œil&nbsp;:

- **Connectez-vous** à SQLite, PostgreSQL ou MySQL&nbsp;: les pilotes sont intégrés, rien d'autre à installer
- **Enregistrez vos connexions** dans un fichier JSON et rouvrez-les (le dernier fichier est rechargé au démarrage). Les mots de passe ne sont jamais enregistrés&nbsp;: ils sont demandés une fois par session
- **Posez vos tables** sur un canevas, sous forme de cartes déplaçables et redimensionnables qui affichent chaque colonne, son type et ses clés étrangères
- **Les jointures se tracent toutes seules** à partir des clés étrangères&nbsp;; reliez vous-même deux colonnes, ou cliquez sur un lien pour le modifier ou le supprimer
- **Grille de critères**&nbsp;: pour chaque colonne, un alias, l'affichage, le tri (et son ordre) et des filtres&nbsp;: `> 8`, `LIKE 'A%'`, `IS NULL` ou une simple valeur. Les lignes doivent respecter tous les *Filtres* ou tous les *Ou…*
- **Le SQL suit le canevas et la grille** tant que vous ne le modifiez pas. Tapez ou collez un `SELECT`&nbsp;: il est redessiné sur le canevas et dans la grille
- **Lancez la requête** (Ctrl+Entrée), parcourez les résultats et **exportez-les en CSV**
- **Quatre panneaux redimensionnables**&nbsp;: *Diagramme*, *Critères*, *SQL* et *Résultats*, chacun affichable ou masquable depuis la barre d'outils

Gratuit et open source (licence LGPL-2.1), écrit en Rust avec une architecture propre&nbsp;: chaque outil est un petit module testé, et ajouter le vôtre ne demande que quelques lignes.

### Screenshots

![Accueil : tous les outils](/images/screenshots/apps/dupotDevTools/home.png?v=20261023)
![SQL Viewer : nouvelle connexion](/images/screenshots/apps/dupotDevTools/sqlviewer_new_connection.png?v=20261023)
![SQL Viewer : ajout d'une table, les jointures suivent les clés étrangères](/images/screenshots/apps/dupotDevTools/sqlviewer_add_table.png?v=20261023)
![SQL Viewer : les jointures](/images/screenshots/apps/dupotDevTools/sqlviewer_joins.png?v=20261023)
![SQL Viewer : grille de critères (alias, filtre, tri) puis exécution](/images/screenshots/apps/dupotDevTools/sqlviewer_request.png?v=20261023)
![SQL Viewer : un SELECT tapé est redessiné sur le canevas et dans la grille](/images/screenshots/apps/dupotDevTools/sqlviewer_sql_to_canvas.png?v=20261023)
