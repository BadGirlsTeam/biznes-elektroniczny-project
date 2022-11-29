import { Component, OnInit } from '@angular/core';
import { ProductDataService } from 'src/app/services/product-data.service';
import { saveAs } from "file-saver";
import { Categories, SubCategoriesIndoorLamps, SubCategoriesOutdoorLamps } from '../../models/categories.model'

@Component({
  selector: 'app-generate-csv',
  templateUrl: './generate-csv.component.html',
  styleUrls: ['./generate-csv.component.scss']
})
export class GenerateCsvComponent implements OnInit {
  creatingInProgress: boolean = false;
  creatingLastProductInProgress: boolean = false;
  countOfProductsToGenerate: number = 500;
  productsData: any = [];
  creatingProgresValue: number = 0;
  csvArray: any = undefined;
  categories: any = this.getCategoriesData();
  indoorSubcategories: any = this.getIndoorSubcategoriesData();
  outdoorSubcategories: any = this.getOutdoorSubcategoriesData();
  selectedCategory: any = Categories.INDOOR_LAMPS;
  selectedSubcategory: any = '';
  finishedProductsCount: number = -1;

  constructor(private productDataService: ProductDataService) { }

  ngOnInit() {
  }

  generateCSV(page: number = 1, productListLimit: number = 40, productListOrder: string = "position") {
    if (this.countOfProductsToGenerate > 0) {
      this.creatingInProgress = true;
      this.csvArray = undefined;
      this.productsData = [];
      this.finishedProductsCount = -1;
      this.generateCSVData(page, productListLimit, productListOrder, this.selectedCategory, this.selectedSubcategory);
    }
  }

  getIndoorSubcategoriesData() {
    return [{
      name: "Żyrandole",
      value: SubCategoriesIndoorLamps.ZYRANDOLE
    },
    {
      name: "Wieszące",
      value: SubCategoriesIndoorLamps.WIESZACE
    },
    {
      name: "Biurkowe",
      value: SubCategoriesIndoorLamps.BIURKOWE
    }]
  }
  getOutdoorSubcategoriesData() {
    return [{
      name: "Dekoracyjne",
      value: SubCategoriesOutdoorLamps.DEKORACYJNE
    },
    {
      name: "Solarne",
      value: SubCategoriesOutdoorLamps.SOLARNE
    },
    {
      name: "Sufitowe",
      value: SubCategoriesOutdoorLamps.SUFITOWE
    }]
  }

  getCategoriesData(): any {
    return [{
      name: "Indoor",
      value: Categories.INDOOR_LAMPS
    },
    {
      name: "Outdoor",
      value: Categories.OUTDOOR_LAMPS
    }]
  }

  generateCSVData(page: number = 1, productListLimit: number = 40, productListOrder: string = "position", category: Categories = Categories.INDOOR_LAMPS,
    subcategory: SubCategoriesOutdoorLamps | SubCategoriesIndoorLamps | '' = '') {
    this.productDataService.getProductsHtmlPage(page, productListLimit, productListOrder, category, subcategory).subscribe({
      next: htmlPage => {
        const productsHtml = new DOMParser().parseFromString(htmlPage, 'text/html');
        const productsContainer = productsHtml.querySelectorAll(`.item.product.product-item`);
        for (var index = 0, len = productsContainer.length; index < len; index++) {
          var globalIndex = this.productsData.length + 1;
          this.productsData.push({
            id: globalIndex,
            aktywny: 1, //! Not implemented
            nazwa: productsContainer[index].getElementsByClassName('product-item-link')[0].innerHTML,
            kategorie: category,
            cenaBezPodatkuCzyliNetto: productsContainer[index].getElementsByClassName('price').length > 0 ?
              Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 0,
            idRegulyPodatku: 0, //! Not implemented: 23%, 8%...
            kosztWlasny: productsContainer[index].getElementsByClassName('price').length > 0 ?
              productsContainer[index].getElementsByClassName('price').length > 1 ?
                Number(productsContainer[index].getElementsByClassName('price')[1].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) :
                Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 0,
            wSprzedazy: 1, //! Not implemented
            wartoscRabatu: productsContainer[index].getElementsByClassName('price').length > 1 ?
              Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 0,
            procentRabatu: productsContainer[index].getElementsByClassName('price').length > 1 ?
              Math.round(JSON.parse(productsContainer[index].querySelectorAll('.product-item-photo')[0].children[1].getAttribute('data-mage-init') || "")['Swissup_ProLabels/js/prolabels'].predefinedVars['#discount_percent#']) : 0,
            rabatOdDnia: '2022-11-23', //! Not implemented
            rabatDoDnia: '2022-11-23', //! Not implemented
            indeks: 'imported_' + globalIndex,
            kodDostawcy: 0, //! Not implemented
            nazwaDostawcy: "", //! Not implemented
            marka: "", //! Not implemented: index or name ??
            kodEAN13: "", //! Not implemented: kod kreskowy produktu(qrcode), i think it must be without implementation
            kodKreskowyUPC: "", //! Not implemented: kod kreskowy produktu(qrcode), i think it must be without implementation
            //MPN (Manufacturer Part Number) is the product identifier used to differentiate a product among other (similar) products from the same brand/manufacturer
            MPN: "", //! Not implemented
            podatekEkologiczny: 0, //! Not implemented: i think it must be without implementation,
            szerokosc: 10, //! Not implemented
            wysokosc: 10, //! Not implemented
            glebokosc: 10, //! Not implemented
            waga: 10, //! Not implemented
            czasDostawyProduktowKtoreSaWMagazynie: "Not implemented", //! Not implemented
            czasDostawyProduktowZRezerwacja: "Not implemented", //! Not implemented
            ilosc: 0, //! Not implemented
            minimalnaIlosc: 0,  //! Not implemented
            nizkiPoziomProduktowWMagazynie: 0, //! Not implemented: przy jakiej ilosci wysylac maila ??
            wyslijEmailGdyNizkiPoziomProduktowWMagazynie: 1, //!Not implemented,
            widocznosc: "both", //! both, catalog, search, none
            dodatkoweKosztyPrzesylki: 0, //! Not implemented: number ??
            jednostkaDlaCenyZaJednostke: 1, //! Not implemented: means min product count?
            cenaZaJednostke: 0, //! Not implemented
            podsumowanie: "", //! Not implemented
            opis: "Not implemented", //! Not implemented
            tagi: "Not implemented 1;Not implemented 2;Not implemented 3", //! Not implemented: suknia, balewna
            metaTytul: "Not implemented", //! Not implemented: how it will be visible in google, bing ...
            slowaKluczoweMeta: "Not implemented", //! Not implemented: how it will be visible in google, bing ..., like tag but in google
            opisMeta: "Not implemented", //! Not implemented: how it will be visible in google, bing ..., like main opis
            przepisanyUrl: productsContainer[index].getElementsByClassName('product-item-link')[0].getAttribute('href'), // url of poduct in external or internal page?
            etykietaGdyWMagazynie: "Not implemented", //! Not implemented: like name but when in stock
            etykietaKiedyDozwolonePonowneZamowienie: "Not implemented", //! Not implemented: like name but when already ordered ??
            dostepneDoZamowienia: 1, //! Not implemented: 0/1 - maybe about if i can order online
            dataDostepnosciProduktu: '2022-11-22', //! Not implemented
            dataWytworzeniaProduktu: '2022-11-22', //! Not implemented: date of product creation ??
            pokazCene: 1, //! Not implemented
            adresyUrlZdjecia: '',
            tekstAlternatywnyDlaZdjec: "",
            usunIstniejaceZdjecia: 1, //! Not implemented, but can be as choice in interface: delete existing images or add new ?
            cechy: "Producent: Brilliant; Nazwa: GARDEN; Symbol: 96343/05", //! Not implemented
            dostepneTylkoOnline: 0, //! Not implemented: 0/1
            stan: "new",  //! Not implemented: new, used, refurbished
            konfigurowalny: 1, //! Not implemented: 0/1, what does it mean configure ???
            moznaWgrywacPliki: 1,
            polaTekstowe: 1,
            akcjaGdyBrakNaStanie: "",
            wirtualnyProdukt: 0, //! ???
            adresUrlPliku: "", //! Not implemented: url for attachment ??
            iloscDozwolonychPobran: 10, //! Not implemented
            dataWygasniencia: '2022-11-23', //! Not implemented
            liczbaDni: 100, //! Not implemented ??
            idAlboNazwaSklepu: "lampy.pl", //! Not implemented ??
            zaawansowaneZarzadzanieMagazynem: 1,
            zaleznyOdStanuMagazynowego: 1,
            magazyn: "", //! Not implemented ??? name of warehouse maybe
            aksesoria: "", //! Not implemented ???


            // productPageLink: productsContainer[index].getElementsByClassName('product-item-link')[0].getAttribute('href'),
            // combinationName: combinationIndex === 1 ? 'Kolor - Szary, Rozmiar - S' :
            //   combinationIndex === 2 ? 'Kolor - Szary, Rozmiar - M' :
            //     combinationIndex === 3 ? 'Kolor - Szary, Rozmiar - L' :
            //       combinationIndex === 4 ? 'Kolor - Szary, Rozmiar - XL' :
            //         'Kolor - Czarny, Rozmiar - XXXL',
            // deliverer: 'N/A',
            // views: 1,
            // physicalInventory: 400,
            // reserved: 0,
            // available: 400,
            // lowStockOfProducts: 'N/A',
            // sendEmailIfLowQuantity: 0,
            // imageUrl: productsContainer[index].getElementsByClassName('product-image-photo')[0].getAttribute('src'),
            // price: productsContainer[index].getElementsByClassName('price').length > 0 ? Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 'N/A',
          });

          // Generate product data from its page, but not for last(we need to check if we need to add last product data and generate csv(async problem))
          index !== productsContainer.length - 1 &&
            this.generateDataForGivenProduct(productsContainer[index].getElementsByClassName('product-item-link')[0].getAttribute('href'), this.productsData.length - 1);
          // If we have enough products and dont need to add more
          if (this.productsData.length === this.countOfProductsToGenerate) {
            break
          }
        }
        // If not enough products to create or we have enough products created
        if (this.productsData.length === this.countOfProductsToGenerate || productsContainer.length < productListLimit) {
          this.generateDataForGivenProduct(productsContainer[productsContainer.length - 1].getElementsByClassName('product-item-link')[0].getAttribute('href'), this.productsData.length - 1, true);
          return;
        }
        else {
          this.generateDataForGivenProduct(productsContainer[productsContainer.length - 1].getElementsByClassName('product-item-link')[0].getAttribute('href'), this.productsData.length - 1);
          this.generateCSVData(page + 1, productListLimit, productListOrder, category, subcategory);
        }
      },
      error: error => {
        console.log(error);
        this.creatingInProgress = false;
        this.finishedProductsCount = -1;
      }
    });
  }

  generateDataForGivenProduct(url: string | null, idInArray: number, createCSV: boolean = false) {
    if (createCSV) {
      this.creatingLastProductInProgress = true;
    }
    url && this.productDataService.getProductHtmlPage(url).subscribe({
      next: htmlPage => {
        const productHtml = new DOMParser().parseFromString(htmlPage, 'text/html');
        const productImages = productHtml.getElementsByClassName('thumbnails')[0] ? productHtml.getElementsByClassName('thumbnails')[0].getElementsByClassName('item') : [];
        // const productContainer = productHtml.querySelectorAll('.prolabel__content');
        // if (productContainer.length > 0) {
        // console.log(productContainer);
        // }
        // this.productsData[idInArray].kategorie = "";
        // const productsContainer = productsHtml.querySelectorAll(`.item.product.product-item`);
        for (var index = 0, len = productImages.length; index < len; index++) {
          this.productsData[idInArray].adresyUrlZdjecia += (index === 0 ? '' : ';') + productImages[index].getAttribute('href');
          this.productsData[idInArray].tekstAlternatywnyDlaZdjec += (index === 0 ? '' : ';') + productImages[index].getAttribute('title')
        }


        // Calculating percent of created products, maximum 90% because csv file after generating must be created
        var tempNewProgressValue = Number(((idInArray + 1) * 90) / this.countOfProductsToGenerate);
        if (this.creatingProgresValue < tempNewProgressValue) {
          this.creatingProgresValue = tempNewProgressValue;
        }
        this.finishedProductsCount += 1;
        if (createCSV) {
          this.creatingLastProductInProgress = false;
          this.createCSVFromObject(this.productsData);
        }
      },
      error: error => {
        console.log(error);
        if (createCSV) {
          this.creatingLastProductInProgress = false;
          this.finishedProductsCount = -1;
        }
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
