import { Injectable } from '@angular/core';
import { buildings } from './buildings';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})

export class BuildingService {

  baseUrl = 'http://localhost/api';

  constructor(private http: HttpClient) { }

  getBuildings() {
    return this.http.get(`${this.baseUrl}/list`).pipe(
      map((res: any) => {
        return res['data'];
      })
    );
  }
}
