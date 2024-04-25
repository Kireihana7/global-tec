import { NgModule } from '@angular/core';

import { DashboardRoutingModule } from './dashboard-routing.module';
import { FormsModule, ReactiveFormsModule } from '@angular/forms'; // Importa ReactiveFormsModule


@NgModule({
  imports: [DashboardRoutingModule,

    FormsModule, // Importa FormsModule si también necesitas trabajar con formularios de plantilla
    ReactiveFormsModule // Importa ReactiveFormsModule
  ],
})
export class DashboardModule {}
