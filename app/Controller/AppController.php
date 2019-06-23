<?php
namespace AppNews\Controller;

use AppNews\DAO\ArticleDAO;
use AppNews\DAO\CategoryDAO;
use AppNews\Model\Article;

/**
 *
 */
class AppController {
	public static function home($request) {
		include "../views/admin.php";
	}

	public static function createArticle($request) {
		$title = $request['title'];
		$categoryId = $request['category-id'];
		$content = $request['content'];
		$slug = str_replace(" ", "_", strtolower($title));

		$article = new Article();
		$article->setTitle($title);
		$article->setSlug($slug);
		$article->setCategoryId($categoryId);
		$article->setContent($content);

		$article_dao = new ArticleDAO();

		if ($article_dao->create($article)) {
			echo true;
		} else {
			echo false;
		}
	}

	private function createSlug($title) {
		return str_replace(" ", "_", strtolower($title));
	}

	public static function getAllCategory() {
		$categoryService = new CategoryDAO();
		// $t = $categoryService->getAll();
		$result = array();

		try {

			$result = $categoryService->getAll();
			echo json_encode($result);
		} catch (Exception $e) {
			echo $e->getMessage();
		}

		/*try {

			} catch (\Exception $e) {
				$result['l'] = $e->getMessage();
			}

		*/

		//echo "ok";
	}
}
?>
