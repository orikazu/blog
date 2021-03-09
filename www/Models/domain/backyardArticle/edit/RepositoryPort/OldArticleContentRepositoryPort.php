<?php

namespace domain\backyardArticle\edit\RepositoryPort;

use domain\backyardArticle\edit\Data\OldArticleContent;

interface OldArticleContentRepositoryPort
{
    /**
     * @param int $artcl_id
     * 
     * @return OldArticleContent
     */
    public function getOldArticleContent(): OldArticleContent;
}
