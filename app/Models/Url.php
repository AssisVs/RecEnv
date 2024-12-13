<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Url extends Model
{
    protected $guarded = [];

    // Indicar o nome da tabela
    protected $table = 'urls';

      // Indicar quais colunas podem ser cadastrada
    protected $fillable = ['url',];

    public function requests(): HasMany
    {
        return $this->hasMany(WebhookRequest::class);
    }
}
