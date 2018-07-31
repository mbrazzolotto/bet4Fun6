import { Injectable } from '@angular/core';
import { Team } from './team';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';


@Injectable({
  providedIn: 'root'
})
export class TeamService {

  private url = 'http://localhost:8000/teams';

  constructor(private http: HttpClient) { }

  getTeams(): Observable<Team[]>{ 
    return this.http.get<Team[]>(this.url);
  }
}
