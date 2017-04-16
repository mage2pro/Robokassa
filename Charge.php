<?php
namespace Dfe\Robokassa;
/**
 * 2017-04-10
 * 2017-04-16
 * «Description of variables, parameters and values»: http://docs.robokassa.ru/en/#2501
 * «Описание переменных, параметров и значений»: http://docs.robokassa.ru/ru/#1061
 * @method Method m()
 * @method Settings s()
 */
final class Charge extends \Df\PaypalClone\Charge {
	/**
	 * 2017-04-10
	 * @override
	 * @see \Df\PaypalClone\Charge::pCharge()
	 * @used-by \Df\PaypalClone\Charge::p()
	 * @return array(string => mixed)
	 */
	protected function pCharge() {$s = $this->s(); return [
		// 2017-04-16
		// «Means proposed currency of payment.
		// This is the payment option you recommend to your buyers/users.
		// If this parameter is specified, then the buyer during the transition to the site ROBOKASSA
		// will get to the payment page with the specified payment method.
		// The buyer may change it in the process of payment.»
		// http://docs.robokassa.ru/en/#2510
		// «Предлагаемый способ оплаты.
		// Тот вариант оплаты, который Вы рекомендуете использовать своим покупателям.
		// Если параметр указан, то покупатель при переходе на сайт ROBOKASSA
		// попадёт на страницу оплаты с выбранным способом оплаты.
		// Покупатель может изменить его в процессе оплаты.»
		// http://docs.robokassa.ru/ru/#1196
		// Optional.
		'IncCurrLabel' => $this->m()->option()
		// 2017-04-16
		// «Means description of the purchase.
		// Only English or Russian letters, digits and punctuation marks may be used.
		// Maximum 100 characters.
		// In other words, this is the name of the goods the client is purchasing.
		// This information is reflected in ROBOKASSA interface
		// and the E-Receipt we issue to the client after completion of payment.
		// It may be reflected correctly if the optional parameter Encoding is activated
		// (see Optional Parameters).»
		// http://docs.robokassa.ru/en/#2505
		// «Описание покупки,
		// можно использовать только символы английского или русского алфавита, цифры и знаки препинания.
		// Максимальная длина — 100 символов.
		// Эта информация отображается в интерфейсе ROBOKASSA и в Электронной квитанции,
		// которую мы выдаём клиенту после успешного платежа.
		// Корректность отображения зависит от необязательного параметра Encoding
		// (см. Необязательные параметры).»
		// http://docs.robokassa.ru/ru/#1189
		// Required.
		// @todo Проверить, что будет, если передать недопустимые символы.
		,'InvDesc' => mb_substr($this->description(), 0, 100)
		// 2017-04-16
		// «Means the Shop Identifier in ROBOKASSA you specified upon creation of the Shop.»
		// http://docs.robokassa.ru/en/#2503
		// «Идентификатор магазина в ROBOKASSA, который Вы придумали при создании магазина.»
		// http://docs.robokassa.ru/ru/#1068
		// Required.
		,'MerchantLogin' => $s->merchantID()
		//
		// 2017-04-16
		// «Means the amount payable (in other words, the price of the order placed by the client).
		// The format of presentation – dot-delimited digits. For example 123.45.
		// The amount should be denominated in RUB.
		// However, if the prices are denominated (e.g.) in USD on your website
		// when issuing the invoice you need to specify the amount converted from USD to RUB.
		// (see Optional Parameters OutSumCurrency).»
		// http://docs.robokassa.ru/en/#2504
		// «Требуемая к получению сумма (буквально — стоимость заказа, сделанного клиентом).
		// Формат представления — число, разделитель — точка, например: 123.45.
		// Сумма должна быть указана в рублях.
		// Но, если стоимость товаров у Вас на сайте указана, например, в долларах,
		// то при выставлении счёта к оплате Вам необходимо указывать уже пересчитанную сумму
		// из долларов в рубли. См. необязательный параметр OutSumCurrency.»
		// http://docs.robokassa.ru/ru/#1188
		// Required.
		,'OutSum' => $this->amountF()
	];}

	/**
	 * 2017-04-10
	 * 2017-04-16
	 * «Means your invoice number.
	 * The optional parameter, but we strongly recommend using it.
	 * It should be unique each time your client is redirected for payment to our system.
	 * It may vary from 1 to 2147483647 (2^31-1).
	 * If this parameter is passed, it should be included in the calculation of the checksum
	 * (SignatureValue).»
	 * http://docs.robokassa.ru/en/#2509
	 * Номер счета в магазине.
	 * Необязательный параметр, но мы настоятельно рекомендуем его использовать.
	 * Значение этого параметра должно быть уникальным для каждой оплаты.
	 * Может принимать значения от 1 до 2147483647 (231-1).
	 * Если значение параметра пустое, или равно 0, или параметр вовсе не указан,
	 * то при создании операции оплаты ему автоматически будет присвоено уникальное значение.
	 * Используйте данную возможность только в очень простых магазинах,
	 * где не требуется какого-либо контроля оплаты.
	 * Если параметр передан, то он должен быть включён в расчёт контрольной суммы (SignatureValue).
	 * http://docs.robokassa.ru/ru/#1194
	 * @override
	 * @see \Df\PaypalClone\Charge::k_RequestId()
	 * @used-by \Df\PaypalClone\Charge::p()
	 * @return string
	 */
	protected function k_RequestId() {return 'InvId';}

	/**
	 * 2017-04-10
	 * http://docs.robokassa.ru/en/#2506
	 * http://docs.robokassa.ru/ru/#1190
	 * @override
	 * @see \Df\PaypalClone\Charge::k_Signature()
	 * @used-by \Df\PaypalClone\Charge::p()
	 * @return string
	 */
	protected function k_Signature() {return 'SignatureValue';}
}