<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant;

class User extends Authenticatable implements Tenant
{
    use HasApiTokens, HasFactory, Notifiable;
    use AllowsTenantIdentification;

    /**
     * @var string[]
     */
    protected $dispatchesEvents = [
        'created' => \Tenancy\Tenant\Events\Created::class,
        'updated' => \Tenancy\Tenant\Events\Updated::class,
        'deleted' => \Tenancy\Tenant\Events\Deleted::class,
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return string
     */
    public function getTenantKeyName(): string
    {
        return 'id';
    }

    /**
     * @return int|string
     */
    public function getTenantKey(): int|string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTenantIdentifier(): string
    {
        return get_class($this);
    }
}
