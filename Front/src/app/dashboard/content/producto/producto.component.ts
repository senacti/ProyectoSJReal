import { Component } from '@angular/core';
import { Services } from '../../../sjreal-logic/services';
import { Subscription } from 'rxjs';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-producto',
  standalone: true,
  imports: [CommonModule,FormsModule],
  templateUrl: './producto.component.html',
  styleUrl: './producto.component.scss'
})
export class ProductoComponent {

  private unsubscribe: Subscription[] = [];
  constructor(private _services: Services) {}

  sinProductos: boolean = false;
  productos : any = [];
  
  producto = {
    producto_id_categoria: 0,
    precio_producto: '',
    nombre_producto: '',
    estado_producto: '',
  };
  categorias : any = [];

  ngOnInit(): void {
    
    const sub1 = this._services.getProductos().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          this.sinProductos  =  true;
          
         }else{
          console.log(res.data)
          this.productos =res.data
         }
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);
  }

  crearOculto: boolean = true;
  crearProducto(){
    this.crearOculto = !this.crearOculto;
    
    const sub1 = this._services.getCategoria().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          console.log("mencionar que no hay caterogiras nno deberia poder crear productos");
         }else{
          this.categorias =res.data
         }
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);

  }



  eliminarCategoria(id: number) {
    // Lógica para eliminar la categoría
    console.log("wtff");
  }




  enviarFormularioProducto(){
    // Aquí podrías hacer una solicitud HTTP para guardar la categoría

    console.log(this.producto);
    const sub2 = this._services.postProducto(this.producto).subscribe({
      next:(res:any) => {
         console.log(res);
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub2);

    // Limpia los datos del formulario después de crear la categoría
    this.producto = {
      producto_id_categoria: 0,
      precio_producto: '',
      nombre_producto: '',
      estado_producto: '',
    };

    // Cierra el modal
    this.cerrarModal();
  }

  cerrarModal() {
    this.crearOculto = true;
  }

}
