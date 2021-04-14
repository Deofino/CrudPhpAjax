
    <link rel="stylesheet" href="../css/footerC.css">

    <footer class="container-fluid d-flex align-items-center">
        <div class="footer bg-dark rounded">
            <div class="">
                <ul class="menu">
                    <h3><a id="topo">Inicio</a></h3>
                    <li><a href="./inserted">Insert</a></li>
                    <li><a href="./read">Read</a></li>
                    <li><a href="./update">Update</a></li>
                    <li><a href="./delete">Delete</a></li>
                </ul>
            </div>

            <div class="copy">
                <p>Copyright <i class="far fa-copyright"></i> 2021</p>
                <hr>
                <p>CRUD Guilherme Delfino Narciso nº12</p>
            </div>
            <div class="redes">
                <ul class="sociais">
                    <h3>Redes sociais</h3>
                    <li><a href=""><i class="fab fa-facebook-square"></i> Facebook</a></li>
                    <li><a href=""><i class="fab fa-youtube"></i> Youtube</a></li>
                    <li><a href=""><i class="fab fa-instagram"></i> Instagram</a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i> Linkedin</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        document.querySelector('#topo').addEventListener('click', (evt) => {
            window.scrollTo(0, 0);
        })
    </script>