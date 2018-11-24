<?php

namespace thienhungho\ContactManagement\modules\ContactBase\query;

/**
 * This is the ActiveQuery class for [[\thienhungho\ContactManagement\modules\ContactBase\query\Contact]].
 *
 * @see \thienhungho\ContactManagement\modules\ContactBase\query\Contact
 */
class ContactQuery extends \thienhungho\ActiveQuery\models\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return \thienhungho\ContactManagement\modules\ContactBase\query\Contact[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \thienhungho\ContactManagement\modules\ContactBase\query\Contact|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
