import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-classement',
  templateUrl: './classement.component.html',
  styleUrls: ['./classement.component.css']
})
export class ClassementComponent implements OnInit {

  mode="Classement";
  championship="UEFA European Championship";
  year=2020;
  
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
  ]

  constructor() { }

  ngOnInit() {
  }

}
