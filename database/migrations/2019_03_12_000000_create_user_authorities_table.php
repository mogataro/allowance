<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * ユーザー権限テーブルマイグレーションクラス
 *
 * @author negishi
 * @since  2019-03-13
 */
class CreateUserAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_authorities', function (Blueprint $table) {
            $table->increments('id');                  // ID
            $table->char('authority_code', 3)->unique(); // ユーザー権限ID（000:管理者権限、001：一般権限、002:削除扱いユーザ）
            $table->string('authority_name');          // ユーザー権限名
            $table->timestamps();                      // 登録日時、更新日時
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_authorities');
    }
}
