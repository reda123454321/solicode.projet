## TABLEAU DE CARDINNALITé :

| **Entité A** | **Cardinalité A** | **Verbe metier** | **Cardinalité B** | **Entité B** | **Régles de gestion** |
| :---: | :---: | :---: | :---: | :---: | :---: |
|**Ville**|(N,0)|Habite|(1,1)|Auteur|Une ville peut accueillir zéro, un ou plusieurs auteurs. Un auteur habite dans une et une seule ville.|
|**Auteur**|(N,0)|Rédige|(1,1)|Article|Un auteur peut rédiger zéro, un ou plusieurs articles. Un article est rédigé par un et un seul auteur.|
|**Catégorie**|(N,0)|Regroupe|(1,1)|Article|Un auteur peut rédiger zéro, un ou plusieurs articles. Un article est rédigé par un et un seul auteur.
|**Article**|(N,0)|Posséde|(N,0)|Tag|Un article peut posséder zéro, un ou plusieurs tags. Un tag peut être associé à zéro, un ou plusieurs article