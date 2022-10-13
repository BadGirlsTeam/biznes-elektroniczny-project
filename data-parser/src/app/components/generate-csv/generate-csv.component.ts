import {Component, OnInit} from '@angular/core';
import {ProductDataService} from 'src/app/services/product-data.service';
import {saveAs} from "file-saver";

@Component({
  selector: 'app-generate-csv',
  templateUrl: './generate-csv.component.html',
  styleUrls: ['./generate-csv.component.scss']
})
export class GenerateCsvComponent implements OnInit {
  creatingInProgress: boolean = false;
  countOfProductsToGenerate: number = 500;
  productsData: any = [];
  creatingProgresValue: number = 0;
  csvArray: any = undefined
  constructor(private productDataService: ProductDataService) { }

  ngOnInit() {
  }

  generateCSV(page: number = 1, productListLimit: number = 40, productListOrder: string = "position") {
    if (this.countOfProductsToGenerate > 0) {
      this.creatingInProgress = true;
      this.csvArray = undefined;
      this.productsData = [];
      this.generateCSVData(page, productListLimit, productListOrder);
    }
  }

  generateCSVData(page: number = 1, productListLimit: number = 40, productListOrder: string = "position") {
    this.productDataService.getProductsHtmlPage(page, productListLimit, productListOrder).subscribe({
      next: htmlPage => {
        const productsHtml = new DOMParser().parseFromString(htmlPage, 'text/html');
        const productsContainer = productsHtml.querySelectorAll(`.item.product.product-item`);
        var combinationIndex = 1;
        for (var index = 0, len = productsContainer.length; index < len; index++) {
          this.productsData.push({
            productId: index,
            combinationId: index,
            productIndex: index,
            numberRefCombination: 'N/A',
            productName: productsContainer[index].getElementsByClassName('product-item-link')[0].innerHTML,
            productPageLink: productsContainer[index].getElementsByClassName('product-item-link')[0].getAttribute('href'),
            combinationName: combinationIndex === 1 ? 'Kolor - Szary, Rozmiar - S' :
              combinationIndex === 2 ? 'Kolor - Szary, Rozmiar - M' :
                combinationIndex === 3 ? 'Kolor - Szary, Rozmiar - L' :
                  combinationIndex === 4 ? 'Kolor - Szary, Rozmiar - XL' :
                    'Kolor - Czarny, Rozmiar - XXXL',
            deliverer: 'N/A',
            views: 1,
            physicalInventory: 400,
            reserved: 0,
            available: 400,
            lowStockOfProducts: 'N/A',
            sendEmailIfLowQuantity: 0,
            imageUrl: productsContainer[index].getElementsByClassName('product-image-photo')[0].getAttribute('src'),
            price: productsContainer[index].getElementsByClassName('price').length > 0 ? Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 'N/A',
          });
          combinationIndex = combinationIndex > 4 ? 1 : combinationIndex + 1;

          // Calculating percent of created products, maximum 90% becouse we need to create csv file after generating
          this.creatingProgresValue = (this.productsData.length * 90) / this.countOfProductsToGenerate;

          // If we have enough products and dont need to add more
          if (this.productsData.length === this.countOfProductsToGenerate) {
            break
          }
        }
        // If not enough products to create
        if (this.productsData.length === this.countOfProductsToGenerate || productsContainer.length < productListLimit) {
          this.createCSVFromObject(this.productsData);
          return;
        }
        else {
          this.generateCSVData(page + 1, productListLimit, productListOrder);
        }
      },
      error: error => {
        console.log(error);
        this.creatingInProgress = false;
      }
    });
  }

  createCSVFromObject(productsData: any) {
    const replacer = (key: any, value: any) => value === null || value === undefined ? '' : value;
    const header = Object.keys(productsData[0]);
    this.creatingProgresValue = 92;
    let csv = productsData.map((row: any) => header.map(fieldName => JSON.stringify(row[fieldName], replacer)).join(','));
    this.creatingProgresValue = 96;
    csv.unshift(header.join(','));
    this.creatingProgresValue = 98;
    this.csvArray = csv.join('\r\n');
    this.creatingProgresValue = 100;
    this.creatingInProgress = false;
    this.creatingProgresValue = 0;
  }

  downloadCSV() {
    var blob = new Blob([this.csvArray], { type: 'text/csv' })
    saveAs(blob, "generatedProducts.csv");
  }

}
