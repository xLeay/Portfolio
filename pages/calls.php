<div class="main_container">

    <section>
        <p class="bolder section_title">Calls tribute (The Door)</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/calls.png" alt="Calls tribute">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/calls/calls1.png" alt="Calls tribute first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/calls/calls2.png" alt="Calls tribute second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/calls/calls3.png" alt="Calls tribute third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>University project with the goal of make a tribute to Calls by <a class="underline important_info" href="https://www.youtube.com/channel/UCnx7pA7qz25dSpyr4bm8zuA" target="_blank">Timothée Hochet</a></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold pr-c">Premiere Pro</span>, <span class="bold ae-c">After Effects</span></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">More infos :</p>
                    <p>University project, groups of 4 </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Project presentation</p>

        <div class="project_content">
            <p>In the begining, we had to choose between a lot of different themes and create a story around the said theme. Then we had to record our voices and edit the video. Our group wanted to do something really good so we went to the Audiovisual and Multimedia Department to borrow them a booth with a quality microphone. I was in charge of the editing and spent many hours on it to render a good video.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p>This project doesn't have a competence related to the formation but I learned a lot about editing, working in group, and even deadlines because we had a month to do everything from October 2021 to November 2021.</p>
        </div>
    </section>

    <div id="myModal" class="modal">
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.querySelectorAll(".img_container img");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    for (var i = 0; i < img.length; i++) {
        img[i].onclick = function() {
            modal.style.display = "flex";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        };
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>