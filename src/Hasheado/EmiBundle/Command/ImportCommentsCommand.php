<?php
namespace Hasheado\EmiBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ImportCommentsCommand extends ContainerAwareCommand
{
    protected $xmlData;

    protected $processed = array();

    protected function configure()
    {
        $this
            ->setName('hasheado:import-comments')
            ->setDescription('Import old existing comments from Hasheado Symfony 1.x version to Sf2 version (which use DISQUS).');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        //Get data from old database
        $comments = $this->getExistingComments();

        $output->writeln('<info>Existing comments:</info> ' . count($comments));
        
        $imported = 0;
        if (count($comments)) {
            $this->xmlData = $this->initXml();
            foreach ($comments as $k => $comment) {
                $this->xmlData .= $this->fillXml($comment);
                $imported++;
            }
            $this->xmlData .= $this->endXml();
            
            file_put_contents('comments.xml', utf8_encode($this->xmlData));
        }

        $output->writeln('<info>Imported comments:</info> ' . $imported);
    }

    /**
     * getExistingComments() function
     * Gets the existing data for version 1
     */
    protected function getExistingComments()
    {
        $params = array(
            'host' => 'localhost',
            'dbname' => 'hasheado2',
            'username' => 'root',
            'password' => 'cleopatra410'
        );

        $dbm = $this->getDBManager($params);

        //Get all existing Comments
        $comments = array();
        $query = "SELECT c.*, p.title AS post_title, p.slug AS slug FROM blog_comment AS c
                    LEFT JOIN blog_post AS p ON p.id = c.post_id
                    ORDER BY c.post_id ASC";
        $result = $dbm->query($query);
        if ($result)
            $comments = $result->fetchAll(\PDO::FETCH_ASSOC);

        return $comments;
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
     * fillXml() function
     * Fills the XML string
     * @param array $comments
     */
    protected function fillXML($comment)
    {
        $string = null;
        $prec = in_array($comment['post_id'], $this->processed);
        if (!$prec) {
            $string .= (!empty($this->processed))? '</item>' : '';
            $this->processed[] = $comment['post_id'];
            $string .= '<item>
      <title>' . $comment['post_title'] . '</title>
      <link>http://www.hasheado.com/' . $comment['slug'] . '</link>
      <content:encoded><![CDATA[Hasheado content]]></content:encoded>
      <dsq:thread_identifier>' . $comment['slug'] . '</dsq:thread_identifier>
      <wp:post_date_gmt>' . $comment['created_at'] . '</wp:post_date_gmt>';
        }

        $string .= '<wp:comment_status>open</wp:comment_status>
      <wp:comment>
        <wp:comment_id>' . $comment['id'] . '</wp:comment_id>
        <wp:comment_author>' . $comment['user_name'] . '</wp:comment_author>
        <wp:comment_author_email>' . $comment['user_email'] . '</wp:comment_author_email>
        <wp:comment_author_url>' . $comment['web'] . '</wp:comment_author_url>
        <wp:comment_author_IP>93.48.67.119</wp:comment_author_IP>
        <wp:comment_date_gmt>' . $comment['created_at'] . '</wp:comment_date_gmt>
        <wp:comment_content><![CDATA[' . $comment['content'] . ']]></wp:comment_content>
        <wp:comment_approved>1</wp:comment_approved>
        <wp:comment_parent>0</wp:comment_parent>
      </wp:comment>';

        return $string;
    }

    /**
     * initXml() function
     * Inits the XML string
     */
    protected function initXML()
    {
        return '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dsq="http://www.disqus.com/"
  xmlns:dc="http://purl.org/dc/elements/1.1/"
  xmlns:wp="http://wordpress.org/export/1.0/"
>
  <channel>';
    }

    /**
     * endXml() function
     * Ends the XML string
     */
    protected function endXML()
    {
        return '</item></channel>
</rss>';
    }
}
