// import { Routes } from '@angular/router';

// export const routes: Routes = [];


import { provideRouter, withComponentInputBinding } from '@angular/router';
import { BodyComponent } from './homepage/body/body.component';
import { UserRegistrationComponent } from './user-registration/user-registration.component';
import { DashboardComponent } from './dashboard/dashboard.component';
export const routes = [
    
  { path: '', component: BodyComponent },
  { path: 'register', component: UserRegistrationComponent },
  { path: 'dashboard', component: DashboardComponent },
  
//   { path: '', redirectTo: '/inicio'/*, pathMatch: 'full' */ }, // Redirige al inicio por defecto
  // Puedes agregar más rutas aquí si lo necesitas
];

export const appRouter = provideRouter(routes, withComponentInputBinding());