import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { OrganisationsComponent } from './organisations/organisations.component';
import { BuildingsComponent } from './buildings/buildings.component';
import { PiecesComponent } from './pieces/pieces.component';
import { HttpClientModule } from '@angular/common/http';
import { BuildingService } from './building.service';
import { OrganisationService } from './organisation.service';
import { PieceService } from './piece.service';

@NgModule({
  declarations: [
    AppComponent,
    OrganisationsComponent,
    BuildingsComponent,
    PiecesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
  ],
  providers: [
    BuildingService,
    OrganisationService,
    PieceService
  ],
  bootstrap: [AppComponent]
})

export class AppModule { }
