import { Component, OnInit } from '@angular/core';
import { NavbarComponent } from '../navbar/navbar.component'

@Component({
  selector: 'app-jeu',
  templateUrl: './jeu.component.html',
  styleUrls: ['./jeu.component.css']
})
export class JeuComponent implements OnInit {

  mode="Predictor";
  championship="UEFA European Championship";
  year=2020;

  constructor() { }

  ngOnInit() {
  }

}
