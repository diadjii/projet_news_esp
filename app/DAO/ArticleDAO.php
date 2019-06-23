<?php
namespace AppNews\DAO;

use AppNews\DAO\DatabaseService;
use AppNews\Model\Article;

/**
 *
 */
class ArticleDAO extends DatabaseService {

	public function create(Article $article) {
		$pdoStatement = $this->_db->prepare("INSERT INTO article (title,slug,category_id,content) VALUES (:title, :slug, :category_id, :content)");
		$pdoStatement->bindValue(":title", $article->getTitle(), \PDO::PARAM_STR);
		$pdoStatement->bindValue(":slug", $article->getSlug(), \PDO::PARAM_STR);
		$pdoStatement->bindValue(":category_id", $article->getCategoryId(), \PDO::PARAM_INT);
		$pdoStatement->bindValue(":content", $article->getContent(), \PDO::PARAM_STR);

		$pdoStatement->execute();

		if ($pdoStatement->execute()) {
			return $this->_db->lastInsertId();
		} else {
			return 0;
		}
	}

	public function findBySlug() {

	}

	public function update() {

	}
}
