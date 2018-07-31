import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-join',
  templateUrl: './join.component.html',
  styleUrls: ['./join.component.css']
})
export class JoinComponent implements OnInit {

  groupes=[{
    nom:"osaxis",
    description:"Réservé aux salariés Osaxis",
    role:"Membre actif",
    nbMembres:24
  },{
    nom:"bat-family",
    description:"Réservé avec aux jeans un pseudo commançant par bat- ",
    role:"Membre actif",
    nbMembres:18
  },{
    nom:"Maxime",
    description:"juste Max",
    role:"Membre actif maitre du groupe",
    nbMembres:2
  }]

  constructor() { }

  ngOnInit() {
  }

  search(){
      
  }
}
