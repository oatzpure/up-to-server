<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 20/4/2558
 * Time: 12:31
 */

App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function index() {
        if($this->checkSession()) {

            if ($this->request->is('post')) {
                $User = $this->Session->read('User');
                $this->set('User', $User);
                $this->loadModel('Category');
                $categorys = $this->Category->find('all', [
                    'order' => [
                        'Category.name' => 'ASC'
                    ]
                ]);
                $this->set('categorys', $categorys);
                $this->loadModel('Deck');
                if($this->request->data['Index']['search']!=""){
                    $decks = $this->Deck->find('all', array(
                        'conditions' => array('Deck.status' => 'Able', 'Deck.name LIKE' => '%'.trim($this->request->data['Index']['search'].'%')),
                        'order' => array('Deck.name' => 'ASC')
                    ));


                }else{
                    if($this->request->data['Index']['select']!= "0" ){
                        $decks = $this->Deck->find('all', array(
                            'conditions' => array('Deck.status' => 'Able', 'Deck.category_id' => trim($this->request->data['Index']['select'])),
                            'order' => array('Deck.name' => 'ASC')
                        ));
                    }else{
                        $decks = $this->Deck->find('all', array(
                            'conditions' => array('Deck.status' => 'Able'),
                            'order' => array('Deck.name' => 'ASC')
                        ));
                    }
                }



                //pr($decks);
                $this->set('decks', $decks);
            }else{
                $User = $this->Session->read('User');
                $this->set('User', $User);
                $this->loadModel('Category');
                $categorys = $this->Category->find('all', [
                    'order' => [
                        'Category.name' => 'ASC'
                    ]
                ]);
                $this->set('categorys', $categorys);
                $this->loadModel('Deck');
                $decks = $this->Deck->find('all', array(
                    'conditions' => array('Deck.status' => 'Able'),
                    'order' => array('Deck.name' => 'ASC')
                ));
                //pr($decks);
                $this->set('decks', $decks);}

            }else{ $this->redirect(['controller' =>'users','action' => 'login']);}

    }


    public function add() {
        if ($this->request->is('post')) {
            //pr($this->request->data);
            $data = [
                'User' => [
                    'username' => trim($this->request->data['User']['username']),
                    'firstname' => trim($this->request->data['User']['firstname']),
                    'lastname' => trim($this->request->data['User']['lastname']),
                    'email' => trim($this->request->data['User']['email']),
                    'password' => trim($this->request->data['User']['password']),
                    'role' => '2',
                    'status' => 'Able',
                    'created' => date("Y-m-d H:i:s"),
                    'modified' => date("Y-m-d H:i:s"),
                ]
            ];
            if($this->User->saveAssociated($data)){
                //$this->uploadFiles('profilepic')
                $this->redirect(['action' => 'login']);
                $this->Session->setFlash('Register is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
            }else{
                $this->Session->setFlash("fail");
            }
        }
    }

    public  function badges(){
        
    }

    public function editprofile($id = null) {
        if($this->checkSession()){
        $User = $this->Session->read('User');
        $this->set('User', $User);
        if ($this->request->is('post')) {
            if($this->request->data['User']['image']['name']==""){
                $image = $User['User']['image'];
            }else{
                $image = $this->request->data['User']['image']['name'];
            }
            $data = [
                'User' => [
                    'id' => $User['User']['id'],
                    'firstname' => trim($this->request->data['User']['firstname']),
                    'lastname' => trim($this->request->data['User']['lastname']),
                    'image' => $image,
                    'email' => trim($this->request->data['User']['email'])
                ]
            ];
            if ($this->User->save($data)) {
                $user = $this->User->find('first', [
                    'conditions' => [
                        'User.id' => $User['User']['id']
                    ],
                    'recursive' => -1
                ]);
                $this->uploadFiles($this->request->data['User']['image']);
                $this->setSession($user);
                $this->Session->setFlash('Edit proflie is success', 'default', array("class" => 'alert alert-success', 'style' => 'position:'));
                $this->redirect([
                    'controller' => 'users',
                    'action' => 'profile'
                ]);
            } else {

            }
            //pr($this->request->data);
        }}else{
            $this->redirect([
                'controller' => 'users',
                'action' => 'login'
            ]);
        }

    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    public function profile() {
        if($this->checkSession()){
        $User = $this->Session->read('User');
        $this->set('User', $User);}
        else{
            $this->redirect([
                'controller' => 'users',
                'action' => 'login'
            ]);
        }
    }
    public function editpass() {
        if($this->checkSession()){
        $User = $this->Session->read('User');
        $this->set('User', $User);
        if ($this->request->is('post')) {
            $data = [
                'User' => [
                    'id' => $User['User']['id'],
                    'password' => trim($this->request->data['User']['password2'])
                ]
            ];
            if($this->User->save($data)){
                $user = $this->User->find('first', [
                    'conditions' => [
                        'User.id' => $User['User']['id']
                    ],
                    'recursive' => -1
                ]);
                $this->setSession($user);
                $this->Session->setFlash('Edit password is success','default', array("class" => 'alert alert-success','style' =>'position:'));
                $this->redirect([
                    'controller' => 'users',
                    'action' => 'profile'
                ]);
            }else{

            }
            //pr($this->request->data);
        }}else {
            $this->redirect([
                'controller' => 'users',
                'action' => 'login'
            ]);
        }
    }

    public function login() {
        if ($this->request->is('post')) {
            //pr($this->request->data);
            $user = $this->User->find('first', [
                'conditions' => [
                    'User.username' => trim($this->request->data['User']['username']),
                    'User.password' => trim($this->request->data['User']['password'])
                ],
                'recursive' => -1
            ]);
            if(empty($user)){
                $this->Session->setFlash('Incorrect Username or Password','default', array("class" => 'alert alert-danger'));
            }
            else{
                $this->setSession($user);
                if($user['User']['role']=='1'){
                    $this->redirect([
                        'controller' => 'admins',
                        'action' => 'index'
                    ]);
                }
               else{
                    $this->redirect([
                        'controller' => 'users',
                        'action' => 'index'
                    ]);
                }


                //pr($this->Session->read('User.User.id'));
            }
        }
    }

    public function setSession($user=null){
        $this->Session->write('User', $user);
    }

    public function logout() {
        $this->Session->delete('User');
        $this->redirect(['action' => 'login']);
    }

    public function checkSession(){
        $User = $this->Session->read('User');
        if($User==null or $User['User']['role']!=2){
            return false;
            $this->redirect(['action' => 'login']);
        }else{
            return true;
        }
    }

    function uploadFiles($image=null)
    {
        $image = $image;
        //allowed image types
        $imageTypes = array("image/gif", "image/jpeg", "image/png");
        //upload folder - make sure to create one in webroot
        $uploadFolder = "/img/profile";
        //full path to upload folder
        $uploadPath = WWW_ROOT . $uploadFolder;

        //check if image type fits one of allowed types
        foreach ($imageTypes as $type) {
            if ($type == $image['type']) {
                if ($image['error'] == 0) {
                    //image file name
                    $imageName = $image['name'];
//                    //check if file exists in upload folder
//                    if (file_exists($uploadPath . '/' . $imageName)) {
//                        //create full filename with timestamp
//                        $imageName = date('His') . $imageName;
//                    }
                    //create full path with image name
                    $full_image_path = $uploadPath . '/' . $imageName;
                    //upload image to upload folder
                    if (move_uploaded_file($image['tmp_name'], $full_image_path)) {
                        $this->Session->setFlash('File saved successfully');
                        //$this->set('imageName',$imageName);
                    } else {
                        $this->Session->setFlash('There was a problem uploading file. Please try again.');
                    }
                } else {
                    $this->Session->setFlash('Error uploading file.');
                }
                break;
            } else {
                $this->Session->setFlash('Unacceptable file type');
            }
        }
    }
}
