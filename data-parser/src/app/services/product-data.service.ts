import {Injectable} from '@angular/core';
import {Observable} from 'rxjs';
import {RequestService} from './request.service';

@Injectable({
  providedIn: 'root'
})
export class ProductDataService {
  constructor(private request: RequestService) { }

  getProductsHtmlPage(page: number = 1, productListLimit: number = 40, productListOrder: string = "position"): Observable<any> {
    return this.request.get(this.getCorsPolicyBypassUrl() + this.getBaseUrl(page, productListLimit, productListOrder));
  }

  getBaseUrl(page: number, productListLimit: number, productListOrder: string): string {
    return `https://twoje-lampy.pl/lampy-wewnetrzne/twoje-lampy-zyrandole.html?p=${page}&product_list_limit=${productListLimit}&product_list_order=${productListOrder}`;
  }

  getCorsPolicyBypassUrl(): string {
    return "https://cors-anywhere.herokuapp.com/";
    // return "";
  }
}
