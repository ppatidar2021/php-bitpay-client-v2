<?php

namespace BitPaySDK\Exceptions;


class InvoiceNotificationException extends InvoiceException
{
    private $bitPayMessage = "Failed to send invoice notification";
    private $bitPayCode    = "BITPAY-INVOICE-NOTIFICATION";
    protected $apiCode;

    /**
     * Construct the InvoiceNotificationException.
     *
     * @param string $message [optional] The Exception message to throw.
     * @param int    $code    [optional] The Exception code to throw.
     * @param string $apiCode [optional] The API Exception code to throw.
     */
    public function __construct($message = "", $code = 106, Exception $previous=NULL, $apiCode = "000000")
    {

        $message = $this->bitPayCode.": ".$this->bitPayMessage."-> ".$message;
        $this->apiCode = $apiCode;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string Error code provided by the BitPay REST API
     */
    public function getApiCode()
    {
        return $this->apiCode;
    }
}
