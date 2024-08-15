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

  mostrarLista = false;

  @Output() estadoCategoria = new EventEmitter<boolean>();
  @Output() estadoProducto = new EventEmitter<boolean>();

  toggleCategoria() {
    this.categoria = true;
    this.estadoCategoria.emit(true); // Emitimos el valor booleano
  }

  toggleProducto() {
    this.producto = !this.producto;
    this.estadoProducto.emit(this.producto); // Emitimos el valor booleano
  }


  toggleLista() {
    this.mostrarLista = !this.mostrarLista;
  }


}
