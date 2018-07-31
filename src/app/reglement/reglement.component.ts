import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-reglement',
  templateUrl: './reglement.component.html',
  styleUrls: ['./reglement.component.css']
})
export class ReglementComponent implements OnInit {

  mode="Eliminator - Le mode de predictor de la phase finale";

  regles=[
  {
    eliminatoire:{
      entete:"Vous pronostiquez uniquement pour les matchs à élimination directe à partir des vraies équipes qualifiées de la phase de poule.Dès que le premier match des huitième de finale aura démarré, il ne sera plus possible de modifier ses paris sur l'intégralité de la compétition. Plus vous aurez vu juste jusqu'au dernier match, plus vous marquerez des points :",
      regle:[[
        "<h4 class='h4' >A l'issue des huitièmes de finale</h4><li>2 points pour chaque équipe qualifiée trouvée</li><li>5 points pour chaque match où le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé</li>"
      ],
      [
        "<h4>A l'issue des quarts de finale</h4><li>4 points pour chaque équipe qualifiée trouvée</li><li>3 points pour chaque match où les équipes prévues sont trouvées</li><li>5 points pour chaque match où le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé dont les équipes sont bien celles prévues</li>"
        ],[   
        "<h4>A l'issue du match de la 3ème place</h4><li>5 points pour avoir trouvé l'équipe qui termine 3ème</li><li>3 points si les équipes prévues sont trouvées</li><li>5 points si le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé dont les équipes sont bien celles prévues</li>"
      ],[  
        "<h4>A l'issue de la finale</h4><li>10 points pour avoir trouvé le vainqueur de la compétition</li><li>3 points si les équipes prévues sont trouvées</li><li>5 points si le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé dont les équipes sont bien celles prévues</li>"
        ]],

    },
    predicator:{
      entete:"Vous pronostiquez pour chaque match de groupe de la compétition. En fonction des résultats que vous aurez envisagés, le classement permet de déterminer les équipes qui vont selon vous participer à la phase à élimination directe. Vous pouvez alors pronostiquer dès maintenant pour chaque match des huitième de finale...jusqu'à déterminer le score de votre finale de rêve !Dès que le premier match de la compétition aura démarré, il ne sera plus possible de modifier ses paris sur l'intégralité de la compétition. Plus vous aurez vu juste jusqu'au dernier match, plus vous marquerez des points ",
      regle:[[
        "Barème de points pour les matchs de groupe 3 points si le bon résultat est trouvé (équipe vainqueur ou match nul) 1 point pour le bon nombre de buts inscrit par équipe 2 points si l'écart de but entre les deux équipes est correctCela signifie que vous pouvez marquer 7 points par match ! Par exemple, vous pronostiquez 2-1 entre A et B alors que le résultat est 3-2 pour A, vous marquez alors 5 points (3 points pour avoir trouvé le vainqueur et 2 points pour l'écart de but)"
      ],
      [
        "A l'issue des quarts de finale",
        "4 points pour chaque équipe qualifiée trouvée",
        "3 points pour chaque match où les équipes prévues sont trouvées",
        "5 points pour chaque match où le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé dont les équipes sont bien celles prévues"
        ],[   "A l'issue du match de la 3ème place",
        "5 points pour avoir trouvé l'équipe qui termine 3ème",
        "3 points si les équipes prévues sont trouvées",
        "5 points si le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé dont les équipes sont bien celles prévues"
      ],[  
        "A l'issue de la finale",
        "10 points pour avoir trouvé le vainqueur de la compétition",
        "3 points si les équipes prévues sont trouvées",
        "5 points si le score exact (en prenant en compte les éventuelles prolongations mais hors tirs au but) est trouvé dont les équipes sont bien celles prévues"
        ]],
    },
    classic:{

    }
  }
  ];
  constructor() { }

  ngOnInit() {
  }

}
