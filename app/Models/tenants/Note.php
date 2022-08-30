<?php

namespace App\Models\tenants;

use Illuminate\Database\Eloquent\Model;
use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant;
use Tenancy\Tenant\Events;


class Note extends Model implements Tenant
{
    use AllowsTenantIdentification;

    protected $table = 'notes';

    /**
     * @var string[]
     */
    protected $dispatchesEvents = [
        'created' => Events\Created::class,
        'updated' => Events\Updated::class,
        'deleted' => Events\Deleted::class,
    ];

    /**
     * @return string
     */
    public function getTenantKeyName(): string
    {
        // TODO: Implement getTenantKeyName() method.
    }

    /**
     * @return int|string
     */
    public function getTenantKey(): int|string
    {
    }

    /**
     * @return string
     */
    public function getTenantIdentifier(): string
    {
        // TODO: Implement getTenantIdentifier() method.
    }
}
