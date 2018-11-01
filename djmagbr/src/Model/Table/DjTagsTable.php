<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DjTags Model
 *
 * @property \App\Model\Table\DjsTable|\Cake\ORM\Association\BelongsTo $Djs
 *
 * @method \App\Model\Entity\DjTag get($primaryKey, $options = [])
 * @method \App\Model\Entity\DjTag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DjTag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DjTag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DjTag|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DjTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DjTag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DjTag findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DjTagsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('dj_tags');

        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Djs', [
            'foreignKey' => 'dj_id',
            'joinType' => 'INNER'
        ]);

        $this->belongsTo('Tags', [
            'foreignKey' => 'tag_id',
            'joinType' => 'INNER'
        ]);

        $this->hasMany('VoteTags')
            ->setForeignKey('tag_id')
            ->setConditions(['VoteTags.section' => 1]);
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
            ->integer('tag_id')
            ->maxLength('tag_id', 4);

        $validator
            ->integer('dj_id')
            ->maxLength('dj_id', 4);

        return $validator;
    }

    public function votes()
    {
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['dj_id'], 'Djs'));
        $rules->add($rules->existsIn(['tag_id'], 'Tags'));

        return $rules;
    }

    public function existDjTag($tag_id)
    {
        return $this->findByTagId($tag_id)->first();
    }
}
