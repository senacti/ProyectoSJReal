import { Component, Input, SimpleChanges } from '@angular/core';
import { CategoriaComponent } from './categoria/categoria.component';
import { CommonModule } from '@angular/common';
import { ProductoComponent } from "./producto/producto.component";
import { HabitacionesComponent } from "./habitaciones/habitaciones.component";
import { ReservasComponent } from './reservas/reservas.component';
import { InventarioComponent } from './inventario/inventario.component';

@Component({
  selector: 'app-content',
  standalone: true,
  imports: [
            CommonModule,
            CategoriaComponent, ProductoComponent, HabitacionesComponent, ReservasComponent, InventarioComponent
          ],
  templateUrl: './content.component.html',
  styleUrl: './content.component.scss'
})
export class ContentComponent {
  @Input() producto: boolean = false;
  @Input() categoria: boolean = false;
  @Input() habitacion: boolean = false;
  @Input() reserva: boolean = false;
  @Input() inventario: boolean = false;
  


  // ngOnChanges(changes: SimpleChanges) {
   
  //   if (changes['categoria']) {
  //     console.log('El ************:', changes['categoria'].currentValue);
  //     this.categoria = changes['categoria'].currentValue;
  //   }
  //   if (changes['producto']) {

  //     console.log('El /////////////:', changes['producto'].currentValue);
  //     this.producto = changes['producto'].currentValue;
  //   }
  // }
}
