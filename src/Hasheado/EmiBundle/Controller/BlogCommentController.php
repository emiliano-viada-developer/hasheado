<?php

namespace Hasheado\EmiBundle\Controller;

use Hasheado\BlogBundle\Controller\BlogCommentController as HasheadoBlogCommentController;
use Hasheado\EmiBundle\Util\Disqus;

class BlogCommentController extends HasheadoBlogCommentController
{
	/**
	 * latest Action
	 * Shows latest comments
	 * @return
	 */
	public function latestAction()
	{
		$params = array(
            'APIKey' => 'XnR80PAXir1FFLXnfJytb2WJVrqiSlNrVit9dHbC5rxj8NZrG6IwomburKENdOkS',
            'forumName' => 'hasheado',
            'commentCount' => 5,
            'commentLength' => 100
    	);
    	$disqus = new Disqus($params);
     	$comments = $disqus->getRecentComments();

     	return $this->render('HasheadoEmiBundle:BlogComment:latest.html.twig', array(
			'comments' => $comments,
		));
	}
}