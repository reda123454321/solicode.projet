# Construire le MCD complet – Blog :

### VILLE :     
* **id_ville**     
* nom_ville     
                
### AUTEUR :    |━━━━━ HABITE `Ville(0,N) Auteur(1,1)`
* **id_auteur**        
* nom_auteur    
* prenom_auteur 
* email_auteur  
   
### ARTICLE :    |━━━━━ REDIGE `Auteur(0,N) Article(1,1)`
* **id_article**
* titre_article
* contenu_article
* date_publication
* statut_article
* image_article
                 
### CATEGORIE :  |━━━━━ REGROUPE `Article(1,1) Categorie(0,N)`
* **id_categorie**
* nom_categorie