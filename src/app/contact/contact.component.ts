import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})

export class ContactComponent implements OnInit {

  login="bruce";
  email="bwayne@gmail.com";

  constructor() { }

  ngOnInit() {
  }

}
