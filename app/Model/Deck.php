<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 1:01
 */

class Deck  extends AppModel {
    public $hasMany = [
        'Card' => [
            'className' => 'Card'
        ]
    ];
    public $belongsTo = [
        'User' => [
            'className' => 'User',
        ]
    ];
}
?>