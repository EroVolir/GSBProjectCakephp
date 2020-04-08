<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProduitsVisite Entity
 *
 * @property int $quantite
 * @property int $Produit_id
 * @property int $Visite_id
 *
 * @property \App\Model\Entity\Produit $produit
 * @property \App\Model\Entity\Visite $visite
 */
class ProduitsVisite extends Entity
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
        'quantite' => true,
        'produit' => true,
        'visite' => true
    ];
}
