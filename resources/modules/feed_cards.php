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
                                echo('<li class="feedItem"><a target="_blank" href="' . $item->link . '">' . $item->title . '</a></li>');
                                $forcount++;
                                if($forcount >= $_SESSION['formax']){
                                    break;
                                }
                            }
                            echo('</ul>');
                if(count($xml->channel->item) > $_SESSION['formax']){
                    echo('<a class="btn btn-sm btn-outline-dark float-right" href="detail.php?id=' . $feed['id'] . '">Read more...</a>');
                }
            }else{
                            echo('No feeds to display');
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
