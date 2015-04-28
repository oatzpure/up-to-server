<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 1:08
 */
class Card  extends AppModel
{
    public $belongsTo = [
        'Deck' => [
            'className' => 'Deck'
        ]
    ];
}
?>