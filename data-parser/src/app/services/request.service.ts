import {HttpClient, HttpHeaders} from '@angular/common/http';
import {Injectable} from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class RequestService {
  options: { headers: HttpHeaders; responseType: any } = {
    headers: new HttpHeaders().set("Content-Type", "application/x-www-form-urlencoded"),
    responseType: 'text'
  };
  constructor(private http: HttpClient) { }

  get(url: any, params = {}) {
    return this.http.get(url, { headers: this.options.headers, responseType: this.options.responseType, ...params });
  }

  post(url: any, params = {}) {
    return this.http.post<any>(url, { ...this.options, ...params });
  }

  put(url: any, params = {}) {
    return this.http.put<any>(url, { ...this.options, ...params });
  }





}
