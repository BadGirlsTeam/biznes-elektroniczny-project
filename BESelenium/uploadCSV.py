from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.select import Select
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome()
driver.get("http://34.97.160.191/adminPanel")


def login():
    email = driver.find_element(By.CSS_SELECTOR, "input[name='email'][tabindex='1']")
    email.send_keys("s183043@student.pg.edu.pl")
    passw = driver.find_element(By.CSS_SELECTOR, "input[name='passwd'][tabindex='2']")
    passw.send_keys("Had4fcIgjgIMVQrM")
    submit = driver.find_element(By.CSS_SELECTOR, "button[name='submitLogin']")
    submit.click()
    time.sleep(15)
    advanced = driver.find_element(By.CSS_SELECTOR, "i[class='material-icons mi-settings_applications']")
    driver.execute_script("arguments[0].scrollIntoView(true);", advanced)
    time.sleep(5)
    advanced.click()
    time.sleep(5)
    toImportPanel = driver.find_element(By.CSS_SELECTOR, "li[data-submenu='108']")
    driver.execute_script("arguments[0].scrollIntoView(true);", toImportPanel)
    toImportPanel.click()
    time.sleep(5)
    time.sleep(10)
    productOption = Select(driver.find_element(By.CSS_SELECTOR, "select[name='entity']"))
    productOption.select_by_value("1")
    time.sleep(5)
    importButton = driver.find_element(By.CSS_SELECTOR, "input[type='file'][name='file']")
    importButton.send_keys("C:\BECSV\generatedProducts.csv")
    time.sleep(10)
    separatorInput = driver.find_element(By.CSS_SELECTOR, "input[name='separator']")
    separatorInput.send_keys(Keys.BACKSPACE)
    separatorInput.send_keys(",")
    multiplevalueInput = driver.find_element(By.CSS_SELECTOR, "input[name='multiple_value_separator']")
    multiplevalueInput.send_keys(Keys.BACKSPACE)
    multiplevalueInput.send_keys(";")
    emailInput = driver.find_elements(By.CSS_SELECTOR, "div[class='form-group row switch-widget']")
    print(len(emailInput))
    submitImportButton = driver.find_element(By.CSS_SELECTOR, "button[name='submitImportFile']")
    submitImportButton.click()
    time.sleep(10)
    submitButton = driver.find_element(By.CSS_SELECTOR, "button[name='import'][type='submit']")
    submitButton.click()
    time.sleep(30)


login()
