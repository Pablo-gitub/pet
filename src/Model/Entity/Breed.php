<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Breed Entity
 *
 * @property int $id
 * @property string $name
 * @property string $origin
 * @property string $description
 * @property string $behaviour
 * @property string $nationality
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Dog[] $dogs
 */
class Breed extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'origin' => true,
        'description' => true,
        'behaviour' => true,
        'nationality' => true,
        'created' => true,
        'modified' => true,
        'dogs' => true,
    ];
}
