import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { RequestService } from './request.service';
import { Categories, SubCategoriesIndoorLamps, SubCategoriesOutdoorLamps } from '../models/categories.model'
@Injectable({
  providedIn: 'root'
})
export class ProductDataService {
  constructor(private request: RequestService) { }

  getProductsHtmlPage(page: number = 1, productListLimit: number = 40, productListOrder: string = "position", category: Categories = Categories.INDOOR_LAMPS,
    subcategory: SubCategoriesOutdoorLamps | SubCategoriesIndoorLamps | '' = ''): Observable<any> {
    return this.request.get(this.getCorsPolicyBypassUrl() + this.getBaseUrl(page, productListLimit, productListOrder, category, subcategory));
  }

  getProductHtmlPage(url: string): Observable<any> {
    return this.request.get(this.getCorsPolicyBypassUrl() + url);
  }

  getBaseUrl(page: number, productListLimit: number, productListOrder: string,
    category: Categories, subcategory: SubCategoriesOutdoorLamps | SubCategoriesIndoorLamps | ''): string {
    return 'https://twoje-lampy.pl/' + category + (subcategory ? '/' + subcategory : '') + '.html?p=${page}&product_list_limit=${productListLimit}&product_list_order=${productListOrder}';
  }


  getCorsPolicyBypassUrl(): string {
    return "https://cors-anywhere.herokuapp.com/";
    // return "";
  }
}
