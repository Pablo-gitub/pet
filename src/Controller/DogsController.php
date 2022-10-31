<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Dogs Controller
 *
 * @property \App\Model\Table\DogsTable $Dogs
 * @method \App\Model\Entity\Dog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DogsController extends AppController
{
    public function home()
    {
        $this->viewBuilder()->setLayout('topbar');

        $this->paginate = [
            'contain' => ['Owners', 'Breeds'],
        ];
        $dogs = $this->paginate($this->Dogs);

        $this->set(compact('dogs'));
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('topbar');

        $this->paginate = [
            'contain' => ['Owners', 'Breeds'],
        ];
        $dogs = $this->paginate($this->Dogs);

        $this->set(compact('dogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Dog id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('topbar');

        $dog = $this->Dogs->get($id, [
            'contain' => ['Owners', 'Breeds', 'Transfers', 'Visits'],
        ]);

        $mom = $this->Dogs->find('all', [
            'conditions' => ['microchip' => $dog->mom_chip],
            'limit' => 100])->select(['Dogs.id','Dogs.microchip', 'Dogs.name', 'Dogs.owner_id'])->first();
            
        if(!empty($mom)){
            $momy = $this->Dogs->get($mom->id, [
                'contain' => ['Owners', 'Breeds', 'Transfers', 'Visits'],
            ]);
        } else {
            $momy = null;
        }

        $dad = $this->Dogs->find('all', [
            'conditions' => ['microchip' => $dog->dad_chip],
            'limit' => 100])->select(['Dogs.id','Dogs.microchip', 'Dogs.name', 'Dogs.owner_id'])->first();
        
        if(!empty($dad)){
            $dady = $this->Dogs->get($dad->id, [
                'contain' => ['Owners', 'Breeds', 'Transfers', 'Visits'],
            ]);
        } else {
            $dady = null;
        }

        $kids = $this->Dogs->find('all', [
                'conditions' => [ 'OR' => [['dad_chip' => $dog->microchip],['mom_chip' => $dog->microchip]]]
                ])->select(['Dogs.gender','Dogs.id','Dogs.microchip', 'Dogs.name', 'Dogs.owner_id'])->all();
        

        $this->set(compact('dog', 'mom', 'dad', 'momy', 'dady', 'kids'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('topbar');

        $dog = $this->Dogs->newEmptyEntity();
        if ($this->request->is('post')) {
            $dog = $this->Dogs->patchEntity($dog, $this->request->getData());

            if ($this->Dogs->save($dog)) {
                $this->Flash->success(__('The dog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dog could not be saved. Please, try again.'));
        }

        $owners = $this->Dogs->Owners->find('list', ['limit' => 200])->all();
        $breeds = $this->Dogs->Breeds->find('list', ['limit' => 200])->all();
        

        $females = $this->Dogs->find('all', [
            'conditions' => ['Dogs.gender' => 'F'],
            'limit' => 100])
        ->select(['Dogs.microchip']);
        
        $males = $this->Dogs->find('all', [
            'conditions' => ['Dogs.gender' => 'M'],
            'limit' => 100])
        ->select(['Dogs.microchip']);

        $genderOptions = [
            'M' => 'Masculine',
            'F' => 'Feminine'
        ]; 
        
        $this->set(compact('dog', 'owners', 'breeds', 'females', 'males', 'genderOptions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Dog id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->setLayout('topbar');
        
        $dog = $this->Dogs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dog = $this->Dogs->patchEntity($dog, $this->request->getData());
            if ($this->Dogs->save($dog)) {
                $this->Flash->success(__('The dog has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The dog could not be saved. Please, try again.'));
        }
        $owners = $this->Dogs->Owners->find('list', ['limit' => 200])->all();
        $breeds = $this->Dogs->Breeds->find('list', ['limit' => 200])->all();

        $females = $this->Dogs->find('all', [
            'conditions' => ['Dogs.gender' => 'F'],
            'limit' => 100])
        ->select(['Dogs.microchip']);
        
        $males = $this->Dogs->find('all', [
            'conditions' => ['Dogs.gender' => 'M'],
            'limit' => 100])
        ->select(['Dogs.microchip']);

        $genderOptions = [
            'M' => 'Masculine',
            'F' => 'Feminine'
        ]; 

        $this->set(compact('dog', 'owners', 'breeds', 'females', 'males', 'genderOptions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Dog id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dog = $this->Dogs->get($id);
        if ($this->Dogs->delete($dog)) {
            $this->Flash->success(__('The dog has been deleted.'));
        } else {
            $this->Flash->error(__('The dog could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
