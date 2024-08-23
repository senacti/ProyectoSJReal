import { Component } from '@angular/core';
import { Subscription } from 'rxjs';
import { Services } from '../../../sjreal-logic/services';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-inventario',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './inventario.component.html',
  styleUrl: './inventario.component.scss'
})
export class InventarioComponent {

  private unsubscribe: Subscription[] = [];
  constructor(private _services: Services) {}

  sinInventarios: boolean = false;
  inventarios : any = [];
  
  inventario = {
    inventario_id_producto: '',
    cantidad_inventario: '',
    nombre_inventario: '',
    categoria_inventario: '',
    fecha_inventario: '',
    estado_inventario: '',
    cantidad_minima_inventario: '',
  };
  categorias : any = [];

  ngOnInit(): void {
    
    const sub1 = this._services.getInventarios().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          this.sinInventarios  =  true;
          
         }else{
          console.log(res.data)
          this.inventarios =res.data
         }
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);
  }

  crearOculto: boolean = true;
  crearInventario(){
    this.crearOculto = !this.crearOculto;
    
    const sub1 = this._services.getInventarios().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          console.log("mencionar que no hay caterogiras nno deberia poder crear Inventarios");
         }else{
          this.categorias =res.data
         }
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);

  }



  eliminarReserva(id: number) {
    // Lógica para eliminar la categoría
    console.log("wtff");
  }




  enviarFormularioInventario(){
    // Aquí podrías hacer una solicitud HTTP para guardar la categoría

    console.log(this.inventarios);
    const sub2 = this._services.postReserva(this.inventarios).subscribe({
      next:(res:any) => {
         console.log(res);
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub2);

    // Limpia los datos del formulario después de crear la categoría
    this.inventario = {
      inventario_id_producto: '',
      cantidad_inventario: '',
      nombre_inventario: '',
      categoria_inventario: '',
      fecha_inventario: '',
      estado_inventario: '',
      cantidad_minima_inventario: '',
    };

    // Cierra el modal
    this.cerrarModal();
  }

  cerrarModal() {
    this.crearOculto = true;
  }

}
