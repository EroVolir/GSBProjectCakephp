<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visite Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $dateVisite
 * @property string|null $commentaire
 * @property string|null $bilan
 * @property int|null $Praticien_id
 * @property int|null $Visiteur_id
 *
 * @property \App\Model\Entity\Praticien $praticien
 * @property \App\Model\Entity\Visiteur $visiteur
 */
class Visite extends Entity
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
        'dateVisite' => true,
        'commentaire' => true,
        'bilan' => true,
        'Praticien_id' => true,
        'Visiteur_id' => true,
        'praticien' => true,
        'visiteur' => true
    ];
}
