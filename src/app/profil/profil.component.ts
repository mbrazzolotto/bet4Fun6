import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-profil',
  templateUrl: './profil.component.html',
  styleUrls: ['./profil.component.css']
})
export class ProfilComponent implements OnInit {

profil={
  avatar:"../../assets/luffy.jpg",
  login:"Batman",
  prenom:"Bruce",
  nom:"Wayne",
  email:"jedefonceleJoker@gmail.com",
  notif:true,
  info:{
    nbCo:31,
    derniereCo:new Date,
    dateCrea:new Date
  }
}

  constructor() { }

  ngOnInit() {
  }

}
