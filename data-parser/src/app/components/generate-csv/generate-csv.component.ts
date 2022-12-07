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
  csvCombinationArray: any = undefined
  indoorSubcategories: any = this.getIndoorSubcategoriesData();
  outdoorSubcategories: any = this.getOutdoorSubcategoriesData();
  categories: Array<any> = this.getCategoriesData();
  subcategories: Array<any> = [];
  selectedCategories: Array<any> = [];
  selectedSubcategories: Array<any> = [];
  sleep: any = (ms: any) => new Promise(r => setTimeout(r, ms));
  productsCombinationData: any = [];

  constructor(private productDataService: ProductDataService) { }

  ngOnInit() {
  }

  generateCSV(page: number = 1, productListLimit: number = 40, productListOrder: string = "position") {
    if (this.countOfProductsToGenerate > 0) {
      this.creatingInProgress = true;
      this.csvArray = undefined;
      this.csvCombinationArray = undefined;
      this.productsData = [];
      this.productsCombinationData = [];
      this.generateCSVData(page, productListLimit, productListOrder);
    }
  }

  getIndoorSubcategoriesData() {
    return [{
      name: "Żyrandole",
      value: SubCategoriesIndoorLamps.ZYRANDOLE,
      mainCategory: Categories.INDOOR_LAMPS,
      id: 13,
    },
    {
      name: "Wieszące",
      value: SubCategoriesIndoorLamps.WIESZACE,
      mainCategory: Categories.INDOOR_LAMPS,
      id: 14,
    },
    {
      name: "Biurkowe",
      value: SubCategoriesIndoorLamps.BIURKOWE,
      mainCategory: Categories.INDOOR_LAMPS,
      id: 15,
    }]
  }
  getOutdoorSubcategoriesData() {
    return [{
      name: "Dekoracyjne",
      value: SubCategoriesOutdoorLamps.DEKORACYJNE,
      mainCategory: Categories.OUTDOOR_LAMPS,
      id: 16,
    },
    {
      name: "Solarne",
      value: SubCategoriesOutdoorLamps.SOLARNE,
      mainCategory: Categories.OUTDOOR_LAMPS,
      id: 17,
    },
    {
      name: "Sufitowe",
      value: SubCategoriesOutdoorLamps.SUFITOWE,
      mainCategory: Categories.OUTDOOR_LAMPS,
      id: 18,
    }]
  }

  getCategoriesData() {
    return [{
      name: "Lampy wewnetrzne",
      value: Categories.INDOOR_LAMPS,
      id: 11
    },
    {
      name: "Lampy zewnetrzne i ogrodowe",
      value: Categories.OUTDOOR_LAMPS,
      id: 12
    }]
  }

  minimumProductCount() {
    return this.selectedSubcategories && this.selectedSubcategories.length > 0 ? this.selectedSubcategories.length * 40 : 1
  }

  getAllSubcategories() {
    return [...this.getIndoorSubcategoriesData(), ...this.getOutdoorSubcategoriesData()]
  }

  getCategoryByValue(value: any) {
    return this.getCategoriesData().filter(category => category.value === value)[0];
  }

  getSubcategoryByValue(value: any) {
    return this.getAllSubcategories().filter(subcategory => subcategory.value === value)[0];
  }


  generateCSVData(page: number = 1, productListLimit: number = 40, productListOrder: string = "position", indexCategory: number = 0, indexSubcategory: number = 0) {
    this.productDataService.getProductsHtmlPage(page, productListLimit, productListOrder, this.selectedCategories[indexCategory], this.selectedSubcategories[indexSubcategory]).subscribe({
      next: async htmlPage => {
        const productsHtml = new DOMParser().parseFromString(htmlPage, 'text/html');
        const productsContainer = productsHtml.querySelectorAll(`.item.product.product-item`);
        for (var index = 0, len = productsContainer.length; index < len; index++) {
          var globalIndex = this.productsData.length + 1;
          this.productsData.push({
            id: globalIndex,
            aktywny: 1,
            nazwa: productsContainer[index].getElementsByClassName('product-item-link')[0].innerHTML,
            kategorie: this.selectedSubcategories && this.selectedSubcategories.length > 0 ?
              this.getSubcategoryByValue(this.selectedSubcategories[indexSubcategory]).id :
              this.getCategoryByValue(this.selectedCategories[indexCategory]).id,
            cenaBezPodatkuCzyliNetto: productsContainer[index].getElementsByClassName('price').length > 0 ?
              Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 0,
            idRegulyPodatku: 0,
            kosztWlasny: productsContainer[index].getElementsByClassName('price').length > 0 ?
              productsContainer[index].getElementsByClassName('price').length > 1 ?
                Number(productsContainer[index].getElementsByClassName('price')[1].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) :
                Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 0,
            wSprzedazy: 0,
            wartoscRabatu: productsContainer[index].getElementsByClassName('price').length > 1 ?
              Math.abs(Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) -
                Number(productsContainer[index].getElementsByClassName('price')[1].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.'))) : 0,
            procentRabatu: productsContainer[index].getElementsByClassName('price').length > 1 ?
              Math.round(JSON.parse(productsContainer[index].querySelectorAll('.product-item-photo')[0].children[1].getAttribute('data-mage-init') || "")['Swissup_ProLabels/js/prolabels'].predefinedVars['#discount_percent#']) : 0,
            rabatOdDnia: productsContainer[index].getElementsByClassName('price').length > 1 ? '2022-11-23' : '',
            rabatDoDnia: productsContainer[index].getElementsByClassName('price').length > 1 ? '2023-12-21' : '',
            indeks: 'imported_' + globalIndex,
            kodDostawcy: 0,
            nazwaDostawcy: "",
            marka: "",
            kodEAN13: "",
            kodKreskowyUPC: "",
            //MPN (Manufacturer Part Number) is the product identifier used to differentiate a product among other (similar) products from the same brand/manufacturer
            MPN: "",
            podatekEkologiczny: 0,
            szerokosc: 10,
            wysokosc: 10,
            glebokosc: 10,
            waga: 10,
            czasDostawyProduktowKtoreSaWMagazynie: "",
            czasDostawyProduktowZRezerwacja: "",
            ilosc: 10,
            minimalnaIlosc: 1,
            nizkiPoziomProduktowWMagazynie: 3,
            wyslijEmailGdyNizkiPoziomProduktowWMagazynie: 1,
            widocznosc: "both", // both, catalog, search, none
            dodatkoweKosztyPrzesylki: 0,
            jednostkaDlaCenyZaJednostke: 1,
            cenaZaJednostke: productsContainer[index].getElementsByClassName('price').length > 1 ?
              Number(productsContainer[index].getElementsByClassName('price')[0].innerHTML.split('&nbsp;').join('').split('zł')[0].split(',').join('.')) : 0,
            podsumowanie: "",
            opis: "",
            tagi: "",
            metaTytul: productsContainer[index].getElementsByClassName('product-item-link')[0].innerHTML,
            slowaKluczoweMeta: productsContainer[index].getElementsByClassName('product-item-link')[0].innerHTML,
            opisMeta: productsContainer[index].getElementsByClassName('product-item-link')[0].innerHTML,
            przepisanyUrl: productsContainer[index].getElementsByClassName('product-item-link')[0].getAttribute('href'), // url of poduct in external or internal page?
            etykietaGdyWMagazynie: "",
            etykietaKiedyDozwolonePonowneZamowienie: "",
            dostepneDoZamowienia: 1,
            dataDostepnosciProduktu: '2022-11-22',
            dataWytworzeniaProduktu: '2022-11-22',
            pokazCene: productsContainer[index].getElementsByClassName('price').length > 0 ? 1 : 0,
            adresyUrlZdjecia: '',
            tekstAlternatywnyDlaZdjec: "",
            usunIstniejaceZdjecia: 1,
            cechy: "",
            dostepneTylkoOnline: 0,
            stan: "new",  // new, used, refurbished
            konfigurowalny: 1,
            moznaWgrywacPliki: 1,
            polaTekstowe: 1,
            akcjaGdyBrakNaStanie: "",
            wirtualnyProdukt: 0,
            adresUrlPliku: "",
            iloscDozwolonychPobran: 10,
            dataWygasniencia: '2023-11-23',
            liczbaDni: 100,
            idAlboNazwaSklepu: "biznesbadgirlsteam",
            zaawansowaneZarzadzanieMagazynem: 0,
            zaleznyOdStanuMagazynowego: 0,
            magazyn: "",
            aksesoria: "",
          });
          var randomValue = '';
          var randomNumber = Math.floor(Math.random() * 3);
          if (randomNumber === 0) {
            randomValue = 'Blue:0, 20cm:1';
          }
          else if (randomNumber === 1) {
            randomValue = 'Metal:0, 16cm:1';
          }
          else if (randomNumber === 2) {
            randomValue = 'Yellow:0, 12cm:1'
          }
          var addCombination = false;
          if (this.productsData && this.productsData.length > 0 && this.productsData.length % 10 === 0) {
            this.productsCombinationData.push({
              product_id: globalIndex,
              attribute: 'Color:color:0, size:select:1',
              value: randomValue,
              adresyUrlZdjecia: ""
            });
            addCombination = true;
          }

          // Generate product data from its page, but not for last(we need to check if we need to add last product data and generate csv(async problem))
          this.generateDataForGivenProduct(productsContainer[index].getElementsByClassName('product-item-link')[0].getAttribute('href'), this.productsData.length - 1,
            productsContainer.length, productListLimit, this.productsData && addCombination ? this.productsCombinationData.length - 1 : undefined);

          // If we have enough products and dont need to add more
          if (this.productsData.length === this.countOfProductsToGenerate) {
            break
          }
          await this.sleep(100);
        }
        // If not enough products to create or we have enough products created
        if (this.productsData.length === this.countOfProductsToGenerate || productsContainer.length < productListLimit) {
          return;
        }
        else {
          if (indexSubcategory === this.selectedSubcategories.length - 1) {
            indexCategory = 0
            indexSubcategory = 0;
          }
          else if (this.getCategoryByValue(this.selectedCategories[indexCategory]).value !== this.getSubcategoryByValue(this.selectedSubcategories[indexSubcategory + 1]).mainCategory) {
            indexCategory += 1;
            indexSubcategory += 1;
          }
          else {
            indexSubcategory += 1;
          }
          this.generateCSVData(page + 1, productListLimit, productListOrder, indexCategory, indexSubcategory);
        }
      },
      error: async error => {
        console.log('An error occurred while fetching the products page, after 2 seconds request will be repeated with the following parameters: ', page, productListLimit, productListOrder, indexCategory, indexSubcategory);
        await this.sleep(2000);
        this.generateCSVData(page, productListLimit, productListOrder, indexCategory, indexSubcategory);
        // this.creatingInProgress = false;
        // this.creatingLastProductInProgress = false;
        // this.createCSVFromObject(this.productsData);
      }
    });
  }

  filterProductsByImageExisting() {
    return this.productsData && this.productsData.length === this.countOfProductsToGenerate ? this.countOfProductsToGenerate : this.productsData && this.productsData.length > 0 ?
      this.productsData.filter((product: any) => product.adresyUrlZdjecia !== '').length : []
  }

  generateDataForGivenProduct(url: string | null, idInArray: number, currentPageProductLength: number, productListLimit: number, productCombinationIndex: any = undefined) {
    var createCSV = this.productsData.length === this.countOfProductsToGenerate || currentPageProductLength < productListLimit ? true : false;
    if (createCSV) {
      this.creatingLastProductInProgress = true;
    }

    url && this.productDataService.getProductHtmlPage(url).subscribe({
      next: async htmlPage => {
        const productHtml = new DOMParser().parseFromString(htmlPage, 'text/html');
        const productImages = productHtml.getElementsByClassName('thumbnails')[0] ? productHtml.getElementsByClassName('thumbnails')[0].getElementsByClassName('item') : [];

        if (productImages.length === 0) {
          this.productsData[idInArray].adresyUrlZdjecia += productHtml.getElementsByClassName('main-image')[0].getAttribute('src');
        }
        for (var index = 0, len = productImages.length; index < len; index++) {
          this.productsData[idInArray].adresyUrlZdjecia += (index === 0 ? '' : ';') + productImages[index].getAttribute('href');
          this.productsData[idInArray].tekstAlternatywnyDlaZdjec += "";
        }
        if (productCombinationIndex !== undefined && this.productsData[idInArray].adresyUrlZdjecia !== "") {
          this.productsCombinationData[productCombinationIndex].adresyUrlZdjecia = this.productsData[idInArray].adresyUrlZdjecia.split(';')[0];
        }
        this.productsData[idInArray].opis = productHtml.querySelector(`.product.attribute.description`)?.getElementsByClassName('value')[0].innerHTML;


        // Calculating percent of created products, maximum 90% because csv file after generating must be created
        var tempNewProgressValue = Number(((idInArray + 1) * 90) / this.countOfProductsToGenerate);
        if (this.creatingProgresValue < tempNewProgressValue) {
          this.creatingProgresValue = tempNewProgressValue;
        }
        if (createCSV) {
          this.creatingLastProductInProgress = false;
          this.createCombinationCSVFromObject(this.productsCombinationData);
          this.createCSVFromObject(this.productsData);
        }
        return htmlPage
      },
      error: async error => {
        console.log('An error occurred while fetching a product page, after 2 seconds request will be repeated with the following parameter: id - ' + idInArray);
        await this.sleep(2000);
        this.generateDataForGivenProduct(url, idInArray, currentPageProductLength, productListLimit, productCombinationIndex);
        // console.log(error);
        // var createCSV = this.productsData.length === this.countOfProductsToGenerate || currentPageProductLength < productListLimit ? true : false;
        // if (createCSV) {
        //   this.creatingLastProductInProgress = false;
        //   this.createCSVFromObject(this.productsData);
        // }
        // return error
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

  createCombinationCSVFromObject(productsCombinationData: any) {
    const replacer = (key: any, value: any) => value === null || value === undefined ? '' : value;
    const header = Object.keys(productsCombinationData[0]);
    let csv = productsCombinationData.map((row: any) => header.map(fieldName => JSON.stringify(row[fieldName], replacer)).join(','));
    csv.unshift(header.join(','));
    this.csvCombinationArray = csv.join('\r\n');
  }

  downloadCombinationCSV() {
    var blob = new Blob([this.csvCombinationArray], { type: 'text/csv' })
    saveAs(blob, "generatedProductsCombinations.csv");
  }

  categoriesChangeListener() {
    this.subcategories = [];
    if (this.selectedCategories.length === 2) {
      this.subcategories = this.getAllSubcategories();
    }
    else if (this.selectedCategories[0] === Categories.INDOOR_LAMPS) {
      this.subcategories = this.getIndoorSubcategoriesData()
    }
    else if (this.selectedCategories[0] === Categories.OUTDOOR_LAMPS) {
      this.subcategories = this.getOutdoorSubcategoriesData()
    }
  }

}
