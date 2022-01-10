// import { Component} from "@angular/core";
import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-success',
templateUrl: './success.component.html',
styles: [`
h1{
  padding: 40px;
  background-color: lightgreen;
  border: 1px solid darkgreen;
}`]
})

export class SuccessComponent{
name: string = 'Sumant';
company: string = 'Benchmark';
sname = 'Sumant';
allowbutton = false;
buttonstatus = "Not created";

constructor(){
  setTimeout(()=> {
this.allowbutton = true;
  }, 2000)
}

OncreateSuccess(){
  this.buttonstatus= "Created new Succes " + this.sname;
}

OnUpdateSuccessName(event: Event){
  this.sname = (<HTMLInputElement>event.target).value;
}
}

