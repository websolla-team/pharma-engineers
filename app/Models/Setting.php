<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['keywords', 'description', 'about_text', 'about_text_footer', 'our_policy', 'our_philosophy', 'mission_statement'];
    protected $guarded = [];
}
