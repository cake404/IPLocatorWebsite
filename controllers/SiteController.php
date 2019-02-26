<?php

namespace app\controllers;

use Yii;
use yii\log\Logger;
use yii\web\Controller;
use yii\web\Response;
use app\models\Location;
use app\models\Accesslog;
use app\models\SearchForm;
use yii\helpers\VarDumper;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Location();
        return $this->render('index',[
            'model' => $model,
        ]);
    }



    /**
     * Displays a individual location's view page
     *
     * @return string
     */
    public function actionLocation($id = null)
    {
        $model = Location::find()->where(['id' => $id])->one();
        if ($model == null) {
            Yii::app()->end();
        }
        return $this->render('location',[
            'model' => $model,
        ]);
        
    }

    /**
     * Renders the view for searching for the location of an IP address
     *
     * @return string
     */
    public function actionSearch()
    {
        $model = new SearchForm();
        $location = null;
        if (isset($_POST['SearchForm']['address'])) {
            $model->address = $_POST['SearchForm']['address'];
            $location = json_decode(file_get_contents('http://ip-api.com/json/' . $_POST['SearchForm']['address'])); 
            VarDumper::dump($location);
        }
        return $this->render('search', [
            'model' => $model,
            'location' => $location,
        ]);
    }

}
