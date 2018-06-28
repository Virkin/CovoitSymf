# Covoit Symf
Site web de covoiturage en symfony. 

## Installation (Linux)

> Faire les commandes ci-dessous dans le repertoire du site.

### Installer Composer :

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

### Installation de Symfony

```bash
php composer.phar install
```

### Installation de la base de données :

```bash
php bin/console doctrine:schema:update --force
```

## Utilisation

### Front Office Url : http://prjsymf.cir3-frm-smf-ang-33

### Back Office Url : http://prjsymf.cir3-frm-smf-ang-33/adminbo

### Web Service Url : http://prjsymf.cir3-frm-smf-ang-33/api


