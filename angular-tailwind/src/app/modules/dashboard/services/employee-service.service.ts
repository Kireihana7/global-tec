import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Employee } from './../models/employee';
import axios from 'axios';

@Injectable({
  providedIn: 'root'
})
export class EmployeeService {
 private apiUrl = 'http://localhost:8000/api/employees'; // Reemplaza con la URL de tu API

  constructor() { }

  public async getEmployees():Promise<any> {
    try {
      const response =  await axios.get<Employee[]>(this.apiUrl);
      console.log(response)
      return response;
    } catch (error) {
      console.error('Error fetching employees:', error);
      return []; // Retornar un array vacío en caso de error
    }
  }

}
