import { Component } from '@angular/core';
import { CategoriaComponent } from '../categoria/categoria.component';
import { HabitacionesComponent } from '../habitaciones/habitaciones.component';
import { ProductoComponent } from '../producto/producto.component';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-recursos',
  standalone: true,
  imports: [CategoriaComponent, HabitacionesComponent, ProductoComponent, CommonModule],
  templateUrl: './recursos.component.html',
  styleUrl: './recursos.component.scss'
})
export class RecursosComponent {


}
