<?php

namespace App\Controller;

use Cake\Event\Event;

class PagesController extends AppController
{
    
    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view']);
    }

    public function index()
    {
        //$result = $this->Pages->find()->all();
        //$this->Auth->allow(); //não funciona
        $this->paginate = [
            'limit' => 2
        ];
        $result = $this->paginate($this->Pages);
        $this->set('pages', $result);
        //não é uma boa pratica
        //debug($pages);
        //exit;
    }

    public function view($id)
    {
        $page = $this->Pages->get($id);
        $this->set('page', $page);
        //debug('Visualizando: ' . $id);
        //exit;
    }

    public function add()
    {
        //$this->viewBuilder()->layout('novo');
        $page = $this->Pages->newEntity();
        if($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if($this->Pages->save($page)) {
                $this->Flash->success('Salvo com sucesso.');
                //return $this->redirect('/pages');
                return $this->redirect(['controller' => 'pages','action' => 'index']);
            }
            $this->Flash->warning('Falhou ao salvar, verifique os campos');
        }
        
        $this->set('page', $page);
    }

    public function edit($id)
    {
        $page = $this->Pages->get($id);
        if($this->request->is(['post', 'put', 'patch'])) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if($this->Pages->save($page)) {
                $this->Flash->success('Salvo com sucesso.');
                //return $this->redirect('/pages');
                return $this->redirect(['controller' => 'pages','action' => 'index']);
            }
            $this->Flash->warning('Falhou ao salvar, verifique os campos');
        }
        
        $this->set('page', $page);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        $this->Pages->delete($page);

        $this->Flash->success('Removido com sucesso.');
        return $this->redirect(['action' => 'index']);
    }
}