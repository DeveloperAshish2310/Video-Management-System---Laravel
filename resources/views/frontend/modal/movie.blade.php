<!--DEMO01-->
<div id="animatedModal">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div class="close-animatedModal">
        CLOSE MODAL
    </div>

    <div class="modal-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <IFRAME SRC="{{ ENV("VIDEO_STREAMURL") }}{{ $movie->video_code }}" id="movieframe" FRAMEBORDER=0 MARGINWIDTH=0 MARGINHEIGHT=0
                        SCROLLING=NO allowfullscreen style="height: 100vh;width: calc(100vw - 20px);padding: 0;margin: 0;"></IFRAME>
                </div>
            </div>
        </div>
    </div>
</div>
