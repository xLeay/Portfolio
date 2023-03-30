<div class="main_container">

    <section>
        <p class="bolder section_title">Boggle</p>

        <div class="project_header">
            <div class="project_imgs">
                <div class="img_container">
                    <img src="/src/img/projects/boggle.png" alt="Boggle">
                </div>

                <div class="imgs_wrapper">
                    <div class="img_container">
                        <img src="/src/img/projects/boggle/boggle1.png" alt="Boggle's first screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/boggle/boggle2.png" alt="Boggle's second screenshot">
                    </div>
                    <div class="img_container">
                        <img src="/src/img/projects/boggle/boggle3.png" alt="Boggle's third screenshot">
                    </div>
                </div>
            </div>

            <div class="project_details">
                <div class="project_details--item">
                    <p class="bold">Details :</p>
                    <p>We have to reproduce the Boggle board game with a website and a mobile app.</p>
                </div>
                <div class="project_details--item">
                    <p class="bold">Skills involved :</p>
                    <p><span class="bold java-c">Java</span>, <span class="bold js-c">JS</span>, <span class="bold php-c">PHP</span>, <span class="bold html-c">HTML</span>, <span class="bold css-c">CSS</span>, <span class="bold mysql-c">MySQL</span>, <span class="bold c-c">C</span>, <span class="bold and-c">Android</span></p>
                </div>
                <div class="project_details--item">
                    <p class="bold">More infos :</p>
                    <p>University project, groups of 3 </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Project presentation</p>

        <div class="project_content">
            <p>This project is demanding of skills in a lot of domains. The game engine is built in C, the dictionary in Java, the website in PHP, HTML, CSS, JS, MySQL and the mobile app in Android.</p>
        </div>
    </section>

    <section>
        <p class="bolder section_title">Related competence(s)</p>

        <div class="project_content">
            <p><span class="bold">Optimize</span> : Develop computer science solutions by analyzing and solving problems methodically using algorithms, complex data structures, and appropriate algorithmic techniques. Understand the differences between programming paradigms and data and code security issues. Evaluate the environmental and social impacts of proposed solutions and anticipate the results of various metrics such as execution time and memory occupancy. Apply scientific computing methods and identify technical solutions to manage application scalability.</p>

            <br>

            <p><span class="bold">Administrate</span> : Configure, install and administer operating systems and development tools, design and develop communicating applications, use servers and virtualized network services, ensure the security of system services and data, and write technical documentation in French and English.</p>
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