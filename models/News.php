<?php


class News
{

	public static function getItemNewsById($id, $page)
	{
		$id = intval($id);
		// $page = intval($page);
		// $offset = ($page-1) * 6;

		if ($id) {

			$db = Db::getConnection();

			$result = $db->query('SELECT * from news WHERE id=' . $id);
			$result->setFetchMode(PDO::FETCH_ASSOC);

			$itemNews = $result->fetch();

			return $itemNews;
		}
	}


	public static function getListNews($page =1)//$count = 3)
	{
		$page = intval($page);
		$offset = ($page-1) * 6;

		$db = Db::getConnection();
		$listNews = array();
		// $count = intval($count);

		$result = $db->query('SELECT id, name, author, exact_time, description '
					. 'FROM news '
					. 'ORDER BY exact_time DESC '
					. 'LIMIT 6'
					. ' OFFSET ' . $offset);// . $count);

		$i = 0;
		while($row = $result->fetch()) {
			$listNews[$i]['id'] = $row['id'];
			$listNews[$i]['name'] = $row['name'];
			$listNews[$i]['author'] = $row['author'];
			$listNews[$i]['exact_time'] = $row['exact_time'];
			$listNews[$i]['description'] = $row['description'];
			$i++;
		}

		return $listNews;
	}

	public static function getNewsCount()
	{
		$db = Db::getConnection();
		
		$result = $db->query('SELECT count(id) /*AS count*/ FROM news');

		$result -> setFetchMode(PDO::FETCH_NUM);

		$row = $result->fetch();
		// intval($row['count']);
		 // var_dump(intval($row[0]));
		// die;

		return $row[0];//array [0 => 13] where 13 is count of news
	}
}