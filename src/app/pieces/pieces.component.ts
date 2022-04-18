import { Component, OnInit } from '@angular/core';
import { pieces } from '../pieces';
import { PieceService } from '../piece.service';

@Component({
  selector: 'app-pieces',
  templateUrl: './pieces.component.html',
  styleUrls: ['./pieces.component.css']
})

export class PiecesComponent implements OnInit {
  piece: pieces[] = [];

  constructor(private pieceService : PieceService) { }

  ngOnInit(): void {
  }

}
