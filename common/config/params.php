<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'user.passwordResetTokenExpire' => 3600,
	'maskMoneyOptions' => [
        'prefix' => 'Rp. ',
        //'suffix' => '',
        //'affixesStay' => true,
        'thousands' => ',',
        'decimal' => '.',
        'precision' => 1, 
        'allowZero' => true,
        'allowNegative' => false,
    ]
];
