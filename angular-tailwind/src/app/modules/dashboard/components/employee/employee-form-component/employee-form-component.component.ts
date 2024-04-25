import { Component } from '@angular/core';
import { FormBuilder, FormGroup, ReactiveFormsModule } from '@angular/forms';

import { Employee } from '../../../models/employee';

@Component({
  selector: 'employee-form-component',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './employee-form-component.component.html',
  styleUrl: './employee-form-component.component.scss'
})
export class EmployeeFormComponent {
  employeeForm: FormGroup;

  constructor(private formBuilder: FormBuilder) {
    this.employeeForm = new FormGroup({}); // Inicializa la propiedad employeeForm
    this.createForm();
  } // Declara una variable para el formulario


  createForm() {
    this.employeeForm = this.formBuilder.group({
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
