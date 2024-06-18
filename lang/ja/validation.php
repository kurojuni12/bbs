<?php

return [
    'accepted' => 'この :attribute を承認してください。',
    'active_url' => 'この :attribute は有効なURLではありません。',
    'after' => ':attribute には、:date より後の日付を指定してください。',
    // 他のデフォルトのバリデーションメッセージ...

    'custom' => [
        'author' => [
            'required' => '名前は必須項目です。',
            'max' => '名前は30文字以下で入力してください。',
        ],
        'title' => [
            'required' => 'タイトルは必須項目です。',
            'max' => 'タイトルは255文字以下で入力してください。',
        ],
        'body' => [
            'required' => '本文は必須項目です。',
        ],
    ],

    'attributes' => [
        'author' => '名前',
        'title' => 'タイトル',
        'body' => '本文',
    ],
];
