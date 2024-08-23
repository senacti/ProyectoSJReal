import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Services } from '../../../sjreal-logic/services';
import { Subscription } from 'rxjs';

@Component({
  selector: 'app-reservas',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './reservas.component.html',
  styleUrl: './reservas.component.scss'
})
export class ReservasComponent {

  private unsubscribe: Subscription[] = [];
  constructor(private _services: Services) { }

  crearOculto: boolean = true;
  crearOcultoHuespedes: boolean = true;

  sinReservas: boolean = false;
  reservas: any = [];
  habitaciones: any = [];
  huespedes: any = [];
  habitaciones_selecionadas: any = [];
  vehiculos: any = [];

  reserva = {
    codigo_reserva: '',
    checkin_reserva: '',
    checkout_reserva: '',
    cantidad_habitaciones_reservas: '',
    precio_por_habitacion_reserva: '',
    precio_total_reserva: '',
    huespedes: [
        {
            tipo_documento_huesped: '',
            documento_huesped: '',
            nombre_huesped: '',
            apellido_huesped: '',
        }
    ],
    habitaciones_seleccionadas: [],
    vehiculos: [],
    pago: [],
};


  ngOnInit(): void {

    const sub1 = this._services.getReservas().subscribe({
      next: (res: any) => {
        console.log(res.data);
        if (res.data.length === 0) {
          this.sinReservas = true;

        } else {
          console.log(res.data)
          this.reservas = res.data
        }
      },
      error: (e: any) => console.log(e)
    });
    this.unsubscribe.push(sub1);
  }


  formularioHuespedes() {
    this.crearOcultoHuespedes = !this.crearOcultoHuespedes;
  }

  crearReserva() {
    this.crearOculto = !this.crearOculto;
    const sub2 = this._services.getHabitacion().subscribe({
      next: (res: any) => {
        console.log(res.data);
        if (res.data.length === 0) {
          console.log("mencionar que no hay habitaciones");

        } else {
          console.log(res.data)
          this.habitaciones = res.data
        }
      },
      error: (e: any) => console.log(e)
    });
    this.unsubscribe.push(sub2);

  }



  eliminarReserva(id: number) {
    // Lógica para eliminar la categoría
    console.log("wtff");
  }




  enviarFormularioReserva() {
    // Aquí podrías hacer una solicitud HTTP para guardar la categoría

    // this.reserva.huespedes = this.huespedes;
    // this.reserva.habitaciones_selecionadas = this.habitaciones_selecionadas;
    // this.reserva.vehiculos = this.vehiculos;

    console.log(this.reserva);
    const sub2 = this._services.postReserva(this.reserva).subscribe({
      next: (res: any) => {
        console.log(res);
      },
      error: (e: any) => console.log(e)
    });
    this.unsubscribe.push(sub2);

    // Limpia los datos del formulario después de crear la categoría
    this.reserva = {
      codigo_reserva: '',
      checkin_reserva: '',
      checkout_reserva: '',
      cantidad_habitaciones_reservas: '',
      precio_por_habitacion_reserva: '',
      precio_total_reserva: '',
      huespedes: [
          {
              tipo_documento_huesped: '',
              documento_huesped: '',
              nombre_huesped: '',
              apellido_huesped: '',
          }
      ],
      habitaciones_seleccionadas: [],
      vehiculos: [],
      pago: [],
  };
    // Cierra el modal
    this.cerrarModal();
  }
  
  agregarHuesped() {
    this.reserva.huespedes.push({
        tipo_documento_huesped: '',
        documento_huesped: '',
        nombre_huesped: '',
        apellido_huesped: '',
    });
}

  cerrarModal() {
    this.crearOculto = true;
  }
  cerrarModalHuespedes() {
    this.crearOcultoHuespedes = true;
  }

}
