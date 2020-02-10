<?php

namespace inc\model;

use DateTime;

class ArticleModel
{
    private $id;
    private $title;
    private $content;
    private $created_at;
    private $status;

    public function OneSmallArticle($link)
    {
        return '<p><a href="' . $link . '?id=' . $this->id . '">' . $this->title . '</a></p>';
    }

    public function viewSingleArticle()
    {
        $html = '<div class="onearticle">';
            $html .= '<h2>' . $this->title . '</h2>';
            $html .= '<p>' . $this->content . '</p>';
            $html .= '<p>Status: ' . $this->status . '</p>';
            $date = new DateTime($this->created_at);
            $html .= '<p>Date: ' . $date->format('d/m/Y') . '</p>';

        return $html;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }


}
