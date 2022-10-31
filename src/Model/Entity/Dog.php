<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dog Entity
 *
 * @property int $id
 * @property int $microchip
 * @property int $owner_id
 * @property int $breed_id
 * @property int $mom_chip
 * @property int $dad_chip
 * @property string $name
 * @property string $gender
 * @property float $weight
 * @property \Cake\I18n\FrozenDate $birthday
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Owner $owner
 * @property \App\Model\Entity\Breed $breed
 * @property \App\Model\Entity\Transfer[] $transfers
 * @property \App\Model\Entity\Visit[] $visits
 */
class Dog extends Entity
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
        'microchip' => true,
        'owner_id' => true,
        'breed_id' => true,
        'mom_chip' => true,
        'dad_chip' => true,
        'name' => true,
        'gender' => true,
        'weight' => true,
        'birthday' => true,
        'created' => true,
        'modified' => true,
        'owner' => true,
        'breed' => true,
        'transfers' => true,
        'visits' => true,
        'imagineLink' => true,
    ];
}
