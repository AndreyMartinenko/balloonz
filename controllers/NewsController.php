<?php

class NewsController
{
	public function actionIndex($page = 1)
		{
			$listNews = [];
			$listNews = News::getListNews($page);

			/*$total*/
			$newsCount = News::getNewsCount();
			$pagination = new Pagination($newsCount, $page, 6/*News::SHOW_BY_DEFAULT*/, 'page-');

			require_once(ROOT.'/views/news/index.php');

			return true;
		}


	public function actionView($id, $page)
		{
			if ($id) {
				$itemNews = News::getItemNewsById($id, $page);

				require_once(ROOT . '/views/news/view.php');
				// echo 'actionView';
			}

			return true;
		}
		
}

?>