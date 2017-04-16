<?php
namespace Dfe\Robokassa\W;
use Df\Framework\Controller\Result\Text;
// 2017-04-16
final class Handler extends \Df\PaypalClone\W\Handler {
	/**
	 * 2017-04-16
	 * «If the checksums are equal, then your script should respond ROBOKASSA,
	 * that we understand that your script is working correctly
	 * and repeated notifications from our side is not required.
	 * The result must contain text OK, and setting InvId.
	 * For example, the result must contain OK5 for invoice number 5.»
	 * http://docs.robokassa.ru/en#2542
	 * «Если контрольные суммы совпали, то Ваш скрипт должен ответить ROBOKASSA,
	 * чтобы мы поняли, что Ваш скрипт работает правильно
	 * и повторное уведомление с нашей стороны не требуется.
	 * Результат должен содержать текст OK и параметр InvId.
	 * Например, для номера счёта 5 должен быть возвращён вот такой ответ: OK5.»
	 * http://docs.robokassa.ru/ru#1253
	 * @override
	 * @see \Df\Payment\W\Handler::result()
	 * @used-by \Df\Payment\W\Handler::handle()
	 * @return Text
	 */
	protected function result() {return Text::i("OK{$this->e()->pid()}");}
}