<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Practiciens Controller
 *
 * @property \App\Model\Table\PracticiensTable $Practiciens
 *
 * @method \App\Model\Entity\Practicien[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PracticiensController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Specialites', 'Types', 'Visiteurs']
        ];
        $practiciens = $this->paginate($this->Practiciens);

        $this->set(compact('practiciens'));
    }

    /**
     * View method
     *
     * @param string|null $id Practicien id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $practicien = $this->Practiciens->get($id, [
            'contain' => ['Specialites', 'Types', 'Visiteurs']
        ]);

        $this->set('practicien', $practicien);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $practicien = $this->Practiciens->newEntity();
        if ($this->request->is('post')) {
            $practicien = $this->Practiciens->patchEntity($practicien, $this->request->getData());
            if ($this->Practiciens->save($practicien)) {
                $this->Flash->success(__('The practicien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The practicien could not be saved. Please, try again.'));
        }
        $specialites = $this->Practiciens->Specialites->find('list', ['limit' => 200]);
        $types = $this->Practiciens->Types->find('list', ['limit' => 200]);
        $visiteurs = $this->Practiciens->Visiteurs->find('list', ['limit' => 200]);
        $this->set(compact('practicien', 'specialites', 'types', 'visiteurs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Practicien id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $practicien = $this->Practiciens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $practicien = $this->Practiciens->patchEntity($practicien, $this->request->getData());
            if ($this->Practiciens->save($practicien)) {
                $this->Flash->success(__('The practicien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The practicien could not be saved. Please, try again.'));
        }
        $specialites = $this->Practiciens->Specialites->find('list', ['limit' => 200]);
        $types = $this->Practiciens->Types->find('list', ['limit' => 200]);
        $visiteurs = $this->Practiciens->Visiteurs->find('list', ['limit' => 200]);
        $this->set(compact('practicien', 'specialites', 'types', 'visiteurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Practicien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $practicien = $this->Practiciens->get($id);
        if ($this->Practiciens->delete($practicien)) {
            $this->Flash->success(__('The practicien has been deleted.'));
        } else {
            $this->Flash->error(__('The practicien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
