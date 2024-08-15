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

  estadoCategoria: boolean = false;
  estadoProducto: boolean = false;

  mensajeCategoria: boolean = false;
  mensajeProducto: boolean = false;



  manejarCategoria(nuevoEstado: boolean) {
    this.estadoCategoria = nuevoEstado;
    console.log('Datos recibidos del hijo:', this.estadoCategoria);
    if(this.estadoCategoria){
      this.activarCategoria();
    }
  }
  manejarProducto(nuevoEstado: boolean){
    this.estadoProducto = nuevoEstado;
    console.log('Datos recibidos del hijo:', this.estadoProducto);
    if(this.estadoProducto){
      this.activarProducto();
    }
  }
  

  activarCategoria() {
    this.mensajeCategoria = !this.mensajeCategoria;
  }

  activarProducto() {
    this.mensajeProducto = !this.mensajeCategoria;
  }


}

