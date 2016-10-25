<?php
class ExtendedRequestsException extends Requests_Exception {
    private $extended;
    
    public function __construct($message, $type, $data = null, $code = 0, $extendedMessage = null) {
        $this->extended = $extendedMessage;
        parent::__construct($message, $type, $data, $code);
    }
    
    public function getExtendedMessage() {
        if(!is_null($this->extended)) {
            return $this->extended;
        }
    }    
}