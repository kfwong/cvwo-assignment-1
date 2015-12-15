<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property integer $id
 * @property integer $post_author
 * @property string $post_content
 * @property string $post_title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post wherePostAuthor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post wherePostContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post wherePostTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 */
class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['post_author','post_content','post_title'];

    public function user(){
        return $this->belongsTo('App\User', 'post_author');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
