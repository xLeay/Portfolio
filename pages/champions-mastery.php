<div class="main_container">

    <section>
        <p class="bolder section_title">LoL Champions Mastery</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/championsmastery.png" alt="Mont-Saint-Michel">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/champ-mastery/champ-mastery1.png" alt="LoL Champions Mastery website's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/champ-mastery/champ-mastery2.png" alt="LoL Champions Mastery website's second screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>Personal project with the goal of getting League of Legends champions mastery points based on the player nickname.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold html-c">HTML</span>, <span class="bold css-c">CSS</span>, <span class="bold js-c">JS</span></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">More infos :</p>
                    <p>Personal project, alone </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Project presentation</p>

        <div class="project_content">
            <p>This project was an idea I got while playing, wanting to get an information on the fly. I made it in a week or so. It was really fun to build something you wanted and not what someone told you to do. I learned a lot about API's, fetching data and JS overall.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Leading</span> : Coordinate and manage IT projects by understanding client and user needs, identifying project phases and actors, formalizing requirements, assessing feasibility criteria, implementing project monitoring processes, and improving information systems within the organization.</p>
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