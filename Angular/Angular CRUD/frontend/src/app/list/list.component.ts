import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { convertCompilerOptionsFromJson } from 'typescript';
import { Game } from '../game.model';
import { GameService } from './game.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {
  // public games: any[];
  // games:any=[];
  games: Game[];
  submitted = false;
  gid=null;
  constructor(private httpClient: HttpClient,
    private gameService: GameService){}


  ngOnInit() {
    /* get Notifications */
    this.getallGames();
}


  getallGames(){
    this.gameService.getGames().subscribe(data => this.games = data);
  }


  addGame(gameData: Game){
    console.log(gameData);
    this.gameService.createGame(gameData)
    .subscribe(
      response => {
        // console.log(gameData);
        this.submitted = true;
        this.getallGames();
      },
    )
    // this.gameService.update(gid, gameData)
  // .subscribe(
  //   response => {
  //     this.submitted = true;
  //     this.getallGames();
  //   },
  //  )}
  }

  deleteGame(gid: Game){
    console.log(gid);
    this.gameService.deleteGame(gid)
    .subscribe(
      response => {
        this.submitted = true;
        this.getallGames();
      },
    )
  }


  editGame(gname:any,gseries:any,gspace:any,gpublisher:any,gdeveloper:any,ggenres:any,gameID:any){
    console.log(gname);
    (<HTMLInputElement>document.getElementById("gname")).value = gname;
    (<HTMLInputElement>document.getElementById("gseries")).value = gseries;
    (<HTMLInputElement>document.getElementById("gspace")).value = gspace;
    (<HTMLInputElement>document.getElementById("gdeveloper")).value = gdeveloper;
    (<HTMLInputElement>document.getElementById("gpublisher")).value = gpublisher;
    (<HTMLInputElement>document.getElementById("ggenres")).value = ggenres;
    (<HTMLInputElement>document.getElementById("gameID")).value = gameID;

  // this.gameService.update(gid, gameData)
  // .subscribe(
  //   response => {
  //     this.submitted = true;
  //     this.getallGames();
  //   },
  //  )}

}
// public no:any;
editGame1(gid:any,gameData:Game){
  // this.no = 15;
  console.log(gameData);
    this.gameService.updateGame(gid,gameData)
    .subscribe(
      response => {
        // console.log(gameData);
        this.submitted = true;
        this.getallGames();
      },
    )}
}
