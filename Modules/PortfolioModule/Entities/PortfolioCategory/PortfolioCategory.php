<?php

namespace Modules\PortfolioModule\Entities\PortfolioCategory;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\PortfolioModule\Entities\Portfolio\Portfolio;

class PortfolioCategory extends Model
{
    use Translatable;

    protected $table = 'portfolio_category';
    protected $fillable = ['created_by','cover_photo'];
    public $translatedAttributes = ['title', 'description'];
    public $translationModel = PortfolioCategoryTranslation::class;

    # Relation
    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }
}
