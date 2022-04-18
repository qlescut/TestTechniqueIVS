import { Component } from '@angular/core';
import { BuildingService } from './building.service';
import { OrganisationService } from './organisation.service';
import { PieceService } from './piece.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html'


})
export class AppComponent {
  title = 'Test Technique IVS';
  constructor(private buildingService:BuildingService, organisationService:OrganisationService ,pieceService:PieceService) {}
}
