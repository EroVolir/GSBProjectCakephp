<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PracticiensFixture
 */
class PracticiensFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'nom' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'prenom' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'mail' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'adresse' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'codepostal' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'ville' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'Specialite_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'Type_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'Visiteur_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Practiciens_Specialites' => ['type' => 'foreign', 'columns' => ['Specialite_id'], 'references' => ['Specialites', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_Practiciens_Types' => ['type' => 'foreign', 'columns' => ['Type_id'], 'references' => ['Types', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_Practiciens_Visiteurs' => ['type' => 'foreign', 'columns' => ['Visiteur_id'], 'references' => ['Visiteurs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'tel' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'adresse' => 'Lorem ipsum dolor sit amet',
                'codepostal' => 1,
                'ville' => 'Lorem ipsum dolor sit amet',
                'Specialite_id' => 1,
                'Type_id' => 1,
                'Visiteur_id' => 1
            ],
        ];
        parent::init();
    }
}
