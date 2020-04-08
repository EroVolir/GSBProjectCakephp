<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PracticiensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PracticiensTable Test Case
 */
class PracticiensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PracticiensTable
     */
    public $Practiciens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Practiciens',
        'app.Specialites',
        'app.Types',
        'app.Visiteurs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Practiciens') ? [] : ['className' => PracticiensTable::class];
        $this->Practiciens = TableRegistry::getTableLocator()->get('Practiciens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Practiciens);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
