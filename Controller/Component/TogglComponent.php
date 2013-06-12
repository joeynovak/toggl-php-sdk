<?php

App::uses('TogglConnection', 'Toggl.Vendor/Toggl');

/**
 * @property TogglConnection $TogglConnection
 */

class TogglComponent extends Component {
    public $Controller;
    public $TogglConnection;

    public function initialize(Controller $controller){
        parent::initialize($controller); // TODO: Change the autogenerated stub
        $this->Controller = $controller;
    }

    public function lazyInit(){
        if($this->TogglConnection == null){
            $this->Controller->loadModel("Settings.Setting");
            $toggl_api_token = $this->Controller->Setting->getValue('toggl_api_token');
            $this->TogglConnection = new TogglConnection($toggl_api_token);
        }
    }

    public function createProjectIfDoesntExist($projectName){
        $this->lazyInit();
        $this->TogglConnection->
    }
}