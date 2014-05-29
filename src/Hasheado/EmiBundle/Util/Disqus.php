<?php
namespace Hasheado\EmiBundle\Util;

class Disqus
{
    private $parameters;

    /**
     * Constructor
     */
    public function __construct(array $params)
    {
        $this->parameters = $params;
    }

    /**
     * getRecentComments
     * @desc Get the recent comments from Disqus
     * @param array $parameters
     */
    public function getRecentComments()
    {        
        $parameters = $this->parameters;
        // If API key or forum name is not defined, return false.
        if(!isset($parameters['APIKey']) || !isset($parameters['forumName']))
            return FALSE;
        
        // If maximum comment count is not defined, set it to 25.
        if(!isset($parameters['commentCount']))
            $parameters['commentCount'] = 10;
        
        // If maximum comment length is not defined, set it to 100.
        if(!isset($parameters['commentLength']))
            $parameters['commentLength'] = 100;
        
        // Building up the Disqus comments API link.
        $APILink = "http://disqus.com/api/3.0/posts/list.json?limit={$parameters['commentCount']}&api_key={$parameters['APIKey']}&forum={$parameters['forumName']}&include=approved";
        
        // Get the json comments response.
        $jsonResponse = $this->getJson($APILink);
        
        // If the cURL session was successful.
        if($jsonResponse != false) {
            
            // Converting json response into PHP array.
            $rawComments = @json_decode($jsonResponse, true);
            
            // Extract just the comments from the response array.
            $comments = $rawComments['response'];
            
            if (count($comments)) {
                // Traversing through every element of the comments array.
                foreach ($comments as $k => $comment) {
                    
                    // Building up the Disqus thread API link.
                    $threadAPILink = "http://disqus.com/api/3.0/threads/details.json?api_key={$parameters['APIKey']}&thread={$comment['thread']}";
                    // Get the json thread response.
                    $jsonThreadResponse = $this->getJson($threadAPILink);
                    // Converting json response into PHP array.
                    $rawThread = @json_decode($jsonThreadResponse, true);
                    // Extract just the thread inforamtion from the response array.
                    $thread = $rawThread['response'];
                    
                    // Setting up the comment keys.
                    if($thread != false) {
                        $comments[$k]['pageTitle'] = $thread['title'];
                        $comments[$k]['pageURL'] = $thread['link'];
                    } else {
                        $comments[$k]['pageTitle'] = 'Page Not Found';
                        $comments[$k]['pageURL'] = '#';
                    }
                    $comments[$k]['authorName'] = $comments[$k]['author']['name'];
                    $comments[$k]['authorProfileURL'] = $comments[$k]['author']['profileUrl'];
                    $comments[$k]['authorAvatar'] = $comments[$k]['author']['avatar']['cache'];
                    $comments[$k]['message'] = $this->limitLength($comments[$k]['raw_message'], $parameters['commentLength']);
                    
                    // Unsetting extra keys.
                    unset($comments[$k]['isJuliaFlagged']);
                    unset($comments[$k]['isFlagged']);
                    unset($comments[$k]['forum']);
                    unset($comments[$k]['parent']);
                    unset($comments[$k]['author']);
                    unset($comments[$k]['media']);
                    unset($comments[$k]['isDeleted']);
                    unset($comments[$k]['isApproved']);
                    unset($comments[$k]['dislikes']);
                    unset($comments[$k]['raw_message']);
                    unset($comments[$k]['id']);
                    unset($comments[$k]['thread']);
                    unset($comments[$k]['numReports']);
                    unset($comments[$k]['isEdited']);
                    unset($comments[$k]['isSpam']);
                    unset($comments[$k]['isHighlighted']);
                    unset($comments[$k]['points']);
                    unset($comments[$k]['likes']);
                    
                }
            }
            
            // Returning the comments array.
            return $comments;
        }
    }
    
    /**
     * getJson() function
     * @desc Hits the Disqus API and get recent comments
     * @param string $APILink
     */
    protected function getJson($APILink)
    {        
        // Creating a new cURL resource for comments.
        $curl = curl_init();        
        // Not to include the header in the output.
        curl_setopt($curl, CURLOPT_HEADER, false);        
        // Setting the URL from where to fetch the content.
        curl_setopt($curl, CURLOPT_URL, $APILink);        
        // Return the fetched content as a string instead of outputting it out directly.
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);        
        // Forcing the use of a new connection instead of a cached one.
        curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);        
        // Forcing the connection to explicitly close when it has finished processing, and not be pooled for reuse.
        curl_setopt($curl, CURLOPT_FORBID_REUSE, true);
        
        // Executing the current cURL session.
        $response = curl_exec($curl);
        
        // Close the current cURL session.
        curl_close($curl);
        
        return $response;        
    }
    
    /**
     * limitLength() function
     * @param string $string
     * @param integer $maxLength
     */
    protected function limitLength($string, $maxLength)
    {
        if(strlen($string) <= $maxLength) {
            return $string;
        } else {
            return substr($string, 0, $maxLength) . '...';
        }
    }
}
