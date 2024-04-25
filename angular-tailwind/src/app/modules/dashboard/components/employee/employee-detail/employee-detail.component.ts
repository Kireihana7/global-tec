import { Component, Input, OnInit } from '@angular/core';
import { Employee } from '../../../models/employee';
import { NgStyle, CurrencyPipe } from '@angular/common';
import { FormGroup, FormBuilder } from '@angular/forms';

@Component({
    selector: '[employee-detail]',
    templateUrl: './employee-detail.component.html',
    standalone: true,
    imports: [NgStyle, CurrencyPipe],
})
export class EmployeeDetailComponent  {
  @Input() employee: Employee = <Employee>{};

 public employeeForm: FormGroup;

  constructor(private FormBuilder: FormBuilder) {
    this.employeeForm = new FormGroup({}); // Inicializa la propiedad employeeForm
    this.createForm();
  } // Declara una variable para el formulario


  createForm() {
    this.employeeForm = this.FormBuilder.group({
      first_name: '',
      middle_name: '',
      last_name: '',
      other_name: '',
      countryJob: '',
      citizenship: '',
      personal_ID: '',
      type_ID: '',
      email: '',
      started_in: '', // Puedes inicializarlo con una fecha predeterminada si lo deseas
      area: '',
      status: ''
    });
  }

  onSubmit() {
    // Aquí puedes manejar la lógica para enviar los datos del formulario a través de un servicio, por ejemplo
    console.log(this.employeeForm.value);
  }
}
