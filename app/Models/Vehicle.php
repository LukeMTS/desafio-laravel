<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Vehicle extends Model
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $table = 'vehicles';

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'user_id',
    'model',
    'brand',
    'license_plate',
    'version',
  ];

  public function user()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }
}
