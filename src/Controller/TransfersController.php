<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Transfers Controller
 *
 * @property \App\Model\Table\TransfersTable $Transfers
 * @method \App\Model\Entity\Transfer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransfersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('topbar');
        $this->paginate = [
            'contain' => ['Dogs', 'Clinics', 'Owners'],
        ];
        $transfers = $this->paginate($this->Transfers);

        $this->set(compact('transfers'));
    }

    /**
     * View method
     *
     * @param string|null $id Transfer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('topbar');
        $transfer = $this->Transfers->get($id, [
            'contain' => ['Dogs', 'Clinics', 'Owners'],
        ]);

        $this->set(compact('transfer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    

    public function add()
    {
        $this->viewBuilder()->setLayout('topbar');
        $transfer = $this->Transfers->newEmptyEntity();
        if ($this->request->is('post')) {
            $transfer = $this->Transfers->patchEntity($transfer, $this->request->getData());

            $this->editDog($transfer->dog_id, $transfer->buyer_id);

            if ($this->Transfers->save($transfer)) {
                $this->Flash->success(__('The transfer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transfer could not be saved. Please, try again.'));
        }
        $dogs = $this->Transfers->Dogs->find('list', ['limit' => 200])->all();
        $clinics = $this->Transfers->Clinics->find('list', ['limit' => 200])->all();
        $owners = $this->Transfers->Owners->find('list', ['limit' => 200])->all();
        $this->set(compact('transfer', 'dogs', 'clinics', 'owners'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Transfer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('topbar');
        $transfer = $this->Transfers->get($id, [
            'contain' => [],
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transfer = $this->Transfers->patchEntity($transfer, $this->request->getData());

            $this->editDog($transfer->dog_id, $transfer->buyer_id);

            if ($this->Transfers->save($transfer)) {
                $this->Flash->success(__('The transfer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transfer could not be saved. Please, try again.'));
        }
        $dogs = $this->Transfers->Dogs->find('list', ['limit' => 200])->all();
        $clinics = $this->Transfers->Clinics->find('list', ['limit' => 200])->all();
        $owners = $this->Transfers->Owners->find('list', ['limit' => 200])->all();
        $this->set(compact('transfer', 'dogs', 'clinics', 'owners'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transfer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transfer = $this->Transfers->get($id);
        if ($this->Transfers->delete($transfer)) {
            $this->Flash->success(__('The transfer has been deleted.'));
        } else {
            $this->Flash->error(__('The transfer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function editDog($id, $owner)
    {
        $dog = $this->Transfers->Dogs->get($id);
        
        $dog->owner_id = $owner;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $dog = $this->Transfers->Dogs->patchEntity($dog, $this->request->getData());

            if ($this->Transfers->Dogs->save($dog)) {
                $this->Flash->success(__('The dog has been update.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dog could not be saved. Please, try again.'));
        }
        
    }
    
}
