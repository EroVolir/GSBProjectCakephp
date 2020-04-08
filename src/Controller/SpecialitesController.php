<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Specialites Controller
 *
 * @property \App\Model\Table\SpecialitesTable $Specialites
 *
 * @method \App\Model\Entity\Specialite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpecialitesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $specialites = $this->paginate($this->Specialites);

        $this->set(compact('specialites'));
    }

    /**
     * View method
     *
     * @param string|null $id Specialite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $specialite = $this->Specialites->get($id, [
            'contain' => []
        ]);

        $this->set('specialite', $specialite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $specialite = $this->Specialites->newEntity();
        if ($this->request->is('post')) {
            $specialite = $this->Specialites->patchEntity($specialite, $this->request->getData());
            if ($this->Specialites->save($specialite)) {
                $this->Flash->success(__('The specialite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialite could not be saved. Please, try again.'));
        }
        $this->set(compact('specialite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Specialite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $specialite = $this->Specialites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $specialite = $this->Specialites->patchEntity($specialite, $this->request->getData());
            if ($this->Specialites->save($specialite)) {
                $this->Flash->success(__('The specialite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The specialite could not be saved. Please, try again.'));
        }
        $this->set(compact('specialite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Specialite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $specialite = $this->Specialites->get($id);
        if ($this->Specialites->delete($specialite)) {
            $this->Flash->success(__('The specialite has been deleted.'));
        } else {
            $this->Flash->error(__('The specialite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
