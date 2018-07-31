import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';

import { AppComponent } from './app.component';
import { NavbarComponent } from './navbar/navbar.component';
import { JeuComponent } from './jeu/jeu.component';
import { ClassementComponent } from './classement/classement.component';
import { ReglementComponent } from './reglement/reglement.component';
import { AppRoutingModule } from './/app-routing.module';
import { MatchesComponent } from './jeu/matches/matches.component';
import { NavComponent } from './nav/nav.component';
import { ProfilComponent } from './profil/profil.component';
import { MesGrpComponent } from './profil/mes-grp/mes-grp.component';
import { CreateComponent } from './profil/mes-grp/create/create.component';
import { JoinComponent } from './profil/mes-grp/join/join.component';
import { ContactComponent } from './contact/contact.component';
import { AccueilComponent } from './accueil/accueil.component';
import { ConnexionComponent } from './connexion/connexion.component';


@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    JeuComponent,
    ClassementComponent,
    ReglementComponent,
    MatchesComponent,
    NavComponent,
    ProfilComponent,
    MesGrpComponent,
    CreateComponent,
    JoinComponent,
    ContactComponent,
    AccueilComponent,
    ConnexionComponent,
  ],
  imports: [
    BrowserModule,
    BrowserAnimationsModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule  
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
