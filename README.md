# ODS Wikis

This respository contains a dockerfile to generate an empty instance of a ODS wiki.
The generated server contains only the main page and should be bootstraped with an ontology.

## Installation

1. Clone the repository [https://github.com/KnowledgeCaptureAndDiscovery/ODS_wiki.git](https://github.com/KnowledgeCaptureAndDiscovery/ODS_wiki.git)


```bash
git clone git@github.com:KnowledgeCaptureAndDiscovery/ODS_wiki.git
```

2. Setup

```bash
docker-compose up --build
```

## Configuring

To configure the Wiki, you can edit `./enigma-wiki/LocalSettings.php`.
This file allow you to change the connection settings with the SQL and RDF databases,
if you wish to do that, please remember to change the the `enigma-db` image.

As default, the SQL image loads the `enigma.sql` file, with a basic version of the wiki.

To change the name of the wiki you must edit `LocalSettings.php`:
```
22 $customName = "enigma_dev";
```
