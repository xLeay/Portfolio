<div class="main_container">

    <section>
        <p class="bolder section_title">Vill'innov</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/vill-innov.png" alt="Vill'innov">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/vill-innov/vill-innov1.png" alt="Vill'innov website's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/vill-innov/vill-innov2.png" alt="Vill'innov website's second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/vill-innov/vill-innov3.png" alt="Vill'innov website's third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>University project with a team of Master's degree in close collaboration to show their idea to city halls.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold php-c">PHP</span>, <span class="bold html-c">HTML</span>, <span class="bold css-c">CSS</span>, <span class="bold mongo-c">MONGODB</span>, <span class="bold js-c">JS</span></p>
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
            <p>This project was proposed to us at the start of the 2023-2024 school year, among others. The goal was to build a website that allow city halls to create city renovation or improvement projects. Inhabitants can create their modelisation and take part of the development of their city.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Collaborate</span> : This competence involves the ability to identify, configure, develop, and secure the various components of a computer system, including hardware and software aspects, enterprise networks and virtualized servers, as well as writing technical documentation in both French and English.</p>

            <br>
            <ul>
                <li>
                    <p>Understand the diversity, the structure and the dimension of IT in an DSC or ISD organization (Digital Services Company, Information Systems Department)</p>
                </li>
                <li>
                    <p>Apply an approach to integrate an IT team within an organization</p>
                </li>
                <li>
                    <p>Mobilize interpersonal skills to work in an IT team</p>
                </li>
                <li>
                    <p>Report on one's professional activity</p>
                </li>
            </ul>
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