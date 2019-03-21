<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * ユーザーテーブルマイグレーションクラス
	 *
   * @author negishi
   * @since  2019-03-13
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->date('birthday')->default('2004-04-01');
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();   // メール確認の機能を有効にする際に必要
			$table->string('password');
			$table->char('authority_code', 3);                    // ユーザーの権限
			$table->integer('user_possession_point')->unsigned(); // 所持ポイント ※8桁
			$table->rememberToken();
			$table->timestamps();

			// 外部キー制約
			$table->foreign('authority_code', 3)
				->references('authority_code')
				->on('user_authorities')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}
}
