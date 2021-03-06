<?php
namespace pistol88\order\widgets;

use yii\helpers\Html;
use yii\helpers\Url;
use yii;

class ChooseClient extends \yii\base\Widget
{
    public $model = null;
    public $form = null;
    
    public function init()
    {
        parent::init();

        \pistol88\order\assets\CreateOrderAsset::register($this->getView());

        return true;
    }
    
    public function run()
    {
        return $this->render('choose_client', ['model' => $this->model, 'form' => $this->form]);
    }
}
