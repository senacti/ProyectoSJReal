import { Component, Input, SimpleChanges } from '@angular/core';
import { RecursosComponent } from './recursos/recursos.component';
import { CategoriaComponent } from './categoria/categoria.component';
import { CommonModule } from '@angular/common';
import { ProductoComponent } from "./producto/producto.component";

@Component({
  selector: 'app-content',
  standalone: true,
  imports: [RecursosComponent, CategoriaComponent, CommonModule, ProductoComponent],
  templateUrl: './content.component.html',
  styleUrl: './content.component.scss'
})
export class ContentComponent {

  @Input() categoria: boolean = false;
  @Input() producto: boolean = false;


  ngOnChanges(changes: SimpleChanges) {
   
    if (changes['categoria']) {
      console.log('El ************:', changes['categoria'].currentValue);
      this.categoria = changes['categoria'].currentValue;
    }
    if (changes['producto']) {

      console.log('El /////////////:', changes['producto'].currentValue);
      this.producto = changes['producto'].currentValue;
    }
  }
}
