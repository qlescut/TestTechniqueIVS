import { Injectable } from '@angular/core';
import { pieces } from './pieces';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})

export class PieceService {

  baseUrl = 'http://localhost/api';

  constructor(private http: HttpClient) { }

  getPieces(){
    return this.http.get(`${this.baseUrl}/list`).pipe(
      map((res: any) => {
        return res['data'];
      })
    );
  }
}