import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { JeuComponent } from './jeu/jeu.component';
import { ClassementComponent } from './classement/classement.component';
import { ReglementComponent } from './reglement/reglement.component';
import { ProfilComponent } from './profil/profil.component';
import { MesGrpComponent } from './profil/mes-grp/mes-grp.component';
import { CreateComponent } from './profil/mes-grp/create/create.component';
import { JoinComponent } from './profil/mes-grp/join/join.component';
import { ContactComponent } from './contact/contact.component';
import { AccueilComponent } from './accueil/accueil.component';
import { ConnexionComponent } from './connexion/connexion.component';


const routes: Routes = [
  { path: 'jeu', component: JeuComponent },
  { path: 'classement', component: ClassementComponent },
  { path: 'regle', component: ReglementComponent },
  { path: 'profil', component: ProfilComponent },
  { path: 'grp', component: MesGrpComponent },
  { path: 'creagrp', component: CreateComponent },
  { path: 'joingrp', component: JoinComponent },
  { path: 'contact', component: ContactComponent },
  { path: 'accueil', component: AccueilComponent },
  { path: 'connexion', component: ConnexionComponent },
];

@NgModule({
  exports: [ RouterModule ], 
  imports: [ RouterModule.forRoot(routes) ]
})

export class AppRoutingModule { }
