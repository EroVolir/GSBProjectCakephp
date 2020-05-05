<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisitesFixture
 */
class VisitesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'dateVisite' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'commentaire' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'bilan' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'Praticien_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'Visiteur_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Visites_Visiteurs' => ['type' => 'foreign', 'columns' => ['Visiteur_id'], 'references' => ['Visiteurs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_Visites_Praticiens' => ['type' => 'foreign', 'columns' => ['Praticien_id'], 'references' => ['Praticiens', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'dateVisite' => '2020-05-05',
                'commentaire' => 'Lorem ipsum dolor sit amet',
                'bilan' => 'Lorem ipsum dolor sit amet',
                'Praticien_id' => 1,
                'Visiteur_id' => 1
            ],
        ];
        parent::init();
    }
}
