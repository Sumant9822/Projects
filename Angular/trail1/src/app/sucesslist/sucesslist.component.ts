import { Component, OnInit ,Input} from '@angular/core';

@Component({
  selector: 'app-sucesslist',
  templateUrl: './sucesslist.component.html',
  styleUrls: ['./sucesslist.component.css'],
  styles: [`
  h3 {
    color: dodgerblue;
  }
  `]
})
export class SucesslistComponent{
showSecret = false;
log :any[]= [];
  constructor() { }

  ngOnInit(): void {
  }

onToggleDetails() {
  this.showSecret = !this.showSecret;
  this.log.push(this.log.length + 1);
}
}
