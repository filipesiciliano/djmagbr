<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use SoftDelete\Model\Table\SoftDeleteTrait;

/**
 * Djs Model
 *
 * * @property \App\Model\Table\Djs|\Cake\ORM\Association\HasMany $DjTags
 *
 * @method \App\Model\Entity\Dj get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dj newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dj[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dj|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dj|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dj patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dj[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dj findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DjsTable extends Table
{
    use SoftDeleteTrait;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        

        $this->setTable('djs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        
        $this->addBehavior('Timestamp');
        $this->hasMany('DjTags')
            ->setForeignKey('dj_id')
            ->setDependent(true);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('img')
            ->maxLength('img', 255)
            ->allowEmpty('img', 'create')
            ->notEmpty('img');

        return $validator;
    }
}
