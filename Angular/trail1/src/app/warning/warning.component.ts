import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-warning',
  // templateUrl: './warning.component.html',
  // template: `<app-success></app-success>`,
  template: `<p>This is warning</p>`,
  styleUrls: ['./warning.component.css']
})
export class WarningComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

}
