<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProduitsVisitesFixture
 */
class ProduitsVisitesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'quantite' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'Produit_id' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'Visite_id' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Produit_id', 'Visite_id'], 'length' => []],
            'FK_Produits_Visites_Visites' => ['type' => 'foreign', 'columns' => ['Visite_id'], 'references' => ['Visites', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_Produits_Visites_Produits' => ['type' => 'foreign', 'columns' => ['Produit_id'], 'references' => ['Produits', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'quantite' => 1,
                'Produit_id' => 1,
                'Visite_id' => 1
            ],
        ];
        parent::init();
    }
}
