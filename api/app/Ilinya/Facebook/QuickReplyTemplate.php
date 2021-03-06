<?php

namespace App\Ilinya\Facebook; 

class QuickReplyTemplate{

  public static function toArray($text, $quickReplies){
    
    $attachment = [];
    foreach ($quickReplies as $quickReply) {
      $attachment[] = $quickReply instanceof QuickReplyElement? $quickReply->toArray(): $quickReply;
    }

    $response =  [
      "text"  => $text,
      "quick_replies" =>  $attachment
    ];
    return $response;
  }
}