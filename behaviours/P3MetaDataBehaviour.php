<?php

class P3MetaDataBehavior extends CActiveRecordBehavior {

	public function beforeDelete() {
		parent::beforeDelete();
		if ($this->contentMeta->checkAccessWrite) {
			if (Yii::app()->user->checkAccess($this->contentMeta->checkAccessWrite) === false) {
				throw new CHttpException(403, "You are not authorized to perform this action.");
				return false;
			} else {
				
			}
		}
		return true;
	}

	public function beforeSave() {
		parent::beforeSave();
		if ($this->contentMeta->checkAccessWrite) {
			if (Yii::app()->user->checkAccess($this->contentMeta->checkAccessWrite) === false) {
				throw new CHttpException(403, "You are not authorized to perform this action.");
				return false;
			}
		}
		return true;
	}	

}

?>