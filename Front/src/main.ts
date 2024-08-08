import { bootstrapApplication } from '@angular/platform-browser';
import { appConfig } from './app/app.config';
import { AppComponent } from './app/app.component';

bootstrapApplication(AppComponent, appConfig)
  .catch((err) => console.error(err));


//   import { bootstrapApplication } from '@angular/platform-browser';
// import { provideHttpClient } from '@angular/common/http';
// import { AppComponent } from './app/app.component';
// import { AppRoutingModule } from './app/app-routing.module';

// bootstrapApplication(AppComponent, {
//   providers: [
//     provideHttpClient(),
//     AppRoutingModule
//   ]
// });