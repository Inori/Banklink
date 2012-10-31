<?php

namespace Inori\Banklink\Protocol;

/**
 * Description of Protocol
 *
 * @author Roman Marintsenko <roman.marintsenko@knplabs.com>
 * @since  11.01.2012
 */
interface ProtocolInterface
{
    /**
     * @param type $orderId
     * @param type $sum
     * @param type $message
     * @param type $language
     * @param type $currency
     *
     * @return array
     */
    function preparePaymentRequestData($orderId, $sum, $message = '', $language = 'EST', $currency = 'EUR');

    /**
     *
     * @param array $responseData
     *
     * @return \Inori\Banklink\Response\Response
     */
    function handleResponse(array $responseData);
}