<div class="main_container">

    <section>
        <p class="bolder section_title">Azul clone</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/azul.png" alt="Azul Clone">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/azul/azul1.png" alt="Azul Clone's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/azul/azul2.png" alt="Azul Clone's second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/azul/azul3.png" alt="Azul Clone's third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>The goal was to recreate the board game Azul in Python.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold py-c">Python</span></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">More infos :</p>
                    <p>University project, groups of 2 </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Project presentation</p>

        <div class="project_content">
            <p>Our project was to recreate the board game Azul using the Python programming language. Azul is a popular strategy game where players compete to decorate a palace with colorful tiles. We had roughly 3 months to to the project. It was our first project in University.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Create</span> : Develop applications with functional and non-functional specifications using good design and programming practices, testing, and adapting existing solutions, while verifying and validating application quality, choosing and implementing appropriate architectures, and integrating solutions into a production environment.</p>

            <br>
            <ul>
                <li>
                    <p>Develop and implement functional and non-functional specifications based on requirements</p>
                </li>
                <li>
                    <p>Apply principles of accessibility and ergonomics</p>
                </li>
                <li>
                    <p>Adopt good design and programming practices</p>
                </li>
                <li>
                    <p>Verify and validate the quality of the application through testing</p>
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