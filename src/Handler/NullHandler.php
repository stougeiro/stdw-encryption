<?php declare(strict_types=1);

    namespace STDW\Encryption\Handler;

    use STDW\Contract\EncryptionHandlerInterface;


    class NullHandler implements EncryptionHandlerInterface
    {
        private string $key;


        public function setKey(string $key):void
        {
            $this->key = $key;
        }

        public function encrypt(mixed $value): string
        {
            return "";
        }

        public function decrypt(string $payload): mixed
        {
            return "";
        }
    }
