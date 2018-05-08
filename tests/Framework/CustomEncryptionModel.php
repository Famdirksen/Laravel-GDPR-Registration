<?php

namespace Tests\Framework;

use Illuminate\Database\Eloquent\Model;
use Famdirksen\LaravelModelEncryption\ModelEncryption;

class CustomEncryptionModel extends Model
{
    use ModelEncryption;

    protected $encryptable = [
        'secret',
    ];

    protected $fillable = [
        'secret',
    ];

    protected $table = 'encryptable_models';

    /**
     * @param $value
     *
     * @return string
     */
    protected function encryptAttribute($value)
    {
        return 'encrypted';
    }

    /**
     * @param $value
     *
     * @return string
     */
    protected function decryptAttribute($value)
    {
        return 'decrypted';
    }
}
