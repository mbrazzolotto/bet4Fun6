import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-connexion',
  templateUrl: './connexion.component.html',
  styleUrls: ['./connexion.component.css']
})
export class ConnexionComponent implements OnInit {

  co=true;
  inscription=false;
  forgetpass=false;
  forgetid=false;

  constructor() { }

  ngOnInit() {
  }

  change(what:string){
    switch(what){
      case "co":{
        this.co=true;
        this.inscription=false;
        this.forgetpass=false;
        this.forgetid=false;
        break;
      }
      case "inscription":{
        this.co=false;
        this.inscription=true;
        this.forgetpass=false;
        this.forgetid=false;
        break;
      }
      case "forgetpass":{
        this.co=false;
        this.inscription=false;
        this.forgetpass=true;
        this.forgetid=false;
        break;
      }
      case "forgetid":{
        this.co=false;
        this.inscription=false;
        this.forgetpass=false;
        this.forgetid=true;
        break;
      }
      default:  {
      this.co=true;
      this.inscription=false;
      this.forgetpass=false;
      this.forgetid=false;
      break;
      }
    }
  }
}
