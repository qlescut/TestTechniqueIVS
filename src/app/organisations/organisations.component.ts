import { Component, OnInit } from '@angular/core';
import { organisations } from '../organisations';
import { OrganisationService } from '../organisation.service';

@Component({
  selector: 'app-organisations',
  templateUrl: './organisations.component.html',
  styleUrls: ['./organisations.component.css']
})

export class OrganisationsComponent implements OnInit {
  organisation: organisations[] = [];

  constructor(private organisationService : OrganisationService) { }

  ngOnInit(): void {
  }
}
