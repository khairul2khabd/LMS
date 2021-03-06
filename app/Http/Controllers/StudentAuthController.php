<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Student;
use App\Models\ApiCourse;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use function MongoDB\BSON\toJSON;
use \stdClass;
use App\Http\Controllers\curl;
use Illuminate\Support\Facades\Http;

class StudentAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function _studentList()
    {
        $students = Student::orderBy('id', 'DESC')->get();
        return view('admin.student.student_list', compact('students'));
    }

    public function _studentApproved()
    {
        $token = 'edf639510950af557deeb0fed264379e';  /// token done
        $domainname = 'http://192.168.1.157/moodle';
        $functionname = 'core_user_create_users';
        $restformat = 'xml';

        $user1 = new stdClass();
        $user1->username = 'test123';
        $user1->password = 'Admin@13323';
        $user1->firstname = 'testfirstname1';
        $user1->lastname = 'testlastname1';
        $user1->email = 'testemail1111@moodle.com';
        $user1->auth = 'manual';
        $user1->idnumber = 'testidnumber1';
        $user1->lang = 'en';
        $user1->theme = '';
        $user1->timezone = 'Asia/Dhaka';
        $user1->mailformat = 0;
        $user1->description = 'Hello World!';
        $user1->city = 'testcity1';
        $user1->country = 'au';
        $preferencename1 = 'preference1';
        $preferencename2 = 'preference2';
        $user1->preferences = array(
            array('type' => $preferencename1, 'value' => 'preferencevalue1'),
            array('type' => $preferencename2, 'value' => 'preferencevalue2'));
        $users = array($user1);
        $params = array('users' => $users);

        $client = new \GuzzleHttp\Client();
        $body['name'] = "Testing";
        $url = $domainname . '/webservice/rest/server.php' . '?wstoken=' . $token . '&wsfunction=' . $functionname;
        $response = $client->request("POST", $url, ['form_params' => $params]);
        return $response;
    }


    public function _courseList()
    {
        $token = '1c3d808e11cb791efbfbd3c3d040a7ef';  /// token done
        $domainname = 'http://192.168.1.157/moodle';
        $functionname = 'core_course_get_courses';
        $restformat = 'json';
//        https://192.168.1.157/moodle/webservice/rest/server.php?
//        wstoken=1c3d808e11cb791efbfbd3c3d040a7ef&moodlewsrestformat=json&wsfunction=core_course_get_courses

        header('Content-Type: json');

        $client = new \GuzzleHttp\Client();
        $url = $domainname . '/webservice/rest/server.php' . '?wstoken=' . $token . '&moodlewsrestformat=' . $restformat .
            '&&wsfunction=' . $functionname;
        $response = $client->request("GET", $url);
        $json = $response->getBody()->getContents();

//        Response::json(['user'=>$user,'post'=>$post,'comment'=>$comment]);
//        $collection=collect($json);

        $collection = is_array($json) ? $json : array($json);
        dump(($json));


        return response()->view('admin.course.course_json_list', compact('json'));
    }

}
