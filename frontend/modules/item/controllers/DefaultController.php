<?php

namespace frontend\modules\item\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\modules\trcards\models\Trcard;
use common\modules\trcards\models\TrcardSearch;

class DefaultController extends Controller
{
    /**
     * Lists all Trcard models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrcardSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Trcard model.
     * @param string $url
     * @return mixed
     */
    public function actionView($url)
    {
        return $this->render('view', [
            'model' => $this->findModel($url),
        ]);
    }

    /**
     * Finds the Trcard model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $url
     * @return mixed
     * @return Trcard the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($url)
    {
        if (($model = Trcard::findOne(["url" => $url])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
