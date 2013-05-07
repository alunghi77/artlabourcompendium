<?php

class Controller_Video extends Controller_Template
{

	public function action_index()
	{
		$view = View::forge('layout');


		$data['video_items'] = array(

			array(
				'title' => 'Sion Wheelan: Calverts Co-operative <br />( 1976 - Present )',
				'img' 	=> 'video-screenshot-1.jpg',
				'desc' 	=> '',
				'vimeo' => '',
			),
			array(
				'title' => 'Peter Dunn: Artist Union, London Branch <br />( 1972 - 1983 )',
				'img' 	=> 'video-screenshot-2.jpg',
				'desc' 	=> '',
				'vimeo' => '',
			),
			array(
				'title' => 'Conrad Atkinson: Artist Union, London Branch <br />( 1972 - 1983 )',
				'img' 	=> 'video-screenshot-5.jpg',
				'desc' 	=> '',
				'vimeo' => '',
			),
			array(
				'title' => 'Stewart Home: Art Strike Action Committee, London <br />( 1990 - 1993 )',
				'img' 	=> 'video-screenshot-4.jpg',
				'desc' 	=> '',
				'vimeo' => '',
			),
			array(
				'title' => 'Stephen Perkins: Art Strike Action Committee, San Francisco <br />( 1990 - 1993 )',
				'img' 	=> 'video-screenshot-3.jpg',
				'desc' 	=> '',
				'vimeo' => '',
			),


		);

		$view->content = View::forge('video/index', $data, false);

		return $view;

	}


}
