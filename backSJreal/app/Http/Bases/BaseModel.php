<?php

namespace App\Http\Bases;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Clase BaseModel
 *
 * @package App\Http\Bases
 */
class BaseModel extends Model //implements AuditableInterface
{
    use SoftDeletes;
    // use Auditable;
    use HasUuids;



    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The primary key's datatype.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The ID field is a UUID
     *
     * @var bool
     */
    protected bool $primaryKeyIsUuid = true;
    /**
     * Custom UUID field name
     *
     * @var string
     */
    protected $primaryKey = 'uuid';



    // /**
    //  * Overrides the default Eloquent hasMany relationship to return a HasManySyncable.
    //  *
    //  * {@inheritDoc}
    //  * @return \App\Model\Relations\HasManySyncable
    //  */
    // public function hasMany($related, $foreignKey = null, $localKey = null)
    // {
    //     $instance = $this->newRelatedInstance($related);

    //     $foreignKey = $foreignKey ?: $this->getForeignKey();

    //     $localKey = $localKey ?: $this->getKeyName();

    //     // return new HasManySyncable(
    //     //     $instance->newQuery(),
    //     //     $this,
    //     //     $instance->getTable() . '.' . $foreignKey,
    //     //     $localKey
    //     // );
    // }
}
