## Dupot static-management-framework

Les sites statiques sont rapides, sûrs et peu coûteux à héberger. Mais tôt ou tard, il vous faut quelques pages dynamiques pour les **gérer** : un formulaire de connexion, un éditeur pour vos actualités, un bouton qui régénère le site…

Sortir un framework full-stack pour ça, c'est démesuré. **Dupot static-management-framework** vous donne exactement ce dont vous avez besoin, et rien de plus.

### Points forts

- **Léger** : une dizaine de petites classes et **zéro dépendance**, vous pouvez lire tout le code source en 10 minutes
- **Routing par regex en JSON** : déclarez vos routes dans un unique fichier `routing.json`, les groupes capturés sont passés en arguments à vos méthodes
- **Contrôleurs de page simples** : étendez `PageAbstract` et recevez automatiquement la requête, la réponse et la configuration
- **Templates en PHP natif** : `Layout` et `View` utilisent de simples fichiers PHP
- **Configuration INI** : chargez vos réglages depuis des fichiers `.ini` et surchargez-les à l'exécution
- **Gestion de session** : lisez et écrivez GET / POST / SESSION / SERVER via un unique objet `Request`
- **Compagnon de [dupot static-generation-framework](app_dupotStaticGenerationFramework.html)** : générez votre site avec l'un, gérez-le avec l'autre

### Installation

```bash
composer require dupot/static-management-framework
```

Prérequis : PHP 7.2 ou plus, aucune autre dépendance.

### Exemple : une route avec paramètre

```json
{
    "pattern": "#^/news_edit_([0-9]+)\\.html$#",
    "class": "App\\Infrastructure\\Pages\\NewsPage",
    "method": "edit"
}
```

```php
public function edit(string $id)
{
    // /news_edit_42.html  →  $id === '42'
}
```

### Exemple : protéger vos pages

```php
public function before()
{
    if (!$this->getRequest()->getSessionParamOr('isLogged', false)) {
        $this->getResponse()->redirect('/login.html');
    }
}
```

Publié sous licence **LGPL**.
