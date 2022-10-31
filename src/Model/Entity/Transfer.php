<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transfer Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $date
 * @property int $seller_id
 * @property int $buyer_id
 * @property int $dog_id
 * @property int $clinic_id
 * @property string $fiscalCode
 * @property float $prize
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Dog $dog
 * @property \App\Model\Entity\Clinic $clinic
 */
class Transfer extends Entity
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
        'date' => true,
        'seller_id' => true,
        'buyer_id' => true,
        'dog_id' => true,
        'clinic_id' => true,
        'prize' => true,
        'created' => true,
        'modified' => true,
        'dog' => true,
        'clinic' => true,
        'owner' => true,
    ];
}
