<div class="main_container">

    <section>
        <p class="bolder section_title">ThesesViz</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/theses.png" alt="ThesesViz website">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/theses/theses1.png" alt="ThesesViz website's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/theses/theses2.png" alt="ThesesViz website's second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/theses/theses3.png" alt="ThesesViz website's third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>University project that aims to refresh the look of <a class="underline important_info" href="https://theses.fr" target="_blank">theses.fr</a>.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold php-c">PHP</span>, <span class="bold html-c">HTML</span>, <span class="bold css-c">CSS</span>, <span class="bold js-c">JS</span>, <span class="bold mysql-c">MySQL</span></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">More infos :</p>
                    <p>University project, alone </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Project presentation</p>

        <div class="project_content">
            <p>We have to create a website that functions like theses.fr, but with a refreshed design. The website will allow users to search for French doctoral theses by various criteria, including keyword, author, title, institution, discipline, and date, and will provide access to over 1300 theses defended in France since the 1970s.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Manage</span> : "Database management and optimization": managing, querying, and updating relational databases, designing database structures based on specifications, optimizing data models, ensuring data confidentiality and security, programming and visualizing data output, and manipulating heterogeneous data.</p>
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