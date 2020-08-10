<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Article extends Model
{
	use ElasticquentTrait;
    protected $fillable = ['title','body','tags'];

    protected $mappingProperties = array(
    	'title'=>[
    		'type'=> 'text',
    		"analyzer" => "standar",
     	],
     	'body'=>[
     		'type' => 'text',
     		"analyzer" => "standar",
     	],
     	'tags' => [
     		'type' => 'text',
     		"analyzer" => "standar",
     	],
    );
}
