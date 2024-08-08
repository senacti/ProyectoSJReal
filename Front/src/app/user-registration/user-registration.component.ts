
import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Services } from '../sjreal-logic/services';
import { Subscription } from 'rxjs';

@Component({
  selector: 'app-user-registration',
  standalone: true,
  imports: [CommonModule, FormsModule],
  templateUrl: './user-registration.component.html',
  styleUrls: ['./user-registration.component.scss']
})
export class UserRegistrationComponent {
  user = {
    name: '',
    email: '',
    password: ''
  };

  private unsubscribe: Subscription[] = [];
 
  constructor(private _services: Services) {}


  onSubmit(){

    const sub1 = this._services.postRegisterUser(this.user).subscribe({
      next:(res:any) => {
         console.log(res);
      },
      error: (e:any) => console.log(e)
    });
    this.unsubscribe.push(sub1);

  }
}