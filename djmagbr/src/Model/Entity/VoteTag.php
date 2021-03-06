<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VoteTag Entity
 *
 * @property int $id
 * @property int $tag_id
 * @property int $voter_id
 * @property int $section
 * @property int $weight
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Tag $tag
 */
class VoteTag extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'section' => true,
        'tag_id' => true,
        'voter_id' => true,
        'weight' => true
    ];
}
