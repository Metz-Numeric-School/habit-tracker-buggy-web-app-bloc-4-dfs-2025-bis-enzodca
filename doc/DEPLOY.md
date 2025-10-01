# Procédure de Déploiement

Décrivez ci-dessous votre procédure de déploiement en détaillant chacune des étapes. De la préparation du VPS à la méthodologie de déploiement continu.

## Préparation du VPS

Todo...
VM: 
## a la racine
cd /var
mkdir depot-git
cd depot-git
git init --bare



en LOCAL:
git remote add vps root@172.17.4.29:/var/depot-git

git push vps

## Méthode de déploiement

Todo...
installation de aapanel sur la VM via :

URL=https://www.aapanel.com/script/install_7.0_en.sh && if [ -f /usr/bin/curl ];then curl -ksSO "$URL" ;else wget --no-check-certificate -O install_7.0_en.sh "$URL";fi;bash install_7.0_en.sh aapanel

![alt text](image.png)
k73X8Mqw