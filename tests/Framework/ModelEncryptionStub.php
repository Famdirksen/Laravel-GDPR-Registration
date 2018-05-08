<?php

namespace Tests\Framework;

use Famdirksen\LaravelModelEncryption\ModelEncryption;

class ModelEncryptionStub
{
    use ModelEncryption;

    protected $encryptable = [
        'secret',
    ];
}
