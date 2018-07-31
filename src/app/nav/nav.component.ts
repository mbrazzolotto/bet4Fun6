import { Component, OnInit } from '@angular/core';
import { trigger,state,style,animate,transition } from '@angular/animations';

@Component({
  selector: 'app-nav',
  templateUrl: './nav.component.html',
  styleUrls: ['./nav.component.css'],
  animations:[
    trigger('menuState',[
      state('menuDown',style({
        width:'100vw',height:'3vw',top:'auto',position: 'absolute'
      })),
      state('menuUp',style({
        display:'none'
      }))
    ])
  ]
})
export class NavComponent implements OnInit {

  toggleSub='menuUp';
  toggleSubProfil='menuUp';
  toggleSubInfo='menuUp';
  menu='';

  constructor() { }

  ngOnInit() {
  }

  toggleDownSubMenu(menu:string){
    this.toggleSub ='menuDown';
    this.menu=menu;
  }
  toggleUpSubMenu(exit:boolean){
    this.toggleSub ='menuUp';
    if(exit){
      this.menu='';
    }
  }
  toggleDownSubProfilMenu(menu:string){
    this.toggleSubProfil ='menuDown';
    this.menu=menu;
  }
  toggleUpSubProfilMenu(menu:string){
    this.toggleSubProfil ='menuUp';
    this.menu=menu;
  }
  toggleDownSubInfoMenu(menu:string){
    this.toggleSubInfo ='menuDown';
    this.menu=menu;
  }
  toggleUpSubInfoMenu(menu:string){
    this.toggleSubInfo ='menuUp';
    this.menu=menu;
  }
}
