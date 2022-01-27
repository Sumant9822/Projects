import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { map, Observable,throwError } from 'rxjs';
 import { Game } from '../game.model';
 import { catchError } from 'rxjs/operators';
@Injectable({
  providedIn: 'root'
})
export class GameService {
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*',
      'Access-Control-Allow-Credentials': 'true'
    })
  }
  // games: Game[];
  private gameurl = 'http://localhost/yii/angulargame/frontend/web/index.php/games';
  constructor(private httpClient: HttpClient ) { }


  getGames(): Observable<any> {
    //  return this.httpClient.get<Game[]>(this.gameurl).pipe(map(res => this.games = res))
    return this.httpClient.get(this.gameurl);
  }

  createGame(gameData:any): Observable<any> {
    //  return this.httpClient.get<Game[]>(this.gameurl).pipe(map(res =>gameData = res))
    return this.httpClient.post(this.gameurl,gameData);
    // return this.httpClient.post(this.gameurl,gameData);
    // return this.httpClient.post<Game>(this.gameurl, JSON.stringify(gameData), this.httpOptions)
    // .pipe(
    //   catchError(this.errorHandler)
    // )
  }


  deleteGame(gid:any): Observable<any> {
    return this.httpClient.delete(`${this.gameurl}/${gid}`);
  }

  updateGame(gid:any,gameData:any): Observable<any> {
    return this.httpClient.put(`${this.gameurl}/${gid}`, gameData);
  }

//   errorHandler(error:any) {
//     let errorMessage = '';
//     if(error.error instanceof ErrorEvent) {
//       errorMessage = error.error.message;
//     } else {
//       errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
//     }
//     return throwError(errorMessage);
//  }
}
