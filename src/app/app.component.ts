import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'application';
}

@Component({
  selector: 'app-user-table',
  template: `
    <table>
      <thead>
        <tr>
          <th>Temperatura</th>
          <th>Umiditate</th>
          <th>Timp</th>
        </tr>
      </thead>
      <tbody>
        <tr *ngFor="let info of date">
          <td>{{ info.temperatura }}</td>
          <td>{{ info.umiditate }}</td>
          <td>{{ info.timp }}</td>
        </tr>
      </tbody>
    </table>
  `
})
//{temperatura: '20'},{temperatura: '30'}

export class UserTableComponent {
  date: any[] = [];

  constructor(private http: HttpClient) {
    this.http.get('http://localhost/index.php')
      .subscribe(data => {
        console.log(data);
      });
  }

  
}


