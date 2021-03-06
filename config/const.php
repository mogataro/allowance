<?php

/*
|--------------------------------------------------------------------------
| 定数
|--------------------------------------------------------------------------
| ◆使用方法◆
|   通常の値を取得したい時
|     \Config::get('const.キー名')
|     config('const.キー名')
|   連想配列の値を取得したい時
|     \Config::get('const.キー名['連想配列のキー名']')
|     config('const.キー名')['連想配列のキー名']
*/

return [
    // ----------------------------------
    //  ユーザー権限定数
    // ----------------------------------
    // ※「user_authorities」テーブルに格納されているマスタデータ
    'UserAuthority' => ['Administrator' => '000', // 管理者権限
                        'Normal'        => '001', // 一般権限
                        'Deleted'       => '002'  // 削除扱いユーザ
    ],

    // ----------------------------------
    //  ユーザー権限名定数
    // ----------------------------------
    // ※「user_authorities」テーブルに格納されているマスタデータ
    'UserAuthorityName' => ['Administrator' => '管理者', // 管理者権限名
                            'Normal'        => '一　般', // 一般権限名
                            'Deleted'       => '削除済'  // 削除扱いユーザ
    ]
];
