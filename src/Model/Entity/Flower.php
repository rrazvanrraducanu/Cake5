<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flower Entity
 *
 * @property int $id
 * @property string $nume
 * @property string $culoare
 * @property string $marime
 * @property int $pret
 */
class Flower extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nume' => true,
        'culoare' => true,
        'marime' => true,
        'pret' => true
    ];
}
