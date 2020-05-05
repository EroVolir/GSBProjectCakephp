<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisiteursFixture
 */
class VisiteursFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'matricule' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'nom' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'prenom' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'mail' => ['type' => 'string', 'length' => 1000, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'dateEmbauche' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Visiteurs_users' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'matricule' => 1,
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'tel' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'dateEmbauche' => '2020-05-05',
                'user_id' => 1
            ],
        ];
        parent::init();
    }
}
