import { Component, OnInit } from '@angular/core';
import { TeamService } from '../../service/team.service';
import { Team } from '../../service/team';
@Component({
  selector: 'app-accueil',
  templateUrl: './accueil.component.html',
  styleUrls: ['./accueil.component.css']
})
export class AccueilComponent implements OnInit {

  matches=[
    {
      equipe1:"France",
      equipe2:"Belgique",
      scoreE1:2,
      scoreE2:0
    },
    {
      equipe1:"Angleterre",
      equipe2:"Croatie",
      scoreE1:3,
      scoreE2:2
    },
    {
      equipe1:"France",
      equipe2:"Angleterre",
      scoreE1:4,
      scoreE2:2
    },
    {
      equipe1:"Croatie",
      equipe2:"Belgique",
      scoreE1:1,
      scoreE2:1
    }
  ];

  equipes=[
    {equipe:"France" },{equipe:"Belgique"},{equipe:"Angleterre"},{equipe:"Croatie"}
  ];
  ranking=[
    {
      login:"jeannot",
      nbParis:60,
      bonParis:19,
      scoreExact:5,
      bonus:62,
      total:221
    },
    {
      login:"Pierrot",
      nbParis:50,
      bonParis:15,
      scoreExact:5,
      bonus:25,
      total:221
    },
  ];
  teams: Team[];
  constructor(private teamService: TeamService) { }

  ngOnInit() {
    this.teamService.getTeams().subscribe(teams => {this.teams = teams,console.log(this.teams)});
  }

}
