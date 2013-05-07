<?php

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$view = View::forge('layout');

		$view->content = View::forge('home/index');

		return $view;

	}

}
