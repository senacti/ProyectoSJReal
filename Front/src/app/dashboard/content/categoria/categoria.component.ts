import { CommonModule } from '@angular/common';
import { Component, OnInit } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Subscription } from 'rxjs';
import { Services } from '../../../sjreal-logic/services';

@Component({
  selector: 'app-categoria',
  standalone: true,
  imports: [CommonModule ,FormsModule],
  templateUrl: './categoria.component.html',
  styleUrl: './categoria.component.scss'
})
export class CategoriaComponent implements OnInit {

  private unsubscribe: Subscription[] = [];
  constructor(private _services: Services) {}

  sinCategorias: boolean = false;
  categorias : any = [];
  ngOnInit(): void {
    
    const sub1 = this._services.getCategoria().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          this.sinCategorias  =  true;
          
         }else{
          this.categorias =res.data;
          this.sinCategorias  =  false;
         }
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);
  }

  crearOculto: boolean = true;
  crearCategoria(){
    this.crearOculto = !this.crearOculto;
  }


  
  // categorias = [
  //   { id: 1, code: 'C001', nombre_categoria: 'Producto 1' },
  //   { id: 2, code: 'C002', nombre_categoria: 'Producto 2' },
  //   { id: 3, code: 'C003', nombre_categoria: 'Producto 3' },
  // ];

  eliminarCategoria(id: number) {
    // Lógica para eliminar la categoría
    // this.categorias = this.categorias.filter(categoria => categoria.id !== id);
    console.log("wtff");
  }


  categoria = {
    code: '',
    nombre_categoria: '',
    // descripcion: ''
  };

  enviarFormularioCategoria(){
    // Aquí podrías hacer una solicitud HTTP para guardar la categoría

    const sub2 = this._services.postCategoria(this.categoria).subscribe({
      next:(res:any) => {
         console.log(res);
         this.ngOnInit();
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub2);

    // Limpia los datos del formulario después de crear la categoría
    this.categoria = {
      code: '',
      nombre_categoria: '',
    };

    // Cierra el modal
    this.cerrarModal();
  }

  cerrarModal() {
    this.crearOculto = true;
  }
}
