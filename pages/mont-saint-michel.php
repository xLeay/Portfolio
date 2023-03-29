<div class="main_container">

    <section>
        <p class="bolder section_title">Mont-Saint-Michel</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/msm.png" alt="Mont-Saint-Michel">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/msm/msm1.png" alt="Mont-Saint-Michel website's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/msm/msm2.png" alt="Mont-Saint-Michel website's second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/msm/msm3.png" alt="Mont-Saint-Michel website's third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>University project made with the idea of promoting a site listed in the UNESCO Heritage with a website.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold php-c">PHP</span>, <span class="bold html-c">HTML</span>, <span class="bold css-c">CSS</span>, <span class="bold js-c">JS</span></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">More infos :</p>
                    <p>University project, groups of 5 </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Project presentation</p>

        <div class="project_content">
            <p>This project is made with PHP, JS, HTML, CSS, SQLite in groups of 5 running from October 2021 to June 2022. We had to make a responsive dynamic website in partnership with the UNESCO Forum. We chose Mont-Saint-Michel because it is an important monument of the french heritage that we wanted to represent.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Collaborate</span> : This competence involves the ability to identify, configure, develop, and secure the various components of a computer system, including hardware and software aspects, enterprise networks and virtualized servers, as well as writing technical documentation in both French and English.</p>
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