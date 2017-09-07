<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adaptive extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    private $result;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('adaptive_model');
        //$this->result = array();
        $this->result = array(
            'code' => 1,
            'msg' => 'ok',
            'result' => array(
                'method' => $this->input->method(),
                'get or put' => $this->input->get(),
                'post' => $this->input->post()
            )
        );
	}

	public function index()
	{
        $this->echoResult();
	}

    // $route['adaptive/login']['post'] = ''; // 로그인
    public function setLogin() {
        $this->echoResult();
    }

    // $route['adaptive/logout']['post'] = ''; // 로그아웃
    public function setLogout() {
        $this->echoResult();
    }

    // $route['adaptive/members']['get'] = ''; // 사용자 정보 가져오기
    public function getMemberInfo() {
        $this->echoResult();
    }

    // $route['adaptive/members']['post'] = ''; // 사용자 정보 등록
    public function setMemberInfo() {
        $this->echoResult();
    }

    // $route['adaptive/members']['put'] = ''; // 사용자 정보 수정
    public function modMemberInfo() {
        $this->echoResult();
    }

    // $route['adaptive/level-test']['get'] = ''; // 레벨테스트 문제
    public function getLevelTest() {
        $this->echoResult();
    }

    // $route['adaptive/level-test']['post'] = ''; // 레벨테스트 풀기
    public function setLevelTest() {
        $this->echoResult();
    }

    // $route['adaptive/level-test/result']['post'] = ''; // 레벨테스트 결과
    public function getLevelTestResult() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/evaluation']['post'] = ''; // 강의평가
    public function setLectureEvaluation() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/test']['get'] = ''; // 학습테스트 문제
    public function getLectureTest() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/test']['post'] = ''; // 학습테스트 문제 풀기
    public function setLectureTest() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/test/result']['post'] = ''; // 학습테스트 문제 결과
    public function getLectureTestResult() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/voice-test']['get'] = ''; // 음성테스트 문제
    public function getLectureVoiceTest() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/voice-test']['post'] = ''; // 음성테스트 문제 풀기
    public function setLectureVoiceTest() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/voice-test/result']['post'] = ''; // 음성테스트 문제 결과
    public function getLectureVoiceTestResult() {
        $this->echoResult();
    }

    // $route['adaptive/lectures']['get'] = ''; // 강의 영상 목록
    public function getLectures() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/note']['get'] = ''; // 강의 노트
    public function getLectureNote() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/speed']['post'] = ''; // 학습 속도 설정
    public function setLectureSpeed() {
        $this->echoResult();
    }

    // $route['adaptive/lectures/(:any)/likes']['post'] = ''; // 즐겨찾기 설정 / 해제
    public function setLectureLikes() {
        $this->echoResult();
    }

    // $route['adaptive/today-resolve']['get'] = ''; // 오늘의 각오 목록
    public function getTodayResolves() {
        $this->echoResult();
    }

    // $route['adaptive/today-resolve']['post'] = ''; // 오늘의 각오 쓰기
    public function setTodayResolves() {
        $this->echoResult();
    }

    // $route['adaptive/today-resolve/(:any)']['put'] = ''; // 오늘의 각오 수정
    public function modTodayResolves() {
        $this->echoResult();
    }

    // $route['adaptive/reviews']['get'] = ''; // 수강후기 목록
    public function getReviews() {
        $this->echoResult();
    }

    // $route['adaptive/reviews']['post'] = ''; // 수강후기 쓰기
    public function setReview() {
        $this->echoResult();
    }

    // $route['adaptive/reviews/(:any)']['put'] = ''; // 수강후기 수정
    public function modReview() {
        $this->echoResult();
    }

    // $route['adaptive/reviews/(:any)/comments']['get'] = ''; // 수강후기 댓글
    public function getReviewComments() {
        $this->echoResult();
    }

    // $route['adaptive/reviews/(:any)/comments']['post'] = ''; // 수강후기 댓글 쓰기
    public function setReviewComments() {
        $this->echoResult();
    }

    // $route['adaptive/reviews/(:any)/comments/(:any)']['put'] = ''; // 수강후기 댓글 수정
    public function modReviewComments() {
        $this->echoResult();
    }

    // $route['adaptive/reviews/(:any)/likes']['post'] = ''; // 수강후기 좋아요 설정 / 해제
    public function setReviewLikes() {
        $this->echoResult();
    }

    // $route['adaptive/ranking/weekly']['get'] = ''; // 주간 랭킹
    public function getWeeklyRanking() {
        $this->echoResult();
    }

    // $route['adaptive/ranking/(:any)/prize']['post'] = ''; // 주간 랭킹 보상 지급
    public function setRankingPrize() {
        $this->echoResult();
    }

    // $route['adaptive/missions']['get'] = ''; // 미션 목록
    public function getMissions() {
        $this->echoResult();
    }

    // $route['adaptive/missions/(:any)']['post'] = ''; // 미션 수행
    public function setMission() {
        $this->echoResult();
    }

    // $route['adaptive/missions/(:any)']['get'] = ''; // 미션 상세
    public function getMission() {
        $this->echoResult();
    }

    // $route['adaptive']['get'] = ''; // 메인
    public function getMain() {
        $this->echoResult();
    }

    public function echoResult() {
        echo json_encode($this->result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }


}