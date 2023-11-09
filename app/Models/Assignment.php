<?php

namespace App\Models;

use App\Models\User;
use App\Models\Section;
use App\Models\Question;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assignment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'assignments';
    public function course() {
        return $this->belongsTo('App\Models\Course');
    }
    public function uploaded($user_id,$test_id) {
        return UploadedAssessment::where('user_id',$user_id)->where('test_id',$test_id)->first();
    }
    public function sec() {
        return $this->belongsTo(Section::class,'section_id','id');
    }

    public function questions(){
    	return $this->hasMany(Question::class);
    }

    public function users(){
        return $this->belongsTomany(User::class,'test_users');
    }

    public function storeTest($data){
    	return Assignment::create($data);
    }

    public function allTest(){
    	return Assignment::all();
    }

    public function editTest($id){
        return Assignment::find($id);
    }

    public function updateTest($id,$data){
        return Assignment::find($id)->update($data);
       
    }
    public function deleteTest($id){
        $test = Assignment::find($id);
        $questions = Question::where('test_id',$test->id)->get();
        foreach($questions as $question) {
            $question->delete();
        }
        return Assignment::find($id)->delete();

    }

    public function assignExam($data){
        foreach($data['test_id'] as $testId) {
            $test = Assignment::find($testId);
            foreach($data['user_id'] as $userId) {
                $test->users()->syncWithoutDetaching($userId);
            }
        }
        return('good');
        // dd($data);
        // $TestId = $data['test_id'];
        // $Test = Assignment::find($TestId);
        // $userId = $data['user_id'];
        // return $Test->users()->syncWithoutDetaching($userId);
    }

    public function hasTestAttempted(){
        $attemptTest  = [];
        $authUser = auth()->user()->id;
        $user = Result::where('user_id',$authUser)->get();
        foreach($user as $u){
            array_push($attemptTest,$u->test_id);
        }
        
        return $attemptTest;
    }

}
