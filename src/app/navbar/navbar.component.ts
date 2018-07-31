import { Component, OnInit } from '@angular/core';
import { trigger,state,style,animate,transition } from '@angular/animations';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
  animations:[
    trigger('menuState',[
      state('menuDown',style({
        width:'100%',height:'30%'
      })),
      state('menuUp',style({
        display:'none'
      })),
      transition('menuDown => menuUp', animate('200ms ease-in')),
      transition('menuUp => menuDown', animate('200ms ease-in')),
    ])
  ]
})
export class NavbarComponent implements OnInit {

toggleSub='menuUp';
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
}
