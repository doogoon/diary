<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'welcome/notFound';
$route['translate_uri_dashes'] = FALSE;


$route['welcome'] = 'welcome';
$route['adaptive/test/result'] = 'adaptive/levelTestResult';
$route['adaptive/test/question/(:num)'] = 'adaptive/levelTestQuestion/$1';

/*
 * RestFul API URI 정의
 * 1. URI는 정보의 자원을 표현한다.
 * 2. 자원에 대한 행위는 HTTP Method(POST, GET, PUT, DELETE 등)로 표현한다.
 *      POST	POST를 통해 해당 URI를 요청하면 리소스를 생성합니다.
        GET	    GET를 통해 해당 리소스를 조회합니다. 리소스를 조회하고 해당 도큐먼트에 대한 자세한 정보를 가져온다.
        PUT	    PUT를 통해 해당 리소스를 수정합니다.
        DELETE	DELETE를 통해 리소스를 삭제합니다.
 * 3. 슬래시 구분자(/)는 계층 관계를 나타내는 데 사용
 * 4. URI 마지막 문자로 슬래시(/)를 포함하지 않는다.
 * 5. 하이픈(-)은 URI 가독성을 높이는데 사용, 밑줄(_)은 URI에 사용하지 않는다.
 * 6. URI 경로에는 소문자가 적합하다.
 * 7. 페이징 값 혹은 구분 값을 쿼리 스트링에 포함할 수 있습니다.
 *
 * 응답코드
 *   200	클라이언트의 요청을 정상적으로 수행함
 *   201	클라이언트가 어떠한 리소스 생성을 요청, 해당 리소스가 성공적으로 생성됨(POST를 통한 리소스 생성 작업 시)
 *
 *   400	클라이언트의 요청이 부적절 할 경우 사용하는 응답 코드
 *   401	클라이언트가 인증되지 않은 상태에서 보호된 리소스를 요청했을 때 사용하는 응답 코드
 *          (로그인 하지 않은 유저가 로그인 했을 때, 요청 가능한 리소스를 요청했을 때)
 *   403	유저 인증상태와 관계 없이 응답하고 싶지 않은 리소스를 클라이언트가 요청했을 때 사용하는 응답 코드
 *          (403 보다는 400이나 404를 사용할 것을 권고. 403 자체가 리소스가 존재한다는 뜻이기 때문에)
 *   405	클라이언트가 요청한 리소스에서는 사용 불가능한 Method를 이용했을 경우 사용하는 응답 코드
 *
 *   301	클라이언트가 요청한 리소스에 대한 URI가 변경 되었을 때 사용하는 응답 코드
 *          (응답 시 Location header에 변경된 URI를 적어 줘야 합니다.)
 *   500	서버에 문제가 있을 경우 사용하는 응답 코드
 * */

// common route
$route['upload']['post'] = 'upload/index';

// mileage route
// get user mileage
$route['mileage']['get'] = 'mileage/index';
// get user mileage history
$route['mileage/history']['get'] = 'mileage/history';
// set user mileage
$route['mileage']['post'] = 'mileage/save';


// adaptive route
$route['adaptive/level-test']['get'] = 'adaptive/getLevelTest'; // 레벨테스트 문제
$route['adaptive/level-test']['post'] = 'adaptive/setLevelTest'; // 레벨테스트 풀기
$route['adaptive/level-test/result']['post'] = 'adaptive/getLevelTestResult'; // 레벨테스트 결과
$route['adaptive/login']['post'] = 'adaptive/setLogin'; // 로그인
$route['adaptive/logout']['post'] = 'adaptive/setLogout'; // 로그아웃
$route['adaptive/members']['get'] = 'adaptive/getMemberInfo'; // 사용자 정보 가져오기
$route['adaptive/members']['post'] = 'adaptive/setMemberInfo'; // 사용자 정보 등록
$route['adaptive/members']['put'] = 'adaptive/modMemberInfo'; // 사용자 정보 수정
$route['adaptive/lectures/(:any)/evaluation']['post'] = 'adaptive/setLectureEvaluation'; // 강의평가
$route['adaptive/lectures/(:any)/test']['get'] = 'adaptive/getLectureTest/$1'; // 학습테스트 문제
$route['adaptive/lectures/(:any)/test']['post'] = 'adaptive/setLectureTest/$1'; // 학습테스트 문제 풀기
$route['adaptive/lectures/(:any)/test/result']['post'] = 'adaptive/getLectureTestResult/$1'; // 학습테스트 문제 결과
$route['adaptive/lectures/(:any)/voice-test']['get'] = 'adaptive/getLectureVoiceTest/$1'; // 음성테스트 문제
$route['adaptive/lectures/(:any)/voice-test']['post'] = 'adaptive/setLectureVoiceTest/$1'; // 음성테스트 문제 풀기
$route['adaptive/lectures/(:any)/voice-test/result']['post'] = 'adaptive/getLectureVoiceTestResult/$1'; // 음성테스트 문제 결과
$route['adaptive/lectures']['get'] = 'adaptive/getLectures'; // 강의 영상 목록
$route['adaptive/lectures/(:any)/note']['get'] = 'adaptive/getLectureNote/$1'; // 강의 노트
$route['adaptive/lectures/(:any)/speed']['post'] = 'adaptive/setLectureSpeed/$1'; // 학습 속도 설정
$route['adaptive/lectures/(:any)/likes']['post'] = 'adaptive/setLectureLikes/$1'; // 즐겨찾기 설정 / 해제
$route['adaptive/today-resolve']['get'] = 'adaptive/getTodayResolves'; // 오늘의 각오 목록
$route['adaptive/today-resolve']['post'] = 'adaptive/setTodayResolves'; // 오늘의 각오 쓰기
$route['adaptive/today-resolve/(:any)']['put'] = 'adaptive/modTodayResolves/$1'; // 오늘의 각오 수정
$route['adaptive/reviews']['get'] = 'adaptive/getReviews'; // 수강후기 목록
$route['adaptive/reviews']['post'] = 'adaptive/setReview'; // 수강후기 쓰기
$route['adaptive/reviews/(:any)']['put'] = 'adaptive/modReview/$1'; // 수강후기 수정
$route['adaptive/reviews/(:any)/comments']['get'] = 'adaptive/getReviewComments/$1'; // 수강후기 댓글
$route['adaptive/reviews/(:any)/comments']['post'] = 'adaptive/setReviewComments/$1'; // 수강후기 댓글 쓰기
$route['adaptive/reviews/(:any)/comments/(:any)']['put'] = 'adaptive/modReviewComments/$1/$2'; // 수강후기 댓글 수정
$route['adaptive/reviews/(:any)/likes']['post'] = 'adaptive/setReviewLikes/$1'; // 수강후기 좋아요 설정 / 해제
$route['adaptive/ranking/weekly']['get'] = 'adaptive/getWeeklyRanking'; // 주간 랭킹
$route['adaptive/ranking/(:num)/prize']['post'] = 'adaptive/setRankingPrize/$1'; // 주간 랭킹 보상 지급
$route['adaptive/missions']['get'] = 'adaptive/getMissions'; // 미션 목록
$route['adaptive/missions/(:any)']['post'] = 'adaptive/setMission/$1'; // 미션 수행
$route['adaptive/missions/(:any)']['get'] = 'adaptive/getMission/$1'; // 미션 상세
$route['adaptive']['get'] = 'adaptive/getMain'; // 메인


