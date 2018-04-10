<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Form Controller
 *
 *
 * @method \App\Model\Entity\Form[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FormController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
             $this->render('/Test/form');

    }

    /**
     * View method
     *
     * @param string|null $id Form id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $form = $this->Form->get($id, [
            'contain' => []
        ]);

        $this->set('form', $form);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $form = $this->Form->newEntity();
        if ($this->request->is('post')) {
            $form = $this->Form->patchEntity($form, $this->request->getData());
            if ($this->Form->save($form)) {
                $this->Flash->success(__('The form has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The form could not be saved. Please, try again.'));
        }
        $this->set(compact('form'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Form id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $form = $this->Form->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $form = $this->Form->patchEntity($form, $this->request->getData());
            if ($this->Form->save($form)) {
                $this->Flash->success(__('The form has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The form could not be saved. Please, try again.'));
        }
        $this->set(compact('form'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Form id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $form = $this->Form->get($id);
        if ($this->Form->delete($form)) {
            $this->Flash->success(__('The form has been deleted.'));
        } else {
            $this->Flash->error(__('The form could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
