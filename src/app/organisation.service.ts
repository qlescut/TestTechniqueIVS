import { Injectable } from '@angular/core';
import { organisations } from './organisations';
import { ORGANISATIONS } from './mock-organisations';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})

export class OrganisationService {

  baseUrl = 'http://localhost/api';
  
  constructor(private http: HttpClient) { }

  getOrganisations() {
    return this.http.get(`${this.baseUrl}/list`).pipe(
      map((res: any) => {
        return res['data'];
      })
    );
  }
}