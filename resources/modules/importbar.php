<div class="row my-2">
    <div class="col">
        <div class="p-3 bg-light rounded">
            
            <h5>Import RSS/XML feed</h5>

            <form id="importForm">
                <div class="input-group">
                    <input id="importUrl" type="text" class="form-control" placeholder="import rss/xml url here...">
                    <div class="input-group-append">
                        <button id="importButton" class="btn btn-primary" onclick="event.preventDefault();"><i id="importIcon" class="fas fa-file-import"></i><i id="loadingIcon" class="fas fa-circle-notch fa-spin" style="display: none;"></i>&nbsp;&nbsp;Import</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?php
    if(isset($_SESSION['rss_failed'])){
        unset($_SESSION['rss_failed']);
    }
    if(isset($_SESSION['rss_success'])){
        unset($_SESSION['rss_success']);
    }
?>