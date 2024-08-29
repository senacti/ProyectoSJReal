
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-body',
  templateUrl: './body.component.html',
  styleUrls: ['./body.component.scss']
})
export class BodyComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    this.initDatePickers();
  }

  initDatePickers(): void {
    
    const checkIn = document.getElementById('check-in') as HTMLInputElement;
    const checkOut = document.getElementById('check-out') as HTMLInputElement;
    const botonReserva = document.getElementById('boton-reserva') as HTMLButtonElement;

    // establecer la fechq minima del el calendario 
    const hoy = new Date().toISOString().split('T')[0];
    checkIn.min = hoy;
    checkOut.min = hoy;

    // validacijon de las fechas 
    const validarFechas = () => {
      const fechaEntrada = new Date(checkIn.value);
      const fechaSalida = new Date(checkOut.value);
      botonReserva.disabled = !(fechaSalida > fechaEntrada && checkIn.value && checkOut.value);
    };

    checkIn.addEventListener('change', () => {
      checkOut.min = checkIn.value;
      validarFechas();
    });

    checkOut.addEventListener('change', validarFechas);

    botonReserva.addEventListener('click', () => {
      if (!botonReserva.disabled) {
        window.location.href = 'reserva.html'; 
      }
    });
  }
}




// import { Component } from '@angular/core';
// import { HttpClient } from '@angular/common/http';
// import { CommonModule } from '@angular/common';
// import { FormsModule } from '@angular/forms';
// import { HttpClientModule } from '@angular/common/http';

// @Component({
//   selector: 'app-user-registration',
//   standalone: true,
//   imports: [CommonModule, FormsModule, HttpClientModule],
//   templateUrl: './user-registration.component.html',
//   styleUrls: ['./user-registration.component.scss']
// })