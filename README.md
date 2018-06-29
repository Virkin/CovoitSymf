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
### Installation du virtual host symfony

Copier le fichier "etd1-symf.conf" sur la vm
```bash
scp etd1-symf.conf etdfrm1@172.31.4.33:/home/etdfrm1
sudo mv etd1-symf.conf /etc/apache2/sites-available/.
```
Activer le virtual host sur la vm
```bash
ssh etdfrm1@172.31.4.33
a2ensite etd1-symf.conf
service apache2 reload
```
Attribuer le nom d'hôte "prjsymf.cir3-frm-smf-ang-33" à une adresse IP sur le PC
```bash
sudo vim /etc/hosts
172.31.4.33 prjsymf.cir3-frm-smf-ang-33
```

## Utilisation

### Front Office Url : http://prjsymf.cir3-frm-smf-ang-33

### Back Office Url : http://prjsymf.cir3-frm-smf-ang-33/adminbo

### Web Service Url : http://prjsymf.cir3-frm-smf-ang-33/api
