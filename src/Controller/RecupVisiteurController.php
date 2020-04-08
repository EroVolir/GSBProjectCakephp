<?php


use App\Controller\AppController;

class RecupVisiteurController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');

    }

    public function index()
    {
        $visiteur = $this->Visiteur->find('all');
        $this->set([
            'visiteur' => $visiteur,
            '_serialize' => ['visiteur']
        ]);
    }

    public function view($id)
    {
         $visiteur = $this->Visiteur->find('all');
        $this->set([
            'visiteur' => $visiteur,
            '_serialize' => ['visiteur']
        ]);  
    }

    public function add()
    {
        $visiteur = $this->Visiteurs->newEntity();
        if ($this->request->is('post')) {
            $visiteur = $this->Visiteurs->patchEntity($visiteur, $this->request->getData());
            if ($this->Visiteurs->save($visiteur)) {
                $this->Flash->success(__('The visiteur has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The visiteur could not be saved. Please, try again.'));
        }
        $this->set(compact('visiteur'));
        if ($this->Visiteurs->save($visiteur)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'visiteur' => $visiteur,
            '_serialize' => ['message', 'visiteur']
        ]);
    }

    public function edit($id)
    {
       $this->request->allowMethod(['post', 'edit']);
    $visiteur = $this->Visiteurs->get($id);
    if ($this->Visiteurs->edit($visiteur)) {
      $this->Flash->success(__('The visiteur has been edited.'));
    } else {
      $this->Flash->error(__('The visiteur could not be edited. Please, try again.'));
    }
    $recipe = $this->Visiteurs->get($id);
    $message = 'Edited';
    if (!$this->Visiteurs->edit($visiteur)) {
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
    
    return $this->redirect(['action' => 'index']);
  } 
    }

        public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $visiteur = $this->Visiteurs->get($id);
    if ($this->Visiteurs->delete($visiteur)) {
      $this->Flash->success(__('The visiteur has been deleted.'));
    } else {
      $this->Flash->error(__('The visiteur could not be deleted. Please, try again.'));
    }
    $recipe = $this->Visiteurs->get($id);
    $message = 'Deleted';
    if (!$this->Visiteurs->delete($visiteur)) {
      $message = 'Error';
    }
    $this->set([
      'message' => $message,
      '_serialize' => ['message']
    ]);
    
    return $this->redirect(['action' => 'index']);
  }
    }
}