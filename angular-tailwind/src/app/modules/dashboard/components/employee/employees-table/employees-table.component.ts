import { Component, OnInit } from '@angular/core';
import { Employee } from '../../../models/employee';
import { EmployeeTableItemComponent } from '../employee-table-item/employee-table-item.component';
import { NgFor } from '@angular/common';
import { EmployeeService } from './../../../services/employee-service.service';
import { Subscription } from 'rxjs';

@Component({
    selector: '[employee-table]',
    templateUrl: './employees-table.component.html',
    standalone: true,
    imports: [NgFor, EmployeeTableItemComponent],
})
export class EmployeesTableComponent implements OnInit {
  public employees: Employee[] = [];
  private subscription: Subscription = new Subscription();

  constructor(private employeeService: EmployeeService) {}

  ngOnInit() {
    let s = this.loadEmployees();
    console.log(s,"here")
  }

  loadEmployees(): any {
    return this.employeeService.getEmployees()

  }
}
