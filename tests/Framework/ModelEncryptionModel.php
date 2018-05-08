<?php

namespace Tests\Framework;

use Illuminate\Database\Eloquent\Model;
use Famdirksen\LaravelModelEncryption\ModelEncryption;

class ModelEncryptionModel extends Model
{
    use ModelEncryption;

    protected $fillable = [
        'secret',
    ];

    protected $encryptable = [
        'secret',
    ];
}
