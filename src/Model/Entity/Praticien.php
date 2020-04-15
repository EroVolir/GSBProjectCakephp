<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Praticien Entity
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $tel
 * @property string|null $mail
 * @property string|null $adresse
 * @property int|null $codepostal
 * @property string|null $ville
 * @property int|null $Specialite_id
 * @property int|null $Type_id
 * @property int|null $Visiteur_id
 *
 * @property \App\Model\Entity\Specialite $specialite
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Visiteur $visiteur
 */
class Praticien extends Entity
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
        'nom' => true,
        'prenom' => true,
        'tel' => true,
        'mail' => true,
        'adresse' => true,
        'codepostal' => true,
        'ville' => true,
        'Specialite_id' => true,
        'Type_id' => true,
        'Visiteur_id' => true,
        'specialite' => true,
        'type' => true,
        'visiteur' => true
    ];
}
