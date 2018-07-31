import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-matches',
  templateUrl: './matches.component.html',
  styleUrls: ['./matches.component.css']
})
export class MatchesComponent implements OnInit {
  groupes=["a","b","c"];

  equipes=[
    {equipe:"France" },{equipe:"Belgique"},{equipe:"Angleterre"},{equipe:"Croatie"}
  ];

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

  expand =false;
  constructor() { }

  ngOnInit() {
  }

  toExpand(){
    if(this.expand==false){
      this.expand=true;
    }else{
      this.expand=false;
    }
  }

}
