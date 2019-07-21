<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">RSS Project</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" onclick="event.preventDefault();" href="#" data-toggle="modal" data-target="#tutorialModal">Tutorial</a>
                    </li>
                </ul>
                <div class="d-inline ml-auto">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button id="reloadButton" onclick="loadFeeds()" type="button" class="btn btn-outline-primary"><i class="fas fa-sync"></i></button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#changeFeedAmountModal"><i class="fas fa-list-ol"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="changeFeedAmountModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Change feed amount</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="app/change_feed_amt.php" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for="feedAmt">Amount of feeds to show per source: </label>
                            <input type="number" name="feedAmt" id="feedAmt" class="form-control form-control-sm" min="1" max="50" step="1" value="<?php echo($_SESSION['formax']); ?>">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="tutorialModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Tutorial</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <video src="assets/videos/tutorial.mp4" controls></video>
                </div>

            </div>
        </div>
    </div>