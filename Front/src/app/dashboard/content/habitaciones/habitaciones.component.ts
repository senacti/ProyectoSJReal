import { Component } from '@angular/core';
import { Subscription } from 'rxjs';
import { Services } from '../../../sjreal-logic/services';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-habitaciones',
  standalone: true,
  imports: [CommonModule,FormsModule],
  templateUrl: './habitaciones.component.html',
  styleUrl: './habitaciones.component.scss'
})
export class HabitacionesComponent {


  private unsubscribe: Subscription[] = [];
  constructor(private _services: Services) {}

  sinHabitaciones: boolean = false;
  habitaciones : any = [];
  
  tipos_habitacion = [ {id:1, nombre:"sencilla"},{id:2, nombre:"doble"},{id:3, nombre:"familiar"}]

  habitacion = {
    habitacion_tipo: '',
    numero_habitacion: '',
    descripcion_habitacion: '',
    capacidad_habitacion: '',
    status_habitacion: '',
    precio_habitacion: '',
    estado_aseo: '',
  };

  ngOnInit(): void {
    
    const sub1 = this._services.getHabitacion().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          this.sinHabitaciones  =  true;
          
         }else{
          console.log(res.data)
          this.habitaciones =res.data
         }
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);
  }

  crearOculto: boolean = true;
  crearHabitacion(){
    this.crearOculto = !this.crearOculto;
    
    const sub1 = this._services.getHabitacion().subscribe({
      next:(res:any) => {
         console.log(res.data);
         if(res.data.length === 0){
          console.log("mencionar que no hay caterogiras nno deberia poder crear productos");
         }else{
          this.habitaciones =res.data
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


  enviarFormularioHabitacion(){
    // Aquí podrías hacer una solicitud HTTP para guardar la categoría

    console.log(this.habitacion);
    const sub2 = this._services.postHabitacion(this.habitacion).subscribe({
      next:(res:any) => {
         console.log(res);
         this.ngOnInit();
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub2);

    // Limpia los datos del formulario después de crear la habitacion
    this.habitacion = {
        habitacion_tipo: '',
        numero_habitacion: '',
        descripcion_habitacion: '',
        capacidad_habitacion: '',
        status_habitacion: '',
        precio_habitacion: '',
        estado_aseo: '',
    };

    // Cierra el modal
    this.cerrarModal();
  }

  cerrarModal() {
    this.crearOculto = true;
  }


}
