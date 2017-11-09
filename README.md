This extension integrates a Magento 2 based webstore with the **[Robokassa](https://www.robokassa.ru/en)** payment service (Russia).

Robokassa holds **[10% market share (2017)](https://mage2.pro/t/3716)** among the payment service providers in Russia by the number of websites using it.

## Demo video
https://www.youtube.com/watch?v=hK3dBmW4tg4&list=PLTq8uOpBQGsFVidNBE9PO3G366IJ0JBTv

## [Screenshots](https://mage2.pro/tags/robokassa-screenshot)
- The frontend checkout screen:
    - [in the «**images**» mode](https://mage2.pro/t/topic/4536)
    - [in the «**text**» mode](https://mage2.pro/t/topic/4535)
- [The payment information blocks](https://mage2.pro/t/topic/4544)
- [The backend order list](https://mage2.pro/t/topic/4546)
- [The backend settings](https://mage2.pro/t/topic/4538)

## The available payment options for Russia
### e-wallet
- QIWI Wallet
- Yandex.Money
- WMR
- ElecsnetWallet
- RUR W1
### Internet Banking
- Bank Card
- Alfa-Click
- Russian Standard Bank
- VTB24
- RUR W1
-  Moscow Industrial Bank
-  Banca Intesa
-  Bank AVB
-  BINBANK
- Federal Bank For Innovation And Development
- Mezhtopenergobank
-  Sovcombank
-  National Bank TRUST
-  HandyBank
-  Bank Obrazovanie
-  FlexBank
-  FutureBank
-  KranBank
-  KostromaSelcombank
-  NS Bank
-  WestInterBank
-  Credit Ural Bank
### Bank card
-  Bank Card
-  Apple Pay
-  Samsung Pay
### terminal
-  QIWI Wallet
### mobile operator
-  Mts
-  Tele2
-  Tattelecom
-   Beeline
-  Megafon
### other methods
- Euroset
- Svyaznoy

### Электронным кошельком
 - QIWI Кошелек
 - Яндекс.Деньги
 -  WMR
 - Кошелек Элекснет
 -  RUR Единый кошелек
### Через интернет-банк
 -  Банковская карта
 -  Альфа-Клик
 -  Банк Русский Стандарт
 -  ВТБ24
 -  RUR Единый кошелек
 - Московский Индустриальный Банк
 -  Банк Интеза
 -  Банк АВБ
 -  БИНБАНК
 - ФБ Инноваций и Развития
 - Межтопэнергобанк
 - Совкомбанк
 - Национальный банк ТРАСТ
 - HandyBank
 -  Банк Образование
 - ФлексБанк
 - ФьючерБанк
 -  КранБанк
 - Костромаселькомбанк
 -  Независимый строительный банк
 - ВестИнтерБанк
 - Кредит Урал Банк
### Банковской картой
  -  Банковская карта
  -  Apple Pay
  -  Samsung Pay
### В терминале
  -  QIWI Кошелек
### Сотовые операторы
  -  МТС
  -  Tele2
  -  Таттелеком
  -  Билайн
  -  Мегафон
### Другие способы
  -   Евросеть
  -   Связной

## How to buy
You can buy it with PayPal [here](https://mage2.pro/t/3122).  
There are [local payment options](http://magento-forum.ru/topic/1003) available to Russia-based customers.

## How to install
### 1. Free installation service
Just order my [free installation service](https://mage2.pro/t/3585).

### 2. Self-installation
```
composer require mage2pro/robokassa:*
bin/magento setup:upgrade
rm -rf pub/static/* && bin/magento setup:static-content:deploy ru_RU en_US <additional locales, e.g.: kk_KZ>
rm -rf var/di var/generation generated/code && bin/magento setup:di:compile
```
If you have some problems while executing these commands, then check the [detailed instruction](https://mage2.pro/t/263).

## Licensing
It is a paid extension, not free.  
You can use it for free for the testing puproses only.  
Please read the [testing policy](https://mage2.pro/t/2590) before installation.

## Support
- [The extension's **forum** branch](https://mage2.pro/c/extensions/robokassa).
- [Where and how to report a Mage2.PRO extension's issue?](https://mage2.pro/t/2034)
- I also provide a **[generic Magento 2 support](https://mage2.pro/t/755)** and [Magento 2 installation service](https://mage2.pro/t/748).

## Want to be notified about the extension's updates?
- [Subscribe](https://mage2.pro/t/2540) to the extension's [forum branch](https://mage2.pro/c/extensions/robokassa).
- Subscribe to my [Twitter](https://twitter.com/mage2_pro) and [YouTube](https://www.youtube.com/channel/UCvlDAZuj01_b92pzRi69LeQ) channels.

## Need a new feature?
I provide the [**customization service**](https://mage2.pro/t/2020) for my payment extensions.

## Need another payment extension for Magento 2?

- «[**2Checkout**](https://mage2.pro/c/extensions/2checkout)» payment extension.
- «[**歐付寶 allPay**](https://mage2.pro/c/extensions/allpay)» payment extension (Taiwan).
- «[**Checkout.com**](https://mage2.pro/c/extensions/checkout-com)» payment extension.
- «[**Dragonpay**](https://mage2.pro/c/extensions/dragonpay)» payment extension (Philippines).
- «[**Ginger Payments**](https://mage2.pro/c/extensions/ginger-payments)» extension (the Netherlands, Belgium).
- «[**iPay88**](https://mage2.pro/c/extensions/ipay88)» payment extension (Malaysia, Indonesia, Philippines, Thailand, Singapore, China).
- «[**iyzico**](https://mage2.pro/c/extensions/iyzico)» payment extension (Turkey).
- «[**Kassa Compleet**](https://mage2.pro/c/extensions/kassa-compleet)» payment extension by ING Bank (the Netherlands).
- «[**Klarna**](https://mage2.pro/c/extensions/klarna)» payment extension (Austria, Denmark, Finland, Germany, Norway, Sweden).
- «[**MercadoPago**](https://mage2.pro/c/extensions/mercadopago)» payment extension (Argentina, Brasil, Chile, Mexico, Venezuela, Colombia, Uruguay, Peru).
- «[**Moip**](https://mage2.pro/c/extensions/moip)» payment extension (Brazil).
- «[**mPAY24**](https://mage2.pro/c/extensions/mpay24)» payment extension (Austria, Germany).
- «[**Omise**](https://mage2.pro/c/extensions/omise)» payment extension (Thailand, Japan).
- «[**PayFort**](https://mage2.pro/c/extensions/payfort)» payment extension (the United Arab Emirates, Egypt, Saudi Arabia, Jordan, Lebanon, Qatar).
- «[**Paymill**](https://mage2.pro/c/extensions/paymill)» payment extension (the European Union).
- «[**PayPal**](https://mage2.pro/c/extensions/paypal)»: an alternative module you can get fast support and customizations for.
- «[**Paystation**](https://mage2.pro/c/extensions/paystation)» payment extension (New Zealand).
- «[**PostFinance**](https://mage2.pro/c/extensions/postfinance)» payment extension (Switzerland).
- «[**QIWI Wallet**](https://mage2.pro/c/extensions/qiwi)» (QIWI Кошелёк) payment extension (Russia).
- «[**Robokassa**](https://mage2.pro/c/extensions/robokassa)» payment extension (Russia).
- «[**SecurePay**](https://mage2.pro/c/extensions/securepay)» payment extension (Australia).
- «[**Spryng**](https://mage2.pro/c/extensions/spryng)» payment extension (the European Union).
- «[**Square**](https://mage2.pro/c/extensions/square)» payment extension (USA, Canada).
- «[**Stripe**](https://mage2.pro/c/extensions/stripe)» payment extension.
- «[**Tinkoff Bank**](https://mage2.pro/c/extensions/tinkoff)» (Тинькофф Банк) payment extension (Russia).
- «[**Yandex.Kassa**](https://mage2.pro/c/extensions/yandex-kassa)» (as known as Yandex.Checkout, Яндекс.Касса) payment extension (Russia, Armenia, Azerbaijan, Belarus, Georgia, Kazakhstan, Kyrgyzstan, Latvia, Moldova, Tajikistan).

## See also my integrations between Magento 2 and a third-party business software (ERP, CRM, accounting, inventory, etc.):
- «[**Microsoft Dynamics 365**](https://mage2.pro/c/extensions/dynamics365)» (an integration with the ERP/CRM software).
- «[**Salesforce**](https://mage2.pro/c/extensions/salesforce)» (an integration with the CRM software).
- «[**Zoho CRM**](https://mage2.pro/c/extensions/zoho-crm)».
- «[**Zoho Inventory**](https://mage2.pro/c/extensions/zoho-inventory)».
- «[**Zoho Books**](https://mage2.pro/c/extensions/zoho-books)» (an accounting software).
- «[**1C:Enterprise**](https://github.com/mage2pro/1c)» (a Russian ERP software, модуль Magento 2 для интеграции с 1С:Предприятие).
- «[**МойСклад**](https://github.com/mage2pro/moysklad)» (a Russian ERP software, модуль Magento 2 для интеграции с МойСклад).

## See also my integrations between Magento 2 and marketplaces
- «[**Etsy**](https://mage2.pro/c/extensions/etsy)» (focused on handmade or vintage items and supplies, as well as unique factory-manufactured items).
- «[**MercadoLibre**](https://mage2.pro/c/extensions/mercadolibre)» (Argentina, Bolivia, Brazil, Chile, Colombia, Costa Rica, Dominican Republic, Ecuador, Guatemala, Honduras, Mexico, Nicaragua, Panama, Paraguay, Peru, Portugal, Salvador, Uruguay, Venezuela).
- «[**Яндекс.Маркет**](https://github.com/mage2pro/yandex-market)» (a Russian marketplace, модуль Magento 2 для интеграции с Яндекс.Маркет).

## See also my other Magento 2 extensions:

- «[**Backend Login with Google Account**](https://mage2.pro/c/extensions/google-backend-login)» (a single sign-on extension for the Magento 2 backend). 
- «[**Blackbaud NetCommunity**](https://mage2.pro/c/extensions/blackbaud-netcommunity)» (an integration with an online fundraising software).  
- «[**Facebook Like & Share**](https://mage2.pro/c/extensions/facebook-like)» (shows the Facebook's «Like» and «Share» buttons on the frontend product pages).
- «[**Facebook Login**](https://mage2.pro/c/extensions/facebook-login)» (a single sign-on extension).
- «[**Login with Amazon**](https://mage2.pro/c/extensions/amazon-login)» (a single sign-on extension). 
- «[**Markdown Editor**](https://mage2.pro/c/extensions/markdown)» (an alternative content editor for the Magento 2 backend).
- «[**Price Format**](https://mage2.pro/c/extensions/price-format)» (set a custom display format for the prices and other currency values: discounts, taxes, sales amounts).
- «[**Russian language package**](https://mage2.pro/c/extensions/ru)» (русификатор для Magento 2).
- «[**Sales Documents Numeration**](https://mage2.pro/c/extensions/sales-documents-numeration)» (use a custom numeration for the sales documents: orders, invoices, shipments, and credit memos).
- «[**Twitter Timeline**](https://mage2.pro/c/extensions/twitter-timeline)» (shows your latest tweets in your store's frontend sidebar).

## Need a custom payment extension?
I provide a [custom payment gateway integration service](https://mage2.pro/t/917).

## Want to get the full rights on my extension?
It is possible: the price depends on an extension and starts from $6.990.  
You will get free lifetime support, updates, and installation service for all your clients.


