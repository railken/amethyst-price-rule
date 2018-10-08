<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Schemas\PriceRuleSchema;
use Railken\Lem\Contracts\EntityContract;

class PriceRule extends Model implements EntityContract
{
    use SoftDeletes;

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('amethyst.price-rule.managers.price-rule.table');
        $this->fillable = (new PriceRuleSchema())->getNameFillableAttributes();
    }
}
