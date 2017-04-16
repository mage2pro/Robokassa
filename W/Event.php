<?php
namespace Dfe\Robokassa\W;
// 2017-04-16
final class Event extends \Df\PaypalClone\W\Event {
	/**
	 * 2017-04-16
	 * Robokassa не возвращают своего идентификатора для платежей
	 * (возвращают только идентификатор, заданный магазином).
	 * Для таких ПС метод должен возвращать null,
	 * и тогда формируем псевдо-идентификатор платежа в ПС самостоятельно,
	 * Он будет использован только для присвоения в качестве txn_id текущей транзакции.
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_idE()
	 * @used-by \Df\PaypalClone\W\Event::idE()
	 * @return string|null
	 */
	protected function k_idE() {return null;}

	/**
	 * 2017-04-16
	 * «Means your invoice number»: http://docs.robokassa.ru/en#2542
	 * «Номер счета в магазине»: http://docs.robokassa.ru/ru#1252
	 * @override
	 * @see \Df\Payment\W\Event::k_pid()
	 * @used-by \Df\Payment\W\Event::pid()
	 * @return string
	 */
	protected function k_pid() {return 'InvId';}

	/**
	 * 2017-04-16
	 * «Means your invoice number»: http://docs.robokassa.ru/en#2543
	 * «Номер счета в магазине»: http://docs.robokassa.ru/ru#1253
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_signature()
	 * @see \Dfe\IPay88\W\Event::k_signature()
	 * @used-by \Df\PaypalClone\W\Event::signatureProvided()
	 * @return string
	 */
	protected function k_signature() {return 'SignatureValue';}

	/**
	 * 2017-04-16
	 * @override
	 * @see \Df\PaypalClone\W\Event::k_status()
	 * @used-by \Df\PaypalClone\W\Event::status()
	 * @return string|null
	 */
	protected function k_status() {return null;}

	/**
	 * 2017-04-16
	 * @override
	 * @see \Df\PaypalClone\W\Event::statusExpected()
	 * @used-by \Df\PaypalClone\W\Event::isSuccessful()
	 * @return int
	 */
	protected function statusExpected() {return null;}
}