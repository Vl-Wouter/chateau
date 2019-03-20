<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
		//
		protected $table = 'clients';

		/**
		 * Get client title
		 */
		public function title() {
			return $this->hasOne('App\Models\Title');
		}

		/**
		 * Get client reservations
		 */
		public function reservations() {
			return $this->hasMany('App\Models\Reservation');
		}
}
