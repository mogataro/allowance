<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestScoresTable extends Migration
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
        Schema::create('test_scores', function (Blueprint $table) {
            $table->increments('id');
            $table->char('imp_year',4);//実施年度(西暦)
            $table->char('imp_month',2);//実施月
            $table->integer('test_type_id')->unsigned();//テスト区分(定期テスト,模擬テストなど)
            $table->integer('test_class_id')->unsigned();//テスト分類(区分と親子関係必要：中間テスト,期末テスト,第2回代ゼミスタンダードレベル模試など)
            $table->integer('test_subject_id')->unsigned();//テスト科目(算数、国語など)
            $table->integer('acquisition_score')->unsigned()->nullable($value = true);//取得点数
            $table->integer('perfect_score')->unsigned()->nullable($value = true);//満点
            $table->timestamps();

            // 外部キー
            $table->foreign('test_type_id')
                ->references('id')
                ->on('test_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('test_class_id')
                ->references('id')
                ->on('test_classes')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('test_subject_id')
                ->references('id')
                ->on('test_subjects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_scores');
    }
}
