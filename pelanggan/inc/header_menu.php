
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
     <a class="navbar-brand" href="#">Rumah Makan Sabar Menanti</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarColor02">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Detail Makanan</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Detail Minuman</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">About</a>
         </li>
       </ul>
       <form class="form-inline my-2 my-lg-0">
         <!-- <input class="form-control mr-sm-2" type="text" placeholder="Meja Nomor 1" disabled> -->
         <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Meja Nomor 1</button> -->
         <a href="proses/logout.php" class="btn btn-info btn-sm"><h5><?php echo $_SESSION['namameja']; ?></h5></a>
       </form>
     </div>
   </nav>