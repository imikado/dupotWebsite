## Dupot Dev Tools
<figure class="project-media">
<img src="/images/screenshots/apps/dupotDevTools/home.png?v=20261021" alt="Accueil de Dupot Dev Tools : la liste des outils par catégorie, avec la recherche" />
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

Un constructeur visuel de requêtes pour comprendre une base de données d'un coup d'œil&nbsp;:

- **Connectez-vous** à SQLite, PostgreSQL ou MySQL&nbsp;: les pilotes sont intégrés, rien d'autre à installer
- **Posez vos tables** sur un canevas, sous forme de cartes déplaçables et redimensionnables
- **Tracez les jointures** en reliant les colonnes entre les tables
- **Choisissez vos colonnes**&nbsp;: la requête SQL est générée pour vous, puis modifiable librement
- **Lancez-la**, parcourez les résultats et **exportez-les en CSV**

Gratuit et open source (licence LGPL-2.1), écrit en Rust avec une architecture propre&nbsp;: chaque outil est un petit module testé, et ajouter le vôtre ne demande que quelques lignes.

### Screenshots

![Accueil : tous les outils](/images/screenshots/apps/dupotDevTools/home.png?v=20261021)
![SQL Viewer : nouvelle connexion](/images/screenshots/apps/dupotDevTools/sqlviewer_new_connection.png?v=20260824)
![SQL Viewer : ajout d'une table](/images/screenshots/apps/dupotDevTools/sqlviewer_add_table.png?v=20260824)
![SQL Viewer : les jointures](/images/screenshots/apps/dupotDevTools/sqlviewer_joins.png?v=20260824)
![SQL Viewer : la requête et ses résultats](/images/screenshots/apps/dupotDevTools/sqlviewer_request.png?v=20260824)
