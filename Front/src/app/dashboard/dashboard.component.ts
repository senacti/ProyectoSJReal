import { Component } from '@angular/core';
import { TopbarComponent } from './topbar/topbar.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { ContentComponent } from './content/content.component';

@Component({
  selector: 'app-dashboard',
  standalone: true,
  imports: [TopbarComponent,SidebarComponent,ContentComponent],
  templateUrl: './dashboard.component.html',
  styleUrl: './dashboard.component.scss'
})
export class DashboardComponent {

  mensajeCategoria: boolean = false;
  mensajeProducto: boolean = false;
  mensajeHabitacion: boolean = false;
  mensajeReserva: boolean = false;
  mensajeInventario: boolean = false;

  manejarProducto(nuevoEstado: boolean) {
    this.mensajeProducto = nuevoEstado;
    this.mensajeCategoria = false; // Desactivar categoría si se activa el producto
    this.mensajeHabitacion = false; // Desactivar habitacion si se activa el producto
    this.mensajeReserva = false; // Desactivar habitacion si se activa el reserva
    this.mensajeInventario = false; // Desactivar habitacion si se activa el inventario
  }
  manejarCategoria(nuevoEstado: boolean) {
    this.mensajeCategoria = nuevoEstado;
    this.mensajeProducto = false; // Desactivar producto si se activa la categoría
    this.mensajeHabitacion = false; // Desactivar habitacion si se activa la categoría
    this.mensajeReserva = false; // Desactivar habitacion si se activa la reserva
    this.mensajeInventario = false; // Desactivar habitacion si se activa la inventario
    
  }

  manejarHabitacion(nuevoEstado: boolean) {
    this.mensajeHabitacion = nuevoEstado;
    this.mensajeProducto = false; // Desactivar producto si se activa la categoría
    this.mensajeCategoria = false; // Desactivar categoria si se activa la categoría
    this.mensajeReserva = false; // Desactivar categoria si se activa la reserva
    this.mensajeInventario = false; // Desactivar categoria si se activa la inventario
  }

  manejarReserva(nuevoEstado: boolean) {
    this.mensajeReserva = nuevoEstado;
    this.mensajeProducto = false; // Desactivar producto si se activa la categoría
    this.mensajeCategoria = false; // Desactivar categoria si se activa la categoría
    this.mensajeHabitacion = false; // Desactivar categoria si se activa la habitacion
    this.mensajeInventario = false; // Desactivar categoria si se activa la inventario
  }

  manejarInventario(nuevoEstado: boolean) {
    this.mensajeInventario = nuevoEstado;
    this.mensajeProducto = false; // Desactivar producto si se activa la categoría
    this.mensajeCategoria = false; // Desactivar categoria si se activa la categoría
    this.mensajeHabitacion = false; // Desactivar categoria si se activa la categoría
    this.mensajeReserva = false; // Desactivar categoria si se activa la categoría
  }



  // estadoCategoria: boolean = false;
  // estadoProducto: boolean = false;

  // mensajeCategoria: boolean = false;
  // mensajeProducto: boolean = false;



  // manejarCategoria(nuevoEstado: boolean) {
  //   this.estadoCategoria = nuevoEstado;
  //   console.log('Datos recibidos del hijo:', this.estadoCategoria);
  //   if(this.estadoCategoria){
  //     this.activarCategoria();
  //   }
  // }
  // manejarProducto(nuevoEstado: boolean){
  //   this.estadoProducto = nuevoEstado;
  //   console.log('Datos recibidos del hijo:', this.estadoProducto);
  //   if(this.estadoProducto){
  //     this.activarProducto();
  //   }
  // }
  

  // activarCategoria() {
  //   this.mensajeCategoria = !this.mensajeCategoria;
  // }

  // activarProducto() {
  //   this.mensajeProducto = !this.mensajeCategoria;
  // }


}

