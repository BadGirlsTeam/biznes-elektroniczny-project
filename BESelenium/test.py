from selenium import webdriver
from selenium.webdriver.common.by import By
import random
import time

driver = webdriver.Chrome()
driver.get("http://34.97.160.191/")

addchance = [0] * 10
addchance += [1] * 5
addchance += [2] * 5


def buy_product(first_product: bool, category: int):
    buttonup = driver.find_element(By.CSS_SELECTOR,
                                   "button[class = \"btn btn-touchspin js-touchspin bootstrap-touchspin-up\"]")
    if first_product:
        # how much product will the program add
        addnumber = 1
    else:
        addnumber = (random.choice(addchance))
    for _ in range(addnumber):
        buttonup.click()
    addtocart = driver.find_element(By.CSS_SELECTOR, "button[class = \"btn btn-primary add-to-cart\"]")
    addtocart.click()
    time.sleep(3)
    continueshopping = driver.find_element(By.CSS_SELECTOR, "button[class = 'btn btn-secondary']")
    continueshopping.click()
    time.sleep(2)
    driver.find_elements(By.CSS_SELECTOR, ".top-menu[data-depth=\"0\"] > .category")[category].click()


def buy_products_in_category(first: bool, quantity_of_sec_category: int, category: int):
    elements = driver.find_elements(By.CSS_SELECTOR, "article[data-id-product]")
    howmany = min(len(elements), 7) if first else quantity_of_sec_category
    first_product = True if first else False
    for i in range(howmany):
        elements = driver.find_elements(By.CSS_SELECTOR, "article[data-id-product]")
        print(len(elements))
        elements[i].click()
        buy_product(first_product, category)
        first_product = False if True else first_product
        numberofprods = driver.find_element(By.CSS_SELECTOR, "span[class = \"cart-products-count\"")
        print(numberofprods.text)
    return 10 - howmany


def buy_products():
    # znajdz kategorie produktow(bez podkategorii)
    elements = driver.find_elements(By.CSS_SELECTOR, ".top-menu[data-depth=\"0\"] > .category")
    ile_w_drugim = 3
    for i in range(2):
        elements = driver.find_elements(By.CSS_SELECTOR, ".top-menu[data-depth=\"0\"] > .category")
        elements[i].click()
        ile_w_drugim = buy_products_in_category(True if i == 0 else False, ile_w_drugim, i)

def remove_product_from_cart():

    tocart = driver.find_element(By.CSS_SELECTOR, "i[class = \"material-icons shopping-cart\"")
    tocart.click()
    productsincart = driver.find_elements(By.CSS_SELECTOR, ".cart-item")
    print(len(productsincart))

    if len(productsincart) < 10:
        print("Zle")

    canceledproduct = productsincart[1].find_element(By.CSS_SELECTOR, ".remove-from-cart")
    time.sleep(2)
    canceledproduct.click()

    time.sleep(5)
    productsincart = driver.find_elements(By.CSS_SELECTOR, ".cart-item")
    print(len(productsincart))

def registeraccount():
    goToCheckout = driver.find_element(By.CSS_SELECTOR,
                                       "a[class='btn btn-primary']")
    goToCheckout.click()
    time.sleep(10)
    gender = driver.find_element(By.CSS_SELECTOR, "input[type='radio'][value='1']")
    gender.click()
    firstname = driver.find_element(By.CSS_SELECTOR, "input[type='text'][id='field-firstname']")
    firstname.send_keys("John")
    lastname = driver.find_element(By.CSS_SELECTOR, "input[type='text'][id='field-lastname']")
    lastname.send_keys("Wick")
    email = driver.find_element(By.CSS_SELECTOR, "input[type='email'][id='field-email']")
    email.send_keys("czerminskikuba@gmail.com")
    password = driver.find_element(By.CSS_SELECTOR, "input[type='password'][id='field-password']")
    password.send_keys("Xie1Hua2Piao3Piao4")
    dateOfBirth = driver.find_element(By.CSS_SELECTOR, "input[id='field-birthday'][name='birthday']")
    dateOfBirth.send_keys("1970-05-31")
    personaldatacheckbox = driver.find_element(By.CSS_SELECTOR, "input[name='customer_privacy'][type='checkbox']")
    personaldatacheckbox.click()
    acceptconditions = driver.find_element(By.CSS_SELECTOR, "input[name='psgdpr'][type='checkbox']")
    acceptconditions.click()
    submit = driver.find_element(By.CSS_SELECTOR, "button[name='continue'][type='submit']")
    submit.click()
    time.sleep(10)

def addresses():
    addr = driver.find_element(By.CSS_SELECTOR, "input[id='field-address1'][name='address1']")
    addr.send_keys("Alabama, 180.32.45.76")
    postal = driver.find_element(By.CSS_SELECTOR, "input[id='field-postcode'][name='postcode']")
    postal.send_keys("01-460")
    city = driver.find_element(By.CSS_SELECTOR, "input[id='field-city'][name='city']")
    city.send_keys("Warsawcon")
    submit = driver.find_element(By.CSS_SELECTOR, "button[type='submit'][name='confirm-addresses']")
    submit.click()
    time.sleep(10)

def courrier():
    chosenCourrier = driver.find_element(By.CSS_SELECTOR, "input[type='radio'][id='delivery_option_6']")
    chosenCourrier.click()
    submit = driver.find_element(By.CSS_SELECTOR, "button[type='submit'][name='confirmDeliveryOption']")
    submit.click()
    submit = driver.find_element(By.CSS_SELECTOR, "button[type='submit'][name='confirmDeliveryOption']")
    submit.click()
    time.sleep(10)

def payment():
    webPayment = driver.find_element(By.CSS_SELECTOR, "input[id='payment-option-2'][type='radio']")
    webPayment.click()
    agreement = driver.find_element(By.CSS_SELECTOR,
                                    "input[type='checkbox'][id='conditions_to_approve[terms-and-conditions]']")
    agreement.click()
    confirmPayment = driver.find_element(By.CSS_SELECTOR, "div[id='payment-confirmation']")
    confirmPayment = confirmPayment.find_element(By.CSS_SELECTOR,
                                                 "button[type='submit'][class='btn btn-primary center-block']")
    confirmPayment.click()
    time.sleep(5)

def checkOrder():
    account = driver.find_element(By.CSS_SELECTOR, "a[class='account']")
    account.click()
    time.sleep(5)
    history = driver.find_element(By.CSS_SELECTOR, "a[id='history-link']")
    history.click()
    time.sleep(5)
    orders = driver.find_element(By.CSS_SELECTOR, "section[id='content']")
    numoforders = orders.find_elements(By.CSS_SELECTOR, "tr")
    if len(numoforders) > 0:
        print("Zamowienie przeszlo przez system")

buy_products()
remove_product_from_cart()
registeraccount()
addresses()
courrier()
payment()
checkOrder()

driver.close()
