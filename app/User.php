<?php
	
	namespace App;
	use Hash;
	use Illuminate\Notifications\Notifiable;
	use Illuminate\Foundation\Auth\User as Authenticatable;
	use Tymon\JWTAuth\Contracts\JWTSubject;
	use Spatie\Permission\Traits\HasRoles;
	use Auth;
	class User extends Authenticatable implements JWTSubject{
		use Notifiable;
		use HasRoles;
		protected     $guard_name     = 'web';
		public static $STATUS_DISABLE = 0;
		public static $STATUS_ENABLE  = 1;
		public static $STATUS_BLOCK   = 2;
		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable
			= [
				'name',
				'email',
				'password',
				'level',
				'phone',
				'verify_code',
			];
		/**
		 * The attributes that should be hidden for arrays.
		 *
		 * @var array
		 */
		protected $hidden
			= [
				'password',
				'remember_token',
			];
		/**
		 * Automatically creates hash for the user password.
		 *
		 * @param  string $value
		 * @return void
		 */
		public function setPasswordAttribute( $value ){
			$this->attributes['password'] = Hash::make( $value );
		}
		/**
		 * Get the identifier that will be stored in the subject claim of the JWT.
		 *
		 * @return mixed
		 */
		public function getJWTIdentifier(){
			return $this->getKey();
		}
		/**
		 * Return a key value array, containing any custom claims to be added to the JWT.
		 *
		 * @return array
		 */
		public function getJWTCustomClaims(){
			return [];
		}
		//
		public static function plusMoney( $coinType = 'btc',$amount = 0 ){
			if( $coinType == 'btc' ){
				Auth::user()->btc_amount += $amount;
			}
			if( $coinType == 'eth' ){
				Auth::user()->eth_amount += $amount;
			}
			if( $coinType == 'usdt' ){
				Auth::user()->usdt_amount += $amount;
			}
			Auth::user()->save();
		}
	}
