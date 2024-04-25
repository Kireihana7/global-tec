import { EmployeeService } from './../../services/employee-service.service';
import { Component, OnInit } from '@angular/core';
import { Employee } from '../../models/employee';
import { EmployeesTableComponent } from '../../components/employee/employees-table/employees-table.component';
import { EmployeeDetailComponent } from '../../components/employee/employee-detail/employee-detail.component';
import { ReactiveFormsModule } from '@angular/forms'; // Importa ReactiveFormsModule

@Component({
    selector: 'app-employee',
    templateUrl: './employee.component.html',
    standalone: true,
    imports: [

      EmployeeDetailComponent,

        EmployeesTableComponent,

        EmployeesTableComponent,
    ],
})
export class EmployeeComponent implements OnInit {
  public employees: Employee[] = [];

  constructor(private employeeService: EmployeeService) { }

  ngOnInit() {
    let employees = this.loadEmployees();

  }

  loadEmployees(): any {
    return this.employeeService.getEmployees()

  }
}
