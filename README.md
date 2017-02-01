```
.-------------------------------------------------------------------------------.  
| .----------------------------------------------------------------------------.  |  
| |  _______     _________       __       ________    ____    ____  _________   | |  
| | |_   __ \   |_   ___  |     /  \     |_   ___ `. |_   \  /   _||_   ___  |  | |  
| |   | |__) |    | |_  \_|    / /\ \      | |   `. \  |   \/   |    | |_  \_|  | |  
| |   |  __ /     |  _|  _    / ____ \     | |    | |  | |\  /| |    |  _|  _   | |  
| |  _| |  \ \_  _| |___/ | _/ /    \ \_  _| |___.' / _| |_\/_| |_  _| |___/ |  | |  
| | |____| |___||_________||____|  |____||________.' |_____||_____||_________|  | |  
| |                                                                             | |  
| '-----------------------------------------------------------------------------' |  
 '-------------------------------------------------------------------------------'
```

  
## **Instructions utilisateur :**

 - _**Installation :**_
 Ouvrez un terminal, déplacez-vous dans le dossier où vous souhaitez cloner le projet (le projet sera un **enfant** de ce dossier) et copiez les lignes de code suivantes (_nom_de_dossier_ correspond au nom à donner au dossier du projet)
	1. SSH `git clone git@github.com:WildCodeSchool/bleau_S2_2016_haras_metamorphose.git nom_de_dossier`
	2. HTTPS `git clone https://github.com/WildCodeSchool/bleau_S2_2016_haras_metamorphose.git nom_de_dossier`
	3. `cd nom_de_dossier`
	4. `composer install`
	5. `php app/console doctrine:database:create`
	6. `php app/console doctrine:schema:update --force`
	7. `cd web/ mkdir uploads => mkdir newsletters_file`
	8. `php app/console assets:install`  
	
	
___
 - _**Administration :**_
	Pour se rendre dans l'interface d'administration allez sur http://votre_nom_de_domaine.fr/login puis saisissez vos identifiants (identifiants de test: **name**="_admin_", **password**="_admin_")  
      	A partir de cette interface vous avez accès à toute l'administration du site. L'index vous permet de choisir la page à administrer. Cliquer sur une page vous donne accès à tous ses contenus (textes, média, articles) que vous pouvez modifier à loisir. Les articles n'étant bien sûr disponibles que sur les pages des sections.  

```
                               ,|     
                             //|                              ,|
                           //,/                             -~ |
                         // / |                         _-~   /  ,
                       /'/ / /                       _-~   _/_-~ |
                      ( ( / /'                   _ -~     _-~ ,/'
                       \~\/'/|             __--~~__--\ _-~  _/,
               ,,)))))));, \/~-_     __--~~  --~~  __/~  _-~ /
            __))))))))))))));,>/\   /        __--~~  \-~~ _-~
           -\(((((''''(((((((( >~\/     --~~   __--~' _-~ ~|
  --==//////((''  .     `)))))), /     ___---~~  ~~\~~__--~ 
          ))| @    ;-.     (((((/           __--~~~'~~/
          ( `|    /  )      )))/      ~~~~~__\__---~~__--~~--_
             |   |   |       (/      ---~~~/__-----~~  ,;::'  \         ,
             o_);   ;        /      ----~~/           \,-~~~\  |       /|
                   ;        (      ---~~/         `:::|      |;|      < >
                  |   _      `----~~~~'      /      `:|       \;\_____// 
            ______/\/~    |                 /        /         ~------~
          /~;;.____/;;'  /          ___----(   `;;;/               
         / //  _;______;'------~~~~~    |;;/\    /          
        //  | |                        /  |  \;;,\              
       (<_  | ;                      /',/-----'  _>
        \_| ||_                     //~;~~~~~~~~~ 
            `\_|                   (,~~ 
                                    \~\ 
                                     ~~ 
```
