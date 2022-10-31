<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visit Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property int $dog_id
 * @property int $clinic_id
 * @property string $doctor
 * @property string $esito
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Dog $dog
 * @property \App\Model\Entity\Clinic $clinic
 */
class Visit extends Entity
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
        'dog_id' => true,
        'clinic_id' => true,
        'doctor' => true,
        'esito' => true,
        'created' => true,
        'modified' => true,
        'dog' => true,
        'clinic' => true,
    ];
}
