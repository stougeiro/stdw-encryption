<?php declare(strict_types=1);

    namespace STDW\Encryption;

    use STDW\Contract\EncryptionHandlerInterface;
    use STDW\Contract\EncryptionInterface;


    class Encrypter implements EncryptionInterface
    {
        protected EncryptionHandlerInterface $handler;


        public function __construct(EncryptionHandlerInterface $handler)
        {
            $this->handler = $handler;
        }


        public function encrypt(mixed $value): string
        {
            return $this->handler->encrypt($value);
        }

        public function decrypt(string $payload): mixed
        {
            return $this->handler->decrypt($payload);
        }
    }
