<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends CI_Controller {

	public function index() {

		$this->load->view("first_message");

	}

	public function about() {


		$data["first_name"] = "Vlad";
		$data["last_name"] = "Shcherbacheni";
		$data["age"] = "20";

		$this->load->view("about_message", $data);

	}

	public function article_message() {

		$this->load->model("first_model");
		$data["articles"] = $this->first_model->get_article();

		$this->load->view("article_message", $data);

	}

	public function add_article() {

		$data["title"] = "Пятая статья";

		$data["description"] = "С другой стороны сложившаяся структура организации играет важную роль в формировании системы обучения кадров, соответствует насущным потребностям. С другой стороны начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации соответствующий условий активизации. ";

		$data["date"] = "2011-12-23";


		$this->load->model("first_model");

		$this->first_model->add_article($data);

	}

	public function edit_article() {

		$data["title"]= "Новое навзвание пятой статьи =)";

		$data["description"] = "С другой стороны начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации соответствующий условий активизации.";

		$data["date"] = "2017-12-23";


		$this->load->model("first_model");

		$this->first_model->edit_article($data);

	}

	public function del_article($id) {

		$this->load->model("first_model");

		$this->first_model->del_article($id);

	}


}

