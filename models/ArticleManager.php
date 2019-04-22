<?php


class ArticleManager extends Model
{
    public function getArticles()
    {
        $this->getBdd();
        return $this->getAll('articles', 'Article');
    }

}