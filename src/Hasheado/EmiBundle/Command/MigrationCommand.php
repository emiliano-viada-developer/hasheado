<?php
namespace Hasheado\EmiBundle\Command;

//use Symfony\Component\Console\Command\Command;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MigrationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('hasheado:migrate')
            ->setDescription('Migrate from Hasheado Symfony 1.x version to Sf2 version.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //Get data from old database
        list($articles, $categories, $comments, $tags, $tagsArticles) = $this->getData();

        $output->writeln('<info>Articles found:</info> ' . count($articles));
        $output->writeln('<info>Categories found:</info> ' . count($categories));
        $output->writeln('<info>Comments found:</info> ' . count($comments));
        $output->writeln('<info>Tags found:</info> ' . count($tags));
        $output->writeln('<info>Tags-Articles found:</info> ' . count($tagsArticles));

        //Process Categories
        /*$cat_msg = $this->processCategories($categories);
        $output->writeln($cat_msg);

        //Process Posts (Articles)
        $a_msg = $this->processArticles($articles);
        $output->writeln($a_msg);*/

        //Process Comments
        $co_msg = $this->processComments($comments);
        $output->writeln($co_msg);

        //Process Tags
        $t_msg = $this->processTags($tags);
        $output->writeln($t_msg);

        //Process Tags-Posts Joins
        $ta_msg = $this->processTagsArticles($tagsArticles);
        $output->writeln($ta_msg);
    }

    /**
     * getData() function
     * Gets the existing data for version 1
     */
    protected function getData()
    {
        $dbm = $this->getOldDBManager();

        //Get all Articles
        $articles = array();
        $a_query = "SELECT * FROM article";
        $result = $dbm->query($a_query);
        if ($result)
            $articles = $result->fetchAll(\PDO::FETCH_ASSOC);

        //Get all Categories
        $categories = array();
        $c_query = "SELECT * FROM category";
        $result = $dbm->query($c_query);
        if ($result)
            $categories = $result->fetchAll(\PDO::FETCH_ASSOC);

        //Get all Comments
        $comments = array();
        $co_query = "SELECT * FROM comment";
        $result = $dbm->query($co_query);
        if ($result)
            $comments = $result->fetchAll(\PDO::FETCH_ASSOC);

        //Get all tags
        $tags = array();
        $t_query = "SELECT * FROM tag";
        $result = $dbm->query($t_query);
        if ($result)
            $tags = $result->fetchAll(\PDO::FETCH_ASSOC);
        
        //Get Joins between tags with articles
        $tagsArticles = array();
        $ta_query = "SELECT * FROM tagging";
        $result = $dbm->query($ta_query);
        if ($result)
            $tagsArticles = $result->fetchAll(\PDO::FETCH_ASSOC);

        return array($articles, $categories, $comments, $tags, $tagsArticles);
    }

    /**
     * getOldDBManager() function
     * Gets the db manager to handle old database
     */
    protected function getOldDBManager()
    {
        $params = array(
            'host' => 'localhost',
            'dbname' => 'hasheado',
            'username' => 'root',
            'password' => 'cleopatra410'
        );
        
        return $this->getDBManager($params);
    }

    /**
     * getNewDBManager() function
     * Gets the db manager to handle new database
     */
    protected function getNewDBManager()
    {
        $params = array(
            'host' => 'localhost',
            'dbname' => 'hasheado2',
            'username' => 'root',
            'password' => 'cleopatra410'
        );
        
        return $this->getDBManager($params);
    }

    /**
     * getDBManager() function
     * Connects through PDO to a database
     */
    protected function getDBManager(array $params)
    {
        try {
            $dbm = new \PDO(
                'mysql:host='.$params['host'].';dbname='.$params['dbname'].'',
                $params['username'],
                $params['password']
            );

            return $dbm;

        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /**
     * processCategories() function
     * From the existing categories insert them in the new db
     */
    protected function processCategories(array $categories)
    {
        if (count($categories)) {
            $dbm = $this->getNewDBManager();
            $ic_query = "INSERT INTO blog_category (id, name, slug, created_at, updated_at) VALUES ";
            foreach ($categories as $category) {
                $ic_query .= " (".$category['id'].", '".$category['name']."', '".$category['slug']."', '".$category['created_at']."', '".$category['updated_at']."'), ";
            }
            $ic_query = substr($ic_query, 0, -2) . ";";
            $result = $dbm->query($ic_query);
            $msg = '<info>Processed Categories</info>';
        } else {
            $msg = '<info>No Categories to process</info>';
        }

        return $msg;
    }

    /**
     * processArticles() function
     * From the existing posts insert them in the new db
     */
    protected function processArticles(array $articles)
    {
        if (count($articles)) {
            $dbm = $this->getNewDBManager();
            $ia_query = "INSERT INTO blog_post (id, category_id, title, content, is_published, published_at, slug, created_at, updated_at) VALUES ";
            foreach ($articles as $article) {
                $is_publish = ($article['status_id'] == 1)? 1 : 0;
                $ia_query .= " (".$article['id'].", '".$article['category_id']."', '".$article['title']."', '".addslashes($article['content'])."', ".$is_publish.", '".$article['created_at']."', '".$article['slug']."', '".$article['created_at']."', '".$article['updated_at']."'), ";
            }
            $ia_query = substr($ia_query, 0, -2) . ";";
            $result = $dbm->query($ia_query);
            $msg = '<info>Processed Articles</info>';
        } else {
            $msg = '<info>No Articles to process</info>';
        }

        return $msg;
    }

    /**
     * processComments() function
     * From the existing comments insert them in the new db
     */
    protected function processComments(array $comments)
    {
        if (count($comments)) {
            $dbm = $this->getNewDBManager();
            $ico_query = "INSERT INTO blog_comment (id, post_id, user_email, user_name, web, content, is_accepted, created_at, updated_at) VALUES ";
            foreach ($comments as $comment) {
                $is_accepted = ($comment == 1)? 1 : 0;
                $ico_query .= " (".$comment['id'].", '".$comment['article_id']."', '".$comment['email']."', '".$comment['author']."', '".$comment['url']."', '".addslashes($comment['content'])."', ".$is_accepted.", '".$comment['created_at']."', '".$comment['updated_at']."'), ";
            }
            $ico_query = substr($ico_query, 0, -2) . ";";print_r($ico_query);die;
            $result = $dbm->query($ico_query);
            $msg = '<info>Processed Comments</info>';
        } else {
            $msg = '<info>No Comments to process</info>';
        }

        return $msg;
    }

    /**
     * processTags() function
     * From the existing tags insert them in the new db
     */
    protected function processTags(array $tags)
    {
        if (count($tags)) {
            $dbm = $this->getNewDBManager();
            $it_query = "INSERT INTO blog_tag (id, name, slug, created_at, updated_at) VALUES ";
            foreach ($tags as $tag) {
                $date = date('Y-m-d H:i:s');
                $it_query .= " (".$tag['id'].", '".$tag['name']."', '".$tag['name']."', '".$date."', '".$date."'), ";
            }
            $it_query = substr($it_query, 0, -2) . ";";
            $result = $dbm->query($it_query);
            $msg = '<info>Processed Tags</info>';
        } else {
            $msg = '<info>No Tags to process</info>';
        }

        return $msg;
    }

    /**
     * processTagsArticles() function
     * From the existing tags-articles joins insert them in the new db
     */
    protected function processTagsArticles(array $tagsArticles)
    {
        if (count($tagsArticles)) {
            $dbm = $this->getNewDBManager();
            $ita_query = "INSERT INTO blog_posts_tags (blog_post_id, blog_tag_id) VALUES ";
            foreach ($tagsArticles as $tagArticle) {
                $ita_query .= " (".$tagArticle['taggable_id'].", ".$tagArticle['tag_id']."), ";
            }
            $ita_query = substr($ita_query, 0, -2) . ";";
            $result = $dbm->query($ita_query);
            $msg = '<info>Processed Tags-Articles joins</info>';
        } else {
            $msg = '<info>No Tags-Articles joins to process</info>';
        }

        return $msg;
    }
}
