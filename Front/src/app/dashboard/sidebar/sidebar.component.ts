import { CommonModule } from '@angular/common';
import { Component, EventEmitter, Output } from '@angular/core';
import { ContentComponent } from '../content/content.component';

@Component({
  selector: 'app-sidebar',
  standalone: true,
  imports: [CommonModule,ContentComponent],
  templateUrl: './sidebar.component.html',
  styleUrl: './sidebar.component.scss'
})
export class SidebarComponent {

  private categoria: boolean = false;
  private producto: boolean = false;
  private habitacion: boolean = false;
  private reserva: boolean = false;
  private inventario: boolean = false;

  mostrarLista = false;

  @Output() estadoCategoria = new EventEmitter<boolean>();
  @Output() estadoProducto = new EventEmitter<boolean>();
  @Output() estadoHabitacion = new EventEmitter<boolean>();
  @Output() estadoReserva = new EventEmitter<boolean>();
  @Output() estadoInventario = new EventEmitter<boolean>();

  activarCategoria() {
    this.categoria = true;
    this.estadoCategoria.emit(this.categoria); 
  }

  activarProducto() {
    this.producto = true;
    this.estadoProducto.emit(this.producto); 
  }

  activarHabitacion() {
    this.habitacion = true;
    this.estadoHabitacion.emit(this.habitacion); 
  }
  activarReserva(){
    this.reserva = true;
    this.estadoReserva.emit(this.reserva); 
  }
  activarInventario(){
    this.inventario = true;
    this.estadoInventario.emit(this.inventario); 
  }


  activarLista() {
    this.mostrarLista = !this.mostrarLista;
  }


}
