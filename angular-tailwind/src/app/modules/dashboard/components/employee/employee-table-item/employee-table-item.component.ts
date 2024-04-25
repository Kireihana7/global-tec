import { Component, Input, OnInit } from '@angular/core';
import { Employee } from '../../../models/employee';
import { CurrencyPipe } from '@angular/common';
import { AngularSvgIconModule } from 'angular-svg-icon';

@Component({
    selector: '[employee-table-item]',
    templateUrl: './employee-table-item.component.html',
    standalone: true,
    imports: [AngularSvgIconModule, CurrencyPipe],
})
export class EmployeeTableItemComponent implements OnInit {
  @Input() employee = <Employee>{};

  constructor() {}

  ngOnInit(): void {}
}
