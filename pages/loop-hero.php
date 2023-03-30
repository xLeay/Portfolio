<div class="main_container">

    <section>
        <p class="bolder section_title">Loop Hero clone</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/loophero.png" alt="Loop Hero Clone">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/loop-hero/loop-hero1.png" alt="Loop Hero Clone's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/loop-hero/loop-hero2.png" alt="Loop Hero Clone's second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/loop-hero/loop-hero3.png" alt="Loop Hero Clone's third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>The goal is to recreate <a class="underline important_info" href="https://loophero.com" target="_blank">Loop Hero</a> with our knowledge in Java.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold java-c">Java</span></p>
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
            <p>The project aims to recreate the gameplay experience of Loop Hero using Java programming language. This involves implementing various game mechanics and creating a user interface that allows players to interact with the game.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Create</span> : Develop applications with functional and non-functional specifications using good design and programming practices, testing, and adapting existing solutions, while verifying and validating application quality, choosing and implementing appropriate architectures, and integrating solutions into a production environment.</p>
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