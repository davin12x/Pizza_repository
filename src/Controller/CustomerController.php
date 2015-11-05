<?php
namespace App\Controller;
use App\Controller\AppController;
class CustomerController extends AppController
{

      public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }
    public function index()
    {
        $customers=$this->Customer->find('all');//between "Customer" is the table
        $this->set(compact('customers'));
    }
   public function add()
   {
        $customers = $this->Customer->newEntity();
        if ($this->request->is('post')) {
            $customers = $this->Customer->patchEntity($customers, $this->request->data);
            // Added this line
            $customers->user_id = $this->Auth->user('id');
            // You could also do the following
            //$newData = ['user_id' => $this->Auth->user('id')];
            //$article = $this->Articles->patchEntity($article, $newData);
            if ($this->Customer->save($customers)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('customers', $customers);
   }
    public function edit($id = null)
    {
        $customers=$this->Customer->get($id);
        if($this->request->is(['post','put']))
        {
            $this->Customer->patchEntity($customers,$this->request->data);
            if($this->Customer->save($customers))
            {
                $this->Flash->Success(('Data is Updated'));
                return $this->redirect(['action'=>'index']);
            }
            $this->Flash->error(('Unable to Update'));
            
        }
        $this->set('customers',$customers);
    }
    public function delete($id)
    {
        $this->request->allowMethod(['post','delete']);
        $customers=$this->Customer->get($id);
        if($this->Customer->delete($customers))
        {
          //  $this->Flash->success(('Customer With id:{0} has been deleted', h($id)));
           $this->Flash->success(__('Customer with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action'=>'index']);
        }
    }
    public function isAuthorized($user)
    {
    // All registered users can add articles
    if ($this->request->action === 'add') {
        return true;
    }

    // The owner of an article can edit and delete it
    if (in_array($this->request->action, ['edit', 'delete'])) {
        $customersId = (int)$this->request->params['pass'][0];
        if ($this->Customer->isOwnedBy($customersId, $user['id'])) {
            return true;
        }
    }

    return parent::isAuthorized($user);
    }
}
?>
