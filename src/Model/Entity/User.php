<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $role
 * @property string|null $api_key
 * @property string|null $api_key_plain
 *
 * @property \App\Model\Entity\Visiteur[] $visiteurs
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'role' => true,
        'api_key' => true,
        'api_key_plain' => true,
        'visiteurs' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
