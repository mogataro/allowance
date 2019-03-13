<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * スコアテーブルマイグレーションクラス
     * 科目ごとのスコアを管理する
     *
     * @author negishi
     * @since  2019-03-13
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('imp_year',4);//実施年度(西暦)
            $table->char('imp_month',2);//実施月
            $table->string('test_type');//テスト大種別(定期テスト,模擬テストなど)
            $table->string('test_class');//テスト小項目(大項目と親子関係必要：中間テスト,期末テスト,第2回代ゼミスタンダードレベル模試など)
            $table->string('subjects');//科目(算数、国語など)
            $table->integer('acquisition_score')->unsigned()->nullable($value = true);//取得点数
            $table->integer('perfect_score')->unsigned();//満点
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
