import { Component, OnInit } from '@angular/core';
import { buildings } from '../buildings';
import { BUILDINGS } from '../mock-buildings';
import { BuildingService } from '../building.service';

@Component({
  selector: 'app-buildings',
  templateUrl: './buildings.component.html',
  styleUrls: ['./buildings.component.css']
})

export class BuildingsComponent implements OnInit {
  building: buildings[] = [];

  constructor(private buildingService : BuildingService) { }

  ngOnInit(): void {
  }

}
