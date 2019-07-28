<?php

    require '../../config/database.php';
    require '../../config/session.php';

    $query = "select * from feeds order by created_at desc;";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0){
        while($feed = mysqli_fetch_assoc($result)){
            echo('<div class="col-12">
                    <div class="card border-secondary mb-4 shadow">
                        <div class="card-header"><a href="' . $feed['link'] . '" target="_blank">'. $feed['title'] . '</a>
                        <button class="close" onclick="deleteSource(' . $feed['id'] . ')"><i class="fas fa-trash text-dark"></i></button>
                        </div>
                        <div class="card-body">
                            <p class="card-text">');

            $xml = simplexml_load_file($feed['rss_link']) or die("Error: could not load rss link");
            $forcount = 0;
            if($xml->channel->item){
                            echo('<ul>');
                            foreach($xml->channel->item as $item){
                                echo('<li class="feedItem"><a target="_blank" href="' . $item->link . '">' . $item->title . '</a>&nbsp;<a target="_blank" title="Share this article on Facebook" href="' . 'https://www.facebook.com/sharer.php?u=' . urlencode($item->link) . '"><i class="fab fa-facebook-square"></i></a><a target="_blank" title="Tweet this article!" href="https://twitter.com/intent/tweet?url=' . urlencode($item->link) . '&hashtags=sharedWithRSSProject,PTC">&nbsp;&nbsp;<i class="fab fa-twitter-square"></i></a></li>');
                                $forcount++;
                                if($forcount >= $_SESSION['formax']){
                                    break;
                                }
                            }
                            echo('</ul>');
                        echo('<a class="btn btn-sm btn-outline-dark float-right" href="detail.php?id=' . $feed['id'] . '">Read more...</a>');
                
            }else{
                            echo('This source doesn\'t have any feeds. How boring...');
            }
            
            echo('          </p>
                        </div>
                    </div>
                </div>');
        }
    }else{
        echo('<div class="col">
                <p class="text-center">
                    It\'s lonely here :( <br>
                    Try importing an rss-feed
                </p>
            </div>');
    }

    mysqli_close($connection);

?>
