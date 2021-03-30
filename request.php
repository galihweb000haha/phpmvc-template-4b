<?php
    class Request
    {
        public $url;

        public function __construct()
        {
            // Ambil seluruh url
            $this->url = $_SERVER["REQUEST_URI"];
        }
    }

?>