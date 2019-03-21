<?php

use Illuminate\Database\Seeder;
use App\User;

/**
 * ユーザーテーブルシーダクラス
 *
 * @author negishi
 * @since  2019-03-13
 */
class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    // ----------------------------------------
    //  CSVファイルの読み込み処理
    // ----------------------------------------
    // CSVファイルのパスを取得
    $csvFilePath = base_path() . "/database/seedscsv/UserTableSeederCsv.csv";
    
    // CSVファイルの読み込み処理
    $csvReader = new CsvReader($csvFilePath);
    
    // CSVファイルのデータを配列に変換
    $csvArrayData = $csvReader->convertCsvToArray();

    // ----------------------------------------
    //  ユーザーテーブルにデータを追加
    // ----------------------------------------
    // CSVデータ数分（CSVファイルの行数分）繰り返す
    foreach($csvArrayData as $csvArrayLineData){
      User::create([
        'name'           => $csvArrayLineData[0],
        'email'          => $csvArrayLineData[1],
        'password'       => Hash::make($csvArrayLineData[2]),
        'authority_code' => $csvArrayLineData[3],
        'user_possession_point' => $csvArrayLineData[4]
      ]);
    }
  }
}
