<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Client as BaseClient;

class OauthClient extends BaseClient
{
    public function skipsAuthorization(): bool
    {
        return true;
    }
}
