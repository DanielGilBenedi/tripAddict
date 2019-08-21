<html lang="ES">    
    <?php require_once "head.php" ?>

    <body>

        <?php require_once "nav.php" ?>

        <main role="main">

        <div class="container"> 

            <h1 style="text-align:center">Contacto</h1>
            
            <form class="col-6 mt-4 ">
                <fieldset>

                
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce tu nombre">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce tu email">
                    
                </div>
                
                
                <div class="form-group">
                    <label for="exampleTextarea">Comentario</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary">Enviar</button>
                </fieldset>
            </form>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2507.443123116134!2d-0.8999931522024293!3d41.636958563992586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5969622c6eea8d%3A0x8187c22863167647!2sHiberus+Tecnolog%C3%ADa!5e0!3m2!1ses!2ses!4v1565351256706!5m2!1ses!2ses"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>       
            
         <?php require_once "footer.php" ?>  

        </main>
              
        <?php require_once "scripts.php"; ?>

    </body>
</html>