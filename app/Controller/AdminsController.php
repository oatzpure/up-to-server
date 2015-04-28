<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 27/4/2558
 * Time: 11:08
 */
class AdminsController extends AppController {
    public function index() {
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
        }
        else{ $this->redirect(['controller' =>'users','action' => 'login']);}
    }

    public function account() {
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
            $this->loadModel('User');
            $users = $this->User->find('all', array(
                'conditions' => array('User.status' => 'Able', 'User.role' => '2')
            ));
            $this->set('users', $users);
        }else{ $this->redirect(['controller' =>'users','action' => 'login']);}
    }

    public function block($id=null) {
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
            $this->loadModel('User');
            $data = [
                'User' => [
                    'id' => $id,
                    'status' => 'Block'
                ]
            ];
            if ($this->User->save($data)) {
                $this->Session->setFlash('Block deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
                $this->redirect(['controller' =>'admins','action' => 'account']);
            } else {
                $this->Session->setFlash('Block deck is fail', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
            }
            $this->set('id', $id);
        }else{ $this->redirect(['controller' =>'users','action' => 'login']);}
    }


    public function deck() {
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
        $this->loadModel('Deck');
        $disable = $this->Deck->find('all',array(
            'conditions' => array('Deck.status' => 'Disable')
        ));
        $this->set('disable', $disable);

        $able = $this->Deck->find('all',array(
            'conditions' => array('Deck.status' => 'Able')
        ));
        $this->set('able',$able);

        $block = $this->Deck->find('all',array(
            'conditions' => array('Deck.status' => 'Block')
        ));
        $this->set('block', $block);
    }else{ $this->redirect(['controller' =>'users','action' => 'login']);}

    }

    public function able($id=null){
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
        $this->loadModel('Deck');
        //pr($id);
            $data = [
                'Deck' => [
                    'id' => $id,
                    'status' => 'Able'
                ]
            ];
            if ($this->Deck->save($data)) {
                $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
                $this->redirect(['controller' =>'admins','action' => 'deck']);
            } else {
                $this->Session->setFlash('Able deck is fail', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
            }
            //pr($this->request->data);
        $this->set('id', $id);
    }else{ $this->redirect(['controller' =>'users','action' => 'login']);}

    }

    public function disable($id=null){
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
            $this->loadModel('Deck');
            //pr($id);
            $data = [
                'Deck' => [
                    'id' => $id,
                    'status' => 'Block'
                ]
            ];
            if ($this->Deck->save($data)) {
                $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
                $this->redirect(['controller' =>'admins','action' => 'deck']);
            } else {
                $this->Session->setFlash('Able deck is fail', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
            }
            //pr($this->request->data);
            $this->set('id', $id);
        } else{ $this->redirect(['controller' =>'users','action' => 'login']);}
    }

    public function approve($id=null){
        if($this->checkSession()) {
            $User = $this->Session->read('User');
            $this->set('User', $User);
        $this->loadModel('Deck');
       // pr($id);
        $data = [
            'Deck' => [
                'id' => $id,
                'status' => 'Able'
            ]
        ];
        if ($this->Deck->save($data)) {
            $this->Session->setFlash('Able deck is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
            $this->redirect(['controller' =>'admins','action' => 'deck']);
        } else {
            $this->Session->setFlash('Able deck is fail', 'default', array("class" => 'alert alert-danger', 'style' => 'position:'));
        }
        //pr($this->request->data);
        $this->set('id', $id);
    } else{ $this->redirect(['controller' =>'users','action' => 'login']);}
    }

    public function checkSession(){
        $User = $this->Session->read('User');
        if($User==null or $User['User']['role']!=1){
            return false;

        }else{
            return true;
        }


    }

}
?>