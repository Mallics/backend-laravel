<?php

class User extends Eloquent {

	protected $table = 'auth_user';
	public $timestamps = false;
	protected $fillable = array('name');
	protected $guarded = array('id');
    protected $hidden = array('password', 'is_superuser', 'is_staff', 'is_active', 'date_joined');
	public function skills()
    {
    	
        return $this->belongsToMany('Skill', 'staffing_app_skill_user');
    }

    public function user(){
        return $this->belongs_to('')
    }

    public function skillsArr(){
    	$pivot = $this->belongsToMany('Skill', 'staffing_app_skill_user')->getResults();
    	$skills = array();
        
    	foreach($pivot as $skill){
    		array_push($skills, $skill->attributes);
    	}
    	return $skills;
    }
}